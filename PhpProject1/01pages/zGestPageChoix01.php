<?php
    $page_en_cours = "zGestPageChoix01.php";
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

    <style>
        .recherche_personnel {
            border: 1px solid #a8d4b1;
            background-color: #323232;
            margin: 2px 0px;
            padding: 40px;
            border-radius: 4px;
        }
        
        #listeEntites {
            float: left;
            list-style: none;
            margin-top: 3px;
            padding: 0;
            width: 190px;
            position: absolute;
        }
        
        #listeEntites li {
            padding: 10px;
            background: #f0f0f0;
            border-bottom: #bbb9b9 1px solid;
        }
        
        #listeEntites li:hover {
            background: #ece3d2;
            cursor: pointer;
        }
    </style>
    
</head>

<body>

<div class="global">

        <?php include("entete.php"); ?>

    <!-- pour info : PAS de menu ici -->
    <!--    corps de fichier    -->

    <br>
    <br>
    <div class="contenu_page" style="text-align: center">

        <div class="recherche_entite">
            <input type="text" id="recherche" placeholder="Nom" />
            <div id="suggestions"></div>
        </div>
        
    </div>
    
    <!--    pied de page    -->
        <?php include("piedDePage.php") ?>
     <!-- end .footer -->
</div>	  <!-- end .global -->

<script>
    $(document).ready(function(){
       $("recherche").keyup(function(){
          $.ajax({
             type: "POST" ,
             url: "../05PHP/rechercheNom.php",
             data: 'nomPP=' + $(this).val(),
             success: function(data){
                 $("#suggestions").show();
                 $("#suggestions").html(data);
                 $("#recherche").css("background", "#FFF");
             }
          });
       });
    });
    
    function choixNom(val){
        $("#recherche").val(val);
        $("#suggestions").hide();
    }
</script>

</body>
</html>
