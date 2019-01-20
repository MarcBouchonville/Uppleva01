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
    <style>
        #ecranNrTrois {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>

<div class="global">

        <?php include("entete.php"); ?>

        <?php include("menu.php"); ?>

    <!--    corps de fichier    -->

  <section class="contenu">

    <div class="contenu_page">
        <p>Vous souhaitez donner une nouvelle vie à votre entreprise.  Vous voulez que vos employés se sentent 
            bien au travail.  Vous voulez-adapter l'intérieur de vos bureaux, de votre boutique et que ceux-ci 
            reflètent les valeurs de votre entreprise.</p><br>
        <p class="fenetreExplication">
            <a href='#'><span onmouseover="fenetrePopup01()">Uppleva vous propose de travailler, avec vous, l'image de votre entreprise.</span></a>
        </p><br>
        <p>
            Mobilier sur mesure
        </p><br>
        <p class="fenetreExplication">
            <a href='#'><span onclick="fenetrePopup02()">Vous ne trouvez pas LE meuble dont vous rêvez ? Confiez sa réalisation
                            à Uppleva</span></a>
        </p><br>
        <p>
            Ateliers &laquo; découverte &raquo;
        </p><br>
        <p>
            Découvrez le design scandinave et les philosophes des pays nordiques !
        </p><br>
        <p>
            Au programme, découverte du Lagom et du Hygge, dégustation de produits, bonne humeur et détente 
            garanties !
        </p><br>
        <p>
            Architecture d'intérieur
        </p><br>
        <p class="fenetreExplication">
            <a href='#'>
                <span onclick="fenetrePopup03()">Un projet de construction ou de rénovation, Uppleva s'occupe de tout. Selon vos besoins, je vous propose de concevoir votre nouvel intérieur.</span>
            </a>
        </p><br>
        <p>
            Décoration d'intérieur
        </p><br>
        <p class="fenetreExplication">
            <a href='#'>
                <span onclick="fenetrePopup04()">Envie de donner un nouveau souffle à votre intérieur ? Couleurs, modiliers, décoration : laissez-vous inspirer !</span>
            </a>
        </p><br>
        <p class="fenetreExplication">
            <a href='#'>
                <span onclick="fenetrePopup05()">Coaching</span>
            </a>
        </p><br>
    </div>

  </section>


    <!--    pied de page    -->
        <?php include("piedDePage.php") ?>
     <!-- end .footer -->

</div>	  <!-- end .global -->

	<script type="text/javascript">
		function fenetrePopup01() {
                    var largeurWindow = window.screen.availWidth;
                    var hauteurWindow = window.screen.availHeight;
                    var myWindow = window.open("", "Uppleva - et votre entreprise", "width=largeurWindow,height=hauteurWindow, titlebar=no, location=yes, menubar=no, resizable=yes, status=yes");
                    var txtA = '<div id="monImage001" style="background-image: url(../10images/image008.jpg); ';
                    var txtA = txtA + 'height: 598px; ';
                    var txtA = txtA + 'background-position: center; ';
                    var txtA = txtA + 'background-repeat: no-repeat; ';
                    var txtA = txtA + 'background-size: cover; ';
                    var txtA = txtA + 'opacity: 0.7;';
                    var txtA = txtA + '">';
                    var txtA = txtA + '<div class="titreImage" style="opacity: 1;"';
                    var txtA = txtA + '>';
                    var txtA = txtA + '<ul class="texteSurPopup" style="font-size: 4vw; font-weight: bold; ';
                    var txtA = txtA + 'color: black; opacity: 1;"';
                    var txtA = txtA + '><li>';
                    var txtA = txtA + "Réalisation des metrés" + "</li><li>";
                    var txtA = txtA + "Plan 2D et 3D" + "</li><li>";
                    var txtA = txtA + "Recherches et études des matériaux, mobiliers, décorations" + "</li><li>";
                    var txtA = txtA + "Conseils couleur, éclairage, ambiance" + "</li><li>";
                    var txtA = txtA + "Etude de devis des corps de métier" + "</li><li>";
                    var txtA = txtA + "Partenariat avec des graphistes pour la réalisation de votre logo" + "</li><li>";
                    var txtA = txtA + "Suivi de chantier" + "</li>";
                    var txtA = txtA + "</ul></div></div>";
		myWindow.document.write("<p>" + myWindow.name + "</p>" + txtA);
	};
					
		function fenetrePopup02() {
                    var largeurWindow = window.screen.availWidth;
                    var hauteurWindow = window.screen.availHeight;
                    var myWindow = window.open("", "Uppleva - Le meuble dont vous rêvez", "width=largeurWindow,height=hauteurWindow, titlebar=no, location=yes, menubar=no, resizable=yes, status=yes");
                    var txtB = "<ul><li>";
                    var txtB = txtB + "Plans 2D et 3D" + "</li><li>";
                    var txtB = txtB + "Recherches et études des matériaux adaptés" + "</li><li>";
                    var txtB = txtB + "Partenariat avec des menuisiers proposant un travail d'une grande qualité" + "</li>";
                    var txtB = txtB + "</ul>";
		myWindow.document.write("<p>" + myWindow.name + "</p>" + txtB);
	};
					
					
		function fenetrePopup03() {
                    var largeurWindow = window.screen.availWidth;
                    var hauteurWindow = window.screen.availHeight;
                    var myWindow = window.open("", "Uppleva - Projet de construction ou de rénovation", "width=largeurWindow,height=hauteurWindow, titlebar=no, location=yes, menubar=no, resizable=yes, status=yes");
                    var txtC = "<ul><li>";
                    var txtC = txtC + "Réalisation des métrés" + "</li><li>";
                    var txtC = txtC + "Plans 2D ou 3D, selon vos besoins" + "</li><li>";
                    var txtC = txtC + "Recherches et études des matériaux, mobiliers, décorations" + "</li><li>";
                    var txtC = txtC + "Conseils couleur, éclairage, ambiance" + "</li><li>";
                    var txtC = txtC + "Etude de devis des corps de métier" + "</li><li>";
                    var txtC = txtC + "Partenaires de qualité" + "</li><li>";
                    var txtC = txtC + "Suivi de chantier" + "</li>";
                    var txtC = txtC + "</ul>";
                    myWindow.document.write("<p>" + myWindow.name + "</p>" + txtC);
	};
					
		function fenetrePopup04() {
                    var largeurWindow = window.screen.availWidth;
                    var hauteurWindow = window.screen.availHeight;
                    var myWindow = window.open("", "Uppleva - Un nouveau souffle à votre intérieur !", "width=largeurWindow,height=hauteurWindow, titlebar=no, location=yes, menubar=no, resizable=yes, status=yes");
                    var txtD = "<ul><li>";
                    var txtD = txtD + "Recherche d'objets de décoration, de couleurs, de luminaires, de mobiliers" + "</li><li>";
                    var txtD = txtD + "Partenariats avec des marques scandinaves exceptionnelles" + "</li><li>";
                    var txtD = txtD + "Personal shopping" + "</li><li>";
                    var txtD = txtD + "Conseils, coaching" + "</li>";
                    var txtD = txtD + "" + "</ul>";
                    myWindow.document.write("<p>" + myWindow.name + "</p>" + txtD);
	};
					
		function fenetrePopup05() {
                    var largeurWindow = window.screen.availWidth;
                    var hauteurWindow = window.screen.availHeight;
                    var myWindow = window.open("", "Uppleva - Coaching", "width=largeurWindow,height=hauteurWindow, titlebar=no, location=yes, menubar=no, resizable=yes, status=yes");
                    var txtE = "<ul><li>";
                    var txtE = txtE + "Home organising" + "</li><li>";
                    var txtE = txtE + "Home staging" + "</li><li>";
                    var txtE = txtE + "Visite &laquo; conseils &raquo;" + "</li><li>";
                    var txtE = txtE + "Conseils, coaching" + "</li>";
                    var txtE = txtE + "" + "</ul>";
                    myWindow.document.write("<p>" + myWindow.name + "</p>" + txtE);
	};
	</script>

</body>
</html>
