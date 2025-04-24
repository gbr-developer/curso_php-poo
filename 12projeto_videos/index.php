<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Projeto final: Vídeos</h1>
        <pre>
        <?php
            require_once 'AcoesVideo.php';
            require_once 'Gafanhoto.php';
            require_once 'Video.php';
            require_once 'Visualizacao.php';
            
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");
            $v[0]->play();
            $v[1]->like();
            
            $g[0] = new Gafanhoto("Gabriel", 21, "M", "GBR_Developer");
            $g[0]->viuMaisUm();
            
            echo "<h2>Visualização 1</h2>";
            print_r($v[0]);
            
            echo "<h2>Visualização 2</h2>";
            print_r($v[1]);
            $vis[0] = new Visualizacao($g[0], $v[0]);
            $vis[0]->avaliar();
            $vis[0]->avaliarNota(7);
            
            echo "<h2>Visualização 3</h2>";
            print_r($v[0]);
            
        ?>
        </pre>
    </body>
</html>
