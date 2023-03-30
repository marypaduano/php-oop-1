<?php
require_once "./models/Movie.php";

$movie1 = new Movie ("Batman Begins", "Christopher Nolan", "Action", 2005);
$movie2 = new Movie ("Il Signore degli Anelli - Le Due Torri", "Peter Jackson", "Fantasy", 2002);
$movie3 = new Movie ("Fight Club", "David Fincher", "Fantasy", 1999);
$movie4 = new Movie ("Inception", "Christopher Nolan", "Fantasy - Action", 2010);
$movie5 = new Movie ("Quei bravi ragazzi", "Martin Scorsese", "Drama", 1990);
$movie6 = new Movie ("La Vita è Bella", "Roberto Benigni", "Comedy - Drama", 1997);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $movie1->title?></h5>
                    <p class="card-text"><?php echo  $movie1->getInfo() ?></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $movie2->title?></h5>
                    <p class="card-text"><?php echo  $movie2->getInfo() ?></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $movie3->title?></h5>
                    <p class="card-text"><?php echo  $movie3->getInfo() ?></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $movie4->title?></h5>
                    <p class="card-text"><?php echo  $movie4->getInfo() ?></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $movie5->title?></h5>
                    <p class="card-text"><?php echo  $movie5->getInfo() ?></p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $movie6->title?></h5>
                    <p class="card-text"><?php echo  $movie6->getInfo() ?></p>
                </div>
            </div>
        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>