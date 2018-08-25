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
   <link href="../css/style002.css" rel="stylesheet" type="text/css"/>
   
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
                           <li class='has-sub'><a href="#"><span>services</span></a>
                              <ul>
                                  <li class='last'><a href='#'><span onclick="fenetrePopup()">shopping</span></a></li>
                              </ul>
                           </li>
                           <li><a href='#'><span>réalisations</span></a></li>
                           <li class='has-sub'><a href='#'><span>projets</span></a></li>
                           <li class='active'><a href='#'><span>contact</span></a></li>
                        </ul>
                        </div>
            </nav>

            <section class='contenu'>
                <div class="form-style-10">
                    <form action="../phpCode/contactController.php" method="POST">
                        <div class="section"><span>1</span>Identité</div>
                            <div class="inner-wrap">
                                <label>Nom</label>
                                <input type="text" name="Nom" required maxlength="50" placeholder="NOM" />
                                <label>Prénom</label>
                                <input type="text" name="Prenom" maxlength="50" placeholder="Prénom" />
                            </div>
                        <div class="section"><span>2</span>Contact</div>
                            <div class="inner-wrap">
                                <label>Email</label>
                                <input type="email" name="Email" required maxlength="70" placeholder="email@mail.com" />
                                <label>Téléphone</label>
                                <input type="tel" name="Telephone" maxlength="20" placeholder="04012010" />
                            </div>
                        <div class="section"><span>3</span>Objet</div>
                            <div class="inner-wrap">
                                <label>Sujet</label>
                                <input type="text" name="Sujet" maxlength="50" />
                                <label>Message</label>
                                <textarea name="Comment" maxlength="2000" placeholder="maximum 2000 lettres"></textarea>
                            </div>
                        <div class="button-section">
                            <input type="submit" name="envoyer" />
                        </div>
                        
                        <div class="section"></div>
                            <div class="inner-wrap">
                                <br>
                                <p>UPPLEVA</p>
                                <p>Virginie.andre@uppleva.be</p>
                                <p>+32 486 72 85 26</p>
                            </div>
                    </form>
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
            </script>
    </body>
</html>
