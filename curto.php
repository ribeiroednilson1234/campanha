<?php
@mssql_connect($dbhost,$user,$password) or die
(“Não foi possível a conexão com o servidor!”);
@mssql_select_db(“$db“) or die
(“Não foi possível selecionar o banco de dados!”);

$instrucaoSQL = “SELECT $Nome, $Idade, $Identidade, $CPF, FROM $CONTRATADO ORDER BY ASC;
$consulta = mssql_query($instrucaoSQL);
$numRegistros = mssql_num_rows($consulta);

echo “Esta tabela contém $numRegistros registros!\n<hr>\n“;

if ($numRegistros!=0) {

while ($cadaLinha = mssql_fetch_array($consulta)) {

echo “$cadaLinha[$Nome] – $cadaLinha[$Idade] - $cadaLinha[$Identidade] - $cadaLinha[$CPF]\n<br>\n“;
};

try
{

function [estudo] ([Nome],[Idade],[Identidade],[CPF]);{

$Nome=$_post["Nome"];
$Idade=$_post["Idade"];
$Identidade=$_Post["Identidade"];
$CPF=$_post["CPF"];
$wy=$_post["Erro"];

if{	Nome=string; echo "<p><b>Nome cadastrado: [$Nome];</b></p>"}
if{	Idade=int; echo "<br><p><b>Idade cadastrada: [$Idade];</b></p>"}
if{	Identidade; echo "<br><p><b>Identidade Cadastrada: [$Identidade]"</b></p>}
if{	CPF=int; echo "<br><p><b>CPF cadastrado: [$CPF];</b></p>"}

else;{
	Erro=boolean};
	echo"$wy, <br><b>Dados não cadastrados erro procure o administrador do sistema.</b>";

elseif;
        $sql = "INSERT INTO CONTRATADO (Nome, Idade, Identidade, CPF) VALUES ('$nome', '$Idade','$Identidade','$CPF')";
return[estudo];
}
}	
$conn=null; 
?>
<!DOCTYPE html>
<html>

	<head>
	<meta charset="utf-8" lang="Pt-Br"/>

	<meta author="Ednilson" date="201812"/>

	<link rel="stylesheet" type="text/css" href="css/estilo.css"/>

	<script type="text/javascript" src="Campanha/java/furto.js"></script>

	<title>Concursado cadastrado</title>

	</head>
<body><article><p>Os dados foram cadastrados de acordo com o informado no formuláiro enviado</p>
<href="/campanha/enviar/index.html">VOLTAR AO INÍCIO</a>
</article>
</body>
</html>
