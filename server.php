<?php
    require_once __DIR__ . '/product.php';
    require_once __DIR__ . '/user.php';

    $product1 = new product(
        'Anny-X',
        'Giacca in softshell',
        129.90,
        'La giacca softshell per le passeggiate con i nostri cani.',
        13
    );
    $product2 = new product(
        'DogPerformance',
        'Adult 25/16',
        41.00,
        'Per il mantenimento del peso in inverno, ideale per cani non sottoposti ad un attività fisica intensa.',
        13
    );
    $product3 = new product(
        'Beaphar',
        'Lozione per occhi',
        11.20,
        'La lozione occhi Beaphar contribuisce alla regolare pulizia degli occhi di cani e gatti.',
        43
    );
    var_dump($product1, $product2, $product3);

    $user1 = new user(
        'Lewis',
        'Hamilton',
        'LewisTheFastest',
        '07/01/1985',
        'London',
        'United Kingdom - UK'
    );
    $user2 = new user(
        'Cristiando',
        'Ronaldo',
        'CristianoTheShooter',
        '05/02/1985',
        'Madeira',
        'Portugal - PO'
    );
    $user3 = new user(
        'Rafael',
        'Nadal',
        'RafaTheGoat',
        '03/06/1986',
        'Barcelona',
        'Spain - SP'
    );
    var_dump($user1, $user2, $user3);
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