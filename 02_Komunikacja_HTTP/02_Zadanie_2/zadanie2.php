<?php

/*  Zadanie 2
Zobacz jakie nagłówki są przesyłane z przeglądarki do twojego skryptu PHP.
 W tym celu użyj funkcji getallheaders(). Funkcja ta zwraca tablicę asocjacyjną w której:

Indeksem jest nazwa nagłówka,
Wartością ukrytą pod tym indeksem jest wartość nagłówka.
Zobacz jakie informacje zostały wypisane. Czego możesz się dowiedzieć
 o komputerze osoby, która odwiedzała twoją stronę? Zobacz czy nagłówki 
 wysłane różnią się w przypadku użycia różnych przeglądarek, 
 jakie masz na swoim komputerze?

Uwaga: Żeby wypisać wszystkie elementy z tablicy, np. pobierz nazwy 
nagłówków za pomocą funkcji array_keys($array), a następnie użyj pętli, 
żeby wyświetlić zarówno ich nazwy, jak i ich wartości.  */


// Aby zobaczyć jakie nagłówki są przesyłane z przeglądarki do skryptu PHP, 
// można użyć funkcji getallheaders(). Funkcja ta zwraca tablicę asocjacyjną, 
// w której indeksem jest nazwa nagłówka, a wartością ukrytą pod tym indeksem
//  jest wartość nagłówka. Można wykorzystać tę funkcję, żeby dowiedzieć się 
//  jakie informacje są wysyłane z przeglądarki do serwera.

// Dzięki nagłówkom możemy dowiedzieć się na przykład o przeglądarce i
//  jej wersji, systemie operacyjnym, języku przeglądarki, adresie IP 
//  odwiedzającego, typie MIME żądanej strony, czasie i dacie żądania 
//  oraz o refererze, czyli stronie, z której użytkownik wszedł na naszą stronę.

// Można również porównać nagłówki wysłane przez różne przeglądarki 
// na swoim komputerze i zobaczyć, czy różnią się one od siebie. 
// Można użyć do tego celu różnych przeglądarek i sprawdzić,
//  jakie nagłówki zostaną wysłane.


// pobierz wszystkie nagłówki
$headers = getallheaders();

// pobierz nazwy nagłówków
$header_names = array_keys($headers);

// wyświetl nazwy i wartości nagłówków
foreach ($header_names as $name) {
    echo "$name: $headers[$name] <br>";
}
?>

?>