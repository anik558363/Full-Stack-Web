<?php

final class FinalClass{


    public function printing($type){
        echo "$type is printing";
    }

}

$final = new FinalClass();

$final->printing("final");


?>