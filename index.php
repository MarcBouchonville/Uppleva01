<?php
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/styleMenu.css">
   <link rel="stylesheet" href="css/style001.css">
   
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
<div class="global">
	<?php include ("pages/entete.php"); ?>

    <nav class="blocmenu">
            <div id='cssmenu'>
            <ul>
               <li class='active'><a href='#'><span>home</span></a></li>
               <li class='has-sub'><a href='#'><span>à propos</span></a></li>
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
        <p>copyright@ mb</p>
		
    </footer>

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
    
</div>
</body>
<html>
