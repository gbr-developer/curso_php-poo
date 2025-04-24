<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <h1> Encapsulamento: Projeto Controle Remoto </h1>
        <?php
            require_once 'ControleRemoto.php';
            $controle1 = new ControleRemoto;
            $controle1->ligar();
            $controle1->play();
            $controle1->maisVolume();
            $controle1->menosVolume();
            $controle1->pause();
            $controle1->desligar();
            $controle1->abrirMenu();
            $controle1->fecharMenu();
            print_r($controle1);
            
        ?>
        </pre>
    </body>
</html>
