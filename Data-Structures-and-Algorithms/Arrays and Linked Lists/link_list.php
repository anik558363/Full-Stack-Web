<?php

class Node
{
    public $data;
    public $next;

    public function __construct($value)
    {
        $this->data = $value;
        $this->next = null;
    }
}

class LinkList
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    // 👉 Insert at END
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

    // 👉 Insert at BEGINNING
    public function insertAtBeginning($data)
    {
        $newNode = new Node($data);
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    // 👉 Insert at SPECIFIC POSITION (0-based index)
    public function insertAtPosition($data, $position)
    {
        $newNode = new Node($data);

        if ($position == 0) {
            $newNode->next = $this->head;
            $this->head = $newNode;
            return;
        }

        $current = $this->head;
        $count = 0;

        while ($current != null && $count < $position - 1) {
            $current = $current->next;
            $count++;
        }

        if ($current == null) {
            echo "Invalid position\n";
            return;
        }

        $newNode->next = $current->next;
        $current->next = $newNode;
    }

    // 👉 Delete a node by value
    public function delete($key)
    {
        $current = $this->head;
        $prev = null;

        if ($current != null && $current->data == $key) {
            $this->head = $current->next;
            return;
        }

        while ($current != null && $current->data != $key) {
            $prev = $current;
            $current = $current->next;
        }

        if ($current == null) return;

        $prev->next = $current->next;
    }

    // 👉 Search for a value
    public function search($key)
    {
        $current = $this->head;
        while ($current != null) {
            if ($current->data == $key) return true;
            $current = $current->next;
        }
        return false;
    }

    // 👉 Count nodes
    public function countNodes()
    {
        $count = 0;
        $current = $this->head;
        while ($current != null) {
            $count++;
            $current = $current->next;
        }
        return $count;
    }

    // 👉 Reverse linked list
    public function reverse()
    {
        $prev = null;
        $current = $this->head;
        $next = null;

        while ($current != null) {
            $next = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $next;
        }

        $this->head = $prev;
    }

    // 👉 Display list
    public function display()
    {
        $current = $this->head;
        while ($current != null) {
            echo $current->data . " -> ";
            $current = $current->next;
        }
        echo "NULL\n";
    }
}


// ---------------- Example Usage ----------------
$list = new LinkList();

// Insert elements at END
$list->insert(10);
$list->insert(20);
$list->insert(30);
$list->insert(40);
$list->display();  // 10 -> 20 -> 30 -> 40 -> NULL

echo "<br>";

// Insert at BEGINNING
$list->insertAtBeginning(5);
$list->display();  // 5 -> 10 -> 20 -> 30 -> 40 -> NULL

echo "<br>";

// Insert at POSITION
$list->insertAtPosition(25, 3);
$list->display();  // 5 -> 10 -> 20 -> 25 -> 30 -> 40 -> NULL

// echo "<br>";

// // Delete node
// $list->delete(25);
// $list->display();  // 5 -> 10 -> 20 -> 30 -> 40 -> NULL

// echo "<br>";

// // Search
// echo $list->search(30) ? "Found" : "Not Found"; // Found
// echo "<br>";
// echo $list->search(100) ? "Found" : "Not Found"; // Not Found

// echo "<br>";

// // Count nodes
// echo "Total Nodes: " . $list->countNodes(); // 5

// echo "<br>";

// // Reverse list
// $list->reverse();
// $list->display();  // 40 -> 30 -> 20 -> 10 -> 5 -> NULL
