<?php

    /*  formulaire page05.php rempli ?  */

    if (isset($_POST['Nom']) && $_POST['Nom'] != "" && isset($_POST['Email']) && $_POST['Email'] != "") {
        $valid = TRUE;
    }
    else
    {
        $valid = FALSE;
    }

    
    if ($valid) {
        // INITIALISATION
        $personne = array();
        $tableau = array();
        if (isset($_POST['acceptePerso'])) {
            $acceptepersonne = TRUE;
        }
        else
        {
            $acceptepersonne = FALSE;
        }

        // si $valid n'est PAS NULL, alors ces data sont remplies
        // nettoyage et assignation
        // + vérification des champs pour la sécurité
                
        $_POST['Nom'] = strip_tags($_POST['Nom']);
        $nom01 = filter_input(INPUT_POST,'Nom',FILTER_SANITIZE_STRING);
        $personne['nom'] = mb_strtoupper($nom01,'UTF-8');
        
        $_POST['Prenom'] = strip_tags($_POST['Prenom']);
        $prenom01 = filter_input(INPUT_POST,'Prenom',FILTER_SANITIZE_STRING);
        $personne['prenom'] = ucwords($prenom01);
        $personne['email'] = filter_input(INPUT_POST,'Email',FILTER_SANITIZE_EMAIL);
        
        $_POST['Telephone'] = strip_tags($_POST['Telephone']);
        $personne['telephone'] = filter_input(INPUT_POST,'Telephone',FILTER_SANITIZE_STRING);
        
        $_POST['Sujet'] = strip_tags($_POST['Sujet']);
        $personne['sujet'] = filter_input(INPUT_POST,'Sujet',FILTER_SANITIZE_STRING);
        
        $_POST['Comment'] = strip_tags($_POST['Comment']);
        $personne['commentaire'] = filter_input(INPUT_POST,'Comment',FILTER_SANITIZE_STRING);
        
        $personne['accepte'] = 0;

        if ($acceptepersonne) {
            $personne['DataPersoConservees'] = 1;
        }
        else {
            $personne['DataPersoConservees'] = 0;
        }
        
        //$personne['DataPersoConservees'] = $_POST['acceptePerso'];
        $personne['Suivi'] = "nouveau";        
    }
    else
    {
        header('Location: ../01pages/page10.php');
        exit();
    }
    
    
    /*  debut traitement PHP    */
    
    require "connect.php";
    try {
        //$pdo = new PDO("mysql:host=localhost;dbname=commerce;charset=utf8", "root", "");
        //$pdo = new PDO("mysql:host=localhost;dbname=commerce;charset=utf8","root",""); ==> probl : PAS d'espace !!
        //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $pdo = new PDO("mysql:host=" . SERVER . ";dbname=" . BASE . ";charset=utf8", USER, PASSWD);
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // 1) recherche de la personne dans la table tvisiteurs
        // pour éviter les doublons !
        $nom02 = $personne['nom'];
        $prenom02 = $personne['prenom'];
        $email02 = $personne['email'];
        
        
        $requete = $pdo->query('SELECT * FROM tvisiteurs WHERE Nom LIKE ' . $nom02 . ' AND Prenom LIKE ' . $prenom02 . ' AND Email LIKE ' . $email02 . ';');
        
        $tableau = $requete->fetch();
        // nb d'enregs dans tableau > 0 si le user existe déjà !
        
        if (sizeof($tableau) > 0) {
            session_start();
            $_SESSION['tonNom'] = $personne['nom'];
            $_SESSION['tonPrenom'] = $personne['prenom'];
            $_SESSION['tonEmail'] = $personne['email'];
            header('location: ../01pages/pageErr001.php');
            exit();
        }
        else
        {
            
        
        // si aucun enreg trouvé dans tvisiteurs

       //  statements :
        
        
        $sql = "INSERT INTO tvisiteurs(Nom, Prenom, Email, Telephone, Sujet, Commentaire, Accepte, DataPersoConservees, Suivi) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        
        /* $stmt = $pdo->prepare("INSERT INTO tvisiteurs" 
                . " (Nom, Prenom, Email, Telephone, Sujet, Commentaire)"
                . " VALUES(?, ?, ?, ?, ?, ?)"); */
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindValue(1, $personne['nom']);
        $stmt->bindValue(2, $personne['prenom']);
        $stmt->bindValue(3, $personne['email']);
        $stmt->bindValue(4, $personne['telephone']);
        $stmt->bindValue(5, $personne['sujet']);
        $stmt->bindValue(6, $personne['commentaire']);
        $stmt->bindValue(7, $personne['accepte']);
        $stmt->bindValue(8, $personne['DataPersoConservees']);
        $stmt->bindValue(9, $personne['Suivi']);
        
        $stmt->execute();
        
?>

        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <title></title>
            </head>
            <body>
                <div>
                    <h1>Form Controller</h1>
                    <p>Nous avons bien reçu votre requête et reprendrons contact
                    avec vous dans les plus brefs délais</p>
                    <ul>
                        <li>Email: <?php echo $personne['email'];?></li>
                        <li>Prénom: <?php echo $personne['prenom'];?></li>
                        <li>Nom: <?php echo $personne['nom'];?></li>
                        <li>Téléphone: <?php echo $personne['telephone'];?></li>
                        <li>Commentaire: <?php echo $personne['commentaire'];?></li>
                    </ul>
                </div>
            </body>
        </html>
<?php
        //  VERIFICATION :
        session_start();
        $_SESSION['tonNom'] = $personne['nom'];
        //$_POST['nom'];
        $_SESSION['tonPrenom'] = $personne['prenom'];
        // pour les data bien enregistrées => msg envoyé vers page10
        header('location: ../01pages/page10.php');
        exit();
    }   // fin du else
    }   // fin du try
    
    catch(PDOException $e) {
        echo "---  Erreur:   " . $e;
    }
?>
