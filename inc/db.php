<?php

$host = "localhost";
$db = "plastbottl";
$user = "root";
$pas = "";

try {
  $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pas);
} catch (PDOException $e) {
  echo "Chyba: pripojenie z DB f".$e->getMessage();
}