<link rel="stylesheet" type="text/css" href="style.css">
<div class="container">
<?php

  $id = $_GET['id'];

   try{	
	include_once("conexao.php");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$read = $conn->prepare("DELETE FROM funcionarios WHERE id=:id");
    
   $read->bindParam(":id",$id);

	$read->execute();
  echo "<p>Registro Deletado - <a href='index.php'>Home</a></p>"; 

    }catch(Exception $e){
		echo "Erro: ".$e->getMessage(); 
	}
?> 

</div>