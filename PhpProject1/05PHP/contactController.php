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
        header('Location: ../pages/page07.php');
        exit();
    }
    
    /*  debut traitement de renvoi vers adresse mail    */
    $Destinataire = "pitch_marc25@hotmail.com";
    
    // test de cette adresse pour éviter les spams
    /*
    if (!preg_match("#^[a-z0-9._-]+@(hotmail\live\msn).[a-z]{2,4}$#", $Destinataire)) {
        $sautLigne = "\r\n";
    }
    else {
        $sautLigne = "\n";
    }
    */
    $message = "message complet";
    $success = mail('pitch_marc25@hotmail.com', 'My Subject', $message);
    if (!$success) {
    $errorMessage = error_get_last()['message'];
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