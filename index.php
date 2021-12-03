<?php
/*
Riscrivere questa pagina del sito google https://policies.google.com/faq.
Ci sono diverse domande con relative risposte. 
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
*/

var_dump('ciao');
echo 'salve';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-google-faq</title>
</head>
<body>
    
    <?php
        if (isset($_POST['faq'])) {
            $name = $_POST['name'];
            $country = $_POST['country'];
        }
    ?>

    <form action="faq.php" method='post'>
        Inserisci nome: <input type="text" name="name">
        Inserisci paese: <input type="text" name="country">
        <!-- <input type="submit" value="submit" name="submit"> -->
    </form>
<h1>link</h1>
    <a href="" value="faq" name="faq">Domande frequenti</a>

</body>
</html>