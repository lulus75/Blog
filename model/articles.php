<?php
global $config;
$pdo = new PDO($config['host'], $config['user'], $config['password']);


/* New article */

class NewArticle{

    public function validNewArticle($pdo){
        $req = $pdo->prepare('INSERT INTO articles SET title = :title, shortContent = :shortContent, author = :author, content = :content, articleDate = NOW(),articleTime = NOW()');
        $req->bindParam('title', $_POST['title']);
        $req->bindParam('shortContent', $_POST['shortContent']);
        $req->bindParam('author', $_SESSION['login']);
        $req->bindParam('content', $_POST['content']);
        $req->execute();
    }
}

/* Remove article */

class RemoveArticle{

    public function removeAnArticle($pdo){
        $pdo->query('DELETE FROM articles WHERE id=\'' . $_GET['articleRemove'] . '\'');
    }
    public function removeCommentaryLinkToArticle($pdo){
        $pdo->query('DELETE FROM commentary WHERE article_id=\'' . $_GET['articleRemove'] . '\'');
    }
}

/* Edit article */

class ArticleDisp
{

    function idDisplay($pdo)
    {
        $req = $pdo->query("SELECT id, title, author FROM articles");
        $result = [];
        foreach ($req as $row) {
            $result[] = $row;
        }
        return $result;
    }

    function articleDetailDisplay($pdo)
    {
        $req = $pdo->prepare("SELECT title, articleDate FROM articles WHERE id = :id");
        $req->bindParam('id', $_GET['id']);
        $req->execute();
        return $getInfo = $req->fetch(PDO::FETCH_ASSOC);
    }

    function articleEditDisplay($pdo)
    {
        $req = $pdo->prepare("SELECT title, shortContent, content FROM articles WHERE id = :id");
        $req->bindParam('id', $_GET['id']);
        $req->execute();
        return $getArticleInfo = $req->fetch();
    }

    public function displayArticle($pdo)
    {
        $req = $pdo->query('SELECT * FROM articles ORDER  BY articleDate DESC');
        $back = [];
        foreach ($req as $row) {
            $back[] = $row;
        }
        return $back;
    }

    function articlePageDisplay($pdo)
    {
        {
            $req = $pdo->prepare("SELECT * FROM articles WHERE id = :id");
            $req->bindParam('id', $_GET['id']);
            $req->execute();
            $back = [];
            foreach ($req as $row) {
                $back[] = $row;
            }
            return $back;
        }
    }


}


/* Update Article */

class ArticleEdit{
    public function updateArticle($pdo){
        $req = $pdo->prepare("UPDATE articles SET title = :title, content = :content, shortContent = :shortContent WHERE id= :id");
        $req -> bindParam("id",$_POST['id']);
        $req->bindParam("title",$_POST['title']);
        $req->bindParam("content",$_POST['content']);
        $req->bindParam("shortContent",$_POST['shortContent']);

        $req->execute();
    }
}
