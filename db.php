<?php
class Db { 
      
    private $mysql; 
      
    function __construct() { 
        $this->mysql = new mysqli('localhost', 'root', 'yourPassword', 'db') or die('problem'); 
    } 
} // end class

function update_by_id($id, $description) { 
    $query = "UPDATE todo  
              SET description = ?  
          WHERE id = ? 
              LIMIT 1"; 
            
    if($stmt = $this->mysql->prepare($query)) { 
        $stmt->bind_param('si', $description, $id); 
        $stmt->execute(); 
        return 'good job! Updated'; 
    } 
}

?>