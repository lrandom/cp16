<?php
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=cp16',
        'root',
        'koodinh');
} catch (Exception $e) {
    echo 'Cannot connect to db '.$e;
}

function getMessages ($pdo)
{
    $data = [];
    $query = 'SELECT * FROM messages order by id desc LIMIT 10';
    $rs = $pdo->query($query);
    foreach ($rs as $item) {
        $data[] = $item;
    }
    return $data;
}

function insertMessage ($pdo, $payload)
{
    try {
        $prp = $pdo->prepare("INSERT INTO messages(name, message,created_at) VALUES(:name, :message, :created_at)");
        $prp->bindParam(":name", $payload['name']);
        $prp->bindParam(":message", $payload['message']);
        $prp->bindParam(":created_at", time());
        $prp->execute();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

?>