<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Ricardo Montalvo">
	<title>DAR BAJA USUARIOS</title>
	<link rel="stylesheet" type="text/css" href="montalvo_styles.css">
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

<section style="height: 240px;" id="section-agregar">	
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
mysqli_set_charset($connect,'utf-8');
//recuperacion de los datos ingresados
$usuario= $_POST['usuario'];
$submit = $_POST['submit'];
//BUSQUEDA DE USUARIO
$search =  "SELECT usuario from tbl_usuario where usuario = '$usuario'";


if(isset($submit)){
	$search_user=mysqli_query($connect,$search);
		
	  				$fila=mysqli_fetch_row($search_user);

					//desplegar los registros
					
					if(empty($fila)){
						 echo "<script languaje='JavaScript'>
				         		alert('NO SE REALIZO LA BAJA CORRECTAMENTE');
				         		alert('EL USUARIO QUE INGRESASTE NO EXISTE O ESTA MAL ESCRITO');
				         		location.assign('menu_baja.html');
				         		</script>";
					}else{
						echo "<div id='table'>
						<table id='consult-tbl'>
						<tr>
	    					<th>Usuario</th>
	  					</tr>";
						echo '<h2>EL USUARIO QUE INGRESASTE SI EXISTE</h2>';
						echo '<tr>
							<td>'.$fila[0] . " "."</td>
						</tr>";
						echo "</table></div>";
						echo "<br>";

				 		$baja_sql = "DELETE from tbl_usuario where usuario = '$usuario'";
				        $resultado1 = mysqli_query($connect, $baja_sql);
				        if(!$resultado1){
				         echo "<br>";
				        
				       	}else{
				         echo "<h3 style='font-size:29px' id='h3-title'>SE realizo la baja correctamente</h3>";				       		
				       	}						
					}
}



mysqli_close($connect)
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