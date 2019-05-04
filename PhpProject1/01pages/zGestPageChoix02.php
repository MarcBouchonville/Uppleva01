<?php
    $page_en_cours = "zGestPageChoix01.php";
?>

<!doctype html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="author" content="Marc Bouchonville" />
   <meta name="date" content="2018-11-15" scheme="YYYY-MM-DD" />
   <meta name="expires" content="1 January 2020 ">
   <meta name="keywords" lang="fr" content="Uppleva, design, meuble, mobilier, projet d'aménagement, originalité, Virginie André" />
   <meta lang="fr" name="description" content="Uppleva, vivez l'expérience scandinave" />
   <meta lang="en" name="description" content="Uppelva, live Scandinavian experience" />
<title>Uppleva</title>
	<!-- <link href="02CSS/Style001.css" rel="stylesheet" media="all" /> -->
    <link href="../02CSS/Style001.css" rel="stylesheet" media="only screen and (min-device-width: 640px)" />
    <link href="../02CSS/Style002.css" rel="stylesheet" media="only screen and (max-device-width: 639px)" />
    <link href="../02CSS/Style002.css" rel="stylesheet" media="screen and (max-device-width: 639px) and handheld" />
    
    <!--    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>  -->
    <!-- <script src="https://unpkg.com/vue@2.0.3/dist/vue.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>  -->
    <script src="../15js/vue.js"></script>
    

    <style>
        .hide {
            display: none;
        }
    </style>
    
</head>

<body>

<div class="global">

        <?php include("entete.php"); ?>

    <!-- pour info : PAS de menu ici -->
    <!--    corps de fichier    -->

    <br>
    <br>
    <main>
        <div class="contenu_page" id="plant_manager" style="text-align: center">
            <div id="recherche_entite">
                <input
                    type="text"
                    name="recherche"
                    class="form-control"
                    style="text-align: center; border-radius: 15px; max-width: 75%; margin: 0 auto 15px auto"
                    placeholder="Nom"
                    onkeyup="search(this.value)"/>
                <p id="connect-lost" class="hide">connexion perdue</p>
            </div>
            <div class="laTable">
                <table border="1" id="app">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Suivi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="tvisiteurs in visiteurs">
                            <td>{{ tvisiteurs.idVisiteur }}</td>
                            <td>{{ tvisiteurs.Nom }}</td>
                            <td>{{ tvisiteurs.Prenom }}</td>
                            <td>{{ tvisiteurs.Email }}</td>
                            <td>{{ tvisiteurs.Telephone }}</td>
                            <td>{{ tvisiteurs.Suivi }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </main>

    <!--    pied de page    -->
        <!-- PAS besoin du pied ici pour la gestion des clients -->
        <br>
        <br>
        <hr>
        <div>
            <a href="zGestMenu.php">RETOUR</a>
        </div>
     <!-- end .footer -->
</div>	  <!-- end .global -->

<script>
    var app = new Vue ({
       el: '#app',
       data: {
           visiteurs: [{
                   idVisiteur: 1,
                   Nom: "Bouc",
                   Prenom: "Marc",
                   Email: "azer@df.com",
                   Telephone: "025658855",
                   Suivi: "ok"
           }]
       }
    });
</script>
<script>
    if (!window.XMLHttpRequest && window.ActiveXObject) {
        try {
        // Tester si les ActiveX sont autorises
        new ActiveXObject("Microsoft.XMLHTTP");
        // Definir le constructeur
            window.XMLHttpRequest = function() {
            return new ActiveXObject("Microsoft.XMLHTTP");
            };
        }
        catch (exc) {}
}
</script>
    

</body>
</html>
