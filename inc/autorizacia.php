<?php

session_start();
include("db.php");

$data = [
  "nick" => $_POST['nick'],
  "heslo" => md5($_POST['heslo'])
];
var_dump($data);
var_dump($_POST);
$sql = $pdo->prepare("SELECT * FROM pouzivatel");
$sql->execute();
$results = $sql->fetchAll(PDO::FETCH_OBJ);
$found = false;

foreach($results as $user){
  if($data["nick"] == $user->nick and $data["heslo"] == $user->heslo){
    $found = true;
    break;
  }
}

if ($found) {
    $_SESSION['valid'] = true;
    $_SESSION['user_name'] = $nick;
    header("Location: ../konzola.php");
} else {
    echo "Ошибка: Данный логин или пароль неправильны.";
}
