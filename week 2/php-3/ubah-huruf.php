<?php
function ubah_huruf($string){
    $huruf = $string;
    $length = strlen($huruf);
for ($i = 0; $i < $length; $i++){
    $naik = $huruf[$i];
    $naik++;
    echo $naik;
}



}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br>";
echo ubah_huruf('keren'); // lfsfo
echo "<br>";
echo ubah_huruf('semangat'); // tfnbohbu

?>