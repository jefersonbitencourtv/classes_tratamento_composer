<?php
namespace minhasclasses;
use Exception;
class Usuario extends Permissao{
	private $telefone;
	private $data_cadastro;
	private $nome;
	public $perm;
	public function cadastrar(){
		date_default_timezone_set("Brazil/East");
		$this->data_cadastro = date('d/m/Y H:i');

	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function preencherDados($nome, $telefone, $nivel){
		$this->perm = new Permissao();
		$this->nome = $nome;
		$this->telefone = $telefone;
		$this->perm->setNivel($nivel);
	}
	public function getDataCadastro(){
		return $this->data_cadastro;
	}
	public function getNome(){
		return $this->nome;
	}
}