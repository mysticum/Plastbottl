<?php

include('db.php"');

$nazov = $_POST['nazov'];
$cena = $_POST['cena'];
$get_id = $_GET['id'];

// Vytvorenie zapisov

if (isset($_POST['submit'])){
  $sql = ("insert into produkcia (nazov, cena, image) values (?,?,?)");
  $query = $pdo->prepar($sql);
  $query->execute([$nazov, $cena, null]);
  if ($query) {
    header("Location: ". $_SERVER["HTTP_REFERER"]);
  }
}