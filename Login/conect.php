<?php
if (isset( $_POST['name'],$_POST['password'])) {
  
//conection with database  
  $name =  $_POST['name'];
  $pss = $_POST['password'];
  $conection = mysqli_connect("localhost","root", "","login");
  if (!$conection) {
     die("error");
  }
// 
$query = "SELECT * FROM users WHERE username ='$name'";
$result = mysqli_query($conection, $query);
if (!$result) {
    die("error").mysqli_error($result);
}
while ($row = mysqli_fetch_array($result) ) {
    $db_name = $row['username'];
    $db_pass = $row['password'];

}
if ($name !== $db_name && $pss !== $db_pass) {
  header("location: index.php");
}else if ($name == $db_name && $pss == $db_pass) {
    header("location: home.php");
  }
  else{
    header("location: index.php");
  }


}


?>