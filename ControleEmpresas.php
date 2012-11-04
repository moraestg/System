<?
require 'util/protecao.php';
require 'Empresas.class.php';

$acao = anti_injection($_REQUEST['acao']);

$id_empresa = isset($_REQUEST['id_empresa']) ? anti_injection($_REQUEST['id_empresa']) : NULL;
$empresa = isset($_REQUEST['empresa']) ? anti_injection($_REQUEST['empresa']) : NULL;
$endereco = isset($_REQUEST['endereco']) ? anti_injection($_REQUEST['endereco']) : NULL;
$telefone = isset($_REQUEST['telefone']) ? anti_injection($_REQUEST['telefone']) : NULL;

switch($acao){
	case "Cadastrar":
		$cad = new Empresa;
		$cad->passaEmpresa($empresa,$endereco,$telefone);
		$cad->cadastraEmpresa();
		header("location: empresas_listar.php");
	break;
	case "Alterar":
		$alt = new Empresa;
		$alt->id_empresa = $id_empresa;
		$alt->passaEmpresa($empresa,$endereco,$telefone);
		$alt->alteraEmpresa();
		header("location: empresas_alterar.php?id_empresa=".$id_empresa);
	break;
	case "Excluir":
		$exc = new Empresa;
		$exc->id_empresa = $id_empresa;
		$exc->excluiEmpresa();
		header("location: empresas_listar.php");		
	break;
}
?>