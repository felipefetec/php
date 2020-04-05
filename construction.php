<?php 
class Endereco{

	private $rua;
	private $numero;

	public function __construct(){
		echo "construtor<br><BR>";
	}
}

$meuEndereco = new Endereco();

var_dump($meuEndereco);

 ?>
