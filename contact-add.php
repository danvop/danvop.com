<?php

const PATH_TO_SQLITE_FILE = "db.sqlite";

$name = $_POST['name'];
$email = $_POST['email'];
$description = $_POST['description'];


$pdo = new \PDO("sqlite:" . PATH_TO_SQLITE_FILE);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);


$sql = 'INSERT INTO contacts(name, email, description, created_at) VALUES(:name,:email,:description, datetime())';

$stmt = $pdo->prepare($sql);

$stmt->execute([$name, $email, $description]);

return header("Location: index.php");