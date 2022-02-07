<link rel="stylesheet" type="text/css" href="style.css">
<?php 
try{	
	include_once("conexao.php");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$read = $conn->prepare("SELECT * FROM funcionarios ORDER BY professores");
	$read->execute();
echo "<div class='container'>";
    echo "<table border='1'>";
    echo "<tr><th> id </th> <th> Professor </th>
         <th> Serviços Gerais </th> <th> Gestão </th>
         <th> Alimentação </th> </tr>"; 

	while($result = $read->fetch(PDO::FETCH_OBJ)){
	echo "<tr> 
	       <td> $result->id </td>
	       <td> $result->professores </td> 
	       <td> $result->servicosgerais </td> 
	       <td> $result->gestao </td> 
	       <td> $result->alimentacao </td>
	 	   </tr>"; 
	} 
echo "<tr><td colspan='5' style='text-align:center;border:none'><a href='index.php'>Home</a></td></tr>";
echo "</table>"; 



    }catch(Exception $e){
		echo "Erro: ".$e->getMessage(); 
	}


/*
$conn = new PDO("mysql:dbname=amelia;host=127.0.0.1;charset=utf8","root",""); // Setar UFT-8
$declaracao = $conn->prepare("SELECT * FROM funcionarios ORDER BY professores");
$declaracao->execute();

/*
$result = $declaracao->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	foreach ($row as $col => $value) {
	echo "<strong>".$col." </strong>:".$value."<br/>";
	}
}
*/
//$result = $declaracao->fetch(PDO::FETCH_ASSOC);
//echo "Professor = ".$result['professores'].'<br />';
/*
while($result = $declaracao->fetch(PDO::FETCH_ASSOC)){
	echo "id = ".$result['id'].'<br />';
	echo "Professor = ".$result['professores'].'<br />';
	echo "Serviços = ".$result['servicosgerais'].'<br />';
	echo "Gestão = ".$result['gestao'].'<br />';
	echo "Cantina = ".$result['alimentacao'].'<br /><br>';
}




 while($result = $declaracao->fetch(PDO::FETCH_OBJ)){
 	echo "id =".$result->id."<br/>";
 	echo "professores = ".$result->professores."<br>";
 	echo "Serviços = ".$result->servicosgerais."<br>";
 	echo "Gestão = ".$result->gestao."<br>";
 	echo "Cantina = ".$result->alimentacao."<br><br>";
 } 

*/
 
 ?>