<?php 

require_once("config.php");
//Carrega um usuario.
//$root = new Usuario();
//$root->loadById(15);
//echo $root; 

//Carrega uma lista completa
//$lista = Usuario ::getList();
//echo json_encode($lista);


//busca uma lista de usuarios pelo login
//$search = Usuario::search("pe");
//echo json_encode($search);

//Carregar login e senha
//$usuario = new Usuario();
//$usuario->login("ana", "abrc5");
//echo $usuario;


//insere um novo usuario
$aluno = new Usuario();
$aluno->setDeslogin("Said");
$aluno->setDessenha("1234");
$aluno->insert();
echo $aluno;

//Update atualiza usuario
//$usuario = new Usuario();
//$usuario->loadById(1);
//$usuario->update("André", "123456");
//echo $usuario;

//Deletar registro
//$usuario = new Usuario();
//$usuario->loadById(1);
//$usuario->delete();
//echo $usuario;
?>






