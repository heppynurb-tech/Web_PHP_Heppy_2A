<?php 
// Percabangan SWITCH
/*sintaks ini digunakan sebagai alternatif pengganti dari sintaks if … else dengan else lebih dari satu. 
Switch, kondisi hanya dinyatakan dengan bilangan bulat atau karakter/string.
*/

$harike = 3;
 
switch($harike){
    case 1:
        echo "SENIN";
        break;
    case 2:
        echo "SELASA";
        break;
    case 3:
        echo "RABU";
        break;
    case 4:
        echo "KAMIS";
        break;
    case 5:
        echo "JUMAT";
        break;
    case 6:
        echo "SABTU";
        break;
    case 7:
        echo "AHAD";
        break;
    default:
        echo "Maaf Kode hari salah!";
}
?>