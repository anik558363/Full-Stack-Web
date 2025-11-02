<?php

interface Logger
{

    public function log($message);

    public function error($message);

}


class FileLogger implements Logger{

    public function log($message){
        echo "file logger\n";
    }

    public function error($message){
        echo "file error";
    }

}

// $filelogger = new FileLogger;

// $filelogger->log("asd");
// $filelogger->error("asd");

