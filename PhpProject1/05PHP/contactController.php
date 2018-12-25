<?php 

    $valid = isset($_POST['Nom']) && isset($_POST['Email']);
    
    if ($valid) {
        // si $valid N'est PAS NULL, alors ces data sont remplies
        // nettoyage et assignation
        
        $nom01 = filter_input(INPUT_POST, 'Nom', FILTER_SANITIZE_STRING);
        $nom = mb_strtoupper($nom01, 'UTF-8');
        $prenom01 = filter_input(INPUT_POST, 'Prenom', FILTER_SANITIZE_STRING);
        $prenom = ucwords($prenom01);
        $email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
        $telephone = filter_input(INPUT_POST, 'Telephone', FILTER_SANITIZE_STRING);
        $sujet = filter_input(INPUT_POST, 'Sujet', FILTER_SANITIZE_STRING);
        $commentaire = filter_input(INPUT_POST, 'Comment', FILTER_SANITIZE_STRING);
        $acceptePerso = filter_input(INPUT_POST, 'acceptePerso', FILTER_VALIDATE_BOOLEAN);
    }
    else
    {
        header('Location: ../01pages/page07.php');
        exit();
    }
    
    /*  debut traitement de renvoi vers adresse mail    */

    // test de cette adresse pour éviter les spams
    $Destinataire = "pitchhawthorn@gmail.com";
    /*
    if (!preg_match("#/^[a-z0-9._-]+@(hotmail\live\msn).[a-z]{2,4}$#/", $Destinataire)) {
        $sautLigne = "\r\n";
    }
    else {
        $sautLigne = "\n";
    }
    */
    // le $sautLigne n'est utilisé QUE pour le $HEADER
    // Dans le msg ($message), les lignes sont séparées par     \n    et NE peuvent excéder 70 caractères !
    
    $sautLigne = "\r\n";
    //$message = 'message complet';


    $sujetEnvoi = "mail1stTest";
    $message = "Nom : " . $nom . "\n" . "Prenom : " . $prenom . "\n" . "Email : " . $email . "\n" . "Téléphone : " . $telephone . "\n" . "Sujet : " . $sujet . "\n" . "Commentaire : " . $commentaire . "\n" . "Accepté : " . $acceptePerso ;
    $header = "From:pitchhawthorn19@gmail.com \r\n";
    $header .= "Cc:pitchhawthorn19@gmail.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";


    $success = mail($Destinataire, $sujetEnvoi, $message);
    if ($success == true) {
        echo 'merci de nous avoir transmis vos coordonnées.<br>';
        echo 'Votre réponse vous sera transmise dans les meilleurs délais<br>';
        echo 'Bien à Vous ' . $nom . ' ' . $prenom;
        // header('Location: ../01pages/page07.php');
        exit();
    } else {
        $errorMessage = error_get_last()['message'];
        header('Location: ../01pages/page07.php');
        exit();
    }
    
    // autre test de simple envoi de mail :
    /*
    $objet = "premier test";
    $message = "message complet";
    
    mail($Destinataire, $objet, $message);
    echo "lettre envoyée à ".$Destinataire;
    */
    
    // ----------------------------------------------

    /* 1er TEST avec problème : 
    // construction de l'entête du mail
    $header = "From: \"Uppleva\"<monsite@http://localhost:9010/>".$sautLigne;
    $header .= "Reply-to: \"Uppleva\"<noreply@http://localhost:9010/>".$sautLigne;
    $objet = "premier test d'envoi de msg pour fichier uppleva";
    $message = "Nom : " . $nom . $sautLigne . "Prenom : " . $prenom . $sautLigne . "Email : " . $email . $sautLigne . "Téléphone : " . $telephone . $sautLigne . "Sujet : " . $sujet . sautLigne . "Commentaire : " . $commentaire . sautLigne . "Accepté : " . acceptePerso ;
    if (filter_var($Destinataire, FILTER_VALIDATE_EMAIL)) {
        mail($Destinataire, $objet, $$message, $header);
    }
    
     */
    
?>