<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie DB</title>
    <?php
        require_once ("movie.php");
        require_once ("genre.php");
        require_once("db.php");
    ?>
</head>
<body>
    <h1>Movie</h1>
    <div>
        <?php
            // PRINT ON SCREEN
            foreach($movies as $movie){
                echo "<br><br>";
                echo $movie->getHTML();
            }
        ?>
    </div>
</body>
</html>
