<?php
function tukar_besar_kecil($string){
    $string_length = strlen($string);                      
    for($i=0;$i<$string_length;$i++){                        
         $current_ascii = ord($string[$i]);                 
         if($current_ascii>64 && $current_ascii<91){        
                $toggled_string .= chr($current_ascii+32);   
         }elseif($current_ascii>96 && $current_ascii<123){    
               $toggled_string .= chr($current_ascii-32);   
         }else{
               $toggled_string .= $string[$i];               
             }
       }
    echo "The toggled case letter for $string is <hr />".$toggled_string; 
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
