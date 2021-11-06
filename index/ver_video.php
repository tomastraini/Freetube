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
  $row = $results->Fetch_assoc();
  $nr2 = mysqli_num_rows($results);
  if ($nr2 == 1) {



?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<link rel = "icon" href = "resources\267540453045211.webp" >

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
  <a class="navbar-brand" href="inicio.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>">Freetube</a>
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
    <button class="btn btn-outline-danger my-2 my-sm-0" onclick="window.location.href='cargar_video.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" style="position:absolute; top:12px; right:315px;">
        <i class="fa fa-upload" aria-hidden="true"></i>
    </button>
    

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class='col-md-3'>
<body style="background-color: rgba(0, 0, 0, 0.79); overflow-x:hidden;">

<?php
        if(isset($_GET["vid"])){
          $vide = $_GET["vid"];
          include("config.php");
          if(!isset($_POST["textb"])){
          $query = $db->prepare("SELECT id, nombreus, contrasena, apellidous, foto_perfil, nombre, ubicacion, videos.id_usuario FROM videos join usuarios on usuarios.id_usuario = videos.id_usuario where id =".$vide);
          $query->execute();
          $data = $query->fetchAll();
          foreach ($data as $row):
              $ubicacion = $row['ubicacion'];
              $nome = $row['nombre'];
              $aidx = $row['id'];
              $fotpervid = $row['foto_perfil'];
              $pername =  $row["id_usuario"];
              $laclave = $_GET["kak"];
          ?>
          
          <style>
            .profil:hover{
                  cursor:pointer;
                  
            }
          </style>
          <div class="profil" style="display:inline;">
          <img src="imgperfil\<?php echo $fotpervid; ?>" name="picus" class="picture-src" 
               id="wizardPicturePreview"
               title="" height="50" width="50" style="position: absolute;
     z-index: 9;
     top:130px;
     right:460px;
     color:white;
     margin-top: 5px;
     margin-left: 5px;"> 

    <h5 style="position: absolute;
     z-index: 9;
     height:30px;
     width:100;
     top:135px; 
     right:350px;
     color:white;
     text-align:center;
     margin-top: 5px;
     margin-left: 5px;" class="border border-danger rounded-pill bg-dark">
          <?php echo $pername;?>
    </h5>
    
    <button style="position: absolute;
     z-index: 9;
     height:auto;
     width:auto;
     top:135px; 
     left:835px;
     text-align:center;
     right:50px;" class="btnComentar btn btn-danger"  data-toggle="modal">
      Agregar comentario
    </button>

    <?php include('modalAgregarComentario.php'); ?>
    <input type="hidden" value="<?php echo $laclave; ?>" name="passwing" id="passwing">
    <input type="hidden" value="<?php echo $us; ?>" id="usernamex1" id="usernamex1">
    <input type="hidden" value="<?php echo $aidx; ?>" id="idvideoxin" id="idvideoxin">
    <script>
         modalAgregarComentariox = new bootstrap.Modal(document.getElementById('modalAgregarComentario'));
         let usuariomodal = document.getElementById("usernamemodal");
         let passwdmodal = document.getElementById("passwordmodal");
         let idvideo = document.getElementById("idvideox");

         let passworing = document.getElementById("passwing").value;
         let usuaring = document.getElementById("usernamex1").value;
         let vidxin = document.getElementById("idvideoxin").value;
        $(".btnComentar").click(function() {
          usuariomodal.value = usuaring;
          passwdmodal.value = passworing;
          idvideo.value = vidxin;
          modalAgregarComentariox.show();
        });
    </script>
    <?php
    $query = $db->prepare("SELECT id_comentario, comentario, comentarios.id_usuario, id, foto_perfil, fecha FROM comentarios join usuarios on comentarios.id_usuario = usuarios.id_usuario WHERE id = '".$vide ."' ORDER BY id_comentario DESC");
    $query->execute();
    $i = 0;
    $data = $query->fetchAll();
    foreach ($data as $row):
      
      $i = $i + 150;
      $idcomm = $row['id_comentario'];
      $comentario = $row['comentario'];
      $iduscomm = $row['id_usuario'];
      $fotoperfcomm = $row['foto_perfil'];
      $fechadecom = $row['fecha'];
    ?>

    </div>
    <div style= "position: absolute; right:0px; top: 50px;" >
    <div style= "position: absolute; left:500px; top: <?php echo $i;?>px;" class="p-3 mb-2 bg-dark comentariox">
      <div class ="comment" style=" width:400px;
        height:80px;
        margin:10px auto;
        background:white;
        border-radius:5px;">
            <div class ="profıle-ımage" style=" float:left;
        width:60px;
        height:60px;
        margin:6px 0px 0px 6px;
        background:#148F77;
        border-radius:300px;">
         <img src="imgperfil\<?php echo $fotoperfcomm; ?>" class ="profıle-ımage" title="" height="50" width="50" style="float:left;
        width:60px;
        height:60px;
        margin:0px;
        background:#148F77;
        border-radius:300px;"> 
             
            </div>
            <div class ="username" style="  float:left;
        color:#212121;
        margin:15px 0px 0px 5px;
        padding:0px;"><?php echo $iduscomm; ?></div>
            <div class ="user-comment" style="margin:0px;
        padding:0px;">
              <p style=" color:#424242;
        margin:0px;
        padding:0px;
        position:relative;
        font-size:12px;
        top:35px;
        left:-36px;"><?php echo $comentario; ?></p>
              <div style ="clear:both;"></div>
              <span style= "  color:#9E9E9E;
        font-size:13px;
        margin:0px;
        padding:0px;
        position:relative;
        left:75px;
        top:-13px;"><?php echo $fechadecom; ?></span>
            </div>
    </div>
     
  </div> 
  <?php
  endforeach;
  ?>
  </div>


        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto');

        .comment .profıle-ımage:hover{
          opacity:0.6;
        }
        .comentariox + .comentariox:last-child{
          margin-top: 10px; 
        }

        .comment .username:hover{
          color:#757575;
        }


        .comment .user-comment span:hover{
          color:#616161;
        }

        #ds p:hover{
          cursor:pointer;
          opacity:1.0;
        }
        </style>
</div>
 
    
          </div>

          <div class='col-md-3' style="position: relative;">
            <label style="position: absolute;
   z-index: 9;
   top:152px;
   left:15%;
   color:white;
   margin-top: 5px;
   margin-left: 5px;" ><?php echo $nome;?></label>
   
      <video id= "player"#t=15
      style="cursor:pointer; position: absolute; top:112px; left: 15%; width: 750; height: 500;" src='videos\<?php echo $ubicacion; ?>#t=0.5' 
      preload="metadata" controls width='250px' height='200px'>
      
          <?php echo $pername;?>
    </h5>
     
                      <?php
          endforeach;
          ?>
           
          <?php

      }else{
          ?>
          <script>
              alert("Ha ocurrido un error!");
              window.location.href = "index.php";
          </script>
          <?php
      }

    ?>
</body>
<?php

}
?>



<?php
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
      <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
      <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
    </svg>
    
    <link rel = "icon" href = "resources\267540453045211.webp" >
    
    <title>Menú principal</title>
    
    
    <header>
    <nav style="position:absolute; height:10%; width:100%; top:0; background-color:rgba(0, 0, 0, 1);">
    <center>
    
            <span class="border border-danger rounded-pill bg-dark" style= "position:absolute; top:5; left:575; width:235; height:45;">
            <h1 style="position: absolute; top: -5px; right:15; width: 100%; color: white;">FreeTube
            <img src="resources\267540453045211.webp" style="position: absolute; top: 8px; right:-5;" alt="" height="35" width="35">
            </span>
    
    </center>
    </nav>
    </header>
    
    <button type="button" class="btn btn-danger"onclick="location.href='login.php'" style="position: absolute; top:10; left:10;">Iniciar sesión</button>
  
  <button type="button" class="btn btn-danger" onclick="location.href='loginSU.php'" style="position: absolute; top:10; right:10;">Registrarse</button>
   
    
    <center>
    <h1 style="color: white; font-size: 30px;"></h1>
    </center>
    
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: absolute; width:100%; top:10%">
      <a class="navbar-brand" href="inicio.php">Freetube</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="inicio.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre nosotros</a>
          </li>
    
        </ul>
        <button class="btn btn-outline-danger my-2 my-sm-0" onclick="location.href='cargar_video.php'" style="position:absolute; top:12px; right:315px;">
            <i class="fa fa-upload" aria-hidden="true"></i>
        </button>
        
    
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>



    <body style="background-color: rgba(0, 0, 0, 0.79);">
    
    <?php
        if(isset($_GET["vid"])){
            $vide = $_GET["vid"];
            include("config.php");
            if(!isset($_POST["textb"])){
            $query = $db->prepare("SELECT id, nombreus, contrasena, apellidous, foto_perfil, nombre, ubicacion, videos.id_usuario FROM videos join usuarios on usuarios.id_usuario = videos.id_usuario where id =".$vide);
            $query->execute();
            $data = $query->fetchAll();
            foreach ($data as $row):
                $ubicacion = $row['ubicacion'];
                $nome = $row['nombre'];
                $aidx = $row['id'];
                $fotpervid = $row['foto_perfil'];
                $pername =  $row["id_usuario"];
                $contraus =  $row["contrasena"];
                
            ?>
            
            <style>
              .profil:hover{
                    cursor:pointer;
                    
              }
            </style>
            <div class="profil" style="display:inline;">
            <img src="imgperfil\<?php echo $fotpervid; ?>" name="picus" class="picture-src" 
                 id="wizardPicturePreview"
                 title="" height="50" width="50" style="position: absolute;
       z-index: 9;
       top:130px;
       right:460px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;"> 

      <h5 style="position: absolute;
       z-index: 9;
       height:30px;
       width:100;
       top:135px; 
       right:350px;
       color:white;
       text-align:center;
       margin-top: 5px;
       margin-left: 5px;" class="border border-danger rounded-pill bg-dark">
            <?php echo $pername;?>
      </h5>
      
      <button style="position: absolute;
       z-index: 9;
       height:auto;
       width:auto;
       top:135px; 
       text-align:center;
       right:50px;" class="btnComentar btn btn-danger"  data-toggle="modal">
        Agregar comentario
      </button>

      <script>
          $(".btnComentar").click(function() {
            window.location.href = "loginSU.php";
          });
      </script>
      <?php
      $query = $db->prepare("SELECT id_comentario, comentario, comentarios.id_usuario, id, foto_perfil, fecha FROM comentarios join usuarios on comentarios.id_usuario = usuarios.id_usuario WHERE id = '".$vide ."' ORDER BY id_comentario DESC");
      $query->execute();
      $data = $query->fetchAll();
      foreach ($data as $row):
        $i = $i + 150;
        $idcomm = $row['id_comentario'];
        $comentario = $row['comentario'];
        $iduscomm = $row['id_usuario'];
        $fotoperfcomm = $row['foto_perfil'];
        $fechadecom = $row['fecha'];
      ?>

      </div>
      <div style= "position: absolute; right:0px; top: 50px;" >
      <div style= "position: absolute; right:80px; top: <?php echo $i;?>px;" class="p-3 mb-2 bg-dark comentariox">
        <div class ="comment" style=" width:400px;
          height:80px;
          margin:10px auto;
          background:white;
          border-radius:5px;">
              <div class ="profıle-ımage" style=" float:left;
          width:60px;
          height:60px;
          margin:6px 0px 0px 6px;
          background:#148F77;
          border-radius:300px;">
           <img src="imgperfil\<?php echo $fotoperfcomm; ?>" class ="profıle-ımage" title="" height="50" width="50" style="float:left;
          width:60px;
          height:60px;
          margin:0px;
          background:#148F77;
          border-radius:300px;"> 
               
              </div>
              <div class ="username" style="  float:left;
          color:#212121;
          margin:15px 0px 0px 5px;
          padding:0px;"><?php echo $iduscomm; ?></div>
              <div class ="user-comment" style="margin:0px;
          padding:0px;">
                <p style=" color:#424242;
          margin:0px;
          padding:0px;
          position:relative;
          font-size:12px;
          top:35px;
          left:-36px;"><?php echo $comentario; ?></p>
                <div style ="clear:both;"></div>
                <span style= "  color:#9E9E9E;
          font-size:13px;
          margin:0px;
          padding:0px;
          position:relative;
          left:75px;
          top:-13px;"><?php echo $fechadecom; ?></span>
              </div>
      </div>
       
    </div> 
    <?php
    endforeach;
    ?>
    </div>


          <style>
              @import url('https://fonts.googleapis.com/css?family=Roboto');

          .comment .profıle-ımage:hover{
            opacity:0.6;
          }
          .comentariox + .comentariox:last-child{
            margin-top: 10px; 
          }

          .comment .username:hover{
            color:#757575;
          }


          .comment .user-comment span:hover{
            color:#616161;
          }

          #ds p:hover{
            cursor:pointer;
            opacity:1.0;
          }
          </style>
</div>
   
      
            </div>
 
            <div class='col-md-3' style="position: relative;">
              <label style="position: absolute;
     z-index: 9;
     top:110px;
     left:15%;
     color:white;
     margin-top: 5px;
     margin-left: 5px;" ><?php echo $nome;?></label>
     
        <video id= "player"#t=15
        style="cursor:pointer; position: absolute; top:75px; left: 15%; width: 750; height: 500;" src='videos\<?php echo $ubicacion; ?>#t=0.5' 
        preload="metadata" controls width='250px' height='200px'>
        
            <?php echo $pername;?>
      </h5>
       
                        <?php
            endforeach;
            ?>
             
            <?php

        }else{
            ?>
            <script>
                alert("Ha ocurrido un error!");
                window.location.href = "index.php";
            </script>
            <?php
        }

        ?>
        
     
    </body>
    <?php
}
}
?>
