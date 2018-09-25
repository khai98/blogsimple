<?php
/**
 * Created by PhpStorm.
 * User: hoangkhai
 * Date: 9/25/18
 * Time: 9:52 AM
 */


namespace model;
class PostDB
{
    public $conn;
    private $table;
    /**
     * PostDB constructor.
     * @param $table
     */
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function addNew( $title, $Contents, $introduction ) {

        $sql = "INSERT INTO blog(title, introduction, content, created) VALUES ($title, $Contents,$introduction)";
        $query = $this->conn->query($sql);
        return $query;
    }

    public function getAll() {
        $sql = "SELECT * FROM .$this->table";
        $query = $this->conn->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
