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
    
    <!-- <link href="../02css/style007.css" rel="stylesheet" type="text/css"/>	-->
    
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
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $("#cmdPage07").mouseover(function(){
                    $("#cmdPage07").css("background-color", "#323232");
                    $("#cmdPage07").css("color", "#FFF");
            });
        });
    </script>
    
    
    <script>
    $(document).ready(function(){
      $("input").focus(function(){
        $(this).css("background-color", "#cccccc");
      });
      $("input").blur(function(){
        $(this).css("background-color", "#ffffff");
      });
    });
    </script>

    <script>
    $(document).ready(function(){
      $("textarea").focus(function(){
        $(this).css("background-color", "#cccccc");
      });
      $("textarea").blur(function(){
        $(this).css("background-color", "#ffffff");
      });
    });
    </script>
    
    <script>
        function fonction01() {
            var x = document.getElementById("champNom");
            x.value = x.value.toUpperCase();
        }
    </script>
    
    <script>
        // ok
        function fonction02() {
            var str = document.getElementById("champPrenom");
            str.value = str.value.toLowerCase().replace(/\b[a-z]/g, function(letter) {
                return letter.toUpperCase();
            });
        }
    </script>
    
</head>

<body>

<div class="global">

        <?php include("entete.php"); ?>

        <?php 
            $page_en_cours="page07";
            include("menu.php");
        ?>

    <!--    corps de fichier    -->

  <section class="contenu">

    <div class="form-style-10">
        <form action="../05PHP/contactController.php" method="POST">
            <div class="section"><span>1</span>Identité</div>
                <div class="inner-wrap">
                    <label>Nom</label>
                    <input type="text" name="Nom" required maxlength="50" placeholder="NOM" id="champNom" onblur="fonction01()" />
                    <label>Prénom</label>
                    <input type="text" name="Prenom" maxlength="50" placeholder="Prénom" id="champPrenom" onblur="fonction02()" />
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
                    <input name="acceptePerso" type="checkbox" value="acceptePerso" checked="checked" />
                    <label>J'accepte que mes données personnelles soient conservées et utilisées par Uppleva</label>
                </div>
            <div class="button-section">
                <input type="submit" name="envoyer" value='envoyer' />
            </div>
            
            <div class="section"></div>
                <div class="inner-wrap">
                    <br>
                    <p>UPPLEVA</p>
                    <p>Virginie.<wbr>andre@uppleva.<wbr>be</p>
                    <p>+32 486<wbr> 72<wbr> 85<wbr> 26</p>
                </div>
        </form>
    </div>

  </section>

    <!--    pied de page    -->
        <?php include("piedDePage.php") ?>
     <!-- end .footer -->
</div>	  <!-- end .global -->
</body>
</html>
