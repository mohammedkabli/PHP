<!--Script PHP-->

<?php
 $n= 30 ;
for ($i=2; $i<=$n; $i++ ){

    for ($j=2; $j<=$n; $j++){
        
        if($i%$j==0){
            break;
        }
    }
    if($i==$j){
        echo "<br>" .$i;
    }
 } 

// //***** */

 function carre($n){
    return $n*$n;
}
echo carre(20);
echo "<br>";
function logarithme($a){
     return log($a);
}
echo logarithme(10);
echo "<br>";
function racin_carre($r){
    return sqrt($r);

}
echo racin_carre(36);
?>
<!--Script PHP, HTML & JS-->
   <!--step 1-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index3.php" method="POST">
<input type="datetime-local" id="meeting-time"
       name="date">
<input type="submit"></input>
</form>
</body>
</html>
<?php

function verification_date($date) {
    echo substr($date, 0,10) ;
    echo "<br>";
    echo substr($date, 11) ;
}
if(!empty($_POST)) {
$date=$_POST["date"];
verification_date($date);
}
?>

<!--step 2-->
<?php
function boîtedalerte ($a){
 echo "<script>alert('hello $a')</script>";
}
boîtedalerte("there!");
?>
