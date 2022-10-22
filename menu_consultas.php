<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Ricardo Montalvo">
	<link rel="stylesheet" type="text/css" href="montalvo_styles.css">
	<title>MENU DE CONSULTAS</title>
</head>
<body>
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
	<?php

	//Conexion a la base de datos
$user='root';
$db='pruebarp';
$host='localhost';
$password="";

$connect = mysqli_connect($host,$user,$password,$db);
if(!$connect){
	echo '<h2>Error al conectar la base de datos pro, no se realizo de forma correcta</h2>';
}else{
	echo '<h2>Se realizo la conexion de forma correcta que PRO</h2>';
}
?>


	<h2 style="text-align: center;font-size: 3rem;background: rgba(0, 0, 0, 0.6);">MENU DE CONSULTAS DE USUARIOS</h2>
	

<section style="height: auto;" id="section-agregar">
	<center><h3 style="font-size: 18px;" id="h3-title">SELECCIONE LA CONSULTA QUE DESEE EJECUTAR</h3></center>
	<form class="formulario" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
		<label>SELECCIONE FILTRO DE CONSULTA:</label>

		<input type="checkbox" name="toda_tbl" value="toda_tbl"> CONSULTA GENERAL<br>
		<input type="checkbox" name="usuario_tbl" value="usuario_tbl"> CONSULTAR USUARIOS<br>
		<input type="checkbox" name="saldo_tbl" value="saldo_tbl"> CONSULTAR SALDO MAYOR A 100<br>
		<br>
		<label>Compañia: </label><br>

				<input type="checkbox" name="AT&T" value="AT&T">AT&T<br>
				<input type="checkbox" name="AXEL" value="AXEL">AXEL<br>
				<input type="checkbox" name="CLARO" value="CLARO">CLARO<br>
				<input type="checkbox" name="IUSACELL" value="IUSACELL">IUSACELL<br>
				<input type="checkbox" name="NEXTEL" value="NEXTEL">NEXTEL<br>
				<input type="checkbox" name="TELCEL" value="TELCEL">TELCEL<br>
				<input type="checkbox" name="UNEFON" value="UNEFON">UNEFON<br>
				<br>

		<label>ESTADO: </label><br>
			<input type="checkbox" name="activo" value="activo">Activo<br>
			<input type="checkbox" name="inactivo" value="inactivo">Inactivo<br>

		<br><input type="submit" value="MOSTRAR" name="MOSTRAR">
	</form>

<?php

error_reporting(E_ERROR | E_PARSE);
//evaluacion de todos
if($_POST['toda_tbl']){
	$toda_tbl= "SELECT * FROM tbl_usuario";
	$resultado_toda_tbl=mysqli_query($connect,$toda_tbl);
	echo "<center><div id='table'>
				<table id='consult-tbl'>
				<tr id='tr_header'>
    				<th>IDX</th>
    				<th>Usuario</th>
    				<th>Nombre</th>
    				<th>Sexo</th>
    				<th>Nivel</th>
    				<th>Email</th>
   	 				<th>Telefono</th>
    				<th>Marca</th>
    				<th>Compañia</th>
    				<th>Saldo</th>
    				<th>Activo</th>
  				</tr>";
				while ($fila_toda_tbl=mysqli_fetch_row($resultado_toda_tbl)) {
				//desplegar los registros
				echo '<tr>
					<td id="td_id">'.$fila_toda_tbl[0] . " "."</td>
					<td>".$fila_toda_tbl[1] . " "."</td>
					<td>".$fila_toda_tbl[2] . " "."</td>
					<td>".$fila_toda_tbl[3] . " "."</td>
					<td>".$fila_toda_tbl[4] . " "."</td>
					<td>".$fila_toda_tbl[5] . " "."</td>
					<td>".$fila_toda_tbl[6] . " "."</td>
					<td>".$fila_toda_tbl[7] . " "."</td>
					<td>".$fila_toda_tbl[8] . " "."</td>
					<td>".$fila_toda_tbl[9] . " "."</td>
					<td>".$fila_toda_tbl[10] . " "."</td>
				</tr>";
				}
				echo "</table></div></center>";
				echo "<br>";

}

if($_POST['usuario_tbl']){
	$usuario_tbl= "SELECT idx,usuario from tbl_usuario";
	$resultado_usuario_tbl=mysqli_query($connect,$usuario_tbl);
	echo "<center><div id='table'>
				<table id='consult-tbl'>
				<tr id='tr_header'>
    				<th>IDX</th>
    				<th>Usuario</th>
  				</tr>";
				while ($fila_usuario_tbl=mysqli_fetch_assoc($resultado_usuario_tbl)) {
				//desplegar los registros
				echo '<tr>
					<td id="td_id">'.$fila_usuario_tbl["idx"] . " "."</td>
					<td>".$fila_usuario_tbl["usuario"] . " "."</td>
					
				</tr>";
				}
				echo "</table></div></center>";
				echo "<br>";

}

if($_POST['saldo_tbl']){
	$saldo_tbl="SELECT usuario,saldo from tbl_usuario WHERE saldo >= 100";
	$resultado_saldo_tbl=mysqli_query($connect,$saldo_tbl);
	echo "<center><div id='table'>
				<table id='consult-tbl'>
				<tr id='tr_header'>
    				<th>Usuario</th>
    				<th>Saldo</th>
  				</tr>";
				while ($fila_saldo_tbl=mysqli_fetch_assoc($resultado_saldo_tbl)) {
				//desplegar los registros
				echo '<tr>
					<td id="td_id">'.$fila_saldo_tbl["usuario"] . " "."</td>
					<td>".$fila_saldo_tbl["saldo"] . " "."</td>
					
				</tr>";
				}
				echo "</table></div></center>";
				echo "<br>";
}

if($_POST['activo']){
	$estado_activo="SELECT usuario,activo from tbl_usuario WHERE activo=1";
	$resultado_estado_activo=mysqli_query($connect,$estado_activo);
	echo "<center><div id='table'>
				<table id='consult-tbl'>
				<tr id='tr_header'>
    				<th>Usuario</th>
    				<th>Estado Activo</th>
  				</tr>";
				while ($fila_estado_activo=mysqli_fetch_row($resultado_estado_activo)) {
				//desplegar los registros
				echo '<tr>
					<td id="td_id">'.$fila_estado_activo[0] . " "."</td>
					<td>".$fila_estado_activo[1] . " "."</td>
					
				</tr>";
				}
				echo "</table></div></center>";
				echo "<br>";
}

if($_POST['inactivo']){
	$estado_inactivo="SELECT usuario,activo from tbl_usuario WHERE activo=0";
	$resultado_estado_inactivo=mysqli_query($connect,$estado_inactivo);
	echo "<center><div id='table'>
				<table id='consult-tbl'>
				<tr id='tr_header'>
    				<th>Usuario</th>
    				<th>Estado inactivo</th>
  				</tr>";
				while ($fila_estado_inactivo=mysqli_fetch_row($resultado_estado_inactivo)) {
				//desplegar los registros
				echo '<tr>
					<td id="td_id">'.$fila_estado_inactivo[0] . " "."</td>
					<td>".$fila_estado_inactivo[1] . " "."</td>
					
				</tr>";
				}
				echo "</table></div></center>";
				echo "<br>";
}

if($_POST['AT&T']){
	$atit="SELECT compañia,usuario FROM tbl_usuario WHERE compañia='AT&T'";
	$resultado_atit=mysqli_query($connect,$atit);
	echo "<center><div id='table'>
				<table id='consult-tbl'>
				<tr id='tr_header'>
    				<th>Compañia</th>
    				<th>Usuario</th>
  				</tr>";
				while ($fila_atit=mysqli_fetch_row($resultado_atit)) {
				//desplegar los registros
				echo '<tr>
					<td id="td_id">'.$fila_atit[0] . " "."</td>
					<td>".$fila_atit[1] . " "."</td>
					
				</tr>";
				}
				echo "</table></div></center>";
				echo "<br>";
}
if($_POST['AXEL']){
	$axel="SELECT compañia,usuario FROM tbl_usuario WHERE compañia='AXEL'";
	$resultado_axel=mysqli_query($connect,$axel);
	echo "<center><div id='table'>
				<table id='consult-tbl'>
				<tr id='tr_header'>
    				<th>Compañia</th>
    				<th>Usuario</th>
  				</tr>";
				while ($fila_axel=mysqli_fetch_row($resultado_axel)) {
				//desplegar los registros
				echo '<tr>
					<td id="td_id">'.$fila_axel[0] . " "."</td>
					<td>".$fila_axel[1] . " "."</td>
					
				</tr>";
				}
				echo "</table></div></center>";
				echo "<br>";
}
if($_POST['CLARO']){
	$claro="SELECT compañia,usuario FROM tbl_usuario WHERE compañia='CLARO'";
	$resultado_claro=mysqli_query($connect,$claro);
	echo "<center><div id='table'>
				<table id='consult-tbl'>
				<tr id='tr_header'>
    				<th>Compañia</th>
    				<th>Usuario</th>
  				</tr>";
				while ($fila_claro=mysqli_fetch_row($resultado_claro)) {
				//desplegar los registros
				echo '<tr>
					<td id="td_id">'.$fila_claro[0] . " "."</td>
					<td>".$fila_claro[1] . " "."</td>
					
				</tr>";
				}
				echo "</table></div></center>";
				echo "<br>";
}
if($_POST['IUSACELL']){
	$iusacell="SELECT compañia,usuario FROM tbl_usuario WHERE compañia='IUSACELL'";
	$resultado_iusacell=mysqli_query($connect,$iusacell);
	echo "<center><div id='table'>
				<table id='consult-tbl'>
				<tr id='tr_header'>
    				<th>Compañia</th>
    				<th>Usuario</th>
  				</tr>";
				while ($fila_iusacell=mysqli_fetch_row($resultado_iusacell)) {
				//desplegar los registros
				echo '<tr>
					<td id="td_id">'.$fila_iusacell[0] . " "."</td>
					<td>".$fila_iusacell[1] . " "."</td>
					
				</tr>";
				}
				echo "</table></div></center>";
				echo "<br>";
}
if($_POST['NEXTEL']){
	$nextel="SELECT compañia,usuario FROM tbl_usuario WHERE compañia='NEXTEL'";
	$resultado_nextel=mysqli_query($connect,$nextel);
	echo "<center><div id='table'>
				<table id='consult-tbl'>
				<tr id='tr_header'>
    				<th>Compañia</th>
    				<th>Usuario</th>
  				</tr>";
				while ($fila_nextel=mysqli_fetch_row($resultado_nextel)) {
				//desplegar los registros
				echo '<tr>
					<td id="td_id">'.$fila_nextel[0] . " "."</td>
					<td>".$fila_nextel[1] . " "."</td>
					
				</tr>";
				}
				echo "</table></div></center>";
				echo "<br>";
}

if($_POST['TELCEL']){
	$telcel="SELECT compañia,usuario FROM tbl_usuario WHERE compañia='TELCEL'";
	$resultado_telcel=mysqli_query($connect,$telcel);
	echo "<center><div id='table'>
				<table id='consult-tbl'>
				<tr id='tr_header'>
    				<th>Compañia</th>
    				<th>Usuario</th>
  				</tr>";
				while ($fila_telcel=mysqli_fetch_row($resultado_telcel)) {
				//desplegar los registros
				echo '<tr>
					<td id="td_id">'.$fila_telcel[0] . " "."</td>
					<td>".$fila_telcel[1] . " "."</td>
					
				</tr>";
				}
				echo "</table></div></center>";
				echo "<br>";
}
if($_POST['UNEFON']){
	$unefon="SELECT compañia,usuario FROM tbl_usuario WHERE compañia='UNEFON'";
	$resultado_unefon=mysqli_query($connect,$unefon);
	echo "<center><div id='table'>
				<table id='consult-tbl'>
				<tr id='tr_header'>
    				<th>Compañia</th>
    				<th>Usuario</th>
  				</tr>";
				while ($fila_unefon=mysqli_fetch_row($resultado_unefon)) {
				//desplegar los registros
				echo '<tr>
					<td id="td_id">'.$fila_unefon[0] . " "."</td>
					<td>".$fila_unefon[1] . " "."</td>
					
				</tr>";
				}
				echo "</table></div></center>";
				echo "<br>";
}
mysqli_close($connect);
?>
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