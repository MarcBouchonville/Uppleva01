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
    
</head>

<body>

<div class="global">

        <?php include("entete.php"); ?>


    <!--    corps de fichier    -->

  <section class="contenu">
    <article class="contentimage fade">
		<ul>
                    <li><img src="../10images/003_Realisations_Noel/image060.jpg" alt="1ere image" id="slider" /></li>
		</ul>
    </article>
  </section>
  <button>
        <a href="page04.php">Retour</a>
  </button>
    <!--    pied de page    -->
        <?php include("piedDePage.php") ?>
     <!-- end .footer -->
</div>	  <!-- end .global -->

	<script type="text/javascript">
		var images = ["../10images/003_Realisations_Noel/image060.jpg", "../10images/003_Realisations_Noel/image061.jpg", "../10images/003_Realisations_Noel/image062.jpg", "../10images/003_Realisations_Noel/image063.jpg", "../10images/003_Realisations_Noel/image064.jpg", "../10images/003_Realisations_Noel/image065.jpg", "../10images/003_Realisations_Noel/image066.jpg", "../10images/003_Realisations_Noel/image067.jpg", "../10images/003_Realisations_Noel/image068.jpg", "../10images/003_Realisations_Noel/image070.jpg", "../10images/003_Realisations_Noel/image071.jpg", "../10images/003_Realisations_Noel/image072.jpg", "../10images/003_Realisations_Noel/image073.jpg", "../10images/003_Realisations_Noel/image074.jpg", "../10images/003_Realisations_Noel/image075.jpg", "../10images/003_Realisations_Noel/image076.jpg", "../10images/003_Realisations_Noel/image077.jpg", "../10images/003_Realisations_Noel/image078.jpg", "../10images/003_Realisations_Noel/image079.jpg", "../10images/003_Realisations_Noel/image080.jpg", "../10images/003_Realisations_Noel/image081.jpg", "../10images/003_Realisations_Noel/image082.jpg", "../10images/003_Realisations_Noel/image083.jpg", "../10images/003_Realisations_Noel/image085.jpg", "../10images/003_Realisations_Noel/image086.jpg", "../10images/003_Realisations_Noel/image087.jpg", "../10images/003_Realisations_Noel/image088.jpg", "../10images/003_Realisations_Noel/image089.jpg", "../10images/003_Realisations_Noel/image090.jpg"];
		var i=0;
		
		setInterval (function() {
			document.getElementById('slider').src=images[i];
			i++;
			if (i===29) i=0;
		},1500);
	</script>

</body>
</html>
