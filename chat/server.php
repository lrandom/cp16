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
        $prp = $pdo->prepare("INSERT INTO messages(nickname, message,created_at) VALUES(:nickname, :message, :created_at)");
        $prp->bindParam(":nickname", $payload['nickname']);
        $prp->bindParam(":message", $payload['message']);
        $prp->bindParam(":created_at", time());
        $prp->execute();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

header('Content-Type: application/json');
if (isset($_GET)) {
    $data = getMessages($pdo);
    echo json_encode($data);
}

if (isset($_POST['nickname'])) {
    $nickname = $_POST['nickname'];
    $message = $_POST['message'];
    insertMessage($pdo, [
        'nickname' => $nickname,
        'message' => $message
    ]);
    echo json_encode(array('message' => 'insert success'));
}
?>