<?php

include 'conn.php';
$accid=$_GET['accid'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT * FROM acc where accid=$accid";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
    
$vehicle=$row["vehicle"];
$did=$row["did"];
$des=$row["des"];
$source=$row["source"];
$pic1=$row["pic1"];
$pic2=$row["pic2"];
$pic3=$row["pic3"];
$type=$row["type"];
$date=$row["date"];

    }
  } else {
    echo "0 results";
  }
 
?>

<?php
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO approvedacc VALUES ('$vehicle', '$did', '$des','$source','$pic1','$pic2','$pic3','$type','$date','$accid')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>