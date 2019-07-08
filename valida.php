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



$host= 'mysql669.umbler.com';
$bd= 'atento';
$senhabd= 'micael';
$userbd = 'atento2019';



?> 