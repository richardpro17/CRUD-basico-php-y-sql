<link rel="stylesheet" type="text/css" href="montalvo_styles.css">
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
	<section id="section-agregar">
<?php

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

//recuperacion de datos ingresados
			$usuario=$_POST['usuario'];
			$nombre=$_POST['nombre'];
			$sexo=$_POST['sexo'];
			$nivel=$_POST['nivel'];
			$email=$_POST['email'];
			$telefono=$_POST['telefono'];
			$marca=$_POST['marca'];
			$compañia=$_POST['compañia'];
			$saldo=$_POST['saldo'];
			$activo=$_POST['activo'];
			$submit = $_POST['submit'];
			$validacion_resultados=1;
//para dar alta nueva informacion
			$insertar= "INSERT INTO tbl_usuario(usuario, nombre, sexo, nivel, email, telefono, marca, compañia, saldo, activo) VALUES ('$usuario','$nombre','$sexo','$nivel','$email','$telefono','$marca','$compañia','$saldo','$activo')";


			//Comprobacion de datos
			


			
			
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					$validacion_resultados = $validacion_resultados -1;
				}else{
					$validacion_resultados++;
				}
		

			if(empty($telefono)){
				echo"NO SABES LLENAR telefono";
			}elseif(!filter_var($telefono, FILTER_SANITIZE_NUMBER_INT)){
				echo '<h2>Se requiere un telefono CORRECTO.</h2>';
				}else{
					$validacion_resultados++;
					echo $validacion_resultados;
				}
			
			

			if($validacion_resultados >= 2){
				//pasar la informacion al query
				$resultados= mysqli_query($connect,$insertar);
			}else{
				echo '<h2>VUELVE A LLENAR LOS DATOS</h2>';
			}
			

			//evaluamos si es correcta la inserccion de data
			if(!$resultados){
				echo "<h2>error</h2>";
				$validacion=0;				
			}else{
				echo "<h2>correcto, se registro usuario</h2>";
				$validacion=1;
				echo $validacion;
			}


			//consulta y despliegue de los datos
			$todo= 'SELECT * FROM tbl_usuario';
			//pasa la informacion del query a tabla final
			$tabla= mysqli_query($connect,$todo);
			//la fila es un array que tiene toda la informacion del registro

			//mostramos la tabla ya con los datos agregados
			if($validacion==1){
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
				while ($fila=mysqli_fetch_row($tabla)) {
				//desplegar los registros
				echo '<tr>
					<td id="td_id">'.$fila[0] . " "."</td>
					<td>".$fila[1] . " "."</td>
					<td>".$fila[2] . " "."</td>
					<td>".$fila[3] . " "."</td>
					<td>".$fila[4] . " "."</td>
					<td>".$fila[5] . " "."</td>
					<td>".$fila[6] . " "."</td>
					<td>".$fila[7] . " "."</td>
					<td>".$fila[8] . " "."</td>
					<td>".$fila[9] . " "."</td>
					<td>".$fila[10] . " "."</td>
				</tr>";
				}
				echo "</table></div></center>";
				echo "<br>";
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