<?

	$titulosite = 'Acesso restrito';

	function fmoeda($valor)
	{ 
		$valor = str_replace(",", "", $valor); 
		$valor = number_format($valor, 2, ',', '.'); 
		return $valor; 
	}

	function fn($alinhar)
	{
		return nl2br($alinhar);
	}

	function desfazMaskMoney($valor)
	{
		return str_replace(",", ".", str_replace(".", "", $valor));
	}

	function data_BR($data)
	{
		$data = explode('-', $data);
		return $data[2]."/".$data[1]."/".$data[0];
	}

	function hora_BR($data)
	{
		$data = explode(':', $data);
		return $data[0].":".$data[1];
	}

	function fdata($valor)
	{
		return date("d/m/Y", strtotime($valor));
	}

	// funcao da data do banco
	function data_banco($data)
	{
		$data = explode('/', $data);
		return $data[2]."-".$data[1]."-".$data[0];
	}

	function gerar_id($largura)
	{
		$caracteres = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o');
		$ID = '';
		for($i = 0; $i < $largura; $i++){
			$ID.= $caracteres[floor(rand()%15)];
		}
		return $ID;
	}

	function remover_schar($str, $enc = "iso-8859-1")
	{
		$acentos = array(
		'_' => '/ /',
		'A' => '/&Agrave;|&Aacute;|&Acirc;|&Atilde;|&Auml;|&Aring;/',
		'a' => '/&agrave;|&aacute;|&acirc;|&atilde;|&auml;|&aring;/',
		'C' => '/&Ccedil;/',
		'c' => '/&ccedil;/',
		'E' => '/&Egrave;|&Eacute;|&Ecirc;|&Euml;/',
		'e' => '/&egrave;|&eacute;|&ecirc;|&euml;/',
		'I' => '/&Igrave;|&Iacute;|&Icirc;|&Iuml;/',
		'i' => '/&igrave;|&iacute;|&icirc;|&iuml;/',
		'N' => '/&Ntilde;/',
		'n' => '/&ntilde;/',
		'O' => '/&Ograve;|&Oacute;|&Ocirc;|&Otilde;|&Ouml;/',
		'o' => '/&ograve;|&oacute;|&ocirc;|&otilde;|&ouml;/',
		'U' => '/&Ugrave;|&Uacute;|&Ucirc;|&Uuml;/',
		'u' => '/&ugrave;|&uacute;|&ucirc;|&uuml;/',
		'Y' => '/&Yacute;/',
		'y' => '/&yacute;|&yuml;/',
		'a.' => '/&ordf;/',
		'o.' => '/&ordm;/');
	   return preg_replace($acentos,array_keys($acentos),htmlentities($str,ENT_NOQUOTES, $enc));
	}
?>