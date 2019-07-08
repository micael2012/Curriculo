<?php

$host= 'mysql669.umbler.com:41890';
$bd= 'atento';
$senhabd= 'micael';
$userbd = 'atento2019';



$nome = $_POST ["nome"]; 
$idade = $_POST ["idade"];
$estado = $_POST ["estado"]; 


//Gravando no banco de dados !
//conectando com o localhost - mysql
$conexao = mysql_connect($host,$bd, $senhabd);
if (!$conexao)
die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db($bd,$conexao);
if (!$banco)
die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
$query = "INSERT INTO `clientes` ( `nome` , `email` , `sexo` , `ddd` , `telefone` , `endereço` , `cidade` , `estado` , `bairro` , `pa
ís` , `login` , `senha` , `news` , `id` )
VALUES ('$nome', '$email', '$sexo', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$bairro', '$pais', '$login', '$senha', '$news
', '')";
mysql_query($query,$conexao);
echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 