<?php
    $page_en_cours = "zGestMenu";
?>

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
    
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

    
</head> 

<body>

<div class="global">

        <?php include("entete.php"); ?>

    <!-- pour info : PAS de menu ici -->
    <!--    corps de fichier    -->
  
    <div class="contenu_page" style="text-align: center">

        <h3 style="text-align: center">MENU</h3>
        <br>
        <table width="900px" class="tableauMenu" border="1" style="text-align: center">
                <tr style="text-align: center">
                    <th width="10%">
                        Numéro
                    </th>
                    <th width="90%">
                        contenu
                    </th>
                </tr>
                <tr>
                    <td style="text-align: center">1</td>
                    <td style="text-align: left">
                        <a href="zGestPageChoix01">Recherche via le NOM</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">2</td>
                    <td style="text-align: left">
                        <a href="#">Recherche via le Prénom</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Fin</td>
                </tr>
        </table>
    </div>
    
    <!--    pied de page    -->
        <?php include("piedDePage.php") ?>
     <!-- end .footer -->
</div>	  <!-- end .global -->

</body>
</html>
