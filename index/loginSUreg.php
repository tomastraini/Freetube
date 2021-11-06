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
$Nusr = $_POST['Nuser'];
$Ausr = $_POST['Auser'];
$idus =$_POST['Rlogin'] ;
$contras =$_POST['Rpassword'];
$ccontras = $_POST['RCpassword'];
$foto_perf = "default.png";
$permis = $_POST['RCpermiso'];
$mailu =$_POST['Rmail'];
$mailux =$_POST['conf'];
function sendmail(){
  $to = "locoscrafteros96@gmail.com";
  $subject = "My subject";
  $txt = "Hello world!";
  $headers = "From: webmaster@example.com" . "\r\n" .
  "CC: somebodyelse@example.com";

  mail($to,$subject,$txt,$headers);
}




if($contras === $ccontras){
  if($mailux === "true"){
    $hcontras = hash("sha512", $contras);
    $sql = "INSERT INTO usuarios (id_usuario, contrasena, correo, permiso, nombreus, apellidous, foto_perfil)
    VALUES ('". $idus ."', '". $hcontras ."', '". $mailu ."', '". $permis ."', '". $Nusr ."', '". $Ausr ."', '". $foto_perf ."')";
    if ($conn->query($sql) === TRUE ) {
      
        header("location:login.php");
        $conn->close();
      
      } else {

       echo "Error: " . $sql . "<br>" . $conn->error; ?>");
        

      <?php
      }
  }else{
    ?>
    <script>
      alert("Mail Incorrecto!");
      window.location = 'loginSU.php';
    </script>
    <?php
    
  }
  
}else{
  ?>
  <script>
    alert("Contraseñas no coinciden!");
    window.location = 'loginSU.php';
  </script>
  <?php
 
}

	
?>