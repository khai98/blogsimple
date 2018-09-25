<?php
namespace model;
use PDO;
use PDOException;

class Database
{
    private $localhost = NULL;
    private $user_name = NULL;
    private $password = NULL;

    /**
     * @param $user
     * @param $password
     * @param $dbName
     * @return null|PDO
     */
    public function connect($user, $password, $dbName)
    {
        $this->user_name = $user;
        $this->password = $password;
        $this->localhost = "mysql:host=localhost;dbname=$dbName";

        try {
            $conn = new PDO($this->localhost, $this->user_name, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return NULL;
    }
}

