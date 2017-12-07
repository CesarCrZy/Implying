<head>
      <link rel="stylesheet" href="css/bootstrap-1.css">
</head>
<body background="banner.jpg" style="text-align: -webkit-center;
    margin-top: 199px;background-position: center;background-size: 10%;">
  <?php
    session_start();
    session_destroy();
    $autenticado=false;
    if(isset($_POST["ingresar"])){
      $correo=$_POST["correo"];
      $password=$_POST["pass"];

      include "conexion.php";
      }
  ?>
    <?php
      if(!$autenticado){
    ?>
  <section id="login" style="display: inline-block;">
    <form class="navbar-form navbar-right" role="form" action="login.php" method="post" style="display: initial;">
      <div class="form-group">
        <input type="text" name="correo" placeholder="Correo" class="form-control">
      </div>
      <div class="form-group">
        <input type="password" name="pass" placeholder="Contraseña" class="form-control">
      </div>
      <button type="submit" name="ingresar" class="btn-sm btn-danger">Ingresar</button>
    </form>
  </section>
  <?php
      }
      else{ 
        session_start();
        $_SESSION["login"]=$correo;
        header("Location: http://localhost/Implying/Implying1.php");
        die();
          }
  ?>
</body>
