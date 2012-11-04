<?
require 'util/Conexao.class.php';
require 'util/Paginacao.class.php';
require 'util/protecao.php';

if(!isset($pesq)){
	$pesq = NULL;
}else{
	$pesq = anti_injection($_REQUEST['pesq']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<? require 'menu.php'?>
</head>
<body>

Empresas | Listar<br /><br /><br />

<a href="empresas_cadastrar.php">Cadastrar</a><br /><br />

<?
// PAGINACAO COMECA AQUI
$pag = isset($_REQUEST['pag']) ? $_REQUEST['pag'] : 1;
$pag = filter_var($pag, FILTER_VALIDATE_INT);
$inicio = 0;
if(!empty($limite_imo)){
$limite = $limite_imo;
}else{
$limite = 15;
}
if($pag != ""){
	$inicio = ($pag - 1) * $limite;
}
$busca = "SELECT * FROM empresas ORDER BY empresa ASC";
$busca1 = new Conexao($busca);
$rs_busca1 = $busca1->query();
$total = mysql_num_rows($rs_busca1);
// CRIA PAGINACAO					
$pag = new Paginacao($total, $pag, $pesq, $limite);
$busca_final = new Conexao($busca." LIMIT ".$inicio.",".$limite);
$rs = $busca_final->query();
$a = 0;
if ($total > 0){
while($row = mysql_fetch_array($rs)){
$a++;
?>
<a href="empresas_alterar.php?id_empresa=<?=$row['id_empresa']?>">Alterar</a>
<a href="empresas_excluir.php?id_empresa=<?=$row['id_empresa']?>">Excluir</a>
Empresa: <?=$row['empresa']?>
<br /><br />

<?
 }
} else {
    echo 'Não possui empresas cadastradas';
}
?>

<?
$pag->criaPaginacao();
?>









</body>
</html>