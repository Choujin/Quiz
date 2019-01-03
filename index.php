<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    






</body>
</html>


<?php
    // alle startwaarden
    $prijsArtikel = 100;
    $leeftijdKoper = 70;    // in jaren
    $woonplaatsKoper = "Den Haag";

    $teBetalen = $prijsArtikel;

    // alle bewerkingen
    if ($woonplaatsKoper == "Enschede")
    {
        $teBetalen = $prijsArtikel * 2;
    }
    else
    {
        if ($leeftijdKoper <= 18)
               $toeslag = $prijsArtikel * 0.1;
              $teBetalen = $prijsArtikel - $toeslag;
              $teBetalen = $prijsArtikel * 0.9;
        
    
        if ($leeftijdKoper >= 65)
                $toeslag = $prijsArtikel * 0.05;
                $teBetalen = $prijsArtikel - $toeslag;
       
    
        $teBetalen = $prijsArtikel;
    }
    // alle output
    // verwacht: iedereen 18 jaar of jonger 10% korting
    // verwacht: iederen van 65 jaar of ouder 5% korting
    // verwacht: iedereen ouder dan 18 volle mep 
    // verwacht: artikellen zijn 2x zo duur voor inwoners uit Enschede
    
    
    echo $teBetalen;



echo "My first PHP script!";

?>

<div class="visitor-count">

   <?php include "counter.php";  ?>
   </div>