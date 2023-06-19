 <?php
$servername = "localhost";
$username = "code";
$password = "Monu@123";
$dbname = "codelok";

// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
       
$email = $_REQUEST['email'];   
$sql = "INSERT INTO news (email)
VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>