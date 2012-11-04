<? require 'util/Conexao.class.php'?>
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

Unidades | Cadastrar<br /><br /><br />


<form action="ControleUnidades.php" method="post">
	<input type="hidden" name="acao" value="Cadastrar" />
    Empresa: 
    <select name="id_empresa">
    <?
    $busca_empresa = new Conexao("SELECT * FROM empresas ORDER BY empresa ASC");
	$rs_empresa = $busca_empresa->query();
	while($empresa = mysql_fetch_array($rs_empresa)){	
	?>
    	<option value="<?=$empresa['id_empresa']?>"><?=$empresa['empresa']?></option>
    <?
	}
	$busca_empresa->desconectar();
	?>
    </select><br />
  	Unidade: <input type="text" name="unidade" id="unidade" size="60" /><br />
   	Endereço: <input type="text" name="endereco" id="endereco" size="60" /><br />
   	Telefone: <input type="text" name="telefone" id="telefone" size="10" /><br />
	<input type="submit" value="Cadastrar" />
</form>
</body>
</html>