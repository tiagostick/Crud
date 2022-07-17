<?php 
$username = "root";
$servername = "localhost";
$password = "";

$db_name = "desafio";

$connect = mysqli_connect($servername, $username, $password, $db_name);

// if(mysqli_connect_error()) {
//     echo "erro de conexao" . mysqli_connect();
// } else {
//     echo "ok";
// }