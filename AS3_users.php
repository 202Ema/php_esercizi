<!DOCTYPE HTML>
<html>
<head>
<title>Esercizio AS3_users</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
die("Connessione fallita: " . mysqli_connect_error());
}

echo "Connessione riuscita! <br>";

$sql = "SELECT * FROM as3_users;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "ID: {$row['ID_User']}, Username: {$row['User_Name']}, Password: {$row['password']} <br>";
	}
} else {
echo "Nessun risultato trovato.";
}

?>

</body>
</html>