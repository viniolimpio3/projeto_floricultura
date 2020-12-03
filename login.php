<?php

//"DADOS" DO BANCO DE DADOS

$perfil1 = array(
	'Nome' => 'Vinícius',
	'email'=> 'loucura@gmail.com',
	'senha'=> 'senha1',
 	'Descricao'=>'Loucura!',
 	'Sexo'=>'Masculino',
 	'Telefone' => '2343-3434',
 	'Doc' => 'não te interessa'

);
$perfil2 = array(
	'Nome' => 'Gabriel',
	'email'=> 'beicola@gmail.com',
	'senha'=> 'senha',
 	'Descricao'=>'Cabelo de esponja!',
 	'Sexo'=>'Masculino',
 	'Telefone' => '2343-4343',
 	'Doc' => 'não te interessa'
);

$perfil3 = array(
	'Nome' => 'Vitão',
	'email'=> 'paiAlfa@gmail.com',
	'senha'=> 'fermento',
 	'Descricao'=>'Pai alfa',
 	'Sexo'=>'Masculino',
 	'Telefone' => '3234-3434',
 	'Doc' => 'não te interessa'
);

$perfil4 = array(
	'Nome' => 'Pedrão',
	'email'=> 'chucrute@gmail.com',
	'senha'=> 'rato',
 	'Descricao'=>'Chucrute',
 	'Sexo'=>'Masculino',
 	'Telefone' => '3234-4343',
 	'Doc' => 'não te interessa'
);

//fimAcesso ao banco


session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if($email == $perfil1['email'] && $senha == $perfil1['senha']){

	echo "correto";
	$_SESSION['perfil'] = $perfil1;

}else if($email == $perfil2['email'] && $senha == $perfil2['senha']){

	echo "correto";
	$_SESSION['perfil'] = $perfil2;

}else if($email == $perfil3['email'] && $senha == $perfil3['senha']){

	echo "correto";
	$_SESSION['perfil'] = $perfil3;

}else if($email == $perfil4['email'] && $senha == $perfil4['senha']){

	echo "correto";
	$_SESSION['perfil'] = $perfil4;

}
 

?>