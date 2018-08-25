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

            <nav class="blocmenu" id="menuPrincipal">
                        <div id='cssmenu'>
                        <ul>
                            <li class='has-sub'><a href='../index.php'><span>home</span></a></li>
                            <li class='has-sub'><a href='page02.php'><span>à propos</span></a></li>
                            <li class='active'><a href="page03.php"><span>services</span></a>
                              <ul>
                                  <li class='last'><a href='#'><span onclick="fenetrePopup()">shopping</span></a></li>
                              </ul>
                           </li>
                           <li><a href='#'><span>réalisations</span></a></li>
                           <li class='has-sub'><a href='#'><span>projets</span></a></li>
                           <li class='has-sub'><a href='page05.php'><span>contact</span></a></li>
                        </ul>
                        </div>
            </nav>
            
            
            
            <section class='contenu'>
                <div class="contenu_page">
                    <p>Vous souhaitez donner une nouvelle vie à votre entreprise.  Vous voulez que vos employés se sentent 
                        bien au travail.  Vous voulez-adapter l'intérieur de vos bureaux, de votre boutique et que ceux-ci 
                        reflètent les valeurs de votre entreprise.</p><br>
                    <p class="fenetreExplication">
                        <a href='#'><span onclick="fenetrePopup01()">Uppleva vous propose de travailler, avec vous, l'image de votre entreprise.</span></a>
                    </p><br>
                    <p>
                        Mobilier sur mesure
                    </p><br>
                    <p class="fenetreExplication">
                        <a href='#'><span onclick="fenetrePopup02()">Vous ne trouvez pas LE meuble dont vous rêvez ? Confiez sa réalisation
                                        à Uppleva</span></a>
                    </p><br>
                    <p>
                        Ateliers &laquo; découverte &raquo;
                    </p><br>
                    <p>
                        Découvrez le design scandinave et les philosophes des pays nordiques !
                    </p><br>
                    <p>
                        Au programme, découverte du Lagom et du Hygge, dégustation de produits, bonne humeur et détente 
                        garanties !
                    </p><br>
                    <p>
                        Architecture d'intérieur
                    </p><br>
                    <p class="fenetreExplication">
                        <a href='#'>
                            <span onclick="fenetrePopup03()">Un projet de construction ou de rénovation, Uppleva s'occupe de tout. Selon vos besoins, je 
                                vous propose de concevoir votre nouvel intérieur.</span>
                        </a>
                    </p><br>
                    <p>
                        Décoration d'intérieur
                    </p><br>
                    <p class="fenetreExplication">
                        <a href='#'>
                            <span onclick="fenetrePopup04()">Envie de donner un nouveau souffle à votre intérieur ? Couleurs, modiliers, décoration : laissez-vous inspirer !</span>
                        </a>
                    </p><br>
                    <p class="fenetreExplication">
                        <a href='#'>
                            <span onclick="fenetrePopup05()">Coaching</span>
                        </a>
                    </p><br>
                </div>
            </section>
            <footer class="pied">
                <?php include ("pied-de-page.php"); ?>
            </footer>
        </div>
        
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
                };
				
				function fenetrePopup01() {
                                        var myWindow = window.open("", "Uppleva - et votre entreprise", "width=700,height=600");
                                        var txtA = '<div id="monImage001" style="background-image: url(../images/image003.jpg); '
                                        var txtA = txtA + 'height: 598px; ';
                                        var txtA = txtA + 'background-position: center; ';
                                        var txtA = txtA + 'background-repeat: no-repeat; ';
                                        var txtA = txtA + 'background-size: cover; ';
                                        var txtA = txtA + 'opacity: 0.5;';
                                        var txtA = txtA + '">';
                                        var txtA = txtA + '<div class="titreImage" style="opacity: 1;"';
                                        var txtA = txtA + '>';
                                        var txtA = txtA + '<ul class="texteSurPopup" style="font-size: 4vw; font-weight: bold; ';
                                        var txtA = txtA + 'color: black; opacity: 1;"';
                                        var txtA = txtA + '><li>';
                                        var txtA = txtA + "Réalisation des metrés" + "</li><li>";
                                        var txtA = txtA + "Plan 2D et 3D" + "</li><li>";
                                        var txtA = txtA + "Recherches et études des matériaux, mobiliers, décorations" + "</li><li>";
                                        var txtA = txtA + "Conseils couleur, éclairage, ambiance" + "</li><li>";
                                        var txtA = txtA + "Etude de devis des corps de métier" + "</li><li>";
                                        var txtA = txtA + "Partenariat avec des graphistes pour la réalisation de votre logo" + "</li><li>";
                                        var txtA = txtA + "Suivi de chantier" + "</li>";
                                        var txtA = txtA + "</ul></div></div>";
					myWindow.document.write("<p>" + myWindow.name + "</p>" + txtA);
				};
                                
                                function fenetrePopup02() {
                                        var myWindow = window.open("", "Uppleva - Le meuble dont vous rêvez", "width=600,height=300");
                                        var txtB = "<ul><li>";
                                        var txtB = txtB + "Plans 2D et 3D" + "</li><li>";
                                        var txtB = txtB + "Recherches et études des matériaux adaptés" + "</li><li>";
                                        var txtB = txtB + "Partenariat avec des menuisiers proposant un travail d'une grande qualité" + "</li>";
                                        var txtB = txtB + "</ul>";
					myWindow.document.write("<p>" + myWindow.name + "</p>" + txtB);
                                };
                                
                                function fenetrePopup03() {
                                    var myWindow = window.open("", "Uppleva - Projet de construction ou de rénovation", "width=600,height=300");
                                    var txtC = "<ul><li>";
                                    var txtC = txtC + "Réalisation des métrés" + "</li><li>";
                                    var txtC = txtC + "Plans 2D ou 3D, selon vos besoins" + "</li><li>";
                                    var txtC = txtC + "Recherches et études des matériaux, mobiliers, décorations" + "</li><li>";
                                    var txtC = txtC + "Conseils couleur, éclairage, ambiance" + "</li><li>";
                                    var txtC = txtC + "Etude de devis des corps de métier" + "</li><li>";
                                    var txtC = txtC + "Partenaires de qualité" + "</li><li>";
                                    var txtC = txtC + "Suivi de chantier" + "</li>";
                                    var txtC = txtC + "</ul>";
                                    myWindow.document.write("<p>" + myWindow.name + "</p>" + txtC);
                                };
                                
                                function fenetrePopup04() {
                                    var myWindow = window.open("", "Uppleva - Un nouveau souffle à votre intérieur !", "width=600,height=300");
                                    var txtD = "<ul><li>";
                                    var txtD = txtD + "Recherche d'objets de décoration, de couleurs, de luminaires, de mobiliers" + "</li><li>";
                                    var txtD = txtD + "Partenariats avec des marques scandinaves exceptionnelles" + "</li><li>";
                                    var txtD = txtD + "Personal shopping" + "</li><li>";
                                    var txtD = txtD + "Conseils, coaching" + "</li>";
                                    var txtD = txtD + "" + "</ul>";
                                    myWindow.document.write("<p>" + myWindow.name + "</p>" + txtD);
                                };
                                
                                function fenetrePopup05() {
                                    var myWindow = window.open("", "Uppleva - Coaching", "width=600,height=300");
                                    var txtE = "<ul><li>";
                                    var txtE = txtE + "Home organising" + "</li><li>";
                                    var txtE = txtE + "Home staging" + "</li><li>";
                                    var txtE = txtE + "Visite &laquo; conseils &raquo;" + "</li><li>";
                                    var txtE = txtE + "Conseils, coaching" + "</li>";
                                    var txtE = txtE + "" + "</ul>";
                                    myWindow.document.write("<p>" + myWindow.name + "</p>" + txtE);
                                };
            </script>

    </body>
</html>
