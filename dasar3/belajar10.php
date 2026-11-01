<?php
// Operator Logika
// Operator logika adalah operator untuk melakukan operasi logika seperti AND, OR, dan NOT.

$x = true;
$y = false;
 
// variabel $z akan bernilai false
$z = $x && $y;
printf("%b && %b = %b", $x,$y,$z);
echo "<br>";
 
// variabel $z akan bernilai true
$z = $x || $y;
printf("%b || %b = %b", $x,$y,$z);
echo "<br>";
 
// variabel $z akan bernilai false
$z = !$x;
printf("!%b = %b", $x, $z);
echo "<br>";

// memformat dan mencetak teks. Namun akan tetap menampilkan 1 untuk true dan 0 untuk false. Operator logika sama seperti operator pembanding, ia akan menghasilkan nilai dengan tipe data boolean. Perhatikanlah hasil yang di dapatkan ketika menggunakan operator && (AND), || (OR), dan ! (NOT). Operator && akan menghasilkan true apabila nilai kiri dan kanan bernilai true. Sedangkan operator || akan menghasilkan false saat nilai kiri dan kanan bernilai false.
?>