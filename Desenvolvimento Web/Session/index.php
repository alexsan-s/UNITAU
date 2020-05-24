<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <h1>SESSION</h1>
    <form action="atualizar.php" method="post">
        <input type="text" name="comida" id="">
        <button type="submit">atualizar</button>
    </form>
    <h3>Sua comida favorita é:
        <?php
        if (isset($_SESSION['food'])) {
            echo $_SESSION['food'];
        } else {
            echo "nenhuma";
        }
        ?></h3>
</body>

</html>