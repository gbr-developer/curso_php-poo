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
        <h1>Visibilidade</h1>
        <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = "BIC Cristal";//Acesso a um atributo público
            $c1->cor = "Azul";
            //$c1->ponta = 0.5; Gera um erro ao tentar acessar um atributo privado
            //$c1->carga = 50; Gera um erro ao tentar acessar um atributo protegido
            //$c1->tampara = true; Gera um erro ao tentar acessar um atributo protegido
            $c1->rabiscar();//Chamada de um método público
            $c1->tampar();//Chamada a um método público que modifica um atributo protegido
            print_r($c1);
            
        ?>
        </pre>
    </body>
</html>
