<?php
	if(isset($_POST['nombre']) && isset($_POST['password'])){
		
		$usuario = $_POST['nombre'];
		$password = $_POST['password'];
		
		$conn=mysql_connect("localhost", "srealms_sp", "Pipmytrade123") or die (mysql_error($conn));
mysql_select_db("srealms_nueva_generacion", $conn) or die (mysql_error($conn));


$query2_0="SELECT ID, display_name FROM wp_users WHERE user_login = '$usuario'";
$res2_0=mysql_query($query2_0, $conn) or die (mysql_error($conn));
$login = 0;
While ($row2_0 = mysql_fetch_array($res2_0)){
	$id_usuario = $row2_0["ID"];
	$nombre_usuario = $row2_0["display_name"];
$login = 1;
}

if($login == 1){
echo "1";
}
else{
	echo "0";
}

	}else{
	if(isset($_FILES['foto'])){
		$ruta_destino='fotos/';
		if(move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_destino.$_FILES['foto']['name'].'.jpg'))
			echo 1;
		else{
			echo 0;
		}
	}else{
			echo "Error 404: not found";
		}
	}
	
	
?>