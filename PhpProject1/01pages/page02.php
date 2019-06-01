<?php
    $page_en_cours = "page02";
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
    
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#cmdPage02").mouseover(function(){
                    $("#cmdPage02").css("background-color", "#323232");
                    $("#cmdPage02").css("color", "#FFF");
            });
        });
    </script>
    
</head> 
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
            $page_en_cours="page02";
            include("menu.php");
        ?>

    <!--    corps de fichier    -->
  
  <section class="contenu">

    <div class="contenu_page">
    	<p>Uppleva, c'est ma seconde vie, une passion, un rêve transformé en réalité !</p><br>
        <p>Dynamique, "épicurieuse" et passionnée, j'ai choisi de transformer mon énergie en créativité.  Toujours
                        à la recherche de nouveautés, je suis perpétuellement en mouvement ! J'aime le changement, 
                        l'évolution des choses.</p><br>
        <p>Fan inconditionnelle des pays scandinaves, de leurs modes de vie et de pensée, j'ai créé Uppleva 
                        comme une ode à la vie nordique.</p><br>
        <p>Un projet d'aménagement ? Envie d'une touche d'originalité, de fonctionnalité et de simplicité ?
                         Uppleva, c'est tout cela à la fois.  Je vous propose un accompagnement sur-mesure, à la portée 
                         de votre budget, une écoute attentive de vos besoins et de vos envies.</p><br>
        <p>Uppleva, c'est la prise en charge de vos projets professionnels.  Je mets ma créativité à votre 
                        service.  L'image de votre entreprise est ainsi mise en évidence, en accord avec ses valeurs.</p><br>
        <p>Uppleva, ce sont des partenaires de qualité, des marques scandinaves d'exception et, pour certaines, totalement 
                        inédites en Belgique.</p><br>
        <p>Uppleva, vivez l'expérience scandinave !</p><br>
    </div>
  </section>

    
    <!--    pied de page    -->
        <?php include("piedDePage.php") ?>
     <!-- end .footer -->
</div>	  <!-- end .global -->

    <script type="text/javascript">
        window.onscroll=function(){menuSticky();};
        var menu = document.getElementById("menuPrincipal");
        var sticky = menu.offsetTop;

        function menuSticky(){
            if (window.pageYOffset >= sticky) {
                menu.classList.add("sticky");
            } else {
                menu.classList.remove("sticky");
            }
        }
    </script>

</body>
</html>
