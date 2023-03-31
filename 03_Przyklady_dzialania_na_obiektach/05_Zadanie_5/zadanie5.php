<?php

/*Walidacja daty
Na podstawie klasy DateTime rozwiąż zadanie: Utwórz funkcję 
validateDateWithFormat($date, $format), która sprawdzi 
czy podana data jest poprawna w określonym formacie. Przykład użycia:

if(validateDateWithFormat(‘10-12-2022’, ‘d-m-Y’)) {
	echo “Data poprawna”;
} else { 
	echo “Data niepoprawna”;
} */

function validateDateWithFormat($date, $format) {
	$dateTime = DateTime::createFromFormat($format, $date);
	return $dateTime && $dateTime->format($format) === $date;
}


if(validateDateWithFormat('10-12-2022', 'd-m-Y')) {
    echo 'Data poprawna';
} else {
    echo 'Data niepoprawna';
}


/* unkcja validateDateWithFormat($date, $format) służy do sprawdzania poprawności daty 
podanej w określonym formacie. W tym celu funkcja tworzy obiekt klasy DateTime na podstawie 
podanej daty i formatu, a następnie porównuje sformatowaną datę z pierwotną wartością.

Jeśli podana data jest niepoprawna lub nie pasuje do określonego formatu, funkcja zwraca false.
 W przeciwnym przypadku zwracana jest wartość true, co oznacza, że podana data jest poprawna i pasuje do określonego formatu.

Funkcja przyjmuje dwa argumenty: $date - data w formacie string, oraz $format - 
format daty w formacie string. Aby określić format daty, należy użyć kodów znaczników formatujących, takich jak d dla dnia, m dla miesiąca, Y dla roku w formacie czterocyfrowym, itp. */