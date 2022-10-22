<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Ricardo Montalvo">
	<link rel="stylesheet" type="text/css" href="montalvo_styles.css">
	<title>MENU DE MODIFICACION DE USUARIO</title>
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

<?php
$actualizar=$_POST['actualizar'];
$usuario1=$_POST['usuario'];
$search ="SELECT * from tbl_usuario where usuario = '$usuario1'";

	if(isset($actualizar)){
		//recuperacion de variables ya cambiadas
			$idx = $_POST['idx'];
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

		//pasar al update de los datos de la misma forma

		$actualizacion="update tbl_usuario set usuario='".$usuario."',nombre='".$nombre."',sexo='".$sexo."',nivel='".$nivel."',email='".$email."',telefono='".$telefono."',marca='".$marca."',compañia='".$compañia."',saldo='".$saldo."',activo='".$activo."' where idx='".$idx."'";


		$resultado2_updt=mysqli_query($connect,$actualizacion);

		if(!$resultado2_updt){
			echo "<script languaje='JavaScript'>
				alert('LOS DATOS NO ACTUALIZARON');
				location.assign('menu_update.html');
					</script>";
		}else{
			
			echo "<script languaje='JavaScript'>
				alert('LOS DATOS SE ACTUALIZARON CORRECTAMENTE');
				location.assign('menu_update.html');
					</script>";
		}
	}else{
		$resultado_updt=mysqli_query($connect,$search);
		$fila_upd=mysqli_fetch_assoc($resultado_updt);

		//muestreo de variables en el formulario
		$idx=$fila_upd["idx"];
		$usuario=$fila_upd["usuario"];
		$nombre=$fila_upd['nombre'];
		$sexo=$fila_upd['sexo'];
		$nivel=$fila_upd['nivel'];
		$email=$fila_upd['email'];
		$telefono=$fila_upd['telefono'];
		$marca=$fila_upd['marca'];
		$compañia=$fila_upd['compañia'];
		$saldo=$fila_upd['saldo'];
		$activo=$fila_upd['activo'];

	}

?>

<h2>CAMPOS A EDITAR DEL SIGUIENTE USUARIO:</h2>

<section style="height: auto;" id="section-agregar">
	<form class="formulario" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
				<?php echo "<label>INDICE:".$idx."</label><br>"?>
				<input type="hidden" name="idx" value="<?php echo $idx;  ?>">
				<label>Usuario: </label>
				<input pattern="[a-zA-Z0-9]+" type="text" name="usuario" value="<?php echo $usuario;  ?>"><br>
				
				<label>Nombre: </label>
				<input pattern="[A-Za-z]+" required type="text" name="nombre" value="<?php echo $nombre;  ?>"><br>

				<label>Sexo: </label>
				<input  required pattern="[ H,M,h,m ]+" type="text" name="sexo" value="<?php echo $sexo;  ?>"><br>
				
				<label>Nivel: </label>
				
				
				<select class="select_home" required name="nivel">
					<option class="option_home"value="1">Nivel 1</option>
					<option class="option_home" value="2">Nivel 2</option>
					<option class="option_home" value="3">Nivel 3</option>
				</select><br>
				
				<label>Email: </label>
				<input required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="text" name="email" value="<?php echo $email;  ?>"><br>
				
				<label>Telefono: </label>
				<input required pattern="[0-9,-]+" type="text" name="telefono" value="<?php echo $telefono;  ?>"><br>
				
				<label>Marca: </label>
				<input  required pattern="[A-Za-z]+" type="text" name="marca" value="<?php echo $marca;  ?>"><br>
				
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
				<input type="number" name="saldo" value="<?php echo $saldo;  ?>"><br>
				
				<label>Activo: </label>
				<span id="n1">SI</span>
				<input type="radio" name="activo" value="1">
				<span id="n0">NO</span>
				<input type="radio" name="activo" value="0">
				
				<input required type="submit" name="actualizar" value="actualizar">
	</form>
</section>

<?php
//recuperacion de datos ingresados

$submit = $_POST['submit'];


if(isset($submit)){
	$search_user=mysqli_query($connect,$search);
	$fila=mysqli_fetch_row($search_user);
//desplegar los registros
					
	if(empty($fila)){
			echo "<script languaje='JavaScript'>
				alert('EL USUARIO QUE INGRESASTE NO EXISTE O ESTA MAL ESCRITO');
				location.assign('menu_update.html');
					</script>";
	}else{
		echo '<h2>EL USUARIO QUE INGRESASTE SI EXISTE</h2>';
		echo "<div id='table'>
		<table id='consult-tbl'>
		<tr>
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
	echo '<tr>
		<td>'.$fila[0] . " "."</td>
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
	echo "</table></div>";
	echo "<br>";

	}

}
?>
	<footer>
		<a href='menu_consultas.php'><img  id="img6" src='https://i.postimg.cc/Qthmp6Gf/github-1000-500-px.png' border='0' alt='github'/></a>
		<img id="img7" src='https://i.postimg.cc/d3nx7bhR/sql-1000-500-px.png' border='0' alt='Inicio'/>
		<span>PHP "MONTALVO": Innovacion a su alcanze.&#169;<span>
	</footer>

</body>
</html>