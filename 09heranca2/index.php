<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Herança - Parte 2</h1>
        <pre>
        <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Bolsista.php';
            require_once 'Tecnico.php';
            
            echo "<h2>Visitante</h2>";
            $visitante1 = new Visitante("Claudio", 52, "M");
            $visitante1->fazerAniv();
            print_r($visitante1);
            
            echo "<h2>Aluno</h2>";
            $aluno1 = new Aluno("Gabriel", 21, "M", "Engenharia de Software");
            $aluno1->PagarMensalidade();
            print_r($aluno1);
            
            
            echo "<h2>Bolsista</h2>";
            $bolsista1 = new Bolsista("Julia", 25, "F", "Marketing", 12.5);
            $bolsista1->pagarMensalidade();
            print_r($bolsista1);
        ?>
        </pre>
    </body>
</html>
