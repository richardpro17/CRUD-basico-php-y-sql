<!DOCTYPE html>
<html>
<head>
	<title>FORMULARIO DE DAR DE ALTA DE INFORMACION</title>
	<meta charset="utf-8">
	<meta name="author" content="Ricardo Montalvo">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="montalvo_styles.css">
	
</head>
<body style="background-repeat: repeat-y;">
	<header>
		ADMINISTRADOR DE USUARIOS TELEFONICOS
	</header>
	<nav>
		<ul>
			<li><a href='index.html'><img id="img1" src='https://i.postimg.cc/Px4DgfGb/Inicio.png' border='0' alt='Inicio'/></a></li>
			<li><a href='form_consult.php'><img  id="img2" src='https://i.postimg.cc/0yYyWW1D/agregar.png' border='0' alt='agregar'/></a></li>
			<li><a href='menu_baja.html'><img  id="img3" src='https://i.postimg.cc/q7B68V6z/agregar-1.png' border='0' alt='baja'/></a></li>
			<li><a href='menu_update.html'><img   id="img4" src='https://i.postimg.cc/BnSnz5Sz/agregar-2.png' border='0' alt='modificar'/></a></li>
			<li><a href='menu_consultas.php'><img  id="img5" src='https://i.postimg.cc/qBs80cKL/agregar-3.png' border='0' alt='consulta'/></a></li>
		</ul>
	</nav>
	<section id="section-agregar">
		<!--Ingreso de datos del formulario-->
		<form action="guardar.php" method="POST" class="formulario">
			<label>A continuacion ingrese los datos para llenar el registro de un usuario, asegurese de llenar todo correctamente.</label><br>
			<label>Usuario: </label><input pattern="[a-zA-Z0-9]+" required type="text" name="usuario"><br>
			<label>Nombre: </label><input pattern="[A-Za-z]+" required type="text" name="nombre"><br>
			<label>Sexo: </label>
			<input required pattern="[ H,M,h,m ]+" type="text" name="sexo"><br>
			<label>Nivel: </label>
			<select class="select_home" required name="nivel">
				<option class="option_home"value="1">Nivel 1</option>
				<option class="option_home" value="2">Nivel 2</option>
				<option class="option_home" value="3">Nivel 3</option>
			</select><br>


			<label>Email: </label>
			<input required  type="text" name="email"><br>
			<label>Telefono: </label>
			<input required  type="text" name="telefono"><br>
			<label>Marca: </label>
			<input  required pattern="[A-Za-z]+" type="text" name="marca"><br>
			<label>Compañia: </label>
			<select class="select_compañia" required name="compañia">
				<option class="option_compañia"value="AT&T">AT&T</option>
				<option class="option_compañia" value="AXEL">AXEL</option>
				<option class="option_compañia" value="CLARO">CLARO</option>
				<option class="option_compañia" value="IUSACELL">IUSACELL</option>
				<option class="option_compañia" value="MOVISTAR">MOVISTAR</option>
				<option class="option_compañia" value="NEXTEL">NEXTEL</option>
				<option class="option_compañia" value="TELCEL">TELCEL</option>
				<option class="option_compañia" value="UNEFON">UNEFON</option>
			</select><br>

			<label>Saldo: </label>
			<input type="number" name="saldo"><br>
			<label>Activo: </label>
			<span id="n1">SI</span>
			<input type="radio" name="activo" value="1">
			<span id="n0">NO</span>
			<input type="radio" name="activo" value="0">

			<input required type="submit" name="submit">
		</form>




	</section>
	<footer>
		<a href='menu_consultas.php'><img  id="img6" src='https://i.postimg.cc/Qthmp6Gf/github-1000-500-px.png' border='0' alt='github'/></a>
		<img id="img7" src='https://i.postimg.cc/d3nx7bhR/sql-1000-500-px.png' border='0' alt='Inicio'/>
		<span>PHP "MONTALVO": Innovacion a su alcanze.&#169;<span>
	</footer>
</body>

<script type="text/javascript">
	if (window.history.replaceState){
	console.log("Probar");
	window.history.replaceState(null, null, window.location.href);
}
</script>
</html>