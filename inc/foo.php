<?php

include('db.php"');

$nazov = $_POST["nazov"] ?? "";
$cena = $_POST["cena"] ?? "";
$objem = $_POST["objem"] ?? "";
$diametr = $_POST["diametr"] ?? "";
$popis = $_POST["popis"] ?? "";
$id = $_POST["id"] ?? "";

// Vytvorenie zapisov

if (isset($_POST['add_produkt'])){
  $uploaddir = '../img/';
  $uploadfile = $uploaddir.basename($_FILES['image']['name']);
  $sql = ("insert into produkcia (nazov, cena, objem, diametr, image, popis) values (?, ?, ?, ?, ?, ?)");
  $query = $pdo->prepare($sql);
  $query->execute([$nazov, $cena, $objem, $diametr, $_FILES['image']['name'], $popis]);
  if ($query && move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
    header("Location: ../konzola.php");
  } else{
    echo "Niečo sa pokazilo";
    print_r($_FILES);
    echo "<pre>";
  }
}

// Čitanie zapisov

$sql = $pdo->prepare("select * from produkcia");
$sql->execute();
$results = $sql->fetchAll(PDO::FETCH_OBJ);

// Aktualizácia zapisov

if(isset($_POST["opravit_produkt"])){
  $sql = ("update produkcia set nazov=?, cena=?, objem=?, diametr=?, popis=? where id=?");
  $query = $pdo->prepare($sql);
  $query->execute([$nazov, $cena, $objem, $diametr, $popis, $id]);
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
