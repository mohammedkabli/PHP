<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>
<body>
<div class="conexion">

<form action="conect.php" method="post">
<h1>Conexion</h1>
<label>Nom  D'utilisateur :</label>
<p><input type="text" name="name" placeholder="Nom  D'utilisateur"></p>
<label>password :</label>
<p><input type="password" name="password" placeholder="password" ></p>
<button type="submit">Login</button>
</form>

<style>
    body{
    margin: 0px;
    padding: 0px;
    background-color: rgb(71, 230, 71);
    text-align: center;
}
.conexion{
    background-color: white;
    margin: 20% auto;
    width: 30%;
    height: 350px;
    text-align: start;
    padding: 2em;
    box-shadow: 0px 0px 30px #8888;
}
h1{
   text-align: center;
}
input{
    height: 3em;
    width: 100%;
}
button{
    background-color: rgb(71, 230, 71);
    height: 3.5em;
    width: 102%;
    border: solid 0px;
    cursor: pointer;
}
</style>





</div>
    
</body>
</html>