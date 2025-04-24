<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Exercício Prático: Projeto Livro</h1>
        <pre>
        <?php
            echo "<h2>Livro 1</h2>";
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            $p[0] = new Pessoa("Gabriel", 21, "M");
            $p[1] = new Pessoa("Maria", 23, "F");
            
            $l[0] = new Livro("PHP Bàsico", "José da Silva", 300, $p[0]);
            $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
            $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);
            $l[0]->abrir();
            $l[0]->folhear(299);
            $l[0]->avançarPag();
            $l[0]->detalhes();
           
            echo "<h2>Livro 2</h2>";
            $l[2]->folhear(70);
            $l[2]->voltarPag();
            $l[2]->detalhes();
            
            echo "<h2>Livro 3</h2>";
            $l[1]->detalhes();
        ?>
        </pre>
    </body>
</html>
