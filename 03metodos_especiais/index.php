<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Métodos Especiais</h1>
        <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta("Azul", 70); //Instanciação do objeto com atributos do método construtor
            $c1->setModelo("BIC"); //Método modificador altera o estado de um atributo privado ou protegido
            $c1->setPonta(0.5);
            print "<p>Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}!</p>"; //Métodos acessores usados para retornar o valor dos atributos
            //Chaves entre os getters permite a interpolação com as ()
            print_r($c1);
            
            $c2 = new Caneta("Vermelho", 50);
            print_r($c2);   
        ?>
        </pre>
    </body>
</html>
