<!DOCTYPE html>
<html lang="en">
<?php include('Pokemon.php');?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    
    $pikachu = new Pokemon("Pikachu", 50, "Electrique", 120, 90); 
    $bulbizarre = new Pokemon("Bulbizarre", 30, "Plante", 100, 45);  
    $salameche = new Pokemon("Salamèche", 40, "Feu", 110, 60);  
    $carapuce = new Pokemon("Carapuce", 35, "Eau", 130, 50);  


    // echo "<h2>Début du combat :</h2>";
    // $pikachu->pokedex();
    // $bulbizarre->pokedex();

    // echo "<h3>Actions :</h3>";
    // $pikachu->frapper($bulbizarre);
    // $bulbizarre->frapper($pikachu);

    // echo "<h2>État final :</h2>";
    // $pikachu->pokedex();
    // $bulbizarre->pokedex();

    $arene =new Arene($pikachu, $bulbizarre);
    $arene->commencerCombat();


    ?>
</body>
</html>