<?php
include("conf/config.inc.php");

if(isset($_POST['txttitulo']) and isset($_POST['txtfecha'])and isset($_POST['txtcompania']) and isset($_POST['txtgenero']) and isset($_POST['txtplataformas']) and isset($_POST['txtclasificacion']))
//Si existen las variables POST...
{
	if (($_POST['txttitulo']=="") or ($_POST['txtfecha']=="") or ($_POST['txtcompania']=="") or ($_POST['txtgenero']=="") or ($_POST['txtplataformas']=="") or ($_POST['txtclasificacion']=="")) //Si alguno de los campos está vacío...
	{
		$vars['mensaje']= "Llena todos los campos, compa.";
		echo $tpl->cargar('plt_altaJuegos.html', $vars);
	}
	else
	{
		 $consultaAlta="INSERT INTO tranquilo (titulo, fecha, compania, plataformas, genero, clasificacion) VALUES
			 ('{$_POST['txttitulo']}','{$_POST['txtfecha']}', '{$_POST['txtcompania']}', '{$_POST['txtplataformas']}', '{$_POST['txtgenero']}', '{$_POST['txtclasificacion']}');"; /*agregar un nuevo juego*/
			 $resultadoAlta=mysqli_query($conexion,$consultaAlta);//verificar que el resultado se haya agregado a las base de datos correctamente
			 if (!$resultadoAlta)//si  hay error en el alta entonces:
			 {
				 die("Error en la consulta de Alta");
				 
			 }
			 $vars['mensaje']= "Fierro pa' delante.";
			 echo $tpl->cargar('plt_altaJuegos.html', $vars);
	}
}
else //Si no existen las variables POST...
{
	$vars['mensaje']= "";
	echo $tpl->cargar('plt_altaJuegos.html', $vars);
}
?>