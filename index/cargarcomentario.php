<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "freetube";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$noum = $_POST['usernamemodal'];
$direu = $_POST['passwordmodal'];
$telu = $_POST['idvideox'];
$come = $_POST['nombreclia'];
$feching = date('y-m-d h:i:s');

$sql = "INSERT INTO comentarios(comentario, id_usuario, id, fecha) VALUES ('". $come ."','". $noum ."','". $telu ."','". $fecha ."')";

if ($conn->query($sql) === TRUE) {
  header("location: ver_video.php?username=" .$noum. "&kak=". $direu ."&vid=". $telu);

$conn->close();

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>