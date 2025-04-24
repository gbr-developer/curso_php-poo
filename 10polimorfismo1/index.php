<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <h1>Polimorfismo por Sobreposição</h1>
        <?php
           require_once 'Mamifero.php';
           require_once 'Reptil.php';
           require_once 'Peixe.php';
           require_once 'Ave.php';
           require_once 'Canguru.php';
           require_once 'Cachorro.php';
           require_once 'Tartaruga.php';
           require_once 'Cobra.php';
           require_once 'Goldfish.php';
           require_once 'Arara.php';
           
           $m = new Mamifero(45.3, 5, 4, "Preto");
           $a = new Ave(2.4, 3, 2, "Vermelho");
           $r = new Reptil(0.7, 2, 4, "Verde");
           $c = new Canguru(50.7, 10, 4, "Marrom");
           $t = new Tartaruga(2.2, 15, 4, "Verde");
           $a = new Arara(1.4, 2, 2, "Azul");
           
           //Métodos sobrepostos: Mesma assinatura, mas com resultados diferentes
           $m->locomover();
           $a->locomover(); 
           $r->locomover();
           $c->locomover();
           $t->locomover();
           $a->locomover();
        ?>
        <pre>
    </body>
</html>
