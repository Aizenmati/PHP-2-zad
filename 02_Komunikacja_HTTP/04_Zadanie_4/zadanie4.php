<?php
/* Zadanie 4
W pliku zadanie4_form.php utwórz formularz HTML, który zbierze od użytkownika następujące pola:

kwotę w złotówkach
Formularz ma przesłać dane metodą GET do pliku zadanie4.php.

W pliku zadanie4.php wykorzystaj funkcję exchange($val), 
która została przez nas stworzona w ramach drugiego zadania z 
działu Zmienne tematy zaawansowane, a następnie wyświetl użytkownikowi 
przeliczoną po kursie kwotę w dolarach w oparciu o podaną przez niego sumę złotówek.

Odpowiedz na pytanie: W funkcji wyświetlana jest informacja o tym, która jest
 to wymiana z rzędu. Wykonaj formularz kilkukrotnie. Jaką liczbę wykonań widzisz? Dlaczego? */

$pln = $_GET ['pln'];
$plnToUsd = 4.41; // aktualny kurs dolara 


function exchange($val) { 
    static $counter = 0; // zmienna statyczna, która będzie zliczać liczbę wymian
    $counter++; // zwiększamy licznik o 1 za każdym razem, gdy funkcja jest wywoływana
    $sum = round($val / $GLOBALS['plnToUsd'], 2); // obliczamy ilość dolarów na podstawie kursu
    echo "Wymiana nr $counter: Wymiana $val złotówek po kursie {$GLOBALS['plnToUsd']} da $sum dolarów<br>";
} 

echo exchange($pln);