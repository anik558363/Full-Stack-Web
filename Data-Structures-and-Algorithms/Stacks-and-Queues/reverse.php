<?php

class Stack
{
    private $stack = [];

    // Push an element onto the stack
    public function push($item)
    {
        array_push($this->stack, $item);
    }

    // Pop an element from the stack
    public function pop()
    {
        if ($this->isEmpty()) {
            return "Stack is empty!";
        }
        return array_pop($this->stack);
    }

    // Peek top element
    public function peek()
    {
        if ($this->isEmpty()) {
            return "Stack is empty!";
        }
        // return end($this->stack);
        return $this->stack[count($this->stack) - 1];
    }

    // Check if stack is empty
    public function isEmpty()
    {
        return empty($this->stack);
    }

    // Display stack
    public function display()
    {
        return $this->stack;
    }
}




$array = [12, 15, 20, 25, 30];

$length = count($array);


$stack = new Stack();

for ($i = 0; $i < $length; $i++) {
  $stack->push($array[$i]);
}

// print_r($stack->display());
// echo "<br>";



$result = [];

while (!$stack->isEmpty()) {
    array_push($result, $stack->pop());

}


print_r($result);
echo "<br>";
print_r($array);
