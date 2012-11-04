<?
require 'util/Conexao.class.php';
require 'util/protecao.php';

$id_unidade = anti_injection($_REQUEST['id_unidade']);
$busca = new Conexao("SELECT * FROM unidades WHERE id_unidade = '$id_unidade'");
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

Unidades | Excluir<br /><br /><br />


<form action="ControleUnidades.php" method="post">
	<input type="hidden" name="acao" value="Excluir" />
    <input type="hidden" name="id_unidade" value="<?=$id_unidade?>" />
   	
    <input type="submit" value="Sim" />
  	<a href="unidades_listar.php"><input type="button" value="Não" /></a>
    
</form>
</body>
</html>