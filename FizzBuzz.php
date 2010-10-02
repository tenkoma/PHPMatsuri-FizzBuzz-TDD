<?php
class FizzBuzz{
    function say($num){
        if ($num === 3) {
            return 'Fizz';
        } else if($num === 5) {
            return 'Buzz';
        }
        return $num;
    }
}
