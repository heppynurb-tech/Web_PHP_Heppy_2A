<?php
// PERCABANGAN IF 

// percobaan pertama

$total_belanja = 150000;
 
if($total_belanja > 100000){
    echo "Anda dapat diskon!";
}

/* Kondisi atau pernyataan ini akan bernilai true dan false. Jika true (benar), maka kode yang ada di dalamnya akan dieksekusi. Namun, apabila false maka tidak akan mengeksekusinya.
*/

// percobaan kedua

if($total_belanja > 100000){
    echo "Anda dapat diskon!";
} else {
    echo "Maaf Anda tidak mendapatkan diskon";
}

// jika total_belanja 50.000 maka kode pada percobaan pertama tidak akan dieksekusi
// sedangkan percobaan kedua kode akan tetap dieksekusi
?>