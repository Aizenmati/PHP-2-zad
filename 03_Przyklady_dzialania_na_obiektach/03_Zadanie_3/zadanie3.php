<?php
/*Dzień urodzin
Napisz funkcję dayOfBirth($birthDate), która na podstawie podanej daty zwróci dzień tygodnia,
 w którym osoba się urodziła.

Zadanie rozwiąż używając klasy DateTime */


function dayOfBirth($birthDate) {
    $dateTime = new DateTime($birthDate);
    $dayOfWeek = $dateTime->format('l');
    return $dayOfWeek;
}

// przykładowe użycie funkcji
$dateOfBirth = '1990-05-15';
$dayOfWeek = dayOfBirth($dateOfBirth);

// wyświetlenie wyniku na stronie
echo "Osoba urodzona w dniu $dateOfBirth jest urodzona w $dayOfWeek.";


// Funkcja dayOfBirth() przyjmuje jako argument datę urodzenia w formacie YYYY-MM-DD. 
// Następnie tworzony jest nowy obiekt klasy DateTime na podstawie podanej daty urodzenia. 
// Wykorzystując metodę format() obiektu DateTime, pobieramy dzień tygodnia w formacie "l", 
// czyli w postaci pełnej nazwy dnia tygodnia (np. "Monday"). Funkcja zwraca pobrany dzień tygodnia.

// W przykładowym użyciu funkcji, tworzona jest zmienna $dateOfBirth z datą urodzenia, 
// a następnie wywoływana jest funkcja dayOfBirth() z tą datą jako argument. 
// Wynik jest przypisywany do zmiennej $dayOfWeek. Następnie wyświetlany jest wynik na 
// stronie za pomocą funkcji echo.