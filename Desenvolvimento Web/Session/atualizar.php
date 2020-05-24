<?php
session_start();
$comida = $_POST['comida'];
if ($comida == "") {
    $_SESSION['food'] = "Nenhuma";
} else {
    $_SESSION['food'] = $_POST['comida'];
}
header("Location: ./index.php");
