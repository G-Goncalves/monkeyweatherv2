<?php
include('db.php');

$user = $_POST['id'];
$local = $_POST['form-local'];

$sql = "INSERT INTO locals (id_utilizador, name)
VALUES ('$user', '$local')";

if ($conn->query($sql) === TRUE) {
  header('Location: ../dashboard.php?p=my-places&response=added');
} else {
  header('Location: ../dashboard.php?p=my-places&response=duplicate');
}

$conn->close();