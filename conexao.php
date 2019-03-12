<?php
$servername = "localhost"; //mude para seu host
$username = "root"; //pode mudar para o seu login
$password = "";  //aqui você pode mudar ja que pode ter outra senha

// Create connection
$con = new mysqli($servername, $username, $password);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
else{
    header('location:home.php');
}  


?>