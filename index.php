<?php
$wiek =67;
var_dump($wiek);
Echo '<br>';

$imie ='Anna';
var_dump($imie);
Echo '<br>';

$waga =58.6;
var_dump($waga);
Echo '<br>';

$mezatka = false;
var_dump($mezatka);


$zmienna1 = 10;
$zmienna2 = 'tekst';
var_dump($zmienna1.$zmienna2);


//tablice

$a = array(10,20,30);			// tablica indeksowana od 0

$a1 = array('a' =>10,'b'=>20,'c'=>30);	//tab asocjacyjna

$a2 = array(3=>10,2=>'tekst',1=>30);	//tab asocjacyjna

$a3 = array(); 				//pusta

Echo '<br>';

echo ($a[1]);				//wypisuje 1 z tablicy(20   )

Echo '<br>';

foreach($a as $key=>$value)
echo $key ."=>".$value.'<br>';

Echo '<br>';Echo '<br>';Echo '<br>';Echo '<br>';

$t = array(1,2,4);

$b = array();
$c = 12;
echo count($t);
echo count($b);
echo count($c);

Echo '<br>';Echo '<br>';Echo '<br>';Echo '<br>';

$t1 = array('a'=>5,'b'=>2,'d'=>null);

echo issset($t1['a']);
echo issset($t1['c']);
echo issset($t1['d']);














?>
