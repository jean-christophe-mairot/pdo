<?php
$nom='mairotj';
$prenom='jcj';
$email='jjcmairot@gmail.com';

//mysql est un driver
$pdo = new PDO ('mysql:host=localhost;dbname=onlineformpro', 'root', '');

// insertion de données
$sql= "INSERT INTO 
        session_48 (prenom, nom, mail) 
        VALUES (:prenom, :nom, :email)";
// preparation a l'insertion
$sth= $pdo->prepare($sql);
// 
$sth->bindParam(':prenom', $prenom ,PDO::PARAM_STR);
$sth->bindParam(':nom', $nom ,PDO::PARAM_STR);
$sth->bindParam(':email', $email ,PDO::PARAM_STR);
$sth->execute();

$sqlSelect="SELECT * FROM session_48";
$result= $pdo -> query($sqlSelect);

// L'élément HTML <pre> représente du texte préformaté
echo '<pre>';
echo 'ooo   ooo<br>';
echo ' o     o <br>';
echo 'ooo   ooo<br>';
echo '    o    <br>';
echo '   o o   <br>';
echo '         <br>';
echo '   ooo   <br>';
echo '   ooo   <br>';
echo '<pre>';


// echo '<pre>';
// print_r($result);
// echo '<pre>';
// fetch le premier  
$session48 = $result -> fetch(PDO::FETCH_ASSOC);
// fetch la totalité de la table employes 
$session48_2 = $result -> fetchAll(PDO::FETCH_BOTH);


// echo '<pre>';
// echo 'méthodes : FETCH_ASSOC <br>';
// print_r($session48);
// echo '<pre>';

// echo '<pre>';
// echo 'méthodes : FETCH_BOTH / indexé par nom et numéro de la colonne <br>';
// print_r($session48_2);
// echo '<pre>';
?>
<!-- insertion des données dans du html -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | insertion bdd dans des cards</title>
    
</head>
<style>

.container{
    display:flex;
    justify-content: space-around;
    flex-wrap:wrap;
}
.card_eleve{
    margin : 10px 20px;
    border: 1px solid #333;
    width:200px;
    height: 300px;
    transition: 0.5s;
    
}
.card_eleve:hover{
transform: rotate(45deg);
background:#333;
color:#eee;
}
.nom{
text-align:center;
}
.prenom{
text-align:center;
}
.email{
text-align:center;
}
</style>
<body>
     <div class="container">
     <!-- boucle foreach pour afficher les données dans des cards -->
        <?php foreach ($session48_2 as $user): extract($user)?>
            <div class="card_eleve">
                <h2 class="nom"><?= $nom ?></h2>
                <h3 class="prenom"><?= $prenom ?></h3>
                <h3 class="email"><?= $mail ?></h3>
                <p>c super</p>
            </div>
        <?php endforeach ?>
    </div>
</body>
</html>
   
