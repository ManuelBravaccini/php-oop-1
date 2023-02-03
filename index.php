<?php
require_once __DIR__ . './OOPs/Movie.php';
require_once __DIR__ . './OOPs/MetaData.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>

<body>
    <main>
        <pre>
            <?php
            $interstellar = new Movie('Interstellar', 'Christopher Nolan', 'Sci-fi',  new MetaData(5, 169, 2014, true));
            $babylon = new Movie('Babylon', 'Damien Chazelle', 'Comedy drama',  new MetaData(4.5, 189, 2022, true));

            var_dump($interstellar, $babylon);
            ?>
        </pre>
    </main>
</body>

</html>