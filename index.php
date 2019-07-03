<?php

$dsn = "mysql:dbname=testepdo;host=localhost"; 
$dbuser = "root";
$dbpass = "";

try{
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$nome = 'Katia';
	$id = 5;

	$sql = "UPDATE usuarios SET nome = :nome WHERE id = :id";

	$sql = $pdo->prepare($sql);
	$sql->bindValue(':nome', $nome);
	$sql->bindValue(':id', $id);
	$sql->execute();

	/*$nome = "Fulano";
	$email = "fulano@hotmail.com";
	$senha = md5("123");

	$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')"; 
	$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'"; 
	$sql = "UPDATE usuarios SET email = 'abc@hotmail.com' WHERE email = 'fulano@hotmail.com'";
	$sql = $pdo->query($sql);
	$sql = "DELETE FROM usuarios WHERE id = 10";
	$pdo->query($sql);*/

	echo "Usuário alterado com sucesso!";
	//echo "Usuário inserido: ".$pdo->lastInsertId(); //busca o ultimo id inserido no bd

}catch(PDOException $e){
	echo "Falhou: ".$e->getMessage();
}

?>


