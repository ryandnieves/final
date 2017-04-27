<?php
class Db { 
      
    private $mysql; 
      
    function __construct() { 
        $this->mysql = new mysqli('localhost', 'root', 'yourPassword', 'db') or die('problem'); 
    } 
} // end class
?>