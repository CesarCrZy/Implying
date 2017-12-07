<?php
if(isset($_POST["registrar"])){
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $password = $_POST["pass"];

    $mysqli = new mysqli("localhost", "root", "1998cesarelraso", "programacion web");
    $consulta = "INSERT INTO usuarios(nombre,correo,password) VALUES ('$nombre','$correo','$password')";

    $resultado = $mysqli->query($consulta);


}
    
?>
<script>
    var mensaje = confirm("Registro exitoso"); 
    alert("Seras redireccionado a la pagina principal");
</script>
<meta http-equiv="refresh" content=".0001; url=http://localhost/Implying/Implying.php">


