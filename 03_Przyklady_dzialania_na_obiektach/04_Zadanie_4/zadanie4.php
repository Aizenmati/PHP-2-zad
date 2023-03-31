<?php
/* Następna dekada
Napisz funkcję nextDecade($date), która wypisze na podstawie podanej daty informację o rocznicach daty przez kolejne 10 lat. Informacje powinny zawierać:

dzień tygodnia wystąpienia daty w danym roku
dzień roku wystąpienia daty w danym roku
data musi być przekazana w formacie RRRR-MM-DD
Przykład:

$date = '2016-03-01';
//wypisze
2017-03-01, 59 dzień roku, Śro
2018-03-01, 59 dzień roku, Czw
2019-03-01, 59 dzień roku, Pią
2020-03-01, 60 dzień roku, Nie
2021-03-01, 59 dzień roku, Pon
2022-03-01, 59 dzień roku, Wto
2023-03-01, 59 dzień roku, Śro
2024-03-01, 60 dzień roku, Pią
2025-03-01, 59 dzień roku, Sob
2026-03-01, 59 dzień roku, Nie

Zadanie rozwiąż używając klasy DateTime */

function nextDecade($date) {
  // utworzenie obiektu DateTime na podstawie podanej daty
  $dateTime = new DateTime($date);

  // wypisanie informacji o rocznicach daty przez kolejne 10 lat
  for ($i = 1; $i <= 10; $i++) {
    $dateTime->modify('+1 year');
    $dayOfWeek = $dateTime->format('D'); // dzień tygodnia
    $dayOfYear = $dateTime->format('z') + 1; // dzień roku
    $formattedDate = $dateTime->format('Y-m-d'); // data w formacie RRRR-MM-DD
    echo $formattedDate . ', ' . $dayOfYear . ' dzień roku, ' . $dayOfWeek . '<br>';
  }
}

$date = '2016-03-01';
nextDecade($date);


// Funkcja nextDecade przyjmuje jako argument datę w formacie RRRR-MM-DD.
//  Następnie tworzy obiekt DateTime na podstawie tej daty. 
//  Za pomocą pętli for przechodzimy przez kolejne 10 lat, 
//  dodając po jednym roku do daty każdej iteracji. 
//  Dla każdej rocznicy pobieramy dzień tygodnia i dzień roku za 
//  pomocą metod format obiektu DateTime. Na końcu wypisujemy 
//  informacje o każdej rocznicy na ekranie.