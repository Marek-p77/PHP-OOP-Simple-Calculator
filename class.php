<?php // PHP OOP Kalkulačka v1.0 by Marek_p

class Kalkulacka { // Jméno třídy

    // Definování proměnných
    public $firstNumber;
    public $secondNumber;

    // Funkce pro sčítání
    public function scitani($firstNumber, $secondNumber) {
        $v = $firstNumber + $secondNumber; // Vypočítání výsledku
        echo("Výsledek: ".$v); // Vypsání výsledku
    }

    // Funkce pro odčítání
    public function odcitani($firstNumber, $secondNumber) {
        $v = $firstNumber - $secondNumber; // Vypočítání výsledku
        echo("Výsledek: ".$v); // Vypsání výsledku
    }

    // Funkce pro násobení
    public function nasobeni($firstNumber, $secondNumber) {
        $v = $firstNumber * $secondNumber; // Vypočítání výsledku
        echo("Výsledek: ".$v); // Vypsání výsledku
    }

    // Funkce pro dělení
    public function deleni($firstNumber, $secondNumber) {
        $v = $firstNumber / $secondNumber; // Vypočítání výsledku
        echo("Výsledek: ".$v); // Vypsání výsledku
    }

}
