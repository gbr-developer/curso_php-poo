<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02: POO</title>
    </head>
    <body>
        <h1>Classes, Objetos, Atributos e Métodos</h1>
        <pre>
        <?php
            require_once 'Caneta.php';//Requer o arquivo da classe criada
            $c1 = new Caneta; //Instancia um objeto da classe Caneta
            $c1->modelo = "Bic"; //Define um estado ao atributo
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->carga = 90;
            $c1->tampada = true;
            $c1->destampar(); //Chama um método 
            $c1->rabiscar();
            print_r($c1); //print_r($objeto) ou var_dump($objeto): Mostra na tela os atributos e estados o objeto
            
            echo "<br/>";
            
            $c2 = new Caneta;
            $c2->modelo = "Bic";
            $c2->cor = "Vermelho";
            $c2->ponta = 1.0;
            $c2->carga = 60;
            $c2->tampar();
            print_r($c2);
        ?>
        </pre>
    </body>
</html>
