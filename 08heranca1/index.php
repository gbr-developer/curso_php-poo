<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Herança - Parte 1</h1>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';
            
            echo "<h2>Pessoa</h2>";
            $p[0] = new Pessoa("Gabriel", 21, "M"); //Superclasse
            $p[0]->fazerAniv(); //Utilização do próprio método
            print_r($p[0]);
            
            echo "<h2>Aluno</h2>";
            $p[1] = new Aluno("Giselle", 22, "F", "Fotografia"); //Superclasse com atributos da subclasse
            $p[1]->fazerAniv(); //Utilização de método da superclasse
            $p[1]->CancelarMatr();//Utilização do próprio método
            print_r($p[1]);
            
            echo "<h2>Professor</h2>";
            $p[2] = new Professor("Flávio", 53, "m", "Matemática", 1700);
            $p[2]->fazerAniv();
            $p[2]->receberAumento(300);
            print_r($p[2]);
            
            echo "<h2>Funcionário</h2>";
            $p[3] = new Funcionario("Giovanna", 21, "F", "Vendas");
            $p[3]->fazerAniv();
            $p[3]->mudarTrabalho("Desenvolvimento WEB");
            print_r($p[3]);
        ?>
        </pre>
    </body>
</html>
