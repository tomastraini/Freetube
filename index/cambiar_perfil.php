<?php
if(isset($_GET["username"])){
    $us = $_GET["username"];
    if(isset($_GET["kak"])){
      $kon = $_GET["kak"];
      $servernamec = "127.0.0.1:3307";
      $usernamec = "root";
      $passwordc = "";
      $dbnamec = "freetube";
      $conn = new mysqli($servernamec, $usernamec, $passwordc, $dbnamec);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
      $sqls = "SELECT * FROM usuarios where id_usuario = '".$us."' and contrasena = '".$kon."';";
      $results = $conn->query($sqls);
      $nr2 = mysqli_num_rows($results);
      $row = $results->Fetch_assoc();
      if ($nr2 == 1) {
            $idus =$_POST['cid'] ;
            $Nusr = $_POST['cnombre'];
            $Ausr = $_POST['cape'];
            $corr = $_POST['ccorr'];
            $fotoactual = $row['foto_perfil'];
            $contranueva = $_POST['ncontra'];
            $antiguacontras =$_POST['cncontra'];
            $hcontras = hash("sha512", $antiguacontras);
            if(isset($_POST['cargardatos'])){
                if(isset($_FILES['fotora'])){
                    $filename = $_FILES['fotora']['name'];
                
                    // Select file type
                    $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
                    
                    // valid file extensions
                    $extensions_arr = array("jpg","jpeg","png","gif");
                 
                    // Check extension
                    if(in_array($imageFileType,$extensions_arr) ){
                 
                    // Upload files and store in database
                    if(move_uploaded_file($_FILES["fotora"]["tmp_name"],'imgperfil/'.$filename)){
    
                            if($hcontras == $kon){
                                $hcontranueva = hash("sha512", $contranueva);
                                $sql = "UPDATE usuarios set nombreus='". $Nusr ."', apellidous='". $Ausr ."', contrasena='". $hcontranueva . "', correo='".$corr . "', foto_perfil = '".$filename."' where id_usuario = '". $idus . "'";
                                    if ($conn->query($sql) === TRUE ) {
                                        header("location:inicio.php?username=".$us."&kak=".$hcontranueva);
                                        $conn->close();
                                    
                                    } else {
                                       echo "Error: ". $conn -> error ."<br><br><br><br>Error:". $sql;
                      }
                            }else{
                                ?>
                                    <script>
                                        alert("Tu contraseña actual es incorrecta!!");
                                        window.location.href = "user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>";
                                    </script>
                                <?php
                            }
                    }else{
                        ?>
                            <script>
                                alert("<?php $_FILES['fotora']['name']; ?>");

                            </script>
                    <?php
                    }
                    }else{
                    if($hcontras == $kon){
                        $hcontranueva = hash("sha512", $contranueva);
                        $sql = "UPDATE usuarios set nombreus='". $Nusr ."', apellidous='". $Ausr ."', contrasena='". $hcontranueva . "', correo='".$corr . "', foto_perfil = '".$fotoactual."' where id_usuario = '". $idus . "'";
                            if ($conn->query($sql) === TRUE ) {
                                $conn->close();
                                ?>
                                <script>

                                    window.location.href = "inicio.php?username=<?php echo $us;?>&kak=<?php echo $hcontranueva;?>";
                                </script>
                            <?php
                            } else {
                               echo "Error: ". $conn -> error ."<br><br><br><br>Error:". $sql;
              }
                    }else{
                        ?>
                            <script>
                                alert("Tu contraseña actual es incorrecta!!");
                                window.location.href = "user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>";
                            </script>
                        <?php
                    }
                }
                }else{
                    if($hcontras == $kon){
                        $hcontranueva = hash("sha512", $contranueva);
                        $sql = "UPDATE usuarios set nombreus='". $Nusr ."', apellidous='". $Ausr ."', contrasena='". $hcontranueva . "', correo='".$corr . "', foto_perfil = '".$fotoactual."'  where id_usuario = '". $idus . "'";
                            if ($conn->query($sql) === TRUE ) {
                                ?>
                            <script>
                                alert("Fotora no seteada!!!");
                                window.location.href = "inicio.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>";
                            </script>
                        <?php
                                $conn->close();
                            
                            } else {
        
                            echo "Error: " . $sql . "<br>" . $conn->error; ?>");
              <?php
              }
                    }else{
                        ?>
                            <script>
                                alert("Tu contraseña actual es incorrecta!!");
                                window.location.href = "user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>";
                            </script>
                        <?php
                    }
                }
                
            }else{
                ?>
                        <script>
                            alert("Ha habido un error!!");
                            window.location.href = "user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>";
                        </script>
                    <?php
            }





        
        
        
        

        
        }else{
            ?>
                    <script>
                        alert("Inyección detectada!!");
                        window.location.href = "user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>";
                    </script>
            <?php
        }
    }else{
        ?>
                    <script>
                        alert("Inyección detectada!!");
                        window.location.href = "user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>";
                    </script>
        <?php
    }
}else{
    ?>
                    <script>
                        alert("Inyección detectada!!");
                        window.location.href = "user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>";
                    </script>
    <?php
}
	
?>