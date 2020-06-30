<?php

function palindrome_angka($angka) {
  // tulis kode di sini
  if ($angka >= 0 && $angka <= 9)
    return 9;
    for($i = 0; $i < 1000; $i++){
        $v = strval($i);
        $r = strrev($v);
        $n = intval($v.substr($r,1));
        if ($n >= $angka && $n == true)
        return $n;
    }
}


// TEST CASES
    echo palindrome_angka(8); // 9
    echo"<br>";
    echo palindrome_angka(10); // 11
    echo"<br>";
    echo palindrome_angka(117); // 121
    echo"<br>";
    echo palindrome_angka(175); // 181
    echo"<br>";
    echo palindrome_angka(1000); // 1001

?>