<?php

$a = array('a'=>1,'b'=>9,'c'=>5,'d'=>7);

print_r($a);
echo'<br>';
echo'<br>';
sort($a);

print_r($a);
echo'<br>';
echo'<br>';

$b = array('edek','jozek','zosia','gosia');
print_r($b);

echo '<br>';
echo '<br>';

shuffle($b);
print_r($b);

echo '<br>';
echo '<br>';

natcasesort($b);
print_r($b);

echo '<br>';
echo '<br>';

unset($b[2]);
print_r($b);


$c = array(
	array(1,5,4,7),
	array(10,4,8,9)
);

print_r($c);

echo '<br>';
echo '<br>';
echo '<br>';

for ($i=0;$i<count($c);$i++)
{
	for ($j = 0; $j<count($c[$i]);$j++)
	{
		echo $c[$i][$j].',';
	}
}

echo '<br>';echo '<br>';

foreach($c as $nowa)
{
	foreach($nowa as $cos)
	{
		echo $cos.',';
		echo '<br>';
	}
	echo '<br>';
}


$in = array(
	array('imie1','imie2','imie3','imie4'),
	array('Nazwisko1','Nazwisko2','Nazwisko3','Nazwisko4')
);

for($i = 0; $i<4; $i++)
{
	echo ($i+1).'. ';
	echo $in[0][$i].' ';
	echo $in[1][$i];
	echo '<br>';
}

$e = array(1,3,5,5,2,6,10, 19);

array_push($e,13);

echo $e[count($e)-1];

array_push(89, $e);

print_r($e);

//array_push dodaje element na koniec tablicy
//array_unshift dodaje na poczatek

?>