<?php
/*Zadanie 3 - rozwiązywane z wykładowcą
W pliku zadanie3_form.php utwórz formularz HTML, który zbierze od użytkownika następujące pola:

ilość dni
Formularz ma przesłać dane metodą GET do pliku zadanie3.php.

W pliku zadanie3.php wykorzystaj funkcję rentCost($days), 
która została przez nas stworzona w ramach pierwszego zadania z działu Funkcje, 
a następnie wyświetl użytkownikowi cenę wynajmu pokoju na ekranie w oparciu o 
podaną przez niego ilość dni.
*/
$days = $_GET ['days'];
function rentCost($days) {
  // zerowanie kosztu początkowego
  $cost = 0;
  
  // ustawienie kosztu pokoju zgodnie z liczbą dni
  if ($days == 1) {
    $cost = 200;
  } elseif ($days >= 2 && $days <= 3) {
    $cost = 180 * $days;
  } elseif ($days >= 4 && $days <= 7) {
    $cost = 160 * $days;
  } elseif ($days >= 8) {
    $cost = 150 * $days;
  }
  else {
    $cost = 0;
  }
  
  // obliczenie ilości pełnych tygodni i zniżki za każdy z nich
  $discount = floor($days / 7) * 50;
  // drugie rozwiązanie:  $discount = ( $days - ( $days % 7 ) ) / 7;  w

  // odjęcie zniżki od końcowego kosztu
  $cost -= $discount;
  
  // zwrócenie końcowego kosztu
  return $cost;
}

$cost = rentCost($days);
echo "Koszt wynajmu pokoju na $days dni: $cost zł" . "<br>";