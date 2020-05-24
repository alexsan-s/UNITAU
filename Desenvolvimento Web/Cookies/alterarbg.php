<?php
$bg = '';
$_POST['color'] = isset($_POST['color']) ? $_POST['color'] : null;
if ($_POST['color']) {
    $bg = $_POST['color'];
}
setcookie('bg', $bg, time()+60);
header('Location: ./index.php');