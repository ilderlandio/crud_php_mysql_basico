<link rel="stylesheet" type="text/css" href="style.css">
<div class="container">
<?php 
extract($_POST);

 try{	
include_once("conexao.php");
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$read = $conn->prepare("UPDATE funcionarios SET professores=:prof, servicosgerais=:serg, gestao=:gest, alimentacao=:aliment WHERE id=:id");
    
   $read->bindParam(":prof",$prof);
   $read->bindParam(":serg",$servg);
   $read->bindParam(":gest",$gestao);
   $read->bindParam(":aliment",$cantina);
   $read->bindParam(":id",$id);

	$read->execute();
  echo "<p>Registro Atualizado! - <a href='index.php'>Home</a></p>"; 

    }catch(Exception $e){
		echo "Erro: ".$e->getMessage(); 
	}

?>
</div>