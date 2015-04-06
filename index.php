<?php
    session_start();
    include('acceso_db.php');
?> 
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido Administrador</title>
<!-- Import materialize.css-->
<link rel="stylesheet" type="text/css" href="assets/css/materialize.css" media="screen,projection"/>
<link rel="stylesheet" type="text/css" href="assets/css/estilos.css">  
<!--Let browser know website is optimized for mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no-"/>
</head>
<body>
    <!-- Menu de navegación-->
	 <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">ACISUM.com</a>
        <ul class="right hide-on-med-and-down">
          <li>
          <?php
if(isset($_SESSION['usuario_nombre'])) {
	?>
Bienvenido: <a href="perfil.php?id=<?=$_SESSION['usuario_id']?>"><strong><?=$_SESSION['usuario_nombre']?></strong></a><br/>
	<?php
	?>
	<?php
	    }
	?>    </li>
          <li><a href="registro.php">Nuevo usuario</a></li>
        <li><a href="logout.php">Cerrar sesión</a></li>
          </ul>
      </div>
    </nav>
  </div>
<!-- Termina codigo de menu de navegación-->
<!--Inicia codigo de lista de reproducción-->
<div class="contenedor" id="contenedor">
  <!-- Buscador -->
<input type="text" id="bus" name="bus" placeholder="Escribe tu canción" onkeyup="loadXMLDoc()" required />
<input type="submit" value="AGREGAR" id="no-estilo" class="waves-effect waves-light btn-large" id="btnagregar">
<div id="myDiv"></div>
<!-- Lista -->

    
    

</div>
<!--Reproductor-->
 
<script type="text/javascript" src="assets/js/jquery-2.1.3.js"></script>
<script type="text/javascript" src="assets/js/effects.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/ajax.js"></script>
</body>
</html>
