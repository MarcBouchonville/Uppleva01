<?php
    /*  formulaire page05.php rempli ?  */

    $valid = isset($_POST['Nom']) && isset($_POST['Email']);
    
    if ($valid) {
        // si $valid n'est PAS NULL, alors ces data sont remplies
        // nettoyage et assignation
        
        $nom01 = filter_input(INPUT_POST,'Nom',FILTER_SANITIZE_STRING);
        $nom = mb_strtoupper($nom01,'UTF-8');
        $prenom01 = filter_input(INPUT_POST,'Prenom',FILTER_SANITIZE_STRING);
        $prenom = ucwords($prenom01);
        $email = filter_input(INPUT_POST,'Email',FILTER_SANITIZE_EMAIL);
        $telephone = filter_input(INPUT_POST,'Telephone',FILTER_SANITIZE_STRING);
        $sujet = filter_input(INPUT_POST,'Sujet',FILTER_SANITIZE_STRING);
        $commentaire = filter_input(INPUT_POST,'Comment',FILTER_SANITIZE_STRING);
        
    }
    else
    {
        header('Location: ../pages/page05.php');
        exit();
    }
    
    
    /*  debut traitement PHP    */
    
    require("connect.php");
    try {
        $pdo = new PDO("mysql:host=" . SERVER . ";dbname=" . BASE . ";charset=utf8", USER, PASSWD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        
        //  statements :
        $stmt = $pdo->prepare("INSERT INTO TVisiteurs" 
                . " (Nom, Prenom, Email, Telephone, Sujet, Commentaire)"
                . " VALUES(?, ?, ?, ?, ?, ?)");
        
        $stmt->bindValue(1, $nom);
        $stmt->bindValue(2, $prenom);
        $stmt->bindValue(3, $email);
        $stmt->bindValue(4, $telephone);
        $stmt->bindValue(5, $sujet);
        $stmt->bindValue(6, $commentaire);
        
        $stmt->execute();
        
        //  VERIFICATION :
        echo "Vos coordonnées sont enregistrées <br> merci";
        header('Location: ../index.php');
    }
    catch(PDOException $e) {
        echo "Erreur: " . $e;
    }
?>