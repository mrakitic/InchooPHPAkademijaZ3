<?php

function niz($x, $y, &$a)
{
$prviBroj = 1;
$minimalniRed = 0;
$minimalniStupac = 0;

while ($minimalniRed < $x && $minimalniStupac < $y ){
for ($i = $minimalniStupac; $i < $y; ++$i)
$a[$minimalniRed][$i] = $prviBroj++;
$minimalniRed++;
for ($i = $minimalniRed; $i < $x; ++$i)
$a[$i][$y - 1] = $prviBroj++;
$y--;
if ($minimalniRed < $x){
for ($i = $y - 1; $i >= $minimalniStupac; --$i)
$a[$x - 1][$i] = $prviBroj++;
$x--;
}
if ($minimalniStupac < $y) {
for ($i = $x - 1; $i >= $minimalniRed; --$i)
$a[$i][$minimalniStupac] = $prviBroj++;
$minimalniStupac++;
}
}
}
?>