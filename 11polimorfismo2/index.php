<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Mamifero.php';
            require_once 'Lobo.php';
            require_once 'Cachorro.php';
            
            echo "<h1>Teste de Polimorfismo por Sobreposição</h1>";
            $m = new Mamifero();
            $l = new Lobo();
            $c = new Cachorro();
            //Mesmos métodos com a mesma assinatura, mas com resultados diferentes
            
            $m->emitirSom();
            $l->emitirSom();
            $c->emitirSom();
            
            echo "<h1>Teste de Polimorfismo por Sobrecarga</h1>";
            echo "<p><strong>O PHP não suporta polimorfismo por sobrecarga.</strong></p>";
            echo "<p><strong>A solução utilizada será a criação de métodos com nomes diferentes para a mesma função, mas isso não entra no conceito de sobrecarga</strong></p>";
            //Métodos diferentes referente a mesma funcionalidade (Não é polimorfismo)
            $c->reagirFrase("Passear");
            $c->reagirHora(19);
            $c->reagirDono(false);
            $c->reagirIdadePeso(7, 15);
        ?>
    </body>
</html>
