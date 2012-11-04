<?
require_once 'util/Conexao.class.php';

class Unidade{
	public $id_unidade;
	private $id_empresa;
	private $empresa;
	private $endereco;
	private $telefone;
	
	function passaUnidade($id_empresa,$unidade,$endereco,$telefone){
		$this->id_empresa = $id_empresa;
		$this->unidade = $unidade;
		$this->endereco = $endereco;
		$this->telefone = $telefone;	
	}
	
	function cadastraUnidade(){
		$cad = new Conexao("INSERT INTO unidades VALUES(NULL,'$this->id_empresa','$this->unidade','$this->endereco','$this->telefone')");
		$cad->query();
		$cad->desconectar();
	}

	function alteraUnidade(){
		$alt = new Conexao("UPDATE unidades SET id_empresa = '$this->id_empresa',unidade = '$this->unidade', endereco = '$this->endereco', telefone = '$this->telefone' WHERE id_unidade = '$this->id_unidade'");
		$alt->query();
		$alt->desconectar();
	}
	
	function excluiUnidade(){
		$exc = new Conexao("DELETE FROM unidades WHERE id_unidade = '$this->id_unidade'");
		$exc->query();
		$exc->desconectar();
	}

}
?>