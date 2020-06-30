<?php
// 0. buat fungsi dengan parameter int
// 1. periksa kondisi array pada soal
// 2. jika selisih pada array di soal sama dengan nilai variabel beda,maka kembalikan nilai benar
// 3. jika selisih tidak sama dengan nilai variabel beda, maka kembalikan nilai salah


function temuDeret($arr){

    $selisih = $arr[1] - $arr[0];
    $terima = true;
    for($i = 1; $i < count($arr); $i++){
        $beda = $arr[$i]-$arr[$i-1];
        if( $beda == $selisih){
            $terima &= true;
        }else {
            $terima &= false;
        }
    }
    echo "Hasil periksa deret : " ;
    return($terima == true) ? 'benar' : 'salah';
}
echo temuDeret([1, 2, 3, 4, 5, 6]);// true
echo"<br>";
echo temuDeret([2, 4, 6, 12, 24]);// false
echo"<br>";
echo temuDeret([2, 4, 6, 8]); //true
echo"<br>";
echo temuDeret([2, 6, 18, 54]);// false
echo"<br>";
echo temuDeret([1, 2, 3, 4, 7, 9]);// false
?>