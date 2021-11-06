<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "freetube";
 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }
$us = $_GET["username"];
$kon =  $_GET["kak"];
$vide = $_GET["vid"];
$sqls2 = "DELETE from videos where id = '".$vide."' and id_usuario = '". $us ."';";
$sqld3 = "DELETE from comentarios where id = '".$vide."';";
$results3 = $conn->query($sqld3);
$results2 = $conn->query($sqls2);
    if (($conn->query($sqld3) === TRUE) and ($conn->query($sqls2) === TRUE)) {
        ?>
        <script>

            window.location.href='ver_perfil.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'
        </script>
           
        <?php
    }else{
        echo mysqli_error($conn);
    }
?>