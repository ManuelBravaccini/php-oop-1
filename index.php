<?php
require_once __DIR__ . './OOPs/MetaData.php';
require_once __DIR__ . './OOPs/Movie.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $movies = [
            $interstellar = new Movie('Interstellar', 'Christopher Nolan', 'Sci-fi',  new MetaData(5, 169, 2014, true)),
            $babylon = new Movie('Babylon', 'Damien Chazelle', 'Comedy drama',  new MetaData(4.5, 189, 2022, true)),
        ];
        ?>
        <div>
            <h1>
                <?php
                foreach ($movies as $movie) {
                    echo $movie->getDetails() . "\n";
                };
                ?>
            </h1>
        </div>
    </main>
</body>

</html>