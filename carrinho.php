<?php
//produtos do carrinho vindo do "Banco de dados"


$produto2 = array(
	'Nome' =>'Flor do seu zé' ,
	'Descricao' => 'Bonita' ,
	'Quantidade' => 5,
	'Preco' => 10

);
$produto3 = array(
	'Nome' => 'Espada do seu Jorge',
	'Descricao' => 'Grande',
	'Quantidade' => 3,
	'Preco' => 25

);

//fim Simulação


//calculo do preco final dos produtos

//include('produtos.php');
session_start();


$produto1 = $_SESSION['produto'];



$qtdProduto1 = $produto1['Quantidade'];

$precoFinal1 = $qtdProduto1 * $produto1['Preco'];

$precoFinal2 = $produto2['Quantidade'] * $produto2['Preco'];

$precoFinal3 = $produto3['Quantidade'] * $produto3["Preco"];


$precoTotal = $precoFinal2 + $precoFinal3 + $precoFinal1;


if(isset($_POST['nome'])){

	$nomeUser = $_POST['nome'];
}else{
	$nomeUser = "default";
}

$retornoJson = array(
	'Nome'=> $nomeUser,
	'Preco1' => $precoFinal1,
 	'Preco2' => $precoFinal2,
 	'Preco3' => $precoFinal3,
 	'Qtd1' => $produto1['Quantidade'],
 	'Qtd2' => $produto2['Quantidade'],
 	'Qtd3' => $produto3['Quantidade'],
 	'NomeProduto1' => $produto1['Nome'],
 	'NomeProduto2' => $produto2['Nome'],
 	'NomeProduto3' => $produto3['Nome'],
 	'DescProd1' => $produto1['Descricao'],
 	'DescProd2' => $produto2['Descricao'],
 	'DescProd3' => $produto3['Descricao'],
 	'PrecoTotal' => $precoTotal
 );








$carrinho = json_encode($retornoJson);
echo $carrinho;




?>