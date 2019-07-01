<?php

$dsn = "mysql:dbname=testepdo;host=localhost"; 
$dbuser = "root";
$dbpass = "";

try{
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$sql = "select * from usuarios";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0){
		foreach($sql->fetchAll() as $usuario){
			echo "Nome: ".$usuario["email"]."<br>";
		}

	}else{
		echo "Não há usuários cadastrados";
	}

}catch(PDOException $e){
	echo "Falhou: ".$e->getMessage();
}

?>