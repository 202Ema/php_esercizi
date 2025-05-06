<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
die("Connessione fallita: " . mysqli_connect_error());
}

$name = $_POST['user'];
$psw = $_POST['password'];

$sql = "SELECT * FROM as3_users WHERE User_Name = '" .$name. "' AND password = '" .$psw."' ";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 0){
	echo "Utente non trovato";
}else{
	echo "Utente trovato!";
}

?>