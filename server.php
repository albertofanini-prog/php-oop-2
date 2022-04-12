<?php
    require_once __DIR__ . '/product.php';
    require_once __DIR__ . '/user.php';

    // $product1 = new product(
    //     'Anny-X',
    //     'Giacca in softshell',
    //     129.90,
    //     'La giacca softshell per le passeggiate con i nostri cani.',
    //     13
    // );
    // $product2 = new product(
    //     'DogPerformance',
    //     'Adult 25/16',
    //     41.00,
    //     'Per il mantenimento del peso in inverno, ideale per cani non sottoposti ad un attività fisica intensa.',
    //     13
    // );
    // $product3 = new product(
    //     'Beaphar',
    //     'Lozione per occhi',
    //     11.20,
    //     'La lozione occhi Beaphar contribuisce alla regolare pulizia degli occhi di cani e gatti.',
    //     43
    // );
    $products = [
        new product(
            'Anny-X',
            'Giacca in softshell',
            129.90,
            'La giacca softshell per le passeggiate con i nostri cani.',
            13
        ),
        new product(
            'DogPerformance',
            'Adult 25/16',
            41.00,
            'Per il mantenimento del peso in inverno, ideale per cani non sottoposti ad un attività fisica intensa.',
            13
        ),
        new product(
            'Beaphar',
            'Lozione per occhi',
            11.20,
            'La lozione occhi Beaphar contribuisce alla regolare pulizia degli occhi di cani e gatti.',
            43
        ),
    ];
    // var_dump($product1, $product2, $product3);

    // $user1 = new user(
    //     'Lewis',
    //     'Hamilton',
    //     'LewisTheFastest',
    //     '07/01/1985',
    //     'London',
    //     'United Kingdom - UK'
    // );
    // $user2 = new user(
    //     'Cristiando',
    //     'Ronaldo',
    //     'CristianoTheShooter',
    //     '05/02/1985',
    //     'Madeira',
    //     'Portugal - PO'
    // );
    // $user3 = new user(
    //     'Rafael',
    //     'Nadal',
    //     'RafaTheGoat',
    //     '03/06/1986',
    //     'Barcelona',
    //     'Spain - SP'
    // );
    $users = [
        new user(
            'Lewis',
            'Hamilton',
            'LewisTheFastest',
            '07/01/1985',
            'London',
            'United Kingdom - UK'
        ),
        new user(
            'Cristiando',
            'Ronaldo',
            'CristianoTheShooter',
            '05/02/1985',
            'Madeira',
            'Portugal - PO'
        ),
        new user(
            'Rafael',
            'Nadal',
            'RafaTheGoat',
            '03/06/1986',
            'Barcelona',
            'Spain - SP'
        ),
    ];
    // var_dump($user1, $user2, $user3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <title>Php Oop 2</title>
    <style>
        main{
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }
        .products{
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .products ul{
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 35px;
            list-style: none;
        }
        .product{
            width: calc((100% / 5) - 30px);
            height: 375px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            text-align: center;
            /* border: 1px solid red; */
            box-shadow:
            0 1px 3px rgba(0,0,0,0.12),
            0 1px 2px rgba(0,0,0,0.24);    
            transition: 
            all 0.3s cubic-bezier(.25,.8,.25,1);
        }
        .product:hover {
            box-shadow: 
                0 14px 28px rgba(0,0,0,0.25), 
                0 10px 10px rgba(0,0,0,0.22);
        }
        .product h1{
            font-size: 20px;
            font-weight: 600;
            text-align: center;
            color: red;
        }
        .product h4{
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            padding: 5px;
        }
        .product h2{
            font-size: 24px;
            font-weight: 600;
            text-align: center;
            color: green;
        }
        .users{
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <main>
        <div class="products">
            <ul>
                <?php foreach ($products as $product){
                ?>
                <li class="product">
                    <h1><?php echo $product->brand; ?></h1>
                    <h4><?php echo $product->name; ?></h4>
                    <h2>€<?php echo $product->price; ?></h2>
                    <h4><?php echo $product->description; ?></h4>
                    <h4>Quantità disponibili: <?php echo $product->quantity; ?></h4>
                <?php
                }
                ?>
                </li>
            </ul>
        </div>
        <div class="users">

        </div>
    </main>
</body>
</html>
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