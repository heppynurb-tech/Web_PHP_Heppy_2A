<?php
// Fungsi Rekursif
// fungsi rekursif adalah fungsi yang memanggil dirinya sendiri. Fungsi ini biasanya digunakan untuk menyelesaikan masalah sepeti faktorial, bilangan fibbonaci.

function faktorial($angka) {
  if ($angka < 2) {
    return 1;
  } else {
  // memanggil dirinya sendiri
  return ($angka * faktorial($angka-1));
  }
}
 
// memanggil fungsi
echo "faktorial 7 adalah " . faktorial(7);
 
?>