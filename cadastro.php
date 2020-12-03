<?php
if($_POST['sexo'] == 'masc'){
	$sexo = 'Masculino';
}else if($_POST['sexo'] == 'fem'){
	$sexo = 'Feminino';
}


$user_retorno = array(
	'Nome' => $_POST['nome'],
	'email' => $_POST['email'],
	'senha' => $_POST['senha2'],
	'Descricao'=>$_POST['desc'],
	'Sexo'=> $sexo,
	'Telefone' => $_POST['tel'],
	'Doc'=> $_POST['doc']
);

$returnJson = json_encode($user_retorno);
echo $returnJson;

?>