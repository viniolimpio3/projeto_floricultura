<?php

$produto1 = array(
	'Nome' => '',
	'Descricao' => '',
	'Quantidade' => 0,
	'Preco' =>0
);


if(isset($_POST['qtdProduto1'])){

	$produto1['Nome'] = 'Pluméria';
	$produto1['Descricao'] = 'A pluméria que é uma nativa do Brasil, Caribe e América Central, vem em muitas variedades. A flor pertence à família dogbane, Apocynaceae e é conhecida por seu aroma fascinante e beleza. A pluméria tem flores de tamanho médio que vem em uma variedade de cores vibrantes, como rosa, vermelho, amarelo e mais. ';
	$produto1['Quantidade']= $_POST['qtdProduto1'];
	$produto1['Preco'] =50;


}else if(isset($_POST['qtdProduto2'])){

	$produto1['Nome'] = 'Crisantêmo';
	$produto1['Descricao'] = 'Carolus Linnaeus, pai da taxonomia moderna, deu esta linda flor o nome que significa flor de ouro, em grego. Estas flores vêm em um número variados de formas, estas podem ser botões, pomposas, decorativas ou como margarida. Embora amarela seja cor tradicional da flor crisântemo, estas podem ser também encontradas em outras cores, a incluir vermelho, branco e roxo. A flor simboliza otimismo, vida longa, fidelidade e alegria.';
	$produto1['Quantidade']= $_POST['qtdProduto2'];
	$produto1['Preco'] = 55;

}else if(isset($_POST['qtdProduto3'])){

	$produto1['Nome'] = 'Dália';
	$produto1['Descricao'] = 'Nomeada após Anders Dahl, um botânico, esta planta perene espessa tuberosa é geralmente encontrada no México, Colômbia, e América Central. Esta flor tem mais de 30 espécies. E um detalhe interessante sobre a mesma é que vem em uma variedade enorme de tamanhos. A flor consiste de uma cabeça floral cercada por várias pétalas delicadas. Estas flores vêm em vários tons de laranja, vermelho, rosa, roxo, branco e mais. E foi declarada a flor nacional do México no ano 1963.';
	$produto1['Quantidade']= $_POST['qtdProduto3'];
	$produto1['Preco'] = 60;


}else if(isset($_POST['qtdProduto4'])){

	$produto1['Nome'] = 'Orquídeas';
	$produto1['Descricao'] = 'As orquídeas têm uma quantidade inacreditável de variedades, mais de 25.000 espécies em 800 gêneros. Esta planta pode facilmente se adaptar ao ambiente dela e então é disponível em quase todo o mundo; algumas orquídeas têm 30 polegadas de pétalas e podem pesar cerca de uma 1kg.';
	$produto1['Quantidade']= $_POST['qtdProduto4'];
	$produto1['Preco'] = 65;


}else if(isset($_POST['qtdProduto5'])){


	$produto1['Nome'] = 'Tulipa';
	$produto1['Descricao'] = 'Esta planta perene com flores vistosas pertence ao gênero de Tulipa. Da Ásia à África, a tulipa é uma entre as mais cultivadas flores. E várias espécies e híbridos, desta flor excepcionalmente bonita, podem ser vistas em jardim como flores de corte ou como plantas de pote. As tulipas vêm em várias cores, assim como o formato da flor. Há mais de 100 espécies conhecidas desta incrível planta, que é sexta posição nesta seleção, das 10 flores mais bonitas do mundo.';
	$produto1['Quantidade']= $_POST['qtdProduto5'];
	$produto1['Preco'] = 70;


}else if(isset($_POST['qtdProduto6'])){

	$produto1['Nome'] = 'Lírios Da Água';
	$produto1['Descricao'] = 'Estas flores são incrivelmente lindas que vêm com um tapete flutuante de folhagem. A floração dura cerca de 3 dias e então é substituída. As nenúfares vêm em cores variadas e são muitas vezes perfumadas. Basicamente, há 3 tipos desta flor, Nymphaeaceae ou a nenúfar comum, Nelumbo ou Lotus, e Nuphar Lutea, a flor amarela.';
	$produto1['Quantidade']= $_POST['qtdProduto6'];
	$produto1['Preco'] = 75;

	
}else if(isset($_POST['qtdProduto7'])){

	$produto1['Nome'] = 'Magnólia';
	$produto1['Descricao'] = 'E poucas coisas são tão bonitas como uma árvore de magnólia em plena floração. Nomeada após Pierre Mangol, um popular botânico, Magnólia se orgulha de mais de 200 espécies. As flores magnólia vêm em rosa, roxo ou branco, e o tamanho pode ser qualquer entre 3 a 12 polegadas em diâmetro. Esta flor é um símbolo da beleza, doçura e feminilidade. O gênero de magnólia pode ser encontrado em West Indies, sudeste como também leste da Ásia, América Central, América do norte, entre outros lugares.';
	$produto1['Quantidade']= $_POST['qtdProduto7'];
	$produto1['Preco'] = 75;


}else if(isset($_POST['qtdProduto8'])){

	$produto1['Nome'] = 'Estrelícia';
	$produto1['Descricao'] = 'Esta flor exótica é conhecida como Ave do Paraíso pela sua forma, e pertence à família Strelitiaceae, sendo segunda posição nesta seleção das 10 flores mais bonitas do mundo. Com seu formato único e cores vibrantes, esta flor sem dúvida se destaca por tamanha beleza, e é multicolorida, sem cheiro.';
	$produto1['Quantidade']= $_POST['qtdProduto8'];
	$produto1['Preco'] = 80;


}else if(isset($_POST['qtdProduto9'])){

	$produto1['Nome'] = 'Rosa';
	$produto1['Descricao'] = 'Trata-se de pequena, de cheiro doce, e tem tudo que é necessário para ser a de maior beleza. E não seria errado dizer que a rosa é sinônimo de beleza e amor. Este arbusto perene arborizado pertence ao gênero Rosa. As rosas são encontradas quase em todos os lugares do planeta. Esta flor linda vem em uma variedade de cor e cada cor possui um significado diferente, por exemplo, a rosa vermelha é um símbolo do amor, enquanto a rosa amarela é da amizade. De poetas a artistas, a rosa tem sido uma fonte de inspiração para as pessoas por séculos.s';
	$produto1['Quantidade']= $_POST['qtdProduto9'];
	$produto1['Preco'] = 100;

}
//Iniciando a sessão:

session_start();

//Gravando valores dentro da sessão aberta:
$_SESSION['produto'] = $produto1;


?>
