<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['registerButton']))
    {
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$cpassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);
		
		if($password != $cpassword){
         $msg = "passwords doesn't match";
    }
	 else{
        func($conn,$username,$email,$password);
	 }
	}
    function func($conn,$username,$email,$password)
    {
		$sql = "INSERT INTO userdata (user_name, email, password)
VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  header('Location: organization1.php');;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    }
?>