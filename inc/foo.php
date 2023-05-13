<?php

include('db.php"');

$data = [
  ':nazov' => $_POST["nazov"],
  ':cena' => $_POST["cena"]
];

// Vytvorenie zapisov

if (isset($_POST['add_produkt'])){
  $sql = ("insert into produkcia (nazov, cena, image) values (:nazov, :cena, null)");
  $query = $pdo->prepare($sql);
  $query->execute($data);
  if ($query) {
    header("Location: ../konzola.php");
  }
}

