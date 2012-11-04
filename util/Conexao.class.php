<?
class Conexao {

	/*
	* Declaração das variáveis (propriedades) da classe
	*/
	
	// SERVIDOR LOCAL
	private $host = 'localhost';				// Host (Servidor) que executa o banco de dados
	private $user = 'root';						// Usuário que se conecta ao servidor de banco de dados
	private $pass = 'root';				// Senha do usuário para conexão ao banco de dados
	private $db = 'nr10';						// Nome do banco de dados a ser utilizado
	private $sql;									// String da consulta SQL a ser executada
	private $id;
	
	
	/*
	* Função para conexão ao banco de dados
	* @retorno Object Retorna o objeto da conexão
	*/
	public function __construct($sql){
		$con = mysql_connect($this->host, $this->user, $this->pass) or die($this->erro(mysql_error()));
		mysql_select_db($this->db) or die($this->erro(mysql_error()));
		if(isset($sql) && !empty($sql)){
			$this->sql = $sql;
			$this->query("SET NAMES 'utf8'");
		}
		return true;
	}

	/*
	* Função para execução da consulta ao banco de dados
	* @retorno Object $qry Retorna o resultado da consulta como um objeto
	*/
	function query(){
		$qry = mysql_query($this->sql) or die ($this->erro(mysql_error()));
		return $qry;
	}

	/*
	* Função para buscar o ultimo id(chave primaria da tabela) da consulta ao BD
	*/
	function getID(){
		return mysql_insert_id();
	}

	/*
	* Função para atribuir valores às propriedades da classe
	* @parametro String $prop Nome da propriedade que terá seu valor atribuído
	* @parametro String, Array, Object Valor a ser atribuído
	* @retorno void Não dá nenhum retorno
	*/
	function set($prop, $value){
		$this->$prop = $value;
	}

	/*
	* Função para retornar a string SQL
	* @retorno String String SQL
	*/
	function getSQL(){
		return $this->sql;
	}

	/*
	* Função para exibir os error
	* @retorno void Não dá nenhum retorno
	*/
	function erro($erro){
		echo $erro;
	}
	function desconectar(){
		mysql_close();
	}

	/*
	* query() executa a consulta ao banco de dados;
	* set() é o método que atribui os valores ás nossas propriedades;
	* getSQL() retorna a String SQL atribuída à propriedade $sql;
	* erro() exibe mensagens de erro;
	*/
}
?>
