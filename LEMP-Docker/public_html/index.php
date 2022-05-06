<?
    
    echo "<h1>Gestión de usuarios</h1>"; 
    $conn = new mysqli("172.17.0.4:3306","root","password","ejemplo");
    
   if(!$conn){
	printf("ERROR DE CONEXION");
	exit();
   }
   
   $consulta = "SELECT * FROM usuarios LIMIT 10";
   $usuarios = $conn->query($consulta);
   if($usuarios){
	while($usuario = $usuarios->fetch_row()){
	    printf("%s (%s)\n", $usuario[0], $usuario[1]);
	    echo "<br>";
	}
	/* Liberar el conjunto de usuarios*/
	$usuarios->close();
   }
   $conn->close();   
?>
