<?php
global $config;
$pdo = new PDO($config['host'], $config['user'], $config['password']);

class Comment{


    public function newComment($pdo)
    {
        $req = $pdo->prepare("INSERT INTO commentary SET article_id = :article_id, author = :author,content = :content, time = NOW(), date = NOW() ");
        $req -> bindParam('content',$_POST['commentary']);
        $req -> bindParam('author',$_SESSION['login']);
        $req -> bindParam('article_id',$_POST['id_articles']);
        $req->execute();


    }



}

class CommentDisplay{
    public function displayComment($pdo)
    {
        $req = $pdo -> query('SELECT a.id, COUNT(*) as nb
                              FROM articles a
                              INNER JOIN commentary c ON c.article_id = a.id
                              GROUP BY a.id ');

        $result = [];
        foreach ($req as $row) {
            $result[] = $row;
        }
        return $result;
    }
    public function selectCommentId($pdo)
    {
        $req = $pdo->query('SELECT * FROM commentary ');
        $result = [];
        foreach ($req as $row) {
            $result[] = $row;
        }
        return $result;
    }
}

class EditComment{

    public function editCommentary($pdo){
        $req = $pdo->prepare("UPDATE commentary SET content = :content WHERE id = :id");
        $req->bindParam("content",$_GET['commentDisp']);
        $req -> bindParam("id",$_GET['id']);

        $req->execute();
    }
}

class RemoveComment{

    public function removeAnComment($pdo){
        $req = $pdo->prepare("DELETE FROM commentary WHERE id = :id");
        $req->bindParam("id",$_GET['id']);
        $req->execute();

    }


    public function selectIdAuthor($pdo){
            $req = $pdo->prepare("SELECT author FROM commentary WHERE id = :id");
            $req -> bindParam('id', $_GET['id']);
            $req -> execute();
            return $getInfo = $req -> fetch();

    }


}