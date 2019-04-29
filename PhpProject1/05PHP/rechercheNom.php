<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    require "connect.php";
    try {

        $pdo = new PDO("mysql:host=" . SERVER . ";dbname=" . BASE . ";charset=utf8", USER, PASSWD);
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        if (!empty($_POST["nomPP"])) {
            $sql="SELECT Nom, Prenom, Email FROM tvisiteurs WHERE Nom LIKE '".$_POST["nomPP"]."%' ORDER BY nomPP LIMIT 0,6";
            $query->execute($sql);
            $resultat=$query->fetch(PDO::FETCH_ASSOC);
            if (!empty($resultat)) {
                ?>
                <ul id="listeEntites">
                    <?php
                        foreach ($resultat as $personne) {
                            ?>
                    <li onclick="choixNom('<?php echo $personne["Nom"] + " " + $personne["Prenom"] + " " + $personne["Email"]; ?>');">
                                <?php echo $personne["Nom"] + " " + $personne["Prenom"] + " " + $personne["Email"]; ?>
                    </li>
                        <?php } ?>
                </ul>
                <?php }
        }
        
    }
        catch(PDOException $e) {
        echo "---  Erreur:   " . $e;
    }
?>