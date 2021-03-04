<!--script PHP-->
 <!--step 1-->
<?php 
 
 $couleur = array ('blanc', 'vert', 'rouge', 'bleu', 'noir');
         echo "Le souvenir de cette scène pour moi est comme une trame de film à jamais figée à ce moment-là: le tapis $couleur[2], la pelouse $couleur[1], la maison $couleur[0], le ciel plombé. Le nouveau président et son première dame. - Richard M. Nixon et les mots 'rouge', 'vert' et 'blanc'";

 //Step 2

$ceu = array ("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Bruxelles", "Denmark" => "Copenhague", "Finland" => "Helsinki "," France "=>" Paris "," Slovaquie "=>" Bratislava "," Slovénie "=>" Ljubljana "," Allemagne "=>" Berlin "," Grèce "=>" Athènes "," Irlande " => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbonne", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "Londres "," Chypre "=>" Nicosie "," Lituanie "=>"Vilnius "," République tchèque "=>" Prague "," Estonie "=>" Tallin "," Hongrie "=>" Budapest "," Lettonie "=>" Riga "," Malte "=>" La Valette "," Autriche "=>" Vienne "," Pologne "=>" Varsovie ");
          
    foreach($ceu as $capital => $capital_value){
    echo "le capital de $capital est un $capital_value" ;
    echo "<br>";
}
?>
<!--script PHP & HTML --> 
  <!--step 1-->
<?php
echo "<table>";

$month = array("1" => "janvier", "2" => "Février", "3" => "Mars", "4" => "Avril", "5" => "Mai", "6" => "Juin", "7" => "Juillet", "8" => "Aout", "9" => "Septembre", "10" => "octobre", "11" => "Novembre", "12" => "Décembre");
echo "<table border=1>";
foreach ($month as $x => $x_value){
    echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";

}
echo "</table>";
?>
<!--step 2 -->
<?php

function affichtable($month){
    echo "<table border=1>";
    foreach ($month as $x => $x_value){
        echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";
    }
    echo "</table>";
}

$month = array("cle" => "value", "said" => "13", "badr" => "16", "najat" => "15",);
affichtable($month);

$month["karim"] ="10";
$month=array_merge($month, ["simo" => "17"]);
affichtable($month);


// la note maximale et la note minimale du groupe
echo "la note maximale est: ".max($month)."la note minimale est:".min($month);
    asort($month);
    affichtable($month);
    echo"la moyenne de la classe:".round(array_sum($month)/count($month),3);
echo array_sum($month);
?>
