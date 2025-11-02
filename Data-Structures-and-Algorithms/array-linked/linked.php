<?php


class Node
{

    public $data;
    public $next;


    function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class LindClass
{

    private $head;


    function __construct()
    {
        $this->head = null;
    }


    // insert
    public function insert($data)
    {

        $newNode = new Node($data);

        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $current = $this->head;

            while ($current->next != null) {

                $current = $current->next;
            }

            $current->next = $newNode;
        }
    }

    public function delete($ky){

        $current = $this->head;
        $prev = null;


        if ($current != null  && $current->data == $key) {
           
            $this->head = $current->next; // head deleted

            return;

        }

        while($current != null && $current->data != $key){

            $prev = $current;

            $current = $current->next;

        }

        if ($current == null ) {
            return; // not found
        }

        $prev->next = $current->next; // bypass node

    }


    // search for a node

    public function search($key){

        $current = $this->head;

        while($current != null){

            if ($current->data == $key) {
               return true;
            }

            return $current = $current->next;

        }

        return false;

    }

    public function display(){

        $current = $this->head;

        while($current != null){

            echo $current->data . "->";
            $current = $current->next;

        }

        echo "NULL\n";


    }



}
