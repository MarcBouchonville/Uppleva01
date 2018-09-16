<?php

    session_start();

    // recuperation de data
    /* $nom = $_POST['nom'];
    $prenom = $_POST['prenom']; */
?>
<!DOCTYPE html>

<html>
    <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <meta HTTP-EQUIV="Pragma" content="no-cache">
   <meta http-equiv="Refresh" content="4; URL=../index.php">
   
   
   <link href="../css/style004.css" rel="stylesheet" type="text/css"/>
   
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
   <title>Page 1</title>

   <meta name="author" content="Marc Bouchonville" />
   <meta name="date" content="2018-06-03" scheme="YYYY-MM-DD" />

   <meta name="expires" content="1 January 2020 ">
   <link href=”favicon.ico” rel=”icon” />

    <title>à propos</title>
    </head>
    <body>
        
        <div class='global'>
            <header>
                <?php include ("entete.php"); ?>
            </header>


                <main>
                    <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="../images/image003.jpg" style="width:100%; height: 300px;">
                        <div class="text"></div>
                            <div>
                                    <center>
                                            <p>
                                                <?php echo $_SESSION['tonNom'] . ' ' . $_SESSION['tonPrenom']; ?>
                                            </p>
                                            <p>Votre message a été enregistré</p>
                                            <br>
                                            <p>merci</p>
                                    </center>
                            </div>
                    </div>

                    <div class="mySlides fade">
                                    <div class="numbertext">2 / 3</div>
                                    <img src="../images/image004.jpg" style="width:100%; height: 300px;">
                                    <div class="text"></div>
                            <div>
                                    <center>
                                            <p>
                                                <?php echo $_SESSION['tonNom'] . ' ' . $_SESSION['tonPrenom']; ?>
                                            </p>
                                            <p>Votre message a été enregistré</p>
                                            <br>
                                            <p>merci</p>
                                    </center>
                            </div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="../images/image005.jpg" style="width:100%; height: 300px;">
                        <div class="text"></div>
                            <div>
                                    <center>
                                            <p>
                                                <?php echo $_SESSION['tonNom'] . ' ' . $_SESSION['tonPrenom']; ?>
                                            </p>
                                            <p>Votre message a été enregistré</p>
                                            <br>
                                            <p>merci</p>
                                    </center>
                            </div>
                    </div>

                    <br>
                    <br>
                    <div style="text-align: center;">
                      <span class="dot"></span> 
                      <span class="dot"></span> 
                      <span class="dot"></span> 
                    </div>
                </main>


            

        <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
               slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>        
        
    </body>
</html>
