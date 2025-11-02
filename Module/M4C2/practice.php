<?php

// ------------------ User Authentication System  -------------------

class User
{


    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function login($inputUsername, $inputPassword)
    {

        if ($this->username === $inputUsername && password_verify($inputPassword, $this->password)) {
            echo "Login successful";
        } else {
            echo "Login failed";
        }
    }


    public function changePassword($oldPass, $newPass)
    {
        if (password_verify($oldPass, $this->password)) {
            $this->password = password_hash($newPass, PASSWORD_DEFAULT);
            echo "Password changed.";
        } else {
            echo "Old password wrong.";
        }
    }
}

// $user = new User("tuhin", "1234");
// $user->login("tuhin", "1234");


// $user->changePassword("1234", "abcd");
// $user->login("tuhin", "abcd");



// --------------------  Bank Account System   -----------------

class BankAccount
{

    private $owner;
    private $balance;


    public function __construct($owner, $balance)
    {
        $this->owner = $owner;
        $this->balance = $balance;
    }


    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function withdraw($amount)
    {

        if ($amount > $this->balance) {
            echo "Insufficient funds.\n";
        } else {
            $this->balance -= $amount;
        }
    }

    public function getBalance()
    {
        return $this->balance;
    }
}


// $acount = new BankAccount("anik", 5000); 
// $acount->deposit(100);
// $acount->withdraw(500);
// echo $acount->getBalance();


class Book
{

    public $title;
    public $author;


    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
}


class Library
{


    private $books = [];


    public function addBook(Book $books)
    {
        $this->books[] = $books;
    }

    public function removeBook($title)
    {

        foreach ($this->books as $key => $value) {
            if ($value->title === $title) {
                unset($this->books[$key]);
            }
        }
    }

    public function showBooks()
    {
        foreach ($this->books as $key => $value) {
            echo "{$value->title} By {$value->author}\n";
        }
    }
}


$lib = new Library();
$lib->addBook(new Book("1984", "George Orwell"));
$lib->addBook(new Book("Brave New World", "Aldous Huxley"));
$lib->removeBook("1984");
$lib->showBooks(); // Brave New World
