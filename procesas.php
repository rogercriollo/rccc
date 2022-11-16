
<?php

	extract($_POST);

	$nombre = $_POST['nombre'];
	$tipo = $_POST['tipo'];
	$pc = $_POST['pc'];
	$hsh = $_POST['hsh'];	
	$hs = $_POST['hs'];
	$ot = $_POST['ot'];
	$cp = $_POST['cp'];
	
	
	if($tipo = 1){
        $resultado = $pc/($hsh * $ot);
    }elseif($tipo = 2){
        $resultado = -1.4 * $hs + 0.7 * $cp + 4;
    }elseif($tipo = 3){
        $resultado = -1.7 * $hs + 0.93 * $cp + 5;
    }

	echo "<strong>".@$nombre."</strong> tiene un IMC  de: ".@$resultado;
	
?>