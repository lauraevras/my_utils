<html lang="fr">

<head>
    <title>My Todo List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<h1>MY TODO LIST</h1>

<main>
     <h4> Tu ne te souviens plus de ce que tu dois faire ?</h4>
</main>

<?php
function OpenCon(){

    $databasename="todo_list";
    $servername= "localhost";
    $username= "root";
    $password= "root";
    
	$con = mysql_connect ("$servername", "$databasename", "$username", "$password") ;
}

    $requete = mysql_query ('SELECT A faire FROM todo_list');
    $ligne = mysql_fetch_array ($requete);
    echo $ligne ['A faire'];

    $requete = mysql_query ('SELECT finie FROM todo_list');
    $ligne = mysql_fetch_array ($requete);
    echo $ligne ['Finie'];

?> 

</body>

</html>