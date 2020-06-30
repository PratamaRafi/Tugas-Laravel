
<?php 
// 0. Beri parameter pada fungsi dengan tipe data int
// 1. Ubah int menjadi string
// 2. Dapatkan panjang string
// 3. Buat variabel yang menambil nilai dari string indeks ke 0 dan 1
// 4. Buat kondisional jika variabel bernilai kurang dari variabel indeks ke i dan i+1 
// 5. Variabel baru muncul jika nilai variabel lama lebih kecil dari baru
// 6. kembalikan ke tipe data int

function pasangan_terbesar($angka) {
   $angka_string = (string)$angka;
   $length = strlen($angka_string);
   $hasil = (int)($angka_string[0]+$angka_string[1]);
    for ($i = 0; $i < $length-1; $i++) {
        if ($hasil < (int)($angka_string[$i]+$angka_string[$i+1])) {
            $hasil = (int)($angka_string[$i]+$angka_string[$i+1]);
    }
  }
  return $hasil;
}

// TEST CASES
// echo pasangan_terbesar(641573); // 73
// echo pasangan_terbesar(12783456); // 83
// echo pasangan_terbesar(910233); // 91
// echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99
?>
