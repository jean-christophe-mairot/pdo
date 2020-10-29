<?php
//base de donnée recuperation des ressources et affichage dans la page html

$pdo = new PDO('sqlite:clients.db');
$result= $pdo -> query("SELECT * FROM client");
$client =$result ->fetch(PDO::FETCH_ASSOC);

while($client = $result -> fetch(PDO::FETCH_ASSOC)){
    echo '<pre>';
    print_r($client);
    echo'</pre>';
}