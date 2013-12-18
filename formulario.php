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
parametro = sessionStorage.parametro; //para obtenerlos y guardarlos en una variable

//sessionStorage.removeItem(parametro1); // par

//console.log(parametro);

</script>

</head>
<body>

    <div rata-role="page">

		<header data-role="header">
        <h1>CONFIGURA TU MENÚ</h1>
        </header>

        <div rata-role="content">
        <div>Tu menu tiene los siguientes platos: <script>document.write(parametro);</script></div>


          <form method="get" action="formulario2.php">

            <fieldset data-role="fieldcontain"> 
            	<legend>Rellena el formulario con tus datos.</legend>
                <input type="hidden" name="menu" id="menu" value="<script>document.write(parametro);</script>"/>
                <label for="Nombre">Nombre:<br></label>
                <input type="text" name="nombre" id="nombre" placeholder="nombre"/>
                <label for="Apellidos">Apellidos:<br></label>
                <input type="text" name="apellidos" id="apellidos" placeholder="apellidos"/>
                <label for="Teléfono">Teléfono:<br></label>
                <input type="number" name="telefono" id="telefono" placeholder="telefono"/>
                <label for="Dirección">Dirección:<br></label>
                <input type="text" name="direccion" id="direccion" placeholder="direccion"/>
                <label for="Código Postal">Código Postal:<br></label>
                <input type="text" name="cp" id="cp" placeholder="cp"/>
                <label for="email">E-mail:<br> </label>
                <input type="email" name="email" id="email" value="" placeholder="@"/>
            </fieldset>

            <fieldset data-role="fieldcontaint">
                <label for="fecha">Fecha:<br> </label>
                <input type="text" name="Fecha" id="Fecha" value="" placeholder="Fecha"/>
                <label for="hora">Hora: <br></label>
                <input type="text" name="hora" id="hora" value="" placeholder="Hora"/>
            </fieldset>

            <fieldset data-role="controlgroup">
                <legend>Selecciona una opción:</legend>
                <label for="rb1">Particular<br></label>
                <input type="radio" name="rb" id="rb1" value="rb1"/>
                <label for="rb2">Empresa<br></label>
                <input type="radio" name="rb" id="rb2" value="rb2" checked="checked"/>
            </fieldset>

             <fieldset data-role="fieldcontain">
                <label for="select1">Evento:<br></label>
                <select name="select1" id="select1">
                    <option value="value1">Comida de empresa<br></option>
                    <option value="value2" disabled="disabled">Boda<br></option>
                    <option value="value3">Comunión<br></option>
                </select>
            </fieldset>

            <fieldset data-role="fieldcontain">
                <label for="select1">Observaciones:<br></label>
                <textarea name="mensaje" id="mensaje"></textarea>
            </fieldset>


            <div data-role="fieldcontain">
                <input type="submit" name="submit" value="Enviar" />
            </div>     
        </form>

		<div data-role="footer">
        <h4>Desarrollado por Hego Comunicaciones</h4>
        </div>
	</div>

</body>
</html>
