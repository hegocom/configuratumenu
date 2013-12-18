<!DOCTYPE html>
<html lang="es">
<head>
	<title>Configura tu menu</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta charset="UTF-8">

	<!-- Insertamos el CSS -->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile-1.3.0-rc.1.min.css" />

	<!-- Insertamos jQuery y jQuery Mobile -->
	<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.0-rc.1/jquery.mobile-1.3.0-rc.1.min.js"></script>


    <!--<script src="jquery.geturlparam.js"></script>-->

<script>
//parametro = sessionStorage.parametro; //para obtenerlos y guardarlos en una variable

//sessionStorage.removeItem(parametro1); // par

//console.log(parametro);

</script>
<?php 

    $nombre = $_GET["nombre"];
    $menu = $_GET["menu"];

?>
</head>
<body>

    <div rata-role="page">

		<header data-role="header">
        <h1>CONFIGURA TU MENÚ</h1>
        </header>

        <div rata-role="content">
        <div>Tu menu tiene los siguientes platos: <?php echo $menu; ?></div>

        <div><?php echo $nombre; ?></div>
        
        <div>Al ser un programa de muestra, no hace falta que veas tus datos de nuevo. </div>  
        <div>El programa enviaría toda la información a tu e-mail. </div>  

		<div data-role="footer">
        <h4>Desarrollado por Hego Comunicaciones</h4>
        </div>
	</div>

</body>
</html>
