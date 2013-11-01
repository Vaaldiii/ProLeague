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
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Pro League</title>
    <meta charset="utf-8">
    <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>	
    <link href="css/bootstrap-combined.min.css" rel="stylesheet" type='text/css'>
    <script src="js/jquery-1.10.2.min.js"></script>
  </head>
  <body>
	  <div class="content">
	  	<div class="span4"></div>
	  	<div class="span8"></div>
	  </div>
  </body>
</html>
<?php mysql_close($dhb); ?>