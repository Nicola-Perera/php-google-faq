<?php
/*
Riscrivere questa pagina del sito google https://policies.google.com/faq.
Ci sono diverse domande con relative risposte. 
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
*/
$faqs = [
    [
        'question' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio",
        'answers' => ['risposta 1', 'risposta 2', 'risposta 3']
    ]
];

var_dump ($faqs[0]['answers']);
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

</body>
</html>