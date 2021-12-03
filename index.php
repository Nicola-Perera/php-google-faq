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
    ],
    [
        'question' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
        'answers' => ['risposta 1', 'risposta 2', 'risposta 3']
    ],[
        'question' => "Perché il mio account è associato a un paese?",
        'answers' => ['risposta 1', 'risposta 2', 'risposta 3']
    ],[
        'question' => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
        'answers' => ['risposta 1', 'risposta 2', 'risposta 3']
    ],[
        'question' => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
        'answers' => ['risposta 1', 'risposta 2', 'risposta 3']
    ],

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

    <main>
        <?php
            foreach($faqs as $post=>$value): ?>
                <h2>
                    domanda <?= echo $value['question']; ?>
                </h2>
                <?php endforeach; 
        ?>
    </main>

</body>
</html>