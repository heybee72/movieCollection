<?php include "data.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Collection</title>

</head>
<body>

<div class="container">
    <h1 id="title">My Movie Collection</h1>
    <?php

        // Display the movies and their actors
        echo '<ul>';
        foreach (array($movie1, $movie2, $movie3) as $movie) {
            echo '<li class="movie">';
            echo '<strong> Title:' . $movie->getTitle() . '</strong> <br> Release Date:' . $movie->getReleaseDate() . '  <br> Runtime: ' . $movie->getRuntime() . ' mins<br>';
            echo 'Actors:';
            $actors = $movie->getActorsByAge();
            if (count($actors) > 0) {
                echo '<ul>';
                foreach ($actors as $actor) {
                    echo '<li>' . $actor['actor']->getName() . ' as ' . $actor['character'] . ' (' . $actor['actor']->getAge() . ' years old)</li>';
                }
                echo '</ul>';
            } else {
                echo 'None';
            }
            echo '</li>';
            
        }
        echo '</ul>';
    ?>

</div>
    
</body>
</html>

