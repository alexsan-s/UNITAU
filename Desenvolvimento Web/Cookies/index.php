<!DOCTYPE html>
<?php
function color(){
    if(isset($_COOKIE['bg'])){
        return $_COOKIE['bg'];
    }else{
        return "white";
    }
}
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body bgcolor="<?php echo color(); ?>">
    <h1>Exemplo utilizando o cookie</h1>
    <h3>Iremos mudar a cor de fundo conforme a opção do usuário</h3>

    <h4>Escolha a cor de fundo</h4>
    <form action="alterarbg.php" method="post">
        <select name="color" id="">
            <option value="white">branco</option>
            <option value="red">vermelho</option>
            <option value="blue">azul</option>
            <option value="grenn">verde</option>
        </select>
        <button type="submit">Trocar</button>
    </form>

    <h3>A cor da tela irá durar até 1min, caso reinicie a página depois de 1 min, irá voltar para a cor padrão branco</h3>

</body>

</html>