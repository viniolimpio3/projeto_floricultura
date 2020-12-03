<?php
//Recuperando dados da página login.php
session_start();
// if(isset($_SESSION['perfil1'])){

// 	$perfil = $_SESSION['perfil1'];

// }else if(isset($_SESSION['perfil2'])){

// 	$perfil = $_SESSION['perfil2'];

// }
// else if(isset($_SESSION['perfil3'])){

// 	$perfil = $_SESSION['perfil3'];

// }else if(isset($_SESSION['perfil4'])){

// 	$perfil = $_SESSION['perfil4'];
// }

$perfil = $_SESSION['perfil'];
// $nome = $perfil['Nome'];
// $email = $perfil['email'];
// $senha = $perfil['senha'];
// $desc = $perfil['Descricao'];
// $sexo = $perfil['Sexo'];
// $doc = $perfil['Doc'];
// $tel = $perfil['Telefone'];


echo json_encode($perfil);




?>
