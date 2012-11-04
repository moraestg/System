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
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#telefone').mask("(99)9999-9999");
	
	$('form').validate({
		rules:{                        
			unidade:{ required:true }	
		},
		// Define as mensagens de erro para cada regra
		messages:{                        
			unidade:{ required: "<br />Insira o nome da unidade!" }	
		}
	});	
});			
</script>



<? require 'menu.php'?>
</head>
<body>

Unidades | Alterar<br /><br /><br />


<form action="ControleUnidades.php" method="post">
	<input type="hidden" name="acao" value="Alterar" />
    <input type="hidden" name="id_unidade" value="<?=$id_unidade?>" />
   	Empresa: 
    <select name="id_empresa">
    <?
    $busca_empresa = new Conexao("SELECT * FROM empresas ORDER BY empresa ASC");
	$rs_empresa = $busca_empresa->query();
	while($empresa = mysql_fetch_array($rs_empresa)){	
	?>
    	<option value="<?=$empresa['id_empresa']?>" <? if($row['id_empresa'] == $empresa['id_empresa']){ echo 'selected="selected"'; } ?>><?=$empresa['empresa']?></option>
    <?
	}
	$busca_empresa->desconectar();
	?>
    </select><br />
  	Unidade: <input type="text" name="unidade" id="unidade" value="<?=$row['unidade']?>" size="60" /><br />
   	Endereço: <input type="text" name="endereco" id="endereco" value="<?=$row['endereco']?>" size="60" /><br />
   	Telefone: <input type="text" name="telefone" id="telefone" value="<?=$row['telefone']?>" size="10" /><br />
	<input type="submit" value="Alterar" />
</form>
</body>
</html>