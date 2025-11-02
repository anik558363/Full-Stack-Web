<?php

function divide($a, $b)
{
    if ($b == 0) {
        throw new Exception("Division By zero");
    }

    return $a / $b;
}


try {
    echo divide(10, 0);
} catch (Exception $e) {
    echo $e->getMessage();
}
