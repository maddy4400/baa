<?php
class connection
{
 private $host = "localhost"; // your host name  
    private $username = "root"; // your user name  
    private $password = ""; // your password  
    private $db = "baa"; // your database name  
    public  
    function __construct()  
    {  
       $mysqli=mysqli_connect($this->host, $this->username, $this->password,$this->db);
	   
	   if ($mysqli -> connect_errno) {
		echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}
     //   mysql_select_db( $db) or die(mysql_error("database"));  
    }  
    // this method used to execute mysql query  
}

?>