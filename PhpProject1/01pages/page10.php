<?php
session_start();

if (isset($_SESSION['tonNom']) && isset($_SESSION['tonPrenom'])) {
    

$page_en_cours = "page10";
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
    <link href="../02CSS/Style001.css" rel="stylesheet" media="only screen and (min-width: 640px)" />
    <link href="../02CSS/Style002.css" rel="stylesheet" media="only screen and (max-width: 639px)" />
    <link href="../02CSS/Style002.css" rel="stylesheet" media="screen and (max-width: 639px) and handheld" />
    
    <script>
		function menumobile() {
				bloc = document.getElementById("menu");
				if (bloc.className === "afficher") {
						bloc.className = "masquer";
					}
				else {
						bloc.className = "afficher";
					}
			}
    </script>

</head>

<body>

<div class="global">

        <?php include("entete.php"); ?>

        <?php 
            /*$page_en_cours="page02";*/
            include("menu.php");
        ?>

    <!--    corps de fichier    -->
  
  <section class="contenu">

    <div class="contenu_page">
        <?php
        
            echo 'Cher(e)' . $_SESSION['tonNom'] . ' ' . $_SESSION['tonPrenom'] . ', votre mail est bien enregistré';
        ?>
        <br>
        <?php
            echo '<a href="logout.php">RETOUR</a>';
                // fichier logout.php ==> encore à faire = pour terminer avec $_SESSIO? !!!
                // puis retour au fichier index.php
        ?>
        
    </div>
  </section>

    
    <!--    pied de page    -->
        <?php include("piedDePage.php") ?>
     <!-- end .footer -->
</div>	  <!-- end .global -->

<?php 
    } else {
        echo 'Vous n\'êtes pas enregistré';
        echo '<a href="logout.php">RETOUR</a>';
    }
?>
</body>
</html>
