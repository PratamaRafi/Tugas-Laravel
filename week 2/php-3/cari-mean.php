<?php
// 0.buat fungsi dengan parameter berupa array
// 1.jumlah tiap elemen array dan bagi dengan banyak data dari aray
// 2. jika hasil mean berupa float, maka bulatkan ke int

function cari_mean($arr){
    $arr = array_filter($arr);
    $average = array_sum($arr)/count($arr);
    echo "Hasil Mean Dari Array : " .(round($average));  
}
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo "<br>";
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo "<br>";
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo "<br>";
echo cari_mean([1, 3, 3]); // 2
echo "<br>";
echo cari_mean([7, 7, 7, 7, 7]); // 7

?>