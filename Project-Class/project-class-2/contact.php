<?php


$contacts = [];


// array reference system

// function addContact(array &$contacts, string $name, string $email, $phone)
// {

//     $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
// }


// array push system

function addContact(array &$contacts, string $name, string $email, $phone): void
{
    array_push($contacts, ['name' => $name, 'email' => $email, 'phone' => $phone]);
}


function displayContact(array $contacts): void
{

    if (empty($contacts)) {
        echo "No Contact Available.\n";
    } else {
        foreach ($contacts as $key => $contact) {
            echo "
            Name : {$contact['name']},
            email : {$contact['email']},
            phone : {$contact['phone']}\n,
            ";
        }
    }
}


while (true) {
    echo "\nContact Management App : \n";
    echo "1. Add Contact\n2. View Contact\n3.Exit\n";
    $choice = (int)readline("Choice An Option : ");


    if ($choice === 1) {
        $name = readline("Enter Your Name : ");
        $email = readline("Enter Your Email : ");
        $phone = readline("Enter Your Phone : ");
        addContact($contacts, $name, $email, $phone);

        echo "$name added to Contacts\n";
        echo "$email added to Contacts\n";
        echo "$phone added to Contacts\n";
    } elseif ($choice === 2) {
        displayContact($contacts);
    } elseif ($choice === 3) {
        echo "Exiting...\n";
        break;
    } else {
        echo "Invalid Choice. Pleas try again.";
    }
}
