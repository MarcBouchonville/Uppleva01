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

        <?php 
            $page_en_cours="page06";
            include("menu.php");
        ?>

    <!--    corps de fichier    -->
  
  <section class="contenu">
    <article class="contentimage fade">
		<ul>
    		<li><img src="../10images/001_inspiration/image021.jpg" alt="1ere image" id="slider" /></li>
		</ul>
    </article>
  </section>
    
    <!--    pied de page    -->
        <?php include("piedDePage.php") ?>
     <!-- end .footer -->
</div>	  <!-- end .global -->
	<script type="text/javascript">
		var images = ["../10images/001_inspiration/image021.jpg", "../10images/001_inspiration/image023.png", "../10images/001_inspiration/image024.png", "../10images/001_inspiration/image026.png", "../10images/001_inspiration/image027.png", "../10images/001_inspiration/image029.png", "../10images/001_inspiration/image030.png", "../10images/001_inspiration/image031.png"];
		var i=0;
		
		setInterval (function() {
			document.getElementById('slider').src=images[i];
			i++;
			if (i===8) i=0;
		},1200);
	</script>
</body>
</html>
