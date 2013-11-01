<?php 
include 'facebook.php';

//Coneccion a base de datos

include 'conect.php';

//Se llama a la información del usuario
$user_profile = $facebook->api('/me');
$uid = $facebook->getUser();
$birthday = $user_profile['birthday'];

//Se guarga la informacion de usuario en variables de Sesión
if(!isset($_SESSION['user_id'])){
	//$_SESSION['user_id']= $uid;
}
if(!isset($_SESSION['user_name'])){
	//$_SESSION['user_name']= $user_profile['name'];
} 

//Si visita la pagina por primera vez, inscribir a la base de datos

//$get_user = mysql_query("SELECT count(*) FROM USUARIOS WHERE ID = $uid");
//while($row = mysql_fetch_array($get_user)){
	//if($row['count(*)'] == 0){
	//	$user = $_SESSION['user_name'];
	//	$create_user = mysql_query("INSERT INTO USUARIOS VALUES ($uid, '$user', '$birthday' , '')");
		//Mostrar instrucciones
	//}
//}
// ‹ › < >
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Pro League</title>
    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>	
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type='text/css'>
    <link href="css/index.css" rel="stylesheet" type='text/css'>
  </head>
  <body>
	  <div class="content-container">
	  	<div class="menu">Menu</div>
	  	<div class="slide"><i class="icon-chevron-left"></i></div>
	  	<div class="content">Contenido</div>
	  	<div class="span4"></div>
	  </div>
	  <script src="js/jquery-1.10.2.min.js"></script>
	  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php mysql_close($dhb); ?>