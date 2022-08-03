<?php
	// Cargamos las variables y los valores que va a tomar
	$servidor='localhost';
	$username='root';
	$password='rootroot';
	$database='bares';
	
	// Establecemos la conexion
	try{
			$conexion=new PDO("mysql:host=$servidor;dbname=$database",$username,$password);
		}
		catch(PDOException $e){
			var_dump($e->getMessage());
		}

	
	
	// Comprobamos si ha sido exitosa la conexion o ha dado error.
	// En caso de error se muestra
	
	

