<?php
namespace Class;
class Usuario{
	protected $telefone;
	protected $data_cadastro;
	protected $nome;

	public function cadastrar(){
		date_default_timezone_set("Brazil/East");
		$data_cadastro = date('d/m/Y H:i');
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function preencherDados($nome, $telefone, $nivel){
		$this->nome = $nome;
		$this->telefone = $telefone;
	}
	public function getDataCadastro(){
		return $this->data_cadastro;
	}
	public function getNome(){
		return $this->nome;
	}
	$permissao
}