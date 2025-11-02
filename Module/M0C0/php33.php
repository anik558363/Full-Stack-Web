<?php


interface Loogger{

    public function pay();

}



class FileLogger implements Loogger{

    public $a;
    public $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }


    public function pay(){
        return $this->a + $this->b;
    }

}


$fileLogger = new FileLogger(20, 1);

echo $fileLogger->pay();

?>