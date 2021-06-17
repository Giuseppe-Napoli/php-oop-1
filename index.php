<?php
    require_once __DIR__ . "/classes/Movie.php";
    require_once __DIR__ . "/classes/Tv.php";

    $film_1 = new Movie ("Hitch", 110, 'Commedia');
    $film_1->year= "2005";
    $film_1->protagonist= "Will Smith";
    $film_1->setPrice(12);

    $film_2 = new Movie("Pirati dei caraibi",135,"Azione");
    $film_2->year= "2003";
    $film_2->protagonist= "Johnny Depp";
    $film_2->setPrice(10);
    
    $serie_1 = new Tv("Friends","Commedia");
    $serie_1->season=10;

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Opp</title>
</head>
<body>
    <h1>Film 1</h1>
    <h3>Title : <?php echo $film_1->title ?> , Duration: <?php echo $film_1->duration ?>min , Genre: <?php echo $film_1->genre ?></h3>
    <h4><?php echo $film_1->getInfo() ?></h4>
    <h5>Prezzo: <?php echo $film_1->getPrice()?>€ </h5>

    <h1>Film 2</h1>

    <h3>Title : <?php echo $film_2->title ?> , Duration: <?php echo $film_2->duration ?>min , Genre: <?php echo $film_2->genre ?></h3>
    <h4><?php echo $film_2->getInfo() ?></h4>
    <h5>Prezzo: <?php echo $film_2->getPrice()?>€ </h5>

    <h4>Il contatore è: <?php echo Movie::getCounter() ?></h4>
    <br>

    <h1>Serie-TV</h1>

    <h3>Title: <?php echo $serie_1->title ?></h3>

</body>
</html>