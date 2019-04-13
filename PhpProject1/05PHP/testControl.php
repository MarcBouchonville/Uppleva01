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

        $pdo = new PDO("mysql:host=" . SERVER . ";dbname=" . BASE . ";charset=utf8", USER, PASSWD);
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // 1) recherche de la personne dans la table tvisiteurs
        // pour éviter les doublons !
        // avant :
        $sql = "SELECT Nom, Prenom, Email FROM tvisiteurs WHERE Nom LIKE ?";
        $query = $pdo->prepare($sql);
        $query->bindValue(1, $personne['nom']);
        $query->execute();

        $resultat = $query->fetch(PDO::FETCH_ASSOC);
        print_r ($resultat);
        
        //var_dump($resultat);
        while ($row = $query->fetch()) {
            echo "<br>Nom : " . $row['Nom'] . " --=--  prénom : " . $row['Prenom'] . "<br>";

            if ($row['Nom'] != "") {
            $tableau['Nom'] = $row['Nom'];
            $tableau['Prenom'] = $row['Prenom'];
            $tableau['Email'] = $row['Email'];
            }

        }
        
        echo '<br>';
        echo 'le contenu du tableau est le suivant : <br>';
        foreach ($tableau as $item) {
            echo 'item = ' . $item . '<br>';
        }
        foreach ($tableau as $key => $value) {
            echo $key . ' == ' . $value . '<br>';
        }
        
        if (count($tableau) > 0) {
            //var_dump($tableau);
            echo "<BR>";
            echo count($tableau) . '  enregistrements dans le tableau';
            
/*            session_start();
            
            
            $_SESSION['tonNom'] = $tableau['Nom'];
                    //$personne['nom'];
            $_SESSION['tonPrenom'] = $tableau['Prenom'];
            $_SESSION['tonEmail'] = $tableau['Email'];
            //$_SESSION['resultat'] = $resultat;
            header('location: ../01pages/pageErr001.php');
            exit(); */
            
        }
        else {
            echo "<br>le tableau est VIDE !!! <br>";
        }
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
    }   // fin du try
    
    catch(PDOException $e) {
    echo "---  Erreur:   " . $e;
    }
?>
