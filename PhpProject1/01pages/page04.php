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
    <link href="../02CSS/Style002.css" rel="stylesheet" media="handeld" />
    
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
    
</head>

<body>

<div class="global">

        <?php include("entete.php"); ?>

        <?php include("menu.php"); ?>

    <!--    corps de fichier    -->

  <section class="contenu">


      <table class="contenuTableauGeneral">
          <tbody>
              <tr>
                  <td>
                      <figure>
                          <figcaption>première image d'extérieur</figcaption>
                          <img style="max-height: 200px; max-width: 200px;" alt="image extérieure 1" src="../10images/ext001.jpg">
                          <p><a href="*">image d'intérieur</a></p>
                      </figure>
                  </td>
                  <td>
                      <figure>
                          <figcaption>seconde image d'extérieur</figcaption>
                          <img style="max-height: 200px; max-width: 200px;" alt="image extérieure 2" src="../10images/ext002.jpg">
                          <p>Décoration par Virginie André</p>
                      </figure>
                  </td>
              </tr>
              <tr>
                  <td>
                      <figure>
                          <figcaption>première image d'intérieur</figcaption>
                          <img style="max-height: 200px; max-width: 200px;" alt="image interieure 4" src="../10images/int004.jpg">
                          <p><a href='*'>collection pour ce type d'images</a></p>
                      </figure>
                  </td>
                  <td>
                      <figure>
                          <figcaption>seconde image d'intérieur</figcaption>
                          <img style="max-height: 200px; max-width: 200px;" alt="image interieure 5" src="../10images/int005.jpg">
                          <p><a href='*'>collection pour ce type d'images</a></p>
                      </figure>
                  </td>
              </tr>
          </tbody>
      </table>
      
  </section>

    <!--    pied de page    -->
        <?php include("piedDePage.php") ?>
     <!-- end .footer -->
</div>	  <!-- end .global -->
</body>
</html>
