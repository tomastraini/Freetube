<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<link rel="shortcut icon" href="resources\267540453045211.ico" />

<title>Menú principal</title>

<?php
if(isset($_GET["username"])){
$us = $_GET["username"];
if(isset($_GET["kak"])){
  $kon = $_GET["kak"];
  $servername = "127.0.0.1:3307";
  $username = "root";
  $password = "";
  $dbname = "freetube";
   
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
  $sqls = "SELECT * FROM usuarios where id_usuario = '".$us."' and contrasena = '".$kon."';";
  $results = $conn->query($sqls);
  $nr2 = mysqli_num_rows($results);
  $row = $results->Fetch_assoc();
  if ($nr2 == 1) {



?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<title>Menú principal</title>


<header>
<nav style="position:absolute; height:10%; width:100%; top:0; background-color:rgba(0, 0, 0, 1);">
<center>

        <span class="border border-danger rounded-pill bg-dark" style= "position:absolute; top:5; left:575; width:235; height:45;">
        <h1 style="position: absolute; top: -5px; right:15; width: 100%; color: white;">FreeTube
        <img src="resources\267540453045211.webp" style="position: absolute; top: 8px; right:-5;" alt="" height="35" width="35">
        </span>
        <?php if(!empty($row["foto_perfil"])){
            $fot =  $row["foto_perfil"];
            ?>
            <img src="imgperfil\<?php echo $fot;?>" name="picus" class="picture-src" onclick="window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" id="wizardPicturePreview" title="" height="50" width="50" style="cursor: pointer;position:absolute;top:5px; right:-550px">
              
            <?php
            }else{
            ?>
               <img src="imgperfil\default.png" name="picus" class="picture-src" onclick="window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" id="wizardPicturePreview" title="" height="50" width="50" style="cursor: pointer;position:absolute;top:5px; right:-550px"> 
            <?php
            }
            ?>
            </center>
</nav>
</header>

<button type="button" class="btn btn-danger"onclick="location.href='inicio.php'" style="position: absolute; top:10; left:10;">Cerrar sesión</button>


<center>
<h1 style="color: white; font-size: 30px;"></h1>
</center>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: absolute; width:100%; top:10%">
  <a class="navbar-brand"href="inicio.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>">Freetube</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="inicio.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre nosotros</a>
      </li>

    </ul>
    <button class="btn btn-outline-danger my-2 my-sm-0" href="cargar_video.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>" style="position:absolute; top:12px; right:315px;">
        <i class="fa fa-upload" aria-hidden="true"></i>
    </button>
    

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<body style="background-color: rgba(0, 0, 0, 0.79);">

<div class="container">
<div class="row">

</div>
  <hr>  
  <?php
  if(isset($error)){
	  echo '<div class="alert alert-danger" role="alert"> '.$error.'</div>';
	}
  ?>
  <?php
  if(isset($_GET["estado"])){
	  echo '<div class="alert alert-success" role="alert"> Video subido correctamente</div>';
	}
  ?>  
    <div class="row">
    
<form method="post" action="" class="border shadow" style="position:absolute; top:200;  height: 250; width:500;" enctype='multipart/form-data'>
          <div class="form-group">
            <label for="exampleInputEmail1" class="bg-light">Nombre de Video</label>
            <input name="nombre" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese nombre">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="bg-light" style="position:absolute; top:75px;">Video</label>
<!--inicio-->
      <div class="custom-file mt-3 mb-3" lang="es" method="POST">
      <input name="file_video" type="file" class="custom-file-input" id="customFile" required>
      <label class="custom-file-label selected" for="customFile">Buscar video</label>
     
</div>
</div>
<button type="submit" class="btn btn-danger text-top" name='video_upload' style="position:absolute; top:150px; left:400;">Subir Video</button>
</form>
</body>



<footer>

</footer>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

</script>
<?php  
        include("config.php");
        ini_set('upload_max_filesize', '50M');
      if(isset($_POST['video_upload'])){

        $nombre_file = $_FILES['file_video']['name'];
			//
			$image_info = explode(".", $nombre_file); 
			$nombre =format_uri($image_info[0]);
			$image_type = end($image_info);
			$file_video = $nombre."-".rand(10,999).".".$image_type;
			//
            $target_dir = "videos/";
            $target_file = $target_dir.$file_video;

            // Obtenemos la extension del archivo
            $videoFileType = strtolower(pathinfo($nombre_file,PATHINFO_EXTENSION));

            // extensiones validados
            $extensions_arr = array("mp4","avi","3gp","mov","mpeg", "mkv", "wmv");

            // Revisar extension
            if(in_array($videoFileType,$extensions_arr) ){
                
                // Revisar el tamaño del archivo
                if(($_FILES["file_video"]["size"] == 0)) {
                  ?>
                  <script>
                    alert("Extensión inválida!")
                  </script>
              <?php
                }else{
                    // Subir
                    if(move_uploaded_file($_FILES['file_video']['tmp_name'],$target_file)){
                        // Insertar registro
						$nombre = htmlentities($_POST['nombre']);
            $using =  $_GET["username"];
						$query = $db->prepare("INSERT INTO `videos`(`nombre`, `ubicacion`, `id_usuario`)
						VALUES (:nombre,:ubicacion,:id_usuario)");
						$query->bindParam(":nombre", $nombre);
						$query->bindParam(":ubicacion", $file_video);
            $query->bindParam(":id_usuario", $using);
						$query->execute();
						    if($query->rowCount() > 0){
								?>
                                <script>
                                    window.location.href = "inicio.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>";
                                </script>
                                <?php
							}else{
                ?>
                    <script>
                      alert("")
                    </script>
                <?php
              }
            }?>
            <script>
              alert("Fallo en mover archivo!")
            </script>
        <?php
          }

            }else{
              ?>
              <script>
                alert("Extensión inválida!")
              </script>
          <?php
            }
        
        }else{
        ?>

<?php
        }
  }else{
    ?>
    <script>
      alert("Credenciales inválidas!")
      window.location.href="inicio.php";
    </script>
    <?php
  }
}else{
  ?>
    <script>
      alert("Credenciales inexistentes!")
      window.location.href="inicio.php";
    </script>
    <?php
}
}else{
  ?>
  <script>
    window.location.href="login.php";
  </script>
  <?php
}
?>