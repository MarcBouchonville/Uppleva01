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
    <link href="../02CSS/Style001.css" rel="stylesheet" media="only screen and (min-device-width: 640px)" />
    <link href="../02CSS/Style002.css" rel="stylesheet" media="only screen and (max-device-width: 639px)" />
    <link href="../02CSS/Style002.css" rel="stylesheet" media="screen and (max-device-width: 639px) and handheld" />
    
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
            $("#cmdPage05").mouseover(function(){
                    $("#cmdPage05").css("background-color", "#323232");
                    $("#cmdPage05").css("color", "#FFF");
            });
        });
    </script>
    
</head>

<body>

<div class="global">

        <?php include("entete.php"); ?>

        <?php 
            $page_en_cours="page05";
            include("menu.php");
        ?>

    <!--    corps de fichier    -->
  
  <section class="contenu">
    <article class="contentimage fade">
		<ul>
                    <li><img src="../10images/008_Projets/image150.jpg" alt="1ere image" id="slider" /></li>
		</ul>
    </article>
  </section>
    
    <!--    pied de page    -->
        <?php include("piedDePage.php") ?>
     <!-- end .footer -->
</div>	  <!-- end .global -->
	<script type="text/javascript">
		var images = ["../10images/008_Projets/image150.jpg", "../10images/008_Projets/image151.jpg", "../10images/008_Projets/image152.jpg", "../10images/008_Projets/image153.jpg", "../10images/008_Projets/image154.jpg", "../10images/008_Projets/image155.jpg", "../10images/008_Projets/image156.jpg", "../10images/008_Projets/image157.jpg", "../10images/008_Projets/image158.jpg", "../10images/008_Projets/image159.jpg", "../10images/008_Projets/image160.jpg", "../10images/008_Projets/image161.jpg", "../10images/008_Projets/image162.jpg", "../10images/008_Projets/image163.jpg", "../10images/008_Projets/image164.jpg", "../10images/008_Projets/image165.jpg", "../10images/008_Projets/image166.jpg", "../10images/008_Projets/image167.jpg", "../10images/008_Projets/image168.jpg", "../10images/008_Projets/image169.jpg"];
		var i=0;
		
		setInterval (function() {
			document.getElementById('slider').src=images[i];
			i++;
			if (i===20) i=0;
		},1200);
	</script>
</body>
</html>
