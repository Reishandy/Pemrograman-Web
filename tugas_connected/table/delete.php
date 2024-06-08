<?php
require_once "connection.php";

$id = $_GET['id'];

$query = "DELETE FROM item WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: table.php");
