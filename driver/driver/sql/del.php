<?php 

include 'conn.php';
$accid=$_REQUEST["accid"];
// sql to delete a record
$sql = "DELETE FROM acc WHERE accid=$accid";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Successfully Deleted!'); window.location.href='../acc.php' ;</script>";
} else {
  echo "Error deleting record: " . $conn->error;
}


 ?>