<?php

$dsn = "mysql:dbname=testepdo;host=localhost"; 
$dbuser = "root";
$dbpass = "";

try{
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$nome = "Fulano";
	$email = "fulano@hotmail.com";
	$senha = md5("123");

	//$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')"; 
	//$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'"; 
	$sql = "UPDATE usuarios SET email = 'abc@hotmail.com' WHERE email = 'fulano@hotmail.com'";
	$sql = $pdo->query($sql);

	echo "Email alterado com sucesso!";
	//echo "Usuário inserido: ".$pdo->lastInsertId();

}catch(PDOException $e){
	echo "Falhou: ".$e->getMessage();
}

?>

<?php

//buscando dados no bd
/*$dsn = "mysql:dbname=testepdo;host=localhost"; 
$dbuser = "root";
$dbpass = "";

try{
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$sql = "select * from usuarios";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0){
		foreach($sql->fetchAll() as $usuario){
			echo "Nome: ".$usuario["nome"]."<br>";
		}

	}else{
		echo "Não há usuários cadastrados";
	}

}catch(PDOException $e){
	echo "Falhou: ".$e->getMessage();
}
?>*/

