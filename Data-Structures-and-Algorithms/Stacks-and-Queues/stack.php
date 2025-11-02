<?php

class Stack {
    private $stack = []; // Stack elements রাখার জন্য array

    // ------------------- Push -------------------
    // নতুন element add করা stack এর উপরে
    public function push($item) {
        array_push($this->stack, $item);
    }

    // ------------------- Pop -------------------
    // Stack এর top element remove করে return করা
    public function pop() {
        if ($this->isEmpty()) {
            return "Stack is empty!";
        }
        return array_pop($this->stack);
    }

    // ------------------- Peek -------------------
    // Stack এর top element দেখানো (remove না করে)
    public function peek() {
        if ($this->isEmpty()) {
            return "Stack is empty!";
        }
        return $this->stack[count($this->stack) - 1];
    }

    // ------------------- isEmpty -------------------
    // Stack খালি কি না check করা
    public function isEmpty() {
        return empty($this->stack);
    }

    // ------------------- Display -------------------
    // পুরো stack print করা
    public function display() {
        return $this->stack;
    }
}

// ------------------- Example Usage -------------------
$stack = new Stack();

// Push elements
$stack->push("A");
$stack->push("B");
$stack->push("C");

echo "Stack: ";
print_r($stack->display());
echo "<br>";

// Peek top element
echo "Top: " . $stack->peek();
echo "<br>";

// Pop element
echo "Popped: " . $stack->pop();
echo "<br>";

// Stack after pop
echo "Stack after pop: ";
print_r($stack->display());
echo "<br>";

// Check if stack is empty
echo $stack->isEmpty() ? "Stack is empty" : "Stack is not empty";
echo "<br>";

?>
