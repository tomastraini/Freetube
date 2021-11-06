<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<link rel = "icon" href = "resources\267540453045211.webp" >

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
      <title>Menú principal</title>
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
     
<form action="cambiar_perfil.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>" method="POST" enctype="multipart/form-data" style="position:absolute; top:130; left:20%;width: 50%;min-height: 550px;" class="shadow border ">


<div class="container">
    <div class="picture-container">
        <div class="picture">
            <?php if(!empty($row["foto_perfil"])){
            $fot =  $row["foto_perfil"];
            ?>
            <img src="imgperfil\<?php echo $fot;?>" name="picus" class="picture-src" id="wizardPicturePreview" title="">
              
            <?php
            }else{
            ?>
               <img src="imgperfil\default.png" name="picus" class="picture-src" id="wizardPicturePreview" title=""> 
            <?php
            }
            
            ?>
            
      
<h6 class="border border-danger rounded-pill bg-dark" style="color:white; position:absolute; width:100%; left: 0px; top: 120px; text-align: center; cursor:default;">Seleccionar foto de perfil</h6>
            <div>
            
           
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



<script>
$('.tiny').on('click', function() {
  var _this = this;
  
  $(this).addClass('bounce');
  setTimeout(function() {
    $(_this).removeClass('bounce');  
  }, 500);
});
</script>
            </div>
 
            <input type="file" id="wizard-picture" value= "imgperfil\default.png" class="" name="fotora">
            
        </div>
         
    </div>
</div>
<input name="cid" value="<?php echo $us; ?>" type="hidden" style="position:absolute; width:90%; left: 30px; top: 500px; text-align: center;">

<h6 class="border border-danger rounded-pill bg-dark" style="color:white; position:absolute; width:90%; left: 30; top:150; text-align: center;" >Cambiar nombre</h6>
<input name="cnombre" value = "<?php echo $row["nombreus"] ?>" type="text" style="position:absolute; width:90%; left: 30; top: 175; text-align: center;">

<h6 class="border border-danger rounded-pill bg-dark" style="color:white; position:absolute; width:90%; left: 30px; top:220px; text-align: center;" >Cambiar apellido</h6>
<input name="cape" value = "<?php echo $row["apellidous"] ?>" type="text" style="position:absolute; width:90%; left: 30px; top: 245px; text-align: center;">

<h6 class="border border-danger rounded-pill bg-dark" style="color:white; position:absolute; width:90%; left: 30px; top:290px; text-align: center;" >Nueva contraseña</h6>
<input name="ncontra"  type="password" style="position:absolute; width:90%; left: 30px; top: 315px; text-align: center;">

<h6 class="border border-danger rounded-pill bg-dark" style="color:white; position:absolute; width:90%; left: 30px; top:360px; text-align: center;" >Contraseña actual</h6>
<input name="cncontra"  type="password" style="position:absolute; width:90%; left: 30px; top: 385px; text-align: center;">

<h6 class="border border-danger rounded-pill bg-dark" style="color:white; position:absolute; width:90%; left: 30px; top:430px; text-align: center;" >Cambiar correo</h6>
<input name="ccorr" value = "<?php echo $row["correo"] ?>" type="text" style="position:absolute; width:90%; left: 30px; top: 455px; text-align: center;">

<button type="submit" name="cargardatos" class="btn btn-danger" style="position:absolute; bottom:15px; right:36px; width: 90px; height:40px; text-align:center;">Modificar</button>

</form>

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
<a class="btn btn-danger" 
style="text-align:center;position:absolute; right: 410px; top:150px; width:100; height:60; color: white;"
 href="borr_fotoperf.php?username=<?php echo $us;?>&kak=<?php echo $kon;?>">Borrar foto!</a>
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
