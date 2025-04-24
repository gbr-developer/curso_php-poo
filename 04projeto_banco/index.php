<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Banco</title>
    </head>
    <body>
        <h1>Exercício Prático: Projeto Banco</h1>
        <pre>
        <?php
            require_once 'ContaBanco.php';
            echo "<h2>Conta 1: CC</h2>";
            $conta1 = new ContaBanco;
            $conta1->abrirConta("CC", "Gabriel");
            $conta1->sacar(50);
            $conta1->depositar(200);
            $conta1->pagarMensal();
            $conta1->sacar(188);
            $conta1->fecharConta();
            print_r($conta1);
            
            echo '<h2>Conta 2: CP</h2>';
            $conta2 = new ContaBanco;
            $conta2->abrirConta("CP", "Maria");
            $conta2->depositar(150);
            $conta2->sacar(400);
            $conta2->pagarMensal();
            print_r($conta2)
        ?>
        </pre>
    </body>
</html>
