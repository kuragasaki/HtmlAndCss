<?php
// FizzBuzz
    for ($i = 1; $i <= 100; $i++) {
        switch(true) {
            case ($i % 15) === 0:
                echo "$i FizzBuzz<br>";
                break;
            case ($i % 5) === 0:
                echo "$i Buzz<br>";
                break;
            case ($i % 3) === 0:
                echo "$i Fizz<br>";
        }
    }
?>