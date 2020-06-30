<?php
           $cast = [
            [
                "name" => "Will Byers",
                "age" => 12,
                "aliases" => "Will the Wise",
                "status" => "Alive"        
            ],
            [
                "name" => "Mike Wheeler",
                "age" => 12,
                "aliases" => "Dungeon Master",
                "status" => "Alive" 
            ],
            [
                "name" => "Jim Hopper",
                "age" => 43,
                "aliases" => "Chief Hopper",
                "status" => "Deceased" 
      
            ],
            [
                "name" => "Eleven",
                "age" => 12,
                "aliases" => "El",
                "status" => "Alive"    
            ],
                          

         ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"]; 
        $adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"]; 
        print_r($kids);
        echo"<br>";
        print_r($adults);
        
        
        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: " ; 
        echo count($kids);
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";
        echo "</ol>";
        
        echo "Total Adults: " ;
        echo count($adults);
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";
        echo "</ol>";

        echo "<h3> soal 3 </h3>";

        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
        */

        
    ?>
    <h3>Cast Stranger Things List : </h3>
    
         <?php foreach( $cast as $cst ) : ?>
        <ul style="list-style: none;">
            <li>Name : <?= $cst["name"]; ?></li>
            <li>Age : <?= $cst["age"]; ?></li>
            <li>Aliases : <?= $cst["aliases"]; ?></li>
            <li>Status : <?= $cst["status"]; ?></li>
        </ul>
         <?php endforeach; ?>
       <h2>
           <a style="text-decoration: none;" href="https://sanbercode.com/dasbor/kelas_training/4">KUMPUL TUGAS DISINI</a>
       </h2>

</body>
</html>