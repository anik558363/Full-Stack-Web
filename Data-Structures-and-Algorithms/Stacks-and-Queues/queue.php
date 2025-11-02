<?php

class Queue {
    private $queue = []; // Queue elements রাখার জন্য array

    // ------------------- Enqueue -------------------
    // নতুন element add করা queue এর শেষে
    public function enqueue($item) {
        array_push($this->queue, $item);
    }

    // ------------------- Dequeue -------------------
    // প্রথম element remove করা এবং return করা
    public function dequeue() {
        if ($this->isEmpty()) {
            return "Queue is empty!";
        }
        return array_shift($this->queue);
    }

    // ------------------- Peek -------------------
    // Queue এর front element দেখানো (remove না করে)
    public function peek() {
        if ($this->isEmpty()) {
            return "Queue is empty!";
        }
        return $this->queue[0];
    }

    // ------------------- isEmpty -------------------
    // Queue খালি কি না চেক করা
    public function isEmpty() {
        return empty($this->queue);
    }

    // ------------------- Display -------------------
    // পুরো queue দেখানো
    public function display() {
        return $this->queue;
    }
}

// ------------------- Example Usage -------------------
$queue = new Queue();

// Enqueue elements
$queue->enqueue("Apple");
$queue->enqueue("Banana");
$queue->enqueue("Cherry");
$queue->enqueue("Mango");
$queue->enqueue("Grape");

// Display queue
echo "Queue: ";
print_r($queue->display());
echo "<br>";

// Peek front element
echo "Front: " . $queue->peek();
echo "<br>";

// Dequeue element
echo "Dequeued: " . $queue->dequeue();
echo "<br>";

// Display queue after dequeue
echo "Queue after dequeue: ";
print_r($queue->display());
echo "<br>";

// Check if queue is empty
echo $queue->isEmpty() ? "Queue is empty" : "Queue is not empty";
echo "<br>";

?>
