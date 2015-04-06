 <?php
    session_start();
    include('acceso_db.php'); // incluímos los datos de acceso a la BD
    // comprobamos que se haya iniciado la sesión
    if(isset($_SESSION['usuario_nombre'])) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	Hola <?=$_SESSION['usuario_nombre']?>, esta es una página restringida
</body>
</html>
<?php
    }else {
        echo "Estás accediendo a una página restringida, para ver su contenido debes estar registrado.<br />
        <a href='acceso.php'>Ingresar</a> / <a href='registro.php'>Regitrarme</a>";
    }
?> 