<?php
/**
 * Created by PhpStorm.
 * User: hoangkhai
 * Date: 9/25/18
 * Time: 9:53 AM
 */

namespace controller;

use \model\Database;
use \model\PostDB;

class PostController
{
    public $conn;
    public $blog;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect('root', 'root', 'bogdatabase');
        $this->blog = new PostDB($this->conn);
    }

     public  function  index() {
        $post = $this->blog->getAll();
        include '../index.php';
      }

}

