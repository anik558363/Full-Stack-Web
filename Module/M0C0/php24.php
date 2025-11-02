<?php


try {

    $condition = false;


    if (!$condition) {
        throw new Exception("Condition is false");
    }

    echo "Condition is True";

} catch (Exception $e) {

    echo "". $e->getMessage();

}
