<?php
/* Różnica czasów
Napisz funkcję dateDiff($date1, $date2), której zadaniem jest wypisanie napisu,
 opisującego różnicę między 2 datami.

Przekazywane daty są w formie napisu np: 19.10.2016 15:14:24
Funkcja ma obliczyć różnicę między 2 datami
Wypisany napis ma być wg. wzoru 10dni 5godzin 2minuty 15sekund
Sprawdź działanie Twojej funkcji na kilku parach dat
Zadanie rozwiąż używając klasy DateTime */

function dateDiff($date1, $date2) {
    // Zamiana dat na obiekty DateTime
    $datetime1 = new DateTime($date1);
    $datetime2 = new DateTime($date2);
    
    // Obliczenie różnicy między datami
    $interval = $datetime1->diff($datetime2);
    
    // Stworzenie napisu opisującego różnicę między datami
    $output = '';
    if ($interval->d > 0) {
        $output .= $interval->d . ' dni ';
    }
    if ($interval->h > 0) {
        $output .= $interval->h . ' godzin ';
    }
    if ($interval->i > 0) {
        $output .= $interval->i . ' minut ';
    }
    if ($interval->s > 0) {
        $output .= $interval->s . ' sekund';
    }
    
    return trim($output);
}


echo dateDiff('2022-03-18 12:00:00', '2022-03-19 12:00:00'); // 1 dni
echo dateDiff('2022-03-18 12:00:00', '2022-03-18 13:00:00'); // 1 godzin
echo dateDiff('2022-03-18 12:00:00', '2022-03-18 12:01:00'); // 1 minut


//