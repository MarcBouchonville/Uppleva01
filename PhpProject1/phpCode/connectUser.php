<?php

    /*  cases du formulaire index.php rempli ?  */
    
    $valid = isset($_POST['Nom']) && isset($_POST['motdepasse']);
    //var_dump($valid);

    
    if ($valid) {
        // si $valid n'est PAS NULL, alors ces data sont remplies
        // nettoyage et assignation
        
        $nom01 = filter_input(INPUT_POST,'Nom',FILTER_SANITIZE_STRING);
        $nom = mb_strtoupper($nom01,'UTF-8');
        $Pwd = filter_input(INPUT_POST,'motdepasse',FILTER_SANITIZE_);
    }
    else
    {
        var_dump($valid);
        //header('Location: ../pages/page02.php');
        exit();
    }
    
    
    /*  debut traitement PHP    */
    
    require("connect.php");
    try {
        $pdo = new PDO("mysql:host=" . SERVER . ";dbname=" . BASE . ";charset=utf8", USER, PASSWD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        
        //  statements :
        $sql = "select tusers.NomUS, tusers.PrenomUS, tusers.PwdUS, tusers.Privilege, "
                . "tusers.Actif from tusers where (tusers.NomUS like '" . $nom . "' and tusers.PwdUS like '"
                . $Pwd . "')";
        
        $result = $pdo->query($sql);
        
        if ($result->num_rows > 0) {
            // sortir les data de chaque enregistrement
            while($row = $result->fetch_assoc()) {
                echo "<br> id: ". $row["IdUS"]. " - Name: ". $row["NomUS"] . "<br>";
            }
        } else {
            echo "Aucun résultat";
            header('location: ../pages/page10.php');
        }
        
    }
    catch(PDOException $e) {
        echo "Erreur: " . $e;
    }
?>