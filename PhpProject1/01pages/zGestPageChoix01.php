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
    <script src="https://unpkg.com/vue@2.0.3/dist/vue.js"></script>
    
    

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
            <table border="1">
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
     <!-- end .footer -->
</div>	  <!-- end .global -->

<script>
    var vm = new vue ({
       el:'#plant_manager',
       data: {
           visiteurs:[{
                   idVisiteur:'1',
                   Nom:'nom',
                   Prneom:'prenom',
                   Email:'mail',
                   Telephone:'tel',
                   Suivi:'suivi',
           }]
       }
    });
    
    
    function search(filter){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200){
                document.getElementById('connection-lost').style.display = "hide";
                var visiteurs = JSON.parse(this.responseText);
                vm.visiteurs.splice(0);
                for (var i = 0; i < visiteurs.length; i++) {
                    Vue.set(vm.visiteurs, i, visiteurs[i]);
                }
            }
            else if(this.readyState === 4){
                document.getElementById('connection-lost').style.display = 'block';
            }
            else {
                // ne nous intersse pas
            }   
        }
        xhttp.open("GET", "../05PHP/rechercheNom.php?filter=" + filter, true);
        xhttp.send();
    }
    // initialisation du tableau
    search('');
    
</script>

</body>
</html>
