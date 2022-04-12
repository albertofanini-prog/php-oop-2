<?php
    require_once __DIR__ . '/product.php';

    $product1 = new product(
        'Anny-X',
        'Giacca in softshell',
        129.90,
        'La giacca softshell per le passeggiate con i nostri cani.',
        13
    );

    $product2 = new product(
        'Anny-X',
        'Adult 25/16',
        41.00,
        'Per il mantenimento del peso in inverno, ideale per cani non sottoposti ad un attività fisica intensa.',
        13
    );

    $product3 = new product(
        'DogPerformance',
        'Lozione per occhi',
        11.20,
        'La lozione occhi Beaphar contribuisce alla regolare pulizia degli occhi di cani e gatti.',
        43
    );

    var_dump($product1, $product2, $product3)
?>
<!--
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
    L’e-commerce vende prodotti per gli animali. 
        I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    L’utente potrà
        comprare i prodotti senza registrarsi
        iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
-->