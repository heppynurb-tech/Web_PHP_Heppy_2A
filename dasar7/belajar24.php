<?php
// FUNGSI TANPA PARAMETER
//membuat function
function salam(){
    echo "<h3>Assalamualaikum, </h3>";
    echo "Perkenalkan, nama saya Heppy<br/>";
}
 
//memanggil function
salam();
?>

<?php
// FUNGSI DENGAN PARAMETER
//membuat function
function salam(){
    echo "<h3>Assalamualaikum, </h3>";
    echo "Perkenalkan, nama saya Heppy<br/>";
}
 
function kenalan($nama,$asal) {
    echo "<h3>Halo Nama saya $nama </h3>";
    echo "Saya dari $asal <br>";
}
 
//memanggil function salam
salam();
 
$siswa="Sinta";
$dari="Jombang";
 
//memanggil function kenalan
kenalan($siswa,$dari);
?>

<?php
// FUNGSI YANG MENGEMBALIKAN NILAI
// Pengembalian nilai dalam fungsi dapat menggunakan kata kunci return.

// membuat fungsi hitung umur
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
  }
   
echo "Umur saya adalah ". hitungUmur(1990, 2020) ." tahun";
?>

<?php
// FUNGSI YANG MEMANGGIL FUNGSI LAIN
//membuat function
function salam(){
    echo "<h3>Assalamualaikum, </h3>";
    echo "Perkenalkan, nama saya Heppy<br/>";
}
 
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
 
function kenalan($nama,$asal) {
    echo "<h3>Halo Nama saya $nama </h3>";
    echo "Saya dari $asal <br>";
    echo "Umur saya adalah ". hitungUmur(1994, 2020) ." tahun";
}
 
//memanggil function salam
salam();
 
$siswa="Sinta";
$dari="Jombang";
 
//memanggil function kenalan
kenalan($siswa,$dari);
?>