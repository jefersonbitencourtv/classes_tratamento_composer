<?php
require __DIR__ . '/vendor/autoload.php';
use minhasclasses\Usuario;
try{
	$user = new Usuario();
	
	$user->preencherDados("Jeferson","51515155151","2");
	
	if(empty($user->getNome())){
		throw new Exception('O nome deve ser preenchido');
	}
	if(empty($user->getTelefone())){
		throw new Exception('O telefone deve ser preenchido');
	}
	if(empty($user->perm->getNivel())){
		throw new Exception('O nivel deve ser preenchido');
	}
	$user->cadastrar();
	echo 'Nome: ' . 	$user->getNome();
	echo '</br>';
	echo 'Telefone: ' . $user->getTelefone();
	echo '</br>';
	echo 'Nivel: ' . $user->perm->getNivel();
	echo '</br>';
	echo 'Data de Cadastro: ' .$user->getDataCadastro();
	}catch (Error $e){
		echo '<p style="color: red">' .'Foi encontrado um erro:  ' . $e . '</p>';
	}catch (Exception $e){
		echo '<p style="color: red">' . $e . '</p>';
	}
?>