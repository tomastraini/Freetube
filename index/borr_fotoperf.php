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
$sqls2 = "UPDATE usuarios set foto_perfil = 'default.png' where id_usuario = '".$us."';";
$results2 = $conn->query($sqls2);
    if ($conn->query($sqls2) === TRUE){
        ?>
        <script>

            window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'
        </script>
           
        <?php
    }else{
        ?>
        <script>
            alert("<? echo mysql_error($enlace); ?>");
            window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'
        </script>
        <?php
    }
?>
