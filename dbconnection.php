<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "unidb"; 

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT id, student_id, student_name FROM student_table";
$result = $conn->query($sql);

if ($result) {
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "SID: " . $row["id"] . "Student ID " . $row["student_id"] . "student name:" .  $row["student_name"] . "<br>";
    }
  } else {
    echo "0 results";
  }
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
