<?php

include "facebook-php-sdk-master/src/facebook.php";

$config = array();
$config['appId'] = '128704873995378'; // Acá debe ir el APP ID de la aplicación
$config['secret'] = '2ceac4415ae6ca72b039463bc1b4e2ce'; // Acá debe ir el App secret
$config['fileUpload'] = false; // optional

if($config['appId'] === 'APP ID' || $config['secret'] === 'APP secret') {
	die("<h2>Error</h2><p>No se ha configurado la aplicaci&oacute;n. Verifique los valores de APP ID y App secret en el archivo facebook.php de su aplicaci&oacute;n.</p>");
}

$facebook = new Facebook($config);

$user = $facebook->getUser();

if(!$user) {
?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
	<head>
		<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=UTF-8">
	</head>
  <body>
      <h2>Bienvenido a la aplicación</h2>
      <p>Para instalar la aplicación debes seguir estos simples pasos:</p>
      <h3>Primero</h3>
      <p>Inicia la instalación con el botón:</p>
      <fb:login-button></fb:login-button>
      <h3>Segundo</h3>
      <p>Haz clic en "Okay" en la ventana que aparecerá.<br><img src="instalar.png"></p>
      <h3>Tercero</h3>
      <p><a href="index.php">Ingresa a la aplicación</a></p>
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId: '<?php echo $facebook->getAppID() ?>',
          cookie: true,
          xfbml: true,
          oauth: true
        });
        /* FB.Event.subscribe('auth.login', function(response) {
          window.location.reload();
        });
        FB.Event.subscribe('auth.logout', function(response) {
          window.location.reload();
        }); */
      };
      (function() {
        var e = document.createElement('script'); e.async = true;
        e.src = document.location.protocol +
          '//connect.facebook.net/en_US/all.js';
        document.getElementById('fb-root').appendChild(e);
      }());
    </script>
</body>
</html>
<?php die(); } ?>