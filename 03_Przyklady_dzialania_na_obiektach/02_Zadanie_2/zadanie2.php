<?php
/*Konwersja czasu
Napisz funkcje convertDate($date, $days, $hours, $minutes, $seconds): DateTime, 
która zwróci zmodyfikowaną datę wg. zasad:

Do przekazanej jako argument daty np. 19.10.2016 15:14:24 dodana ma zostać
 odpowiednia ilość dni, godzin, minut i sekund
Przekazane wartości mogą być również ujemne, wówczas odpowiednią ilość należy odjąć od daty
Przykład:

$date = '19.10.2016 15:14:24';
convertDate($date, 3, 1, 0, 15);
//zwróci 22.10.2016 16:14:39

$date = '19.10.2016 15:14:24';
convertDate($date, -4, -2, 9, 15);
//zwróci 15.10.2016 13:23:39

Zadanie rozwiąż używając klasy DateTime */


function convertDate($date, $days, $hours, $minutes, $seconds) {
  $dateTime = new DateTime($date);
  $dateTime->modify("{$days} day {$hours} hour {$minutes} minute {$seconds} second");
  return $dateTime->format('d.m.Y H:i:s');
}


$date = '19.10.2016 15:14:24';
echo convertDate($date, 3, 1, 0, 15); // zwróci "22.10.2016 16:14:39"
echo '<br>'
$date = '19.10.2016 15:14:24';
echo convertDate($date, -4, -2, 9, 15); // zwróci "15.10.2016 13:23:39"


// function convertDate($date, $days, $hours, $minutes, $seconds) {
//   $timestamp = strtotime($date);
//   $modifiedTimestamp = $timestamp + $days*24*60*60 + $hours*60*60 + $minutes*60 + $seconds;
//   return date('d.m.Y H:i:s', $modifiedTimestamp);
// }

// $date = '19.10.2016 15:14:24';
// $modifiedDate = convertDate($date, 3, 1, 0, 15);
// echo $modifiedDate; // zwróci 22.10.2016 16:14:39

// $date = '19.10.2016 15:14:24';
// $modifiedDate = convertDate($date, -4, -2, 9, 15);
// echo $modifiedDate; // zwróci 15.10.2016 13:23:39