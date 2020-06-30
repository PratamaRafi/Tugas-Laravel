<?php
function skor_terbesar($arr){
//kode di sini
$data = [];
for($i = 0; $i < count($arr); $i++){
    if(isset($arr[$i]["kelas"])){
        $data[$arr[$i]["kelas"]] = $arr[$i];
     }else {
         $data = [$arr[$i]["kelas"]];
     }
    }   
    return $data;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));