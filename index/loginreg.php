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

$idus =$_POST['Llogin'] ;
$contras =$_POST['Lpassword'];

if(empty($idus)){
  ?>
  <script>
  alert("Usuario incompleto");
  window.location.href = "login.php";
  </script>
  <?php
}elseif(empty($contras)){
  ?>
  <script>
  alert("Contraseña incompleta");

  window.location.href= "login.php";
  </script>
  <?php
}else{
  
  $hcontras = hash("sha512", $contras);
  $sql = "SELECT * FROM usuarios where id_usuario = '".$idus."' and contrasena = '".$hcontras."';";
  $result = $conn->query($sql);
  $nr = mysqli_num_rows($result);
  
  if ($nr == 1) {
    header("location: inicio.php?username=". $idus . "&kak=". $hcontras);
    $conn->close();
  }else {
    ?>
        <script>
          alert("Credenciales incorrectas!");
          window.location.href = "login.php";
        </script>

    <?php
  }
}

?>