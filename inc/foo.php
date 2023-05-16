<?php

include('db.php"');

$nazov = $_POST["nazov"] ?? "";
$cena = $_POST["cena"] ?? "";
$id = $_POST["id"] ?? "";

// Vytvorenie zapisov

if (isset($_POST['add_produkt'])){
  $sql = ("insert into produkcia (nazov, cena) values (?, ?)");
  $query = $pdo->prepare($sql);
  $query->execute([$nazov, $cena]);
  if ($query) {
    header("Location: ../konzola.php");
  }
}

// Čitanie zapisov

$sql = $pdo->prepare("select * from produkcia");
$sql->execute();
$results = $sql->fetchAll(PDO::FETCH_OBJ);

// Aktualizácia zapisov

if(isset($_POST["opravit_produkt"])){
  $sql = ("update produkcia set nazov=?, cena=? where id=?");
  $query = $pdo->prepare($sql);
  $query->execute([$nazov, $cena, $id]);
  if ($query) {
    header("Location: ../konzola.php");
  }
}

if(isset($_POST["odstranit_produkt"])){
  $sql = ("delete from produkcia where id=?");
  $query = $pdo->prepare($sql);
  $query->execute([$id]);
  if ($query) {
    header("Location: ../konzola.php");
  }
}
