<?php

class UserSaver
{
    private $username;
    private $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function save()
    {
        $string = $this->username . " - " . $this->email . PHP_EOL;

        try {
            
            $file = fopen("users.txt", "a");
            
            if (!$file) {
                throw new Exception("File not accessible");
            }

            fwrite($file, $string);

            fclose($file);

        } catch (Exception $e) {
            
            echo "Error: " . $e->getMessage();
        }
    }
}


$user2 = new UserSaver("sara", "sara@example.com");
$user2->save();

?>
