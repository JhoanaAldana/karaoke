<?php
    session_start();
    include('acceso_db.php');
?> 
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	    $perfil = mysql_query("SELECT * FROM usuarios WHERE usuario_id='".$_GET['id']."'") or die(mysql_error());
	    if(mysql_num_rows($perfil)) { // Comprobamos que exista el registro con la ID ingresada
	        $row = mysql_fetch_array($perfil);
	        $id = $row["usuario_id"];
	        $nick = $row["usuario_nombre"];
	        $email = $row["usuario_email"];
	        $freg = $row["usuario_freg"];
	?>
	        <strong>Nick:</strong> <?=$nick?><br />
	        <strong>Email:</strong> <?=$email?><br />
	        <strong>Registrado el:</strong> <?=$freg?><br />
	        <strong>URL del perfil:</strong> <a href="perfil.php?id=<?=$id?>">Click aquí</a><br />
	        <strong><a href="cambiar_contrasena.php">Cambiar contraseña</a></strong>
	<?php
	    }else {
	?>
	        <p>El perfil seleccionado no existe o ha sido eliminado.</p>
	<?php
	    }
	?> 
</body>
</html>