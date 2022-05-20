<?php include 'conn.php'; ?>

<?php
	$name=$_REQUEST["name"];
	$licence=$_REQUEST["licnum"];
	$nic=$_REQUEST["nic"];
	$tel=$_REQUEST["tel"];
	$uname=$_REQUEST["uname"];
	$pw=$_REQUEST["pw"];
	$insu=$_REQUEST["insunum"];
	
	

	$sql="INSERT INTO driver(dname,dnic,dtel,demail,uname,pw,insu) 
	VALUES('$name','$nic','$tel','$licence','$uname','$pw','$insu')";

	//Execute command 2
	if ($conn->query($sql) === TRUE) {
	  echo "<script>alert('Your Account Successfully Created!'); window.location.href='../index.php' ;</script>";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>
