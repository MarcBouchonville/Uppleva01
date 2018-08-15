<?php
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="css/style001.css" rel="stylesheet" type="text/css"/>
   <link href="css/styleMenu.css" rel="stylesheet" type="text/css"/>
   
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
   <title>Page 1</title>

   <meta name="author" content="Marc Bouchonville" />
   <meta name="date" content="2018-06-03" scheme="YYYY-MM-DD" />
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">	-->
   <meta name="expires" content="1 January 2020 ">
   <link href=”favicon.ico” rel=”icon” />
<!--	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>	-->
   
</head>
<body>
</head>
<body>
<div class="global">
    <header class="entete">
    	<img src="images/image001.jpg" alt="UPPLEVA" height="80"/>
    </header>
    <nav class="blocmenu" id="menuPrincipal">
        <div id="cssmenu">
            <ul>
                <li class='active'><a href='javascript:void(0)'><span>home</span></a></li>
                <li class='has-sub'><a href='pages/page02.php'><span>à propos</span></a></li>
                <li class='has-sub'><a href='pages/page03.php'><span>services</span></a>
                    <ul>
                        <li class='last'><a href='#'><span onclick="fenetrePopup()">shopping</span></a></li>
                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>réalisations</span></a></li>
                <li class='has-sub'><a href='#'><span>projets</span></a></li>
                <li class='has-sub'><a href='#'><span>contact</span></a></li>
            </ul>
        </div>
    </nav>
    <section class="contenu">

            <div class="contenuImages">
                <table>
                    <tr>
                        <td><img class="imgsurvol" src="images/image002.jpg" alt="Välkommen"
                                width="344" height="340" />
                        </td>
                        <td rowspan="2"><img class="imgsurvol" src="images/image003.jpg" alt="Välkommen"
                                width="344" height="505" />
                        </td>
                    </tr>
                    <tr>
                        <td><img class="imgsurvol" src="images/image004.jpg" alt="Välkommen"
                                width="344" height="160" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><img class="imgsurvol" src="images/image005.jpg" alt="Välkommen"
                                width="693" height="250" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><img class="imgsurvol" src="images/image006.jpg" alt="Välkommen"
                                width="693" height="250" />
                        </td>
                    </tr>
                </table>
        
            </div>
            <hr>
    </section>

    <footer class="pied">
        <div class="colonnes_pied">
            <div class="cols_gauche">
                <div class="col_gauche_01">
                    <a href="#">copyright @</a>
                </div>
            </div>
            <div class="cols_droite">
                <div class="col_droite_01">
                    <a href="https://www.instagram.com/uppleva.NordicInteriorDesign" title="connexion INSTAGRAM">
                        <img class="image_adresse" src="images/lien004_instagram.jpg" alt="I" width="20px" height="20px" />
                    </a>
                </div>
                <div class="col_droite_02">
                    <a href="https://www.linkedin.com/in/virginieandre/" title="connexion LinkedIn">
                        <img class="image_adresse" src="images/lien005_linkedin.jpg" alt="L" width="20px" height="20px" />
                    </a>
                </div>
                <div class="col_droite_03">
                    <a href="https://www.facebook.com/virginieuppleva" title="connexion Facebook">
                        <img class="image_adresse" src="images/lien001_facebook.jpg" alt="F" width="20px" height="20px" />
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>
    
                <script type="text/javascript">
                window.onscroll = function() {menuSticky();};
                var menu = document.getElementById("menuPrincipal");
                var sticky = menu.offsetTop;
                
                function menuSticky(){
                    if (window.pageYOffset >= sticky) {
                        menu.classList.add("sticky");
                    } else {
                        menu.classList.remove("sticky");
                    }
                }
				
				function fenetrePopup() {
					var myWindow = window.open("", "NomDeFenetre", "width=400,height=200");
					myWindow.document.write("<p>this is the new window " + myWindow.name + "</p>");
				}
            </script>
</body>
<html>
