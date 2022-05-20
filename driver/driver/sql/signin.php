<?php
    include 'conn.php';
	$uname=$_REQUEST["uname"];
	$pw=$_REQUEST["pw"];

	$login_check=0;
	
	$sql=" SELECT * FROM driver WHERE uname='$uname' AND pw='$pw' ";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
	{
		$login_check=1;
		$did=$row["did"];
	}

	if($login_check==1)
	{
		$_SESSION["driver"]=$did;
		header('Location: ../acc.php'); exit;
	}
	else
	{
		echo "<script>alert('Invalid login!'); window.location.href='../index.php' ;</script>";
	}
?>