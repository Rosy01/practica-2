<?php
for ($i=1; $i<=100; $i++) {
    if (primo($i)) {
        echo "<br>El número ".$i." es primo";
    } else {
        echo "<br>El número ".$i." no es primo";
    }
}

function primo($n)
{
    if ($n == 2 || $n == 3 || $n == 5 || $n == 7) {
        return True;
    } else {
        // comprobamos si es par
        if ($n % 2 != 0) {
            // comprobamos solo por los impares
            for ($i = 3; $i <= sqrt($n); $i += 2) {
                if ($n % $i == 0) {
                    return False;
                }
            }
            return True;
        }
    }
    return False;
}
?>