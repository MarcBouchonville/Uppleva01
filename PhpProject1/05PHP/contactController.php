<?php

    /*  formulaire page05.php rempli ?  */

    if (isset($_POST['Nom']) && $_POST['Nom'] != "" && isset($_POST['Email']) && $_POST['Email'] != "") {
        $valid = TRUE;
    }
    else
    {
        $valid = FALSE;
    }

    $nomrecu = $_POST["Nom"];
    $emailrecu = $_POST["Email"];
    
    // if (!$_POST('Nom') === null || !$_POST('Nom') === "");
    
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
        
        $nom01 = filter_input(INPUT_POST,'Nom',FILTER_SANITIZE_STRING);
        $personne['nom'] = mb_strtoupper($nom01,'UTF-8');
        $prenom01 = filter_input(INPUT_POST,'Prenom',FILTER_SANITIZE_STRING);
        $personne['prenom'] = ucwords($prenom01);
        $personne['email'] = filter_input(INPUT_POST,'Email',FILTER_SANITIZE_EMAIL);
        $personne['telephone'] = filter_input(INPUT_POST,'Telephone',FILTER_SANITIZE_STRING);
        $personne['sujet'] = filter_input(INPUT_POST,'Sujet',FILTER_SANITIZE_STRING);
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
        header('Location: ../01pages/page05.php');
        exit();
    }
    

    /*  listing des data    */
    
    echo ("data 1 = " . $personne['nom']);
    echo ("prenom = " . $personne['prenom']);
    echo ("   ---------------------    ");
    
    
    
    /*  debut traitement PHP    */
    
    require "connect.php";
    try {
        //$pdo = new PDO("mysql:host=localhost;dbname=commerce;charset=utf8", "root", "");
        //$pdo = new PDO("mysql:host=localhost;dbname=commerce;charset=utf8","root",""); ==> probl : PAS d'espace !!
        //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $pdo = new PDO("mysql:host=" . SERVER . ";dbname=" . BASE . ";charset=utf8", USER, PASSWD);
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
       //  statements :
        
        // $sql = "INSERT INTO `tvisiteurs`(`IdVisiteur`, `Nom`, `Prenom`, `Email`, `Telephone`, `Sujet`, `Commentaire`, `Accepte`, `DataPersoConservees`, `Suivi`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])";
        // $sql = "INSERT INTO `tvisiteurs`(`Nom`, `Prenom`, `Email`, `Telephone`, `Sujet`, `Commentaire`) VALUES ([value-2],[value-3],[value-4],[value-5],[value-6],[value-7])";
        
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
        echo "Vos coordonnées sont enregistrées";
        echo "merci";
        header('location: ../01pages/page10.php');
        exit();
    }
    catch(PDOException $e) {
        echo "---  Erreur:   " . $e;
    }
?>
