<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Informações do Cadastro</title>
</head>

<body bgcolor="#FFFFCC">
<?php
$nome=$_POST['nome'];
echo 'Nome: '. $nome,"<br>";
$email=$_POST['email'];
echo 'Email: '.$email,"&nbsp;&nbsp;";
$celular=$_POST['celular'];
echo 'Celular: '.$celular,"<br>";
$idade=$_POST['idade'];
echo 'Idade: '.$idade,"&nbsp;&nbsp;";
$raca=$_POST['raca'];
echo 'Raça: '.$raca,"<br>";
$escolaridade=$_POST['escolaridade'];
echo 'Escolaridade: '.$escolaridade,"<br>";
$pretende_fazer=$_POST['pretende_fazer'];
echo 'Pretende Fazer: '.$pretende_fazer,"<br>";
$total= $_POST['q1']+$_POST['q2']+$_POST['q3']+$_POST['q4']+$_POST['q5']+$_POST['q6']+$_POST['q7']+$_POST['q8']+$_POST['q9']+$_POST['q10']+$_POST['q11']+$_POST['q12']+$_POST['q13']+$_POST['q14']+$_POST['q15']+$_POST['q16']+$_POST['q17']+$_POST['q18']+$_POST['q19']+$_POST['q20']+$_POST['q21']+$_POST['q22']+$_POST['q23']+$_POST['q24']+$_POST['q25']+$_POST['q26']+$_POST['q27']+$_POST['q28']+$_POST['q29']+$_POST['q30'];
//$turma=$_POST['turma'];
echo 'Total: '. $total, "<br>";
if ($total>=1 and $total<=64)
{
echo 'Você precisa reorganizar seu horário e sua forma de estudar. Deve estar distribuindo de forma inadequada seu tempo para cada matéria e/ou errado na metodologia de estudo.',"<br/>";
}
elseif($total>=65 and $total<=80)
{
echo 'Você tem pontos positivos em sua forma de estudar, mas ainda apresenta falhas em seus hábitos que poderão prejudicar seus resultados. Analise os pontos negativos.',"<br/>";
}
if($total>=81){
echo 'Parabéns! Você está desenvolvendo ótimos hábitos de estudo. Continue assim.',"<br/>";
}

echo '<p><b><font size="+1" color="#FF3333" face="Arial, Helvetica, sans-serif">Técnicas para ler e tomar apontamento: </font></b></p>';
$tecnicas= $_POST['q1']+$_POST['q2']+$_POST['q3']+$_POST['q4']+$_POST['q5'];
echo 'Total de pontos: 18',"<br>";
echo 'Seus pontos: '.$tecnicas, "<br>";
echo '<p><b><font size="+1" color="#FF3333" face="Arial, Helvetica, sans-serif">Hábitos de concentração:</font></b></p>';
$concentracao=$_POST['q6']+$_POST['q7']+$_POST['q8']+$_POST['q9']+$_POST['q10'];
echo 'Total de pontos: 15',"<br>";
echo 'Seus pontos: '.$concentracao, "<br>";
echo '<p><b><font size="+1" color="#FF3333" face="Arial, Helvetica, sans-serif">Distribuição de tempo e relações sociais durante o estudo:</font></b></p>';
$tempo=$_POST['q11']+$_POST['q12']+$_POST['q13']+$_POST['q14']+$_POST['q15']+$_POST['q16']+$_POST['q17']+$_POST['q18']+$_POST['q19'];
echo 'Total de pontos: 27',"<br>";
echo 'Seus pontos: '.$tempo, "<br>";
echo '<p><b><font size="+1" color="#FF3333" face="Arial, Helvetica, sans-serif">Hábitos Gerais de Estudo:</font></b></p>';
$habitos_gerais=$_POST['q20']+$_POST['q21']+$_POST['q22']+$_POST['q23']+$_POST['q24']+$_POST['q25']+$_POST['q26']+$_POST['q27']+$_POST['q28']+$_POST['q29']+$_POST['q30'];
echo 'Total de pontos: 36',"<br>";
echo 'Seus pontos: '.$habitos_gerais, "<br>";


error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$host = "mysql";
$user = "u542158510_adm";
$pass = "eu212223";
$banco = "u542158510_apren";

@$conexao = mysqli_connect($host, $user, $pass, $banco);

if(!$conexao){
    die("Erro ao conectar ao Bando de dados " . mysqli_connect_errno() . " " . mysqli_connect_error());
}
//$db = mysqli_select_db($banco, $banco);

//error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$nome = $_POST['nome'];
$email=$_POST['email'];
$celular=$_POST['celular'];
$idade=$_POST['idade'];
$raca=$_POST['raca'];
$escolaridade=$_POST['escolaridade'];
$pretende_fazer=$_POST['pretende_fazer'];
$tecnicas= $_POST['q1']+$_POST['q2']+$_POST['q3']+$_POST['q4']+$_POST['q5'];
$concentracao=$_POST['q6']+$_POST['q7']+$_POST['q8']+$_POST['q9']+$_POST['q10'];
$tempo=$_POST['q11']+$_POST['q12']+$_POST['q13']+$_POST['q14']+$_POST['q15']+$_POST['q16']+$_POST['q17']+$_POST['q18']+$_POST['q19'];
$habitos_gerais=$_POST['q20']+$_POST['q21']+$_POST['q22']+$_POST['q23']+$_POST['q24']+$_POST['q25']+$_POST['q26']+$_POST['q27']+$_POST['q28']+$_POST['q29']+$_POST['q30'];
$total= $_POST['q1']+$_POST['q2']+$_POST['q3']+$_POST['q4']+$_POST['q5']+$_POST['q6']+$_POST['q7']+$_POST['q8']+$_POST['q9']+$_POST['q10']+$_POST['q11']+$_POST['q12']+$_POST['q13']+$_POST['q14']+$_POST['q15']+$_POST['q16']+$_POST['q17']+$_POST['q18']+$_POST['q19']+$_POST['q20']+$_POST['q21']+$_POST['q22']+$_POST['q23']+$_POST['q24']+$_POST['q25']+$_POST['q26']+$_POST['q27']+$_POST['q28']+$_POST['q29']+$_POST['q30'];

$sql = "INSERT INTO coleta1(`Nome`, `Email`, `Celular`, `Idade`, `Raca`, `Escolaridade`, `Pretende_Fazer`, `Tecnicas`, `Concentracao`, `Tempo`, `Habitos_Gerais`, `Total`) 
VALUES ('$nome', '$email', '$celular', '$idade', '$raca', '$escolaridade', '$pretende_fazer', '$tecnicas', '$concentracao', '$tempo', '$habitos_gerais', '$total')";

$resultado = mysqli_query($conexao, $sql);

//var_dump($resultado);


if($resultado==true){
echo "<script> alert('Perfil enviado com sucesso!')</script>";
}else{
echo "<script> alert('Erro ao cadastra suas Informações')</script>";
	
}
//posso tirar depois

//mensagem que é escrita quando os dados são inseridos normalmente.

?>


<br /><br />
<a href="#" onclick="window.print();">Imprimir Página</a>


</body>
</html>