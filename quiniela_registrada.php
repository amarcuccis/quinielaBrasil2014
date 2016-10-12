<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="ISO-8859-1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="fav.ico" rel='shortcut icon' type='image/x-icon'/>
	<link href="fav.ico" rel='icon' type='image/x-icon'/>

    <title>Quiniela Registrada | Quiniela Brasil 2014 - Country Club M&eacute;rida</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
	
<link href="css/estilos.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">
  
  <?php


include ('config.php');

$nombre_c = $_POST['nombre_c'];
$cedula_c = $_POST['cedula_c'];
$coment_r = $_POST['coment_r'];
$email_c = $_POST['email_c'];
$telefono_c = $_POST['telefono_c'];
$pais_c = $_POST['pais_c'];
$fecha_s_r = $_POST['fecha_s_r'];
$hora_s_r = $_POST['hora_s_r'];
$fecha_e_r = $_POST['fecha_e_r'];
$hora_e_r = $_POST['hora_e_r'];
$codigo_v = $_POST['codigo_v'];

$estado_r='SR';

if (!isset($_POST['portabebe_r'])){
	$portabebe_r='No';
}
else{
	$portabebe_r='Si';
}
if (!isset($_POST['gps_r'])){
	$gps_r='No';
}
else{
	$gps_r='Si';
}

if ($codigo_v=='1') {
	$precio_r='2490';
	$tipo_v='RUS';
}
if ($codigo_v=='2'){
	$tipo_v='CS';
	$precio_r='1098';
}
if ($codigo_v=='3' or $codigo_v=='5'){
	$precio_r='1036';
	$tipo_v='CA';
}
if ($codigo_v=='4' or $codigo_v=='6'){
	$precio_r='1098';
	$tipo_v='SA';
}

$link->query("INSERT INTO cliente (nombre_c,cedula_c,email_c,telefono_c,pais_c) VALUES ('$nombre_c','$cedula_c','$email_c','$telefono_c','$pais_c')");

$link->query("INSERT INTO reserva (cedula_c,codigo_v,fecha_e_r,fecha_s_r,hora_e_r,hora_s_r,portabebe_r,gps_r,coment_r,precio_r,estado_r) VALUES ('$cedula_c','$codigo_v','$fecha_e_r','$fecha_s_r','$hora_e_r','$hora_s_r','$portabebe_r','$gps_r','$coment_r','$precio_r','$estado_r')");

printf ("La reservación fue registrada con éxito bajo el código <strong> %d </strong>. Por favor guarde éste número para que realice sus consultas en el futuro.\n", mysqli_insert_id($link));

echo "</br>";


//}
?>
  

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Quiniela Mundial Brasil 2014 - Country Club Mérida</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="miquiniela.html">Mi Quiniela</a></li>
            <li><a href="reglas.html" >Reglas</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main"><!-- Main jumbotron for a primary marketing message or call to action -->
	  
	  <h1><center><b><img src="image/header.jpg" style="border:none; padding-top: 50px; background:#fff;"/>Sistema de Quiniela Brasil 2014 del Country Club Mérida</b></center></h1></br>
s
<div id="formulario">
<h2>Quiniela Registrada<img src="image/check.png" width="80" height="80"></h2>
<p>&iexcl;Tu Quiniela Mundial Brasil 2014 ha sido registrada en el sistema con &eacute;xito!</p>
<p>Tu n&uacute;mero de Quiniela es:</p>
<p><strong>IMPORTANTE:</strong> Guarda este n&uacute;mero de Quiniela para que puedas consultar tus predicciones con los resultados reales en el transcurso del Mundial. A tu email hemos enviado tambi&eacute;n tu n&uacute;mero de Quiniela y la copia de todas las predicciones que guardaste.</p>
<p><a href="registrar.html" class="btn btn-primary btn-lg" role="button" style="width:50%; margin: 0px auto;left: 25%; position:relative;">Imprime tu comprobante</a></p>



</div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
