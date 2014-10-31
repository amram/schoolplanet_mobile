<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>School Planet</title>
<meta name="viewport" content="width-device-width, initial-scale=1" />
<!-- librerias css -->
<link href="css/jquery.mobile-1.4.4.min.css" rel="stylesheet">
<link href="css/jquery.mobile.theme-1.4.4.min.css" rel="stylesheet">
</head>

<body>

<div data-role="page" id="home" style="background:#FBDC04; background-image:url(http://50.62.9.206/~srealms/nuevageneracion/movil/back2.png)";>

	<div data-role="header" style="background:#009"><center>
    <img src="http://50.62.9.206/~srealms/nuevageneracion/logoX.png"  width="200" height="85" />
    </center>
	</div><!-- /header -->
<br /><br />
	<div role="main" class="ui-content">
		<center>
   		 <a href="#nr1"><img src="http://50.62.9.206/~srealms/nuevageneracion/movil/actividad.png" width="250" /></a><br /><br />
   		 <a href="#historial" id="verHistorial"><img src="http://50.62.9.206/~srealms/nuevageneracion/movil/historial.png" width="250" /></a><br /><br />
   		 <a href="#priv"><img src="http://50.62.9.206/~srealms/nuevageneracion/movil/mensajes.png" width="250" /></a><br /><br />
         <a href="#reg"><img src="http://50.62.9.206/~srealms/nuevageneracion/movil/cuenta.png" width="250" /></a>
		</center>
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed" data-theme="b">
		<span style="font-size:10pt;">Todos los derechos reservados &copy;</span>
        <a href="#nosotros" data-transition="slideup">Info</a>
	</div><!-- /footer -->
    
</div><!-- /page -->




<div data-role="page" id="nosotros" style="background:#009">

	<div data-role="header" style="background:#FBDC04">
		<h1>Colegio Nueva Generación</h1>
        <a href="#" data-rel="back">Atras</a>
	</div><!-- /header -->

	<div role="main" class="ui-content" style="background:#009">
		<p style="text-align:justify"><font size="-1" color="#FFFFFF"><strong>Como parte del proceso de transformación de la sociedad, estamos conscientes de que la educación es un factor determinante que proporciona a los alumnos una formación sólida para desarrollarse exitosamente en todos los ámbitos de la vida humana: familia, trabajo y sociedad.
Por ello que asumimos la responsabilidad de los resultados de aprendizaje de todos los alumnos, enfocando nuestros esfuerzos para contribuir al desarrollo de sus potencialidades, mejorando así la calidad de la experiencia formativa.</strong></font></p>
<p style="text-align:center"><img src="http://50.62.9.206/~srealms/nuevageneracion/nuevageneracion.PNG" width="243" height="162"/></p>
	</div><!-- /content -->

    
</div><!-- /page -->










<div data-role="page" id="nr1">

	<div data-role="header" style="background:#009">
		<h1><font color="#FFFFFF">Actividad</font></h1>
	</div>
	
    <div role="main" class="ui-content" style="background:#FBDC04; background-image:url(http://50.62.9.206/~srealms/nuevageneracion/movil/back.png)";><!-- /header -->
    <center>
  
		<object data="http://50.62.9.206/~srealms/nuevageneracion/actividad_movil.php?id_usuario=106" width="100%" height="500">
    Error: Comprueba tu conexión a internet.
</object>
        </center>
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed" data-theme="b">
		<span style="font-size:10pt;">Todos los derechos reservados &copy;</span>
        <a href="#nosotros" data-transition="slideup">Info</a>
	</div><!-- /footer -->
    
</div><!-- /page -->








<div data-role="page" id="nr2">

	<div data-role="header">
		<h1>Nueva Reserva</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<ul data-role="listview" data-inset="true">
        <li data-theme="b">Datos de reserva</li>
   		 <li>Habitaciones:
         	<select id="nrHab">
            	<option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            </li>
   		 <li>Personas:
          	<select id="nrPer">
            	<option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            </li>
   		 <li>Días:
          	<select id="nrDia">
            	<option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
         </li>
		</ul>
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed" data-theme="b">
		<div data-role="navbar" data-theme="b">
    		<ul>
        		<li><a href="#" data-rel="back" style="background-color:#aa0000;">Atrás</a></li>
        		<li><a href="#">Reservar</a></li>
    		</ul>
</div><!-- /navbar -->
	</div><!-- /footer -->
    
</div><!-- /page -->












<div data-role="page" id="historial">

	<div data-role="header">
		<h1>Historial</h1>
        <a href="#" data-rel="back">Atrás</a>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<table>
        	<thead>
            <tr>
        		<!--<th>Fecha</th>-->
                <th>Tipo</th>
                <th>Habitaciones</th>
                <th>Personas</th>
                <th>Días</th>
            </tr>
       		</thead>
            <tbody id="tbody">
      
            </tbody>
        </table>
	</div><!-- /content -->

	<div data-role="footer" data-position="fixed" data-theme="b">
		<div data-role="navbar" data-theme="b">
    		<ul>
        		<li><a href="#nosotros" data-icon="alert">Info</a></li>
        		<li><a href="#priv" data-icon="tag">Privacidad</a></li>
                <li><a href="#nr1" data-icon="plus">Reservar</a></li>
    		</ul>
</div><!-- /navbar -->
	</div><!-- /footer -->
    
</div><!-- /page -->






<div data-role="page" id="priv">

	<div data-role="header">
		<h1>Privacidad</h1>
        <a href="#" data-rel="back">Atras</a>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<p style="text-align:justify">¡Consiga su cuenta de WebEx y empiece ya mismo a organizar sus propias reuniones!
Ventajas:
Antes y después de su reunión, comparta su agenda, notas, archivos y comentarios de la reunión.
Cargue, cree y comparta archivos que sean accesibles desde cualquier lugar, y haga comentarios sobre las actividades.
Vea la disponibilidad de los contactos, envíe mensajes instantáneos e inicie reuniones instantáneamente a partir de sesiones de chat.</p>
	</div><!-- /content -->

    
</div><!-- /page -->








<div data-role="page" id="reg">

	<div data-role="header">
		<h1>Registro</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<ul data-role="listview">
        	<li data-theme="b">Datos de usuario</li>
            <li><input type="text" placeholder="Nombre" id="regName"></li>
            <li><input type="email" placeholder="Correo Electrónico" id="regMail"></li>
            <li><input type="tel" placeholder="Teléfono" id="regTel"></li>
            <li><a href="#" id="regTake">Tomar Foto</a></li>
            <li id="foto"></li>
            <li><a href="#" id="regSend" data-role="button" style="text-align:center;" data-theme="b">Registrar</a></li>
        </ul>
	</div><!-- /content -->

    
</div><!-- /page -->









<!-- librerias js -->
<script src="phonegap.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.mobile-1.4.4.min.js"></script>
<script src="js/actions.js"></script>
<!-- librerias Phonegap -->
<script src="js/API/capture.js"></script>
<script src="js/API/fileTransfer.js"></script>
<script src="js/API/network-info.js"></script>
<script src="js/API/websql.js"></script>

</body>
</html>
