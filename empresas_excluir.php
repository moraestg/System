<?
require 'util/Conexao.class.php';
require 'util/protecao.php';

$id_empresa = anti_injection($_REQUEST['id_empresa']);
$busca = new Conexao("SELECT * FROM empresas WHERE id_empresa = '$id_empresa'");
$rs = $busca->query();
$row = mysql_fetch_array($rs);
$busca->desconectar();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>





<? require 'menu.php'?>
</head>
<body>

Empresas | Excluir<br /><br /><br />


<form action="ControleEmpresas.php" method="post">
	<input type="hidden" name="acao" value="Excluir" />
    <input type="hidden" name="id_empresa" value="<?=$id_empresa?>" />
   	
    <input type="submit" value="Sim" />
  	<a href="empresas_listar.php"><input type="button" value="Não" /></a>
    
</form>
</body>
</html>