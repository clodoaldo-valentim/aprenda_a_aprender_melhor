<!doctype html>
<html lang="pt=br">

<head>

<meta charset="UTF-8">
	<title>Aprenda</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!--
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!--link rel para o slider-->
	<link rel="stylesheet" type="text/css" href="css/vendor/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/dist/gallery.prefixed.css">
	<link rel="stylesheet" type="text/css" href="css/dist/gallery.theme.css">
	<!--fim do link rel para o slider-->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

  <meta name="keywords" content="Missão, Conveção das Igrejas Batistas Independentes no RN, Evangelismo, Ação Social, Cristo Jesus"/>
  <meta name="description" content="Convenção das Igrejas Batistas Independentes no RN"/>
  <meta name="author" content="Clodoaldo Valentim"/>
  <meta name="robots" content="index, follow"/>



</head>

<body>



<?php 
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$host = "mysql.hostinger.com.br";
$user = "u542158510_adm";
$pass = "eu212223";
$banco = "u542158510_apren";

$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
$db = mysql_select_db('u542158510_apren');
?>



<center><h3>Consulta individual</h3></center><br><br><br>

<?php

  error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
  
$nome = $_POST['nome'];
		$stgsql = "SELECT Nome, Email, Idade, Tecnicas, Concentracao, Tempo, Habitos_Gerais, Total from coleta1 where nome = \"$nome\"
order by Nome, Total; ";
		
		$querybanco = mysql_query($stgsql, $conexao);
		
		
		
		
		while ($l=mysql_fetch_array($querybanco)){
		

        $nome =$l[0];
		$email = $l[1];
		$idade = $l[2];
		$tecnicas = $l[3];
		$concentracao = $l[4];
		$tempo = $l[5];
		$habitos = $l[6];
		$total = $l[7];
                

		
			  echo "<strong>Nome:&nbsp;</strong>".$nome. "<br>";
			  echo "<strong>Email:&nbsp;</strong>".$email."<br>";
			  echo "<strong>Idade:&nbsp;</strong>".$idade."<br>";
			  echo "<strong>Tecnicas:&nbsp;</strong>".$tecnicas."<br>";
			  echo "<strong>Concentracao:&nbsp;</strong>".$concentracao."<br>";
			  echo "<strong>Tempo:&nbsp;</strong>".$tempo."<br>";
			  echo "<strong>Habitos:&nbsp;</strong>".$habitos."<br>";
			  echo "<strong>Total:&nbsp;</strong>".$total."<br>";
			  
			  echo "<hr></hr>";
			  
			  
		}  

	?>

                             <center><a href="javascript:window.print()" class="btn btn-danger" role="button">Imprimir</a></center>


</body>

</html>	

<?php
// tira o resultado da busca da memória
mysql_free_result($querybanco);
?>