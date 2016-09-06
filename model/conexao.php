<?php

class Conexao{
	const  host     = "mysql.hostinger.com.br";
	const  user     = "u290178674_root";
	const  password = "administrador";
	const  base     = "u290178674_learn";
	
    function conectar(){
        $conn = mysqli_connect(self::host, self::user,self::password,self::base );
	return $conn;
    }
		
}


$a = new Conexao();
$a->conectar();