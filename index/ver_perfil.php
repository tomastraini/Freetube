<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<link rel = "icon" href = "resources\267540453045211.webp" >
<?php include("config.php") ?>
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
      <title>Videos cargados</title>
      <link rel="icon" href="resources\267540453045211.ico">
      
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
              <a class="nav-link" href="">Sobre nosotros</a>
            </li>
      
          </ul>
          <button class="btn btn-outline-danger my-2 my-sm-0" onclick="location.href='cargar_video.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" style="position:absolute; top:12px; right:15px;">
              <i class="fa fa-upload" aria-hidden="true"></i>
          </button>
          
         
        </div>
      </nav>
      <center>
      
      
      
      <?php if(!empty($row["foto_perfil"])){
       
    $fot =  $row["foto_perfil"];
    ?>
    <div style="display: inline-block; width: 50; height:50; position:absolute; right:5; top: 5">
    <img src="imgperfil\<?php echo $fot;?>" id="imageDropdown" data-toggle="dropdown" name="picus" class="picture-src "  id="wizardPicturePreview" title="" width=25 height=-25>

          <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="imageDropdown">
              <a class="dropdown-item" style="cursor:pointer;" onclick="window.location.href='ver_perfil.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'">Videos cargados</a>
              <a class="dropdown-item" style="cursor:pointer;" onclick="window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'">Editar perfil</a>
              <a class="dropdown-item" href="inicio.php">Cerrar sesión</a>
          </ul>
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
<body style="background-color: rgba(0, 0, 0, 0.79); overflow-x: hidden;">
<button type="button" class="btn btn-danger"onclick="location.href='inicio.php'" style="position: absolute; top:10; left:10;">Cerrar sesión</button>



           
<style>
* {
   box-sizing: border-box;
}

.middle {
  margin: 20px auto;
}

.trash-can.tiny {
  margin-top: 100px;
 
}

.trash-can {
  box-sizing: border-box;
  width: 17px;
  height: 19px;
  position: relative;
  cursor: pointer;
}

.top {
  height: 3px;
  width: 100%;
  position: relative;
  top: -1px;
  
  -webkit-transition: all 100ms ease-out;
     -moz-transition: all 100ms ease-out;
       -o-transition: all 100ms ease-out;
          transition: all 100ms ease-out;
}

.top .handle {
  width: 11px;
  height: 6px;
  margin: 0 auto;
  position: relative;
  left: 0px;
  border-radius: 50% 50%;
  border: 2px solid #de1717;
}

.top .handle:after {
  content: "";
  display: block;
  width: 65%;
  height: 50%;
  position: relative;
  top: 25%;
  left: 17.5%;
  border-radius: 50% 50%;
  background: #FFF;
}

.top .base {
  height: 2px;
  position: relative;
  bottom: 2px;
  background: #de1717;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.body {
  width: 13px;
  height: 16px;
  position: relative;
  margin: 0 auto;
  border: 2px solid #de1717;
  background: #FFF;
}

.body .line {
  background: #de1717;
  position: absolute;
  height: 10px;
  width: 1px;
  left: 1px;
  top: 1px;
}

.body .line.second {
  left: 3.5px;
}

.body .line.third {
  left: 7px;
}


.trash-can:hover .top {
  transform: rotate(25deg) skew(0deg) translate(2px, -7px);
}

.bounce {  
  -webkit-animation-name: bounce;
     -moz-animation-name: bounce;
       -o-animation-name: bounce;
          animation-name: bounce;
  
  -webkit-animation-duration: 0.5s;
     -moz-animation-duration: 0.5s;
       -o-animation-duration: 0.5s;
          animation-duration: 0.5s;
}

@-webkit-keyframes bounce {
  0% {
    transform:translateX(0%) scale(2);
  }
 
  100% {
    transform:translateX(0%) scale(1);
    opacity: 0.5;
  }
}

</style>



<div class="container" style="position:relative; top:25%; left:-45%;">

    <div class="picture-container">
        <div class="picture">
            <?php if(!empty($row["foto_perfil"])){
            $fot =  $row["foto_perfil"];
            ?>
            <img src="imgperfil\<?php echo $fot;?>" name="picus" style="width:100%;height:100%;" class="picture-src" id="wizardPicturePreview" title="">
              
            <?php
            }else{
            ?>
               <img src="imgperfil\default.png" name="picus" class="picture-src" id="wizardPicturePreview" title=""> 
            <?php
            }
            
?>
        </div>
    </div>
</div>


<h3 class="mt-5 shadow" style="border-left:2px solid #464646; height:100%; top:71; left:150px; position:absolute;"> </h3>
<h3 style="position:relative; top:155; left:30; color:white;"><?php echo $us;?></h3>
<div style="position:relative;">
<div class="container" style="left: 25;top:-65; position:absolute;">
<div class="row">
<h3 class="mt-5"> </h3>
<?php
      $query = $db->prepare("SELECT id, nombreus, apellidous, foto_perfil, nombre, ubicacion, usuarios.id_usuario FROM videos join usuarios on usuarios.id_usuario = videos.id_usuario where videos.id_usuario ='". $us . "'");
      $query->execute();
      $data = $query->fetchAll();
          foreach ($data as $rowx):
            $aidxus = $rowx['id_usuario'];
              $ubicacion = $rowx['ubicacion'];
              $nome = $rowx['nombre'];
              $aidx = $rowx['id'];
              $fotpervid = $rowx['foto_perfil'];
                 ?>
                <style>
    
                </style>
                
                <div class='col-md-3' style="position: relative;">

                <div style="display:inline-block; position:relative; left: 145px;">

                <?php
              if(strlen($nome)< 20){
                ?>
                    <label style="position: relative;
        z-index: 9;
       bottom:-217px;
       left:55px;
       color:white;
       line-height: 15px; 
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
       left:55px;
       color:white;
       margin-top: 5px;
       margin-left: 5px;" ><?php echo $aidxus; ?></label>

                <input type="hidden" value="<?php echo $aidx; ?>">
               
                            <video id= "player" onmousedown="WhichButton<?php echo $aidx; ?>(event)" onclick="window.location.href='ver_video.php?username=<?php echo $us; ?>&kak=<?php echo $kon; ?>&vid=<?php echo $aidx; ?>'" style="cursor:pointer; position: relative; top:-1%;" src='videos\<?php echo $ubicacion; ?>#t=15' preload="metadata" width='250px' height='200px'>
                            </video>
                            <img src="imgperfil\<?php echo $fotpervid; ?>" name="picus" class="picture-src" 
                            onclick="window.location.href='user_profile.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>'" id="wizardPicturePreview"
                            title="" style="position: relative;
                  bottom:-22px;
                  left:10px;
                  color:white;
                  height:50px;
                  cursor:pointer;
                  width:50px;
                  margin-top: 5px;
                  margin-left: -260px;"> 
                  
                </div>
               
                <div style="z-index: 9; position: absolute;">
<button type="button" class="btn btn-danger"onclick="window.location.href='borr_video.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>&vid=<?php echo $aidx;?>'" style="
                cursor: pointer;
                  z-index: 30;
                  padding: 0;
                  color:white;
                  
                  height:auto;
                  width:75px;
                  margin-top: -20px;
                  margin-left: 320px;">Borrar video</button>
</div>
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
                 
              
              
  endforeach;
?>
</div>
</div>
</div>
</div>



<style>
    /*Profile Pic Start*/
.picture-container{
    position: relative;
    cursor: default;
    text-align: center;
}
.picture{
    width: 106px;
    height: 106px;
    background-color: #999999;
    border: 4px solid #CCCCCC;
    color: #FFFFFF;
    border-radius: 50%;
    margin: 2px auto;
    overflow: hidden;
    left: 50$;
    top: 50%;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
}
.picture:hover{
    border-color: #de1717;
}
.content.ct-wizard-green .picture:hover{
    border-color: #05ae0e;
}
.content.ct-wizard-blue .picture:hover{
    border-color: #3472f7;
}
.content.ct-wizard-orange .picture:hover{
    border-color: #ff9500;
}
.content.ct-wizard-red .picture:hover{
    border-color: #ff3b30;
}
.picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 50%;
    width: 50%;
    left: 50$;
    opacity: 0 !important;
    position: absolute;
    cursor:pointer;
    top: 50%;
    
    
}

.picture-src{
    width: 100%;
    
}
/*Profile Pic End*/
</style>
<script>
    $(document).ready(function(){
// Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
</DIV>


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
    <script>
        alert("No exite ese usuario!");
        window.location.href="inicio.php";
    </script>
    <?php
}
  ?>
