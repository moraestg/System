<?
require_once 'util/Conexao.class.php';

class Empresa{
	public $id_empresa;
	private $empresa;
	private $endereco;
	private $telefone;
	
	function passaEmpresa($empresa,$endereco,$telefone){
		$this->empresa = $empresa;
		$this->endereco = $endereco;
		$this->telefone = $telefone;	
	}
	
	function cadastraEmpresa(){
		$cad = new Conexao("INSERT INTO empresas VALUES(NULL,'$this->empresa','$this->endereco','$this->telefone')");
		$cad->query();
		$cad->desconectar();
	}

	function alteraEmpresa(){
		$alt = new Conexao("UPDATE empresas SET empresa = '$this->empresa', endereco = '$this->endereco', telefone = '$this->telefone' WHERE id_empresa = '$this->id_empresa'");
		$alt->query();
		$alt->desconectar();
	}
	
	function excluiEmpresa(){
		$exc = new Conexao("DELETE FROM empresas WHERE id_empresa = '$this->id_empresa'");
		$exc->query();
		$exc->desconectar();
	}

}
?>