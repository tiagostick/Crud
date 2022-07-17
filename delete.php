<?php
include_once("connect.php");

$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM usuario WHERE id=$id");

header("Location:index.php");
?>