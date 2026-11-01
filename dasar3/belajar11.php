<?php
// Operator bitwise merupkan operator yang digunakan untuk operasi bit (biner). Operator ini berlaku untuk tipe data int, long, short, char, dan byte. Operator ini akan menghitung dari bit-ke-bit.

$x = 60;
$y = 13;
 
// bitwise AND
$z = $x & $y;
echo "$x & $y = $z";
echo "<br>";
 
// bitwise OR
$z = $x | $y;
echo "$x | $y = $z";
echo "<br>";
 
// bitwise XOR
$z = $x ^ $y;
echo "$x ^ $y = $z";
echo "<br>";
 
// Shift Left
$z = $x << $y;
echo "$x << $y = $z";
echo "<br>";
 
// Shift Right
$z = $x >> $y;
echo "$x >> $y = $z";
echo "<br>";
 
?>