<?php

    /*  formulaire page05.php rempli ?  */

    $valid = isset($_POST['Nom']) && isset($_POST['Email']);

    $personne = array();
    
    
    
    // if (!$_POST('Nom') === null || !$_POST('Nom') === "");
    
    if ($valid) {
        // si $valid n'est PAS NULL, alors ces data sont remplies
        // nettoyage et assignation
        
        $nom01 = filter_input(INPUT_POST,'Nom',FILTER_SANITIZE_STRING);
        $personne['nom'] = mb_strtoupper($nom01,'UTF-8');
        $prenom01 = filter_input(INPUT_POST,'Prenom',FILTER_SANITIZE_STRING);
        $personne['prenom'] = ucwords($prenom01);
        $personne['email'] = filter_input(INPUT_POST,'Email',FILTER_SANITIZE_EMAIL);
        $personne['telephone'] = filter_input(INPUT_POST,'Telephone',FILTER_SANITIZE_STRING);
        $personne['sujet'] = filter_input(INPUT_POST,'Sujet',FILTER_SANITIZE_STRING);
        $personne['commentaire'] = filter_input(INPUT_POST,'acceptePerso',FILTER_SANITIZE_STRING);
        
    }
    else
    {
        header('Location: ../01pages/page05.php');
        exit();
    }
    

    /*  listing des data    */
    echo ("data 1 = " . $personne['nom']);
    echo ("prenom = " . $personne['prenom']);
    
    
    /*  debut traitement PHP    */
    
    require("connect.php");
    try {
        $pdo = new PDO("mysql:host=" . SERVER . ";dbname=" . BASE . ";charset=utf8", USER, PASSWD);
        // $pdo = new PDO("mysql:host=localhost;dbname=commerce;charset=utf8","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        
        
        //  statements :
        
        // $sql = "INSERT INTO `tvisiteurs`(`IdVisiteur`, `Nom`, `Prenom`, `Email`, `Telephone`, `Sujet`, `Commentaire`, `Accepte`, `DataPersoConservees`, `Suivi`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])";
        $sql = "INSERT INTO `tvisiteurs`(`Nom`, `Prenom`, `Email`, `Telephone`, `Sujet`, `Commentaire`) VALUES ([value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])";
        
        /* $stmt = $pdo->prepare("INSERT INTO tvisiteurs" 
                . " (Nom, Prenom, Email, Telephone, Sujet, Commentaire)"
                . " VALUES(?, ?, ?, ?, ?, ?)"); */
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindValue('value-2', $personne['nom']);
        $stmt->bindValue('value-3', $personnne['prenom']);
        $stmt->bindValue('value-4', $personne['email']);
        $stmt->bindValue('value-5', $personne['telephone']);
        $stmt->bindValue('value-6', $personne['sujet']);
        $stmt->bindValue('value-7', $personne['commentaire']);
        
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
        echo "Vos coordonnées sont enregistrées <br> merci";
        
        header('location: ../01pages/page10.php');
        exit();
    }
    catch(PDOException $e) {
        echo "Erreur: " . $e;
    }
?>
