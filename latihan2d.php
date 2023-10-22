<?php
  
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
    
  
for ($number = 1; $number <= 19; $number++) {
    echo "Angka $number: ";
    
    if ($number % 2 == 0) {
        echo " adalah bilangan genap. ";
    } else {
        echo " adalah bilangan ganjil. ";
    }
    if (isPrime($number)) {
        echo " sekaligus bilangan prima.";
    }

    echo "<br>";
}

?>