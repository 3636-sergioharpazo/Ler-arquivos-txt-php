<?php 


function escrever()
{

$data=Date('d/m/Y H:i:s');

$nome=$_POST["nome"];
$email=$_POST["email"];


$texto ="<tr><td><b>Nome</b>:$nome</td></tr><tr>";
$texto .="<td><b>E-mail</b>:$email</td></tr><t>";
$texto .="<td><b>Data</b>:$data</td>";
$fp = fopen('ler.txt', 'a');
fwrite($fp,"$texto\n\n");
header("Location: aula_revisao_fullstack.php");
fclose($fp);

# code...
    
}
escrever();
?>