<?php // PHP OOP Kalkulačka v1.0 by Marek_p

include("class.php"); // Propojení se souborem "class.php"

if(isset($_POST["submit"])) { // Kontrola zda byl formulář odeslán

    $n1 = $_POST["number1"]; // Definice n1 z formuláře
    $n2 = $_POST["number2"]; // Definice n2 z formuláře
    $m = $_POST["method"]; // Definice metody z formuláře

    $kalkulator = new Kalkulacka(); // Vytvoření objektu podle třídy

    if($m == "+") { // Akce zda je metoda sčítání

        $kalkulator->scitani($n1, $n2); // Vyvolání sčítací funkce podle třídy

    } elseif($m == "-") { // Akce zda je metoda odčítání

        $kalkulator->odcitani($n1, $n2); // Vyvolání odčítací funkce podle třídy

    } elseif ($m == "*") { // Akce zda je metoda násobení

        $kalkulator->nasobeni($n1, $n2); // Vyvolání násobící funkce podle třídy

    } elseif ($m == "/") { // Akce zda je metoda dělení

        $kalkulator->deleni($n1, $n2); // Vyvolání dělící funkce podle třídy

    } else { // Error při špatně zadané metodě

        echo("[ERROR] Špatné zvolení metody!");

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8"> <!-- Encoding -->
<title>PHP Kalkulačka</title> <!-- Jméno karty v prohlížeči -->
<body>

<form action="index.php" method="post"> <!-- Vrácení dat do tohoto souboru metodou Post -->

    <input type="text" name="number1" placeholder="n1" required><br> <!-- Textové pole pro n1 -->

    <input type="text" name="method" placeholder="Metoda" required><br> <!-- Textové pole pro metodu -->

    <input type="text" name="number2" placeholder="n2" required><br> <!-- Textové pole pro n2 -->

    <input type="submit" value="Vypočítat" name="submit"> <!-- Tlačítko pro odeslání dat -->
    
</form>

<p>Dostupné metody: + ; - ; * ; /</p> <!-- Paragraf s poznámkou -->

</body>
</html>
