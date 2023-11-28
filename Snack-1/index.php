<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket</title>
</head>
    <body>
        <main>
            <?php 
            $partite = array(
                array("Olimpia Milano", "Cantù", 55, 60),
                array("Virtus Bologna", "Dinamo Sassari", 72, 68),
                array("EA7 Emporio Armani Milano", "VL Pesaro", 89, 75),
            );

            foreach ($partite as $partita) {
                $squadraCasa = $partita[0];
                $squadraOspite = $partita[1];
                $puntiCasa = $partita[2];
                $puntiOspite = $partita[3];

                echo "$squadraCasa - $squadraOspite | $puntiCasa-$puntiOspite  ";
            }
            ?>
        </main>
    </body>
</html>