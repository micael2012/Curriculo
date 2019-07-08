<?php 

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $estado = $_POST["estado"];
  
    include_once 'conexao.php';    
      
    $sql = "insert into cliente values(null,
            '".$nome."','".$email."','".$tel."')";
    //echo $sql;
      
    if(mysql_query($sql,$con)){
        $msg = "Gravado com sucesso!";
    }else{
        $msg = "Erro ao gravar!";
    }
    mysql_close($con);  



  
try {
    $username ="root";
    $password = "";

  $pdo = new PDO('mysql:host=localhost;dbname=atento', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('INSERT INTO minhaTabela (nome) VALUES(:nome)');
  $stmt->execute(array(
    ':nome' => 'Ricardo Arrigoni'
  ));
   
  echo $stmt->rowCount(); 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
  




?>