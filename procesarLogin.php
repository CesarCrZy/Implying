<?php
if(isset($_POST["enviar"])){
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    $mysqli = new mysqli("localhost", "root", "1998cesarelraso", "programacion web");
    $consulta = "SELECT * FROM usuarios";
    $resultado = $mysqli->query($consulta);
    
    while($fila=$resultado->fetch_assoc()){
        if($fila["correo"]==$correo && $fila["password"]==$password){
            $autenticado = true;
        }
    }
}
    
?>
<script>
    alert("Login exitoso, Seras redireccionado a la pagina principal");
</script>
<meta http-equiv="refresh" content=".0001; url=http://localhost/Proyecto/Implying1.php">