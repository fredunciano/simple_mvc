<?php
class About extends Database
{
	

		// return $aa = query("SELECT * FROM users"); 
		public function usersall(){
        $query = "SELECT username, password FROM users";
        $stmt = prepare($query);
        $stmt->execute();
         $stmt->bind_result($username,$password);
          $data = array();
        while ($stmt->fetch()) {
            
            $data[] = array(   
                
                'user'      =>$username,
                'password'  =>$password
             );
        }
        $stmt->close();
        $data = json_encode($data);
        return $data;  

            
    } 
		
	

}