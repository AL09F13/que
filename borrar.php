<?php
include ('conf/config.inc.php');

$consulta="DELETE FROM tranquilo WHERE id = '{$_GET['id']}'";
$resultado=mysqli_query($conexion,$consulta);
//que
  $vars="";
	 $consulta="SELECT * FROM tranquilo ORDER BY id ASC";
	 
	 $resultado=mysqli_query($conexion,$consulta);
	 
	 if (!$resultado) //verificacion de la consulta si es diferente de resultado
	 {
		 die ("Error en la consulta");
	 }
	 else
	 {
		 
		 echo $tpl->cargar_parte('plt_listaJuegos.html','encabezado',$vars);
		 if (mysqli_num_rows($resultado)>0)
		 {
			 //listar juegos
			 $cuantos=mysqli_num_rows($resultado);
			 for ($i=1; $i<=$cuantos; $i++)
			 {
				 $fila=mysqli_fetch_array ($resultado);
				 $vars ['id_t']=$fila ['id'];
				 $vars ['titulo_t']=$fila ['titulo'];
				 $vars ['fecha_t']=$fila ['fecha'];
				 $vars ['compania_t']=$fila ['compania'];
				 $vars ['plataformas_t']=$fila ['plataformas'];
				 $vars ['genero_t']=$fila ['genero'];
				 $vars ['clasificacion_t']=$fila ['clasificacion'];
				 echo $tpl->cargar_parte('plt_listaJuegos.html','fila',$vars);
			 }
		     }
			 
			 else
			
			 {
				 echo "no hay nada";
			 }
			 
			  echo $tpl->cargar_parte('plt_listaJuegos.html','pie',$vars);

		 
	 }
	


?>