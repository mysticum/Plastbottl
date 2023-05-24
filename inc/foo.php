<?php

include('db.php"');

$nazov = $_POST["nazov"] ?? "";
$cena = $_POST["cena"] ?? "";
$objem = $_POST["objem"] ?? "";
$diametr = $_POST["diametr"] ?? "";
$popis = $_POST["popis"] ?? "";
$id = $_POST["id"] ?? "";
$meno = $_POST["meno"] ?? "";
$region = $_POST["region"] ?? "";
$kontakt = $_POST["kontakt"] ?? "";

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

// Čitanie produkcií

$sql = $pdo->prepare("select * from produkcia");
$sql->execute();
$results = $sql->fetchAll(PDO::FETCH_OBJ);

// Čitanie žiadosti

$sql = $pdo->prepare("select * from ziadost where flag = 0 order by pridane");
$sql->execute();
$ziadosti = $sql->fetchAll(PDO::FETCH_OBJ);
$ziadost = $ziadosti[0] ?? "";

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

if (isset($_POST['nova_ziadost'])){
  $sql = ("insert into ziadost (meno, popis, region, kontakt, flag, pridane) values (?, ?, ?, ?, ?, ?)");
  $query = $pdo->prepare($sql);
  $query->execute([$meno, $popis, $region, $kontakt, 0, date('Y-m-d H:i:s')]);
  if ($query) {
    header("Location: ../thanks.php");
  } else{
    echo "Niečo sa pokazilo";
  }
}

if (isset($_POST['odlozit_ziadost'])){
  $sql = ("update ziadost set pridane = ? where id = ?");
  $query = $pdo->prepare($sql);
  $query->execute([date('Y-m-d H:i:s'), $id]);
  if ($query) {
    header("Location: ../konzola.php");
  } else{
    echo "Niečo sa pokazilo";
  }
}

if (isset($_POST['zatvorit_ziadost'])){
  $sql = ("update ziadost set flag = 1 where id = ?");
  $query = $pdo->prepare($sql);
  $query->execute([$id]);
  if ($query) {
    header("Location: ../konzola.php");
  } else{
    echo "Niečo sa pokazilo";
  }
}
