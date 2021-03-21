<?php
    if(!isset($_SESSION['utilisateur_id'])){

        require_once('template_header.php');
        ?> 
        <h2>VOUS DEVEZ VOUS AUTHENTIFIER</h2>
            <?php
            //On ne peux pas voir les pages de connexions si on est deja connecter
            if(isset($_GET['auth'])){
                $auth = $_GET['auth'];
            }    
            if($auth==1){
                require_once("vues/vue_register.php");
            }
            else {
                require_once("vues/vue_login.php");
            }
            
            if (isset($_POST['seconnecter'])){
                
                $mail = $_POST['mail'];
                $password = $_POST['password'];
                $unUser = $unControleur->verifyUser($mail, $password);
                if($unUser != null){
                    $_SESSION['utilisateur_id'] = $unUser; 
                    header('Location: index.php?page=0');
                }
                else{
                    echo "Verifier vos identifiants";
                }
                
            }

            if (isset($_POST['enregistrer'])){
                $unControleur->setTable("Utilisateur");
                $tab = array(
                    "utilisateur_nom"=>$_POST['utilisateur_nom'],
                    "utilisateur_mail"=>$_POST['utilisateur_mail'],
                    "utilisateur_mdp"=> password_hash($_POST['utilisateur_mdp'], PASSWORD_BCRYPT),
                );
                $unControleur->insert($tab);

                header('Location: index.php?auth=0');
            }
            require_once('template_footer.php');
    }else{
        header('Location: index.php?page=0');
    }
?>