<?php

include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=:id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $id));

header("Location:index.php");
