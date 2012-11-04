<?

	//Verifica se usuario efetuou o login
	session_start();
	if(!isset($_SESSION['usuario']) ||  !isset($_SESSION['id_imobiliaria'])){
		header('Location: index.php');
	}	
?>