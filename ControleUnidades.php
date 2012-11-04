<?
require 'util/protecao.php';
require 'Unidades.class.php';

$acao = anti_injection($_REQUEST['acao']);

$id_unidade = isset($_REQUEST['id_unidade']) ? anti_injection($_REQUEST['id_unidade']) : NULL;
$id_empresa = isset($_REQUEST['id_empresa']) ? anti_injection($_REQUEST['id_empresa']) : NULL;
$unidade = isset($_REQUEST['unidade']) ? anti_injection($_REQUEST['unidade']) : NULL;
$endereco = isset($_REQUEST['endereco']) ? anti_injection($_REQUEST['endereco']) : NULL;
$telefone = isset($_REQUEST['telefone']) ? anti_injection($_REQUEST['telefone']) : NULL;

switch($acao){
	case "Cadastrar":
		$cad = new Unidade;
		$cad->passaUnidade($id_empresa,$unidade,$endereco,$telefone);
		$cad->cadastraUnidade();
		header("location: unidades_listar.php");
	break;
	case "Alterar":
		$alt = new Unidade;
		$alt->id_unidade = $id_unidade;
		$alt->passaUnidade($id_empresa,$unidade,$endereco,$telefone);
		$alt->alteraUnidade();
		header("location: unidades_alterar.php?id_unidade=".$id_unidade);
	break;
	case "Excluir":
		$exc = new Unidade;
		$exc->id_unidade = $id_unidade;
		$exc->excluiUnidade();
		header("location: unidades_listar.php");		
	break;
}
?>