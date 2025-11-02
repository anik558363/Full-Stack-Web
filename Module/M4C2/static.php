<?php


class Math{
    public static function square($n){
        return $n * $n;
    }
}

// echo Math::square(2);


class Counter{

    public static $count = 0;

    public static function increment(){
       return self::$count . "\n";
    }

}

Counter::$count += 1;
echo Counter::increment();
Counter::$count += 1;
echo Counter::increment();



?>