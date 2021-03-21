<?php
    require_once("controller/Controller.class.php");
    require_once("conf/db_conf.php");
	$unControleur = new Controleur ($serveur,$bdd,$user,$mdp);
	$unControleur->initPhpSession();
	$page = (isset($_GET['page'])) ? $_GET['page']: 0;
	require_once('template_header.php');
	if(isset($_SESSION['utilisateur_id'])){
		switch ($page) {
			case 0:
				require_once("dashboard.php");
				break;
			case 6:
				$unControleur->cleanPhpSession();
				header('Location: index.php?page=0');
				break;
			default: 
				require_once("dashboard.php");
				break;
		}
	}
	else  {
		$auth = 1;
		require_once('authentication.php');
	}
	require_once('template_footer.php');
?>