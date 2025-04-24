<?php

require_once 'Lobo.php';

class Cachorro extends Lobo {

    public function emitirSom() {
        echo "<p>Latido</p>";
    }

    public function reagirFrase($frase) {
        if ($frase == "Comida" || $frase == "Passear") {
            echo "<p>Abanar e Latir</p>";
        } else {
            echo "<p>Rosnar</p>";
        }
    }

    public function reagirHora($hora) {
        if ($hora < 12) {
            echo "<p>Abanar</p>";
        } elseif ($hora <= 18) {
            echo "<p>Abanar e latir</p>";
        } else {
            echo "<p>Ignorar</p>";
        }
    }

    public function reagirDono($dono) {
        if ($dono) {
            echo "<p>Abanar</p>";
        } else {
            echo "<p>Rosnar e Latir</p>";
        }
    }

    public function reagirIdadePeso($idade, $peso) {
        if ($idade < 5) {
            if ($peso < 10) {
                echo "<p>Abanar</p>";
            } else {
                echo "<p>Latir</p>";
            }
        } else {
            if ($peso < 10) {
                echo "<p>Rosnar</p>";
            } else {
                echo "<p>Ignorar</p>";
            }
        }
    }
}