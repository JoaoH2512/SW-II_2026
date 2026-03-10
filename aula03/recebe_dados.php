<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECEBE DADOS</title>
</head>
<body>
    
    <?php
        // pra transforar em texto puro esse "htmlspecialalchars()
       // $nome = $_POST['nome'];
       $nome = htmlspecilalchars($_POST['nome']);
        $email = $_POST['email'];
        $idade = $_POST['idade'];

        $ano_atual = date('Y');
        
        $nascimento =  $ano_atual - $idade;

    ?>

    <p>O nome é: <?php echo $nome; ?></p>
    <p>O email é: <?php echo $email; ?></p>
    <p>A idade é: <?php echo $idade; ?></p>

    <p>Ahhh então você nasceu no ano de <?php echo $nascimento; ?></p>

    <?php

    if ($idade >=18) {
        echo '<p style= "color: green;">vc é maior de idade </p>';
    }else {
        echo '<p style= "color: red;"> vc é menor de idade </p>';
    }


    ?>
</body>
</html>