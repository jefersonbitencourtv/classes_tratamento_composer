<?php
namespace Class;
class Permissao{
	private $nivel;

	private function setNivel($nivel){
		$this->nivel = $nivel;
	}

	public function getNivel(){
		return $this->nivel;
	}
}




?>