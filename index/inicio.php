<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="shortcut icon" href="resources\267540453045211.ico" />
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
    $row = $results->Fetch_assoc();
    $nr2 = mysqli_num_rows($results);
    if ($nr2 == 1) {
        ?>
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

            <img src="imgperfil\<?php echo $fot;?>" id="imageDropdown" data-toggle="dropdown" name="picus" class="picture-src "  id="wizardPicturePreview" title="" height="50" width="50" style="cursor: pointer;position:absolute;top:5px; right:-550px">

            <div class="dropdown-menu" aria-labelledby="imageDropdown">
            <a class="dropdown-item" style="cursor:pointer;" onclick="window.location.href='ver_perfil.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'">Videos cargados</a>
                <a class="dropdown-item" style="cursor:pointer;" onclick="window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'">Editar perfil</a>
                <a class="dropdown-item" href="inicio.php">Cerrar sesión</a>
            </div>
           
              <script>
                
              </script>
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
      
      <button type="button" class="btn btn-danger" onclick="location.href='inicio.php'" style="position: absolute; top:10; left:10;">Cerrar sesión</button>
      
      
      
      
      
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: absolute; width:100%; top:10%">
        <a class="navbar-brand" href="inicio.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>">Freetube</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" style="cursor: pointer;" href="inicio.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="window.location.href='sobre_nosotros.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'">Sobre nosotros</a>
            </li>
      
          </ul>
          <button class="btn btn-outline-danger my-2 my-sm-0" onclick="location.href='cargar_video.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" style="position:absolute; top:12px; right:315px;">
              <i class="fa fa-upload" aria-hidden="true"></i>
          </button>
          
      
          <form class="form-inline my-2 my-lg-0" method="POST" id="formb" name= "formb" style="position: relative; right:0;">
        <input class="form-control mr-sm-2" type="search" placeholder="Search"  id= "textb" name= "textb" aria-label="Search">
        <button class="btn btn-outline-danger my-2 my-sm-0"  name= "buttonb"  type="submit">Search</button>
      </form>
        </div>
      </nav>
      <body style="background-color: rgba(0, 0, 0, 0.79);">
      <h3 class="mt-5"> </h3>
<div class="container">
<div class="row">
  <h3 class="mt-5"> </h3>
  </div>
    <hr>  
    <div class="row">
    <?php
      include("config.php");
      if(!isset($_POST["textb"])){
      $query = $db->prepare("SELECT id, nombreus, apellidous, foto_perfil, nombre, ubicacion, usuarios.id_usuario FROM videos join usuarios on usuarios.id_usuario = videos.id_usuario ORDER BY id DESC");
      $query->execute();
      $data = $query->fetchAll();
          foreach ($data as $rowx):

              $ubicacion = $rowx['ubicacion'];
              $nome = $rowx['nombre'];
              $aidx = $rowx['id'];
              $aidxus = $rowx['id_usuario'];
              if(is_null($rowx['foto_perfil'])){
                ?>
                <style>
    
                </style>
                
                <div class='col-md-3' style="position: relative;">
                <?php
              if(strlen($nome)< 20){
                ?>
                    <label style="position: absolute;
        z-index: 9;
       bottom:-0px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }elseif((strlen($nome)>= 20) and (strlen($nome) < 32)){
                ?>
                        <label style="position: absolute;
       z-index: 9;
       bottom:-10px;
       line-height: 15px; 
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }else{
                ?>
                  <label style="position: absolute;
       z-index: 9;
       bottom:0px;
       line-height: 30px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo substr($nome,0,30)."..."; ?></label>

                <?php
              }

              ?>



       <label style="position: absolute;
       z-index: 9;
       bottom:-35px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $aidxus; ?></label>

                <input type="hidden" value="<?php echo $aidx; ?>">
                <video id= "player" onmousedown="WhichButton<?php echo $aidx; ?>(event)" onclick="window.location.href='ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>'" style="cursor:pointer; position: relative; top:-1%;" src='videos\<?php echo $ubicacion; ?>#t=15' preload="metadata" width='250px' height='200px'>
                </video>
                <img src="imgperfil\default.png" name="picus" class="picture-src" onclick="window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" id="wizardPicturePreview" title="" height="50" width="50" 
                style="position: absolute;
       z-index: 9;
       bottom:-22px;
       left:10px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;"> 
      
                <script>
                  document.querySelector("#player").addEventListener('loadeddata', function() {
                  this.setAttribute('poster', '');
                  });

                function WhichButton<?php echo $aidx; ?>(event) {
                        if(event.button == 1){
                          window.open('ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>').focus();
                        }
                      }
                </script>
  
                </div>
                <?php
                 
              }else{
                $fotpervid = $rowx['foto_perfil'];
                 ?>
                <style>
    
                </style>
                
                <div class='col-md-3' style="position: relative;">


                <?php
              if(strlen($nome)< 20){
                ?>
                    <label style="position: absolute;
        z-index: 9;
       bottom:-0px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }elseif((strlen($nome)>= 20) and (strlen($nome) < 32)){
                ?>
                        <label style="position: absolute;
       z-index: 9;
       bottom:-10px;
       line-height: 15px; 
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }else{
                ?>
                  <label style="position: absolute;
       z-index: 9;
       bottom:0px;
       line-height: 30px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo substr($nome,0,30)."..."; ?></label>

                <?php
              }

              ?>



       <label style="position: absolute;
       z-index: 9;
       bottom:-35px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $aidxus; ?></label>

                <input type="hidden" value="<?php echo $aidx; ?>">
                <video id= "player" onmousedown="WhichButton<?php echo $aidx; ?>(event)" onclick="window.location.href='ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>'" style="cursor:pointer; position: relative; top:-1%;" src='videos\<?php echo $ubicacion; ?>#t=15' preload="metadata" width='250px' height='200px'>
                </video>
                <img src="imgperfil\<?php echo $fotpervid; ?>" name="picus" class="picture-src" 
                onclick="window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" id="wizardPicturePreview"
                 title="" height="50" width="50" style="position: absolute;
       z-index: 9;
       bottom:-22px;
       left:10px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;x"> 
      
                <script>
                  document.querySelector("#player").addEventListener('loadeddata', function() {
                  this.setAttribute('poster', '');
                  });

                function WhichButton<?php echo $aidx; ?>(event) {
                        if(event.button == 1){
                          window.open('ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>').focus();
                        }
                      }
                </script>
  
                </div>
                <?php
                 
              }
              
            endforeach;
        }else{
          $nomx = $_POST["textb"];
          if($nomx == ""){
            $query = $db->prepare("SELECT id, nombreus, apellidous, foto_perfil, nombre, ubicacion, usuarios.id_usuario FROM videos join usuarios on usuarios.id_usuario = videos.id_usuario");
            $query->execute();
            $data = $query->fetchAll();
            foreach ($data as $rowx):

              $ubicacion = $rowx['ubicacion'];
              $nome = $rowx['nombre'];
              $aidx = $rowx['id'];
              $aidxus = $rowx['id_usuario'];
              if(is_null($rowx['foto_perfil'])){
                ?>
                <style>
    
                </style>
                
                <div class='col-md-3' style="position: relative;">
                <?php
              if(strlen($nome)< 20){
                ?>
                    <label style="position: absolute;
        z-index: 9;
       bottom:-0px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }elseif((strlen($nome)>= 20) and (strlen($nome) < 32)){
                ?>
                        <label style="position: absolute;
       z-index: 9;
       bottom:-10px;
       line-height: 15px; 
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }else{
                ?>
                  <label style="position: absolute;
       z-index: 9;
       bottom:0px;
       line-height: 30px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo substr($nome,0,30)."..."; ?></label>

                <?php
              }

              ?>



       <label style="position: absolute;
       z-index: 9;
       bottom:-35px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $aidxus; ?></label>

                <input type="hidden" value="<?php echo $aidx; ?>">
                <video id= "player" onmousedown="WhichButton<?php echo $aidx; ?>(event)" onclick="window.location.href='ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>'" style="cursor:pointer; position: relative; top:-1%;" src='videos\<?php echo $ubicacion; ?>#t=15' preload="metadata" width='250px' height='200px'>
                </video>
                <img src="imgperfil\default.png" name="picus" class="picture-src" onclick="window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" id="wizardPicturePreview" title="" height="50" width="50" 
                style="position: absolute;
       z-index: 9;
       bottom:-22px;
       left:10px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;"> 
      
                <script>
                  document.querySelector("#player").addEventListener('loadeddata', function() {
                  this.setAttribute('poster', '');
                  });

                function WhichButton<?php echo $aidx; ?>(event) {
                        if(event.button == 1){
                          window.open('ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>').focus();
                        }
                      }
                </script>
  
                </div>
                <?php
                 
              }else{
                $fotpervid = $rowx['foto_perfil'];
                 ?>
                <style>
    
                </style>
                
                <div class='col-md-3' style="position: relative;">


                <?php
              if(strlen($nome)< 20){
                ?>
                    <label style="position: absolute;
        z-index: 9;
       bottom:-0px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }elseif((strlen($nome)>= 20) and (strlen($nome) < 32)){
                ?>
                        <label style="position: absolute;
       z-index: 9;
       bottom:-10px;
       line-height: 15px; 
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }else{
                ?>
                  <label style="position: absolute;
       z-index: 9;
       bottom:0px;
       line-height: 30px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo substr($nome,0,30)."..."; ?></label>

                <?php
              }

              ?>



       <label style="position: absolute;
       z-index: 9;
       bottom:-35px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $aidxus; ?></label>

                <input type="hidden" value="<?php echo $aidx; ?>">
                <video id= "player" onmousedown="WhichButton<?php echo $aidx; ?>(event)" onclick="window.location.href='ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>'" style="cursor:pointer; position: relative; top:-1%;" src='videos\<?php echo $ubicacion; ?>#t=15' preload="metadata" width='250px' height='200px'>
                </video>
                <img src="imgperfil\<?php echo $fotpervid; ?>" name="picus" class="picture-src" 
                onclick="window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" id="wizardPicturePreview"
                 title="" height="50" width="50" style="position: absolute;
       z-index: 9;
       bottom:-22px;
       left:10px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;x"> 
      
                <script>
                  document.querySelector("#player").addEventListener('loadeddata', function() {
                  this.setAttribute('poster', '');
                  });

                function WhichButton<?php echo $aidx; ?>(event) {
                        if(event.button == 1){
                          window.open('ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>').focus();
                        }
                      }
                </script>
  
                </div>
                <?php
                 
              }
              
            endforeach;
          }else{
          $query = $db->prepare("SELECT id, nombreus, apellidous, foto_perfil, nombre, ubicacion, usuarios.id_usuario FROM videos join usuarios on usuarios.id_usuario = videos.id_usuario where concat(usuarios.id_usuario,nombre, nombreus, apellidous) like '%".$nomx."%'");
          $query->execute();
          $data = $query->fetchAll();
          foreach ($data as $rowx):

            $ubicacion = $rowx['ubicacion'];
            $nome = $rowx['nombre'];
            $aidx = $rowx['id'];
            $aidxus = $rowx['id_usuario'];
            if(is_null($rowx['foto_perfil'])){
              ?>
              <style>
  
              </style>
              
              <div class='col-md-3' style="position: relative;">
              <?php
            if(strlen($nome)< 20){
              ?>
                  <label style="position: absolute;
      z-index: 9;
     bottom:-0px;
     left:65px;
     color:white;
     margin-top: 5px;
     margin-left: 5px;" ><?php echo $nome; ?></label>
              <?php
            }elseif((strlen($nome)>= 20) and (strlen($nome) < 32)){
              ?>
                      <label style="position: absolute;
     z-index: 9;
     bottom:-10px;
     line-height: 15px; 
     left:65px;
     color:white;
     margin-top: 5px;
     margin-left: 5px;" ><?php echo $nome; ?></label>
              <?php
            }else{
              ?>
                <label style="position: absolute;
     z-index: 9;
     bottom:0px;
     line-height: 30px;
     left:65px;
     color:white;
     margin-top: 5px;
     margin-left: 5px;" ><?php echo substr($nome,0,30)."..."; ?></label>

              <?php
            }

            ?>



     <label style="position: absolute;
     z-index: 9;
     bottom:-35px;
     left:65px;
     color:white;
     margin-top: 5px;
     margin-left: 5px;" ><?php echo $aidxus; ?></label>

              <input type="hidden" value="<?php echo $aidx; ?>">
              <video id= "player" onmousedown="WhichButton<?php echo $aidx; ?>(event)" onclick="window.location.href='ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>'" style="cursor:pointer; position: relative; top:-1%;" src='videos\<?php echo $ubicacion; ?>#t=15' preload="metadata" width='250px' height='200px'>
              </video>
              <img src="imgperfil\default.png" name="picus" class="picture-src" onclick="window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" id="wizardPicturePreview" title="" height="50" width="50" 
              style="position: absolute;
     z-index: 9;
     bottom:-22px;
     left:10px;
     color:white;
     margin-top: 5px;
     margin-left: 5px;"> 
    
              <script>
                document.querySelector("#player").addEventListener('loadeddata', function() {
                this.setAttribute('poster', '');
                });

              function WhichButton<?php echo $aidx; ?>(event) {
                      if(event.button == 1){
                        window.open('ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>').focus();
                      }
                    }
              </script>

              </div>
              <?php
               
            }else{
              $fotpervid = $rowx['foto_perfil'];
               ?>
              <style>
  
              </style>
              
              <div class='col-md-3' style="position: relative;">


              <?php
            if(strlen($nome)< 20){
              ?>
                  <label style="position: absolute;
      z-index: 9;
     bottom:-0px;
     left:65px;
     color:white;
     margin-top: 5px;
     margin-left: 5px;" ><?php echo $nome; ?></label>
              <?php
            }elseif((strlen($nome)>= 20) and (strlen($nome) < 32)){
              ?>
                      <label style="position: absolute;
     z-index: 9;
     bottom:-10px;
     line-height: 15px; 
     left:65px;
     color:white;
     margin-top: 5px;
     margin-left: 5px;" ><?php echo $nome; ?></label>
              <?php
            }else{
              ?>
                <label style="position: absolute;
     z-index: 9;
     bottom:0px;
     line-height: 30px;
     left:65px;
     color:white;
     margin-top: 5px;
     margin-left: 5px;" ><?php echo substr($nome,0,30)."..."; ?></label>

              <?php
            }

            ?>



     <label style="position: absolute;
     z-index: 9;
     bottom:-35px;
     left:65px;
     color:white;
     margin-top: 5px;
     margin-left: 5px;" ><?php echo $aidxus; ?></label>

              <input type="hidden" value="<?php echo $aidx; ?>">
              <video id= "player" onmousedown="WhichButton<?php echo $aidx; ?>(event)" onclick="window.location.href='ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>'" style="cursor:pointer; position: relative; top:-1%;" src='videos\<?php echo $ubicacion; ?>#t=15' preload="metadata" width='250px' height='200px'>
              </video>
              <img src="imgperfil\<?php echo $fotpervid; ?>" name="picus" class="picture-src" 
              onclick="window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" id="wizardPicturePreview"
               title="" height="50" width="50" style="position: absolute;
     z-index: 9;
     bottom:-22px;
     left:10px;
     color:white;
     margin-top: 5px;
     margin-left: 5px;x"> 
    
              <script>
                document.querySelector("#player").addEventListener('loadeddata', function() {
                this.setAttribute('poster', '');
                });

              function WhichButton<?php echo $aidx; ?>(event) {
                      if(event.button == 1){
                        window.open('ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>').focus();
                      }
                    }
              </script>

              </div>
              <?php
               
            }
            
          endforeach;
        }
      }
          ?>
                
      </div>
       </div>
      </body>
      
      <footer>
      
      </footer>
        <?php
    }else{
      ?>
      <script>
        alert("Intento de inyección detectada!!");
        window.location.href= "inicio.php";
      </script>
    <?php
    }
    }else{
      ?>
        <script>
          alert("No se encontró tal contraseña!");
          window.location.href= "inicio.php";
        </script>
      <?php
    }
    
}else{
  ?>


  <title>Menú principal</title>
  
  <header style="max-width: 100px;">
  <nav style="position:absolute; height:10%; width:100%; top:0; background-color:rgba(0, 0, 0, 1);">
  <center>
          <span class="border border-danger rounded-pill bg-dark" style= "position:fixed; top:1%; left:575; width:235; height:45;">
          <h1 style="position: absolute; top: -5px; right:15; width: 100%; color: white;">FreeTube
          <img src="resources\267540453045211.webp" style="position: absolute; top: 8px; right:-5;" alt="" height="35" width="35">
          </span>
          
  </center>
  </nav>
  </header>
  
  
  
  <button type="button" class="btn btn-danger"onclick="location.href='login.php'" style="position: absolute; top:10; left:10;">Iniciar sesión</button>
  
  <button type="button" class="btn btn-danger" onclick="location.href='loginSU.php'" style="position: absolute; top:10; right:10;">Registrarse</button>
  
  
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: absolute; width:100%; top:10%">
    <a class="navbar-brand" href="inicio.php">Freetube</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" style="cursor: pointer;" href="inicio.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="window.location.href='sobre_nosotros.php'" style="cursor:pointer;">Sobre nosotros</a>
        </li>
  
      </ul>
      <button class="btn btn-outline-danger my-2 my-sm-0" onclick="location.href='cargar_video.php'" style="position:absolute; top:12px; right:315px;">
          <i class="fa fa-upload" aria-hidden="true"></i>
      </button>
      
  
      <form class="form-inline my-2 my-lg-0" method="POST" id="formb" name= "formb" style="position: fixed; right:10;">
        <input class="form-control mr-sm-2" type="search" placeholder="Search"  id= "textb" name= "textb" aria-label="Search">
        <button class="btn btn-outline-danger my-2 my-sm-0"  name= "buttonb"  type="submit">Search</button>
      </form>
    </div>
  </nav>
  <body style="background-color: rgba(0, 0, 0, 0.79);">
  <h3 class="mt-5"> </h3>
  <div class="container">
<div class="row">
  <h3 class="mt-5"> </h3>
  </div>
    <hr>  
    <div class="row">
    <?php
      include("config.php");
      if(!isset($_POST["textb"])){
      $query = $db->prepare("SELECT id, nombreus, apellidous, foto_perfil, nombre, ubicacion, usuarios.id_usuario FROM videos join usuarios on usuarios.id_usuario = videos.id_usuario ORDER BY id DESC");
      $query->execute();
      $data = $query->fetchAll();
          foreach ($data as $rowx):

              $ubicacion = $rowx['ubicacion'];
              $nome = $rowx['nombre'];
              $aidx = $rowx['id'];
              $aidxus = $rowx["id_usuario"];
              if(is_null($rowx['foto_perfil'])){
                ?>
                <style>
    
                </style>
                
                <div class='col-md-3' style="position: relative;">
                <?php
              if(strlen($nome)< 20){
                ?>
                    <label style="position: absolute;
        z-index: 9;
       bottom:-0px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }elseif((strlen($nome)>= 20) and (strlen($nome) < 32)){
                ?>
                        <label style="position: absolute;
       z-index: 9;
       bottom:-10px;
       line-height: 15px; 
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }else{
                ?>
                  <label style="position: absolute;
       z-index: 9;
       bottom:0px;
       line-height: 30px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo substr($nome,0,30)."..."; ?></label>

                <?php
              }

              ?>



       <label style="position: absolute;
       z-index: 9;
       bottom:-35px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $aidxus; ?></label>
                <input type="hidden" value="<?php echo $aidx; ?>">
                <video id= "player" onmousedown="WhichButton<?php echo $aidx; ?>(event)" onclick="window.location.href='ver_video.php?vid=<?php echo $aidx; ?>'" style="cursor:pointer; position: relative; top:-1%;" src='videos\<?php echo $ubicacion; ?>#t=15' preload="metadata" width='250px' height='200px'>
                </video>
                <img src="imgperfil\default.png" name="picus" class="picture-src" onclick="window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" id="wizardPicturePreview" title="" height="50" width="50" 
                style="position: absolute;
       z-index: 9;
       bottom:-22px;
       left:10px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;"> 
      
                <script>
                  document.querySelector("#player").addEventListener('loadeddata', function() {
                  this.setAttribute('poster', '');
                  });
                  $("#player").on('click', function(e) {
                    if (e.which == 2) {
                              e.preventDefault();
                              alert("middle button"); 
                          }
                        });
                function WhichButton<?php echo $aidx; ?>(event) {
                        if(event.button == 1){
                          window.open('ver_video.php?vid=<?php echo $aidx; ?>').focus();
                        }
                      }
                </script>
  
                </div>
                <?php
                 
              }else{
                $fotpervid = $rowx['foto_perfil'];
                 ?>
                <style>
    
                </style>
                
                <div class='col-md-3' style="position: relative;">
                <?php
              if(strlen($nome)< 20){
                ?>
                    <label style="position: absolute;
        z-index: 9;
       bottom:-0px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }elseif((strlen($nome)>= 20) and (strlen($nome) < 32)){
                ?>
                        <label style="position: absolute;
       z-index: 9;
       bottom:-10px;
       line-height: 15px; 
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }else{
                ?>
                  <label style="position: absolute;
       z-index: 9;
       bottom:0px;
       line-height: 30px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo substr($nome,0,30)."..."; ?></label>

                <?php
              }
             
              ?>



       <label style="position: absolute;
       z-index: 9;
       bottom:-35px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $aidxus; ?></label>
                <input type="hidden" value="<?php echo $aidx; ?>">
                <video id= "player" onmousedown="WhichButton<?php echo $aidx; ?>(event)" onclick="window.location.href='ver_video.php?vid=<?php echo $aidx; ?>'" style="cursor:pointer; position: relative; top:-1%; width:250px; height:200px;" src='videos\<?php echo $ubicacion; ?>#t=15' preload="metadata" >
                </video>
                
                <img src="imgperfil\<?php echo $fotpervid; ?>" name="picus" class="picture-src" 
                onclick="window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" id="wizardPicturePreview"
                 title="" height="50" width="50" style="position: absolute;
       z-index: 9;
       bottom:-22px;
       left:10px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;x"> 
      
                <script>
                  document.querySelector("#player").addEventListener('loadeddata', function() {
                  this.setAttribute('poster', '');
                  });

                  function WhichButton<?php echo $aidx; ?>(event) {
                        if(event.button == 1){
                          window.open('ver_video.php?vid=<?php echo $aidx; ?>').focus();
                        }
                      }
                </script>
  
                </div>
                <?php
                 
              }
              
            endforeach;
        }else{
          $nomx = $_POST["textb"];
          if($nomx == ""){
            $query = $db->prepare("SELECT id, nombreus, apellidous, foto_perfil, nombre, ubicacion, usuarios.id_usuario FROM videos join usuarios on usuarios.id_usuario = videos.id_usuario");
            $query->execute();
            $data = $query->fetchAll();
            foreach ($data as $rowx):

              $ubicacion = $rowx['ubicacion'];
              $nome = $rowx['nombre'];
              $aidx = $rowx['id'];
              $aidxus = $rowx['id_usuario'];
              if(is_null($rowx['foto_perfil'])){
                ?>
                <style>
    
                </style>
                
                <div class='col-md-3' style="position: relative;">
                <?php
              if(strlen($nome)< 20){
                ?>
                    <label style="position: absolute;
        z-index: 9;
       bottom:-0px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }elseif((strlen($nome)>= 20) and (strlen($nome) < 32)){
                ?>
                        <label style="position: absolute;
       z-index: 9;
       bottom:-10px;
       line-height: 15px; 
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }else{
                ?>
                  <label style="position: absolute;
       z-index: 9;
       bottom:0px;
       line-height: 30px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo substr($nome,0,30)."..."; ?></label>

                <?php
              }

              ?>



       <label style="position: absolute;
       z-index: 9;
       bottom:-35px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $aidxus; ?></label>

                <input type="hidden" value="<?php echo $aidx; ?>">
                <video id= "player" onmousedown="WhichButton<?php echo $aidx; ?>(event)" onclick="window.location.href='ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>'" style="cursor:pointer; position: relative; top:-1%;" src='videos\<?php echo $ubicacion; ?>#t=15' preload="metadata" width='250px' height='200px'>
                </video>
                <img src="imgperfil\default.png" name="picus" class="picture-src" onclick="window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" id="wizardPicturePreview" title="" height="50" width="50" 
                style="position: absolute;
       z-index: 9;
       bottom:-22px;
       left:10px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;"> 
      
                <script>
                  document.querySelector("#player").addEventListener('loadeddata', function() {
                  this.setAttribute('poster', '');
                  });

                function WhichButton<?php echo $aidx; ?>(event) {
                        if(event.button == 1){
                          window.open('ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>').focus();
                        }
                      }
                </script>
  
                </div>
                <?php
                 
              }else{
                $fotpervid = $rowx['foto_perfil'];
                 ?>
                <style>
    
                </style>
                
                <div class='col-md-3' style="position: relative;">


                <?php
              if(strlen($nome)< 20){
                ?>
                    <label style="position: absolute;
        z-index: 9;
       bottom:-0px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }elseif((strlen($nome)>= 20) and (strlen($nome) < 32)){
                ?>
                        <label style="position: absolute;
       z-index: 9;
       bottom:-10px;
       line-height: 15px; 
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }else{
                ?>
                  <label style="position: absolute;
       z-index: 9;
       bottom:0px;
       line-height: 30px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo substr($nome,0,30)."..."; ?></label>

                <?php
              }

              ?>



       <label style="position: absolute;
       z-index: 9;
       bottom:-35px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $aidxus; ?></label>

                <input type="hidden" value="<?php echo $aidx; ?>">
                <video id= "player" onmousedown="WhichButton<?php echo $aidx; ?>(event)" onclick="window.location.href='ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>'" style="cursor:pointer; position: relative; top:-1%;" src='videos\<?php echo $ubicacion; ?>#t=15' preload="metadata" width='250px' height='200px'>
                </video>
                <img src="imgperfil\<?php echo $fotpervid; ?>" name="picus" class="picture-src" 
                onclick="window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" id="wizardPicturePreview"
                 title="" height="50" width="50" style="position: absolute;
       z-index: 9;
       bottom:-22px;
       left:10px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;x"> 
      
                <script>
                  document.querySelector("#player").addEventListener('loadeddata', function() {
                  this.setAttribute('poster', '');
                  });

                function WhichButton<?php echo $aidx; ?>(event) {
                        if(event.button == 1){
                          window.open('ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>').focus();
                        }
                      }
                </script>
  
                </div>
                <?php
                 
              }
              
            endforeach;
          }else{
          $query = $db->prepare("SELECT id, nombreus, apellidous, foto_perfil, nombre, ubicacion, usuarios.id_usuario FROM videos join usuarios on usuarios.id_usuario = videos.id_usuario where concat(usuarios.id_usuario, nombre, nombreus, apellidous) like '%".$nomx."%'");
          $query->execute();
          $data = $query->fetchAll();
          foreach ($data as $row):
  
              $ubicacion = $row['ubicacion'];
              $nome = $row['nombre'];
              $aidx = $row['id'];
              $aidxus = $row['id_usuario'];
              $fotpervid = $row['foto_perfil'];
              ?>
              <style>
  
              </style>
              
              <div class='col-md-3' style="position: relative;">
              <?php
              if(strlen($nome)< 20){
                ?>
                    <label style="position: absolute;
        z-index: 9;
       bottom:-0px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }elseif((strlen($nome)>= 20) and (strlen($nome) < 32)){
                ?>
                        <label style="position: absolute;
       z-index: 9;
       bottom:-10px;
       line-height: 15px; 
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $nome; ?></label>
                <?php
              }else{
                ?>
                  <label style="position: absolute;
       z-index: 9;
       bottom:0px;
       line-height: 30px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo substr($nome,0,30)."..."; ?></label>

                <?php
              }

              ?>



       <label style="position: absolute;
       z-index: 9;
       bottom:-35px;
       left:65px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $aidxus; ?></label>
              <input type="hidden" value="<?php echo $aidx; ?>">
              <video id= "player"  onmousedown="WhichButton<?php echo $aidx; ?>(event)" onclick="window.location.href='ver_video.php?vid=<?php echo $aidx; ?>'" style="cursor:pointer; position: relative; top:-1%;" src='videos\<?php echo $ubicacion; ?>#t=15' preload="metadata" width='250px' height='200px'>
              </video>
              <img src="imgperfil\<?php echo $fotpervid; ?>" name="picus" class="picture-src" 
                onclick="window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" id="wizardPicturePreview"
                 title="" height="50" width="50" style="position: absolute;
       z-index: 9;
       bottom:-22px;
       left:10px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;x"> 
              <script>
                document.querySelector("#player").addEventListener('loadeddata', function() {
	              this.setAttribute('poster', '');
                });
                function WhichButton<?php echo $aidx; ?>(event) {
                        if(event.button == 1){
                          window.open('ver_video.php?vid=<?php echo $aidx; ?>').focus();
                        }
                      }
              </script>


              </div>
              <?php

          endforeach;
        }
      }
          ?>
            


  </div>
   </div>
  </body>
  
  <footer>
  
  </footer>



  <?php
  }
  ?>
