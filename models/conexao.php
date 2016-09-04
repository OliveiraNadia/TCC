<?php

class Conexao{
	const  host     = "localhost";
	const  user     = "root";
	const  password = "";
	const  base     = "learnappdb";
	
    function conectar(){
      
        $conn = mysqli_connect(self::host, self::user,self::password,self::base );
	return $conn;
    }
		
}

$conn = new Conexao;
$conn->conectar();