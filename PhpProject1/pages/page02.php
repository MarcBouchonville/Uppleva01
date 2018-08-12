<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="../css/style001.css" rel="stylesheet" type="text/css"/>
   <link href="../css/styleMenu.css" rel="stylesheet" type="text/css"/>
   
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
   <title>Page 1</title>

   <meta name="author" content="Marc Bouchonville" />
   <meta name="date" content="2018-06-03" scheme="YYYY-MM-DD" />
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">	-->
   <meta name="expires" content="1 January 2020 ">
   <link href=”favicon.ico” rel=”icon” />
<!--	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	-->
    <title>à propos</title>
    </head>
    <body>
        
        <div class='global'>
            <header>
                <?php include ("entete.php"); ?>
            </header>

            <nav class="blocmenu">
                        <div id='cssmenu'>
                        <ul>
                            <li class='has-sub'><a href='../index.php'><span>home</span></a></li>
                            <li class='active'><a href='page02.php'><span>à propos</span></a></li>
                           <li class='has-sub'><a href='#'><span>services</span></a>
                              <ul>
                                  <li class='last'><a href='#'><span onclick="fenetrePopup()">shopping</span></a></li>
                              </ul>
                           </li>
                           <li><a href='#'><span>réalisations</span></a></li>
                           <li class='has-sub'><a href='#'><span>projets</span></a></li>
                           <li class='has-sub'><a href='#'><span>contact</span></a></li>
                        </ul>
                        </div>
            </nav>
            
            
            
            <section class='contenu'>
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
            <footer class="pied">
                <?php include ("pied-de-page.php"); ?>
            </footer>
        </div>
        
            <script type="text/javascript">
                window.onscroll=function(){menuSticky()};
                var menu = document.getElementById("menu");
                var sticky = menu.offsetTop;
                
                function menuSticky(){
                    if (window.pageYOffset >= sticky) {
                        menu.classList.add("sticky")
                    } else {
                        menu.classList.remove("sticky");
                    }
                }
				
				function fenetrePopup() {
					var myWindow = window.open("", "NomDeFenetre", "width=200,height=100");
					myWindow.document.write("<p>this is the new window " + myWindow.name + "</p>");
				}
            </script>

    </body>
</html>
