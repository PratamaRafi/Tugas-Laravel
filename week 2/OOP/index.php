<?php
echo "<h2>Berlatih OOP</h2>";
echo "<h3>Release 0</h3>";

require_once ("animal.php");
require_once ("ape.php");
require_once ("frog.php");

$sheep = new animal("shaun", 2, "False");

echo "Nama Hewan : " .$sheep->name; 
echo "<br>";
echo "Jumlah Kaki : " .$sheep->legs;
echo "<br>";
echo "Hewan Berdarah Dingin : " .$sheep->cold_blooded;
echo "<br>";
// Ape
echo "<h3>Release 1</h3>";
$sungokong = new ape("Kera Sakti", 2, "False");
echo "Nama Hewan : " .$sungokong->get_name();
echo "<br>";
echo "Jumlah Kaki : " .$sungokong->legs;
echo "<br>";$sungokong;
echo "Hewan Berdarah Dingin : " .$sungokong->cold_blooded;
echo "<br>";
echo $sungokong->yell();
echo "<br><br>";
// Frog
$kodok = new frog("buduk",4, "False");
echo "Nama Hewan : " .$kodok->get_name();
echo "<br>";
echo "Jumlah Kaki : " .$kodok->legs;
echo "<br>";$sungokong;
echo "Hewan Berdarah Dingin : " .$kodok->cold_blooded;
echo "<br>";
echo $kodok->jump()
?>