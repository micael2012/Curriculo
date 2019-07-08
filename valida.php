<?php

define('SERVER', 'mysql669.umbler.com');
define('BANCO', 'atento');
define('SENHA', 'atento2019');
define('USER', 'micael');

$con = new pdo('mysql:host=' . SERVER . ';dbname=' . BANCO, USER, SENHA);

try{

$con = new pdo('mysql:host=' . SERVER . ';dbname=' . BANCO, USER, SENHA);

}catch(PDOException $e){
echo "Erro gerado " . $e->getMessage(); 
}



if(isst($_POST['acao'])){
	$nome=$_POST['nome'];
	$idade=$_POST['idade'];
	$estado=$_POST['estado'];

	$sql = $pdo->prepare("NSERT INTO 'formulario' VALUES(null,?,?,?)");
	
	$sql->execute();
	echo "Cliente inserido com sucesso";
}



?> 