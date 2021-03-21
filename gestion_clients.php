<h2> Gestion des clients </h2>

<?php
	$unControleur->setTable("Client");
	$leClientEdit = null; //aucune classe au début du fichier 	

	if (isset($_GET['action']) && isset($_GET['client_id'])) {
		$idClient = $_GET['client_id']; 
		$action = $_GET['action'];
		$tab = array("*");
		$where = array(
			"client_id" => $idClient
		);
		switch ($action)
		{
			case "sup"  : 
				$unControleur->delete($where);
				break; 
			case "edit" :
				$leClientEdit = $unControleur->selectWhere($tab, $where)[0];
				break; 
		}
	}

	require_once ("vues/vue_insert_client.php");
	if(isset($_POST['valider'])){
		$tab = array(
			"client_nom"=>$_POST['client_nom'],
			"client_prenom"=>$_POST['client_prenom'],
			"client_adresse"=>$_POST['client_adresse'],
			"client_telephone"=>$_POST['client_telephone'],
		);
		$unControleur->insert($tab);
		header("Location: index.php?page=1");
	}
	if(isset($_POST['modifier'])){
		$tab = array(
			"client_nom"=>$_POST['client_nom'],
			"client_prenom"=>$_POST['client_prenom'],
			"client_adresse"=>$_POST['client_adresse'],
			"client_telephone"=>$_POST['client_telephone'],
		);
		$where = array(
			"client_id" => $idClient
		);
		$unControleur->update($tab, $where);
		header("Location: index.php?page=1");
	}

	$tab = array("*");
	$lesClients = $unControleur->selectAll($tab); 
	require_once ("vues/vue_les_clients.php");

?>