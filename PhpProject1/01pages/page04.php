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
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#cmdPage04").mouseover(function(){
                    $("#cmdPage04").css("background-color", "#323232");
                    $("#cmdPage04").css("color", "#FFF");
            });
        });
    </script>
    
</head>

<body>

<div class="global">

        <?php include("entete.php"); ?>

        <?php 
            $page_en_cours="page04";
            include("menu.php");
        ?>

    <!--    corps de fichier    -->

  <section id="contenuPage4">


<!--      <div id="contenuPage4">   -->
        <a href="page04001.php">      
            <figure>
                  <img style="max-height: 200px; max-width: 200px;" 
                       alt="La Barrière de Transinne" 
                       src="../10images/002_Realisations_La-Barriere-de-Transinne/image045b.jpg" 
                       title="La Barrière de Transinne" 
                       href="page04001.php">
                  <!-- <p><a href="page04001.php">La Barrière de Transinne</a></p>  -->
              </figure>
        </a>
        <a href="page04002.php">
              <figure>
                  <img style="max-height: 200px; max-width: 200px;" alt="Noël" src="../10images/003_Realisations_Noel/image060b.jpg" title="Noël">
                  <figcaption></figcaption>
              </figure>
        </a>
        <a href="page04003.php">
              <figure>
                  <img style="max-height: 200px; max-width: 200px;" alt="Maison unifamiliale" src="../10images/004_Realisations_Maison-unifamiliale/image100b.jpg" title="Maison unifamiliale">
                  <figcaption></figcaption>
              </figure>
        </a>
        <a href="page04004.php">
              <figure>
                  <img style="max-height: 200px; max-width: 200px;" alt="Evènementiel" src="../10images/005_Realisations_evenementiel/image110b.jpg" title="Evènementiel">
                  <figcaption></figcaption>
              </figure>
        </a>
        <a href="page04006.php">
              <figure>
                  <img style="max-height: 200px; max-width: 200px;" alt="Appartement bruxellois" src="../10images/007_Realisations_appartement-bruxellois/image140b.JPG" title="Appartement bruxellois">
                  <figcaption></figcaption>
              </figure>
        </a>
 <!--         </div>    -->
      
  </section>

    <!--    pied de page    -->
        <?php include("piedDePage.php") ?>
     <!-- end .footer -->
</div>	  <!-- end .global -->
</body>
</html>
