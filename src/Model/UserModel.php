<?php
class UserModel
{
   
public function Connect ()
    {
        echo __CLASS__ . " [OK]" . PHP_EOL ;
        $servername = "localhost";
        $username = "root";
        $password = "";
        $namedatabase ="PiePHP";
        $conn = new PDO("mysql:host=$servername;dbname=$namedatabase", $username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
