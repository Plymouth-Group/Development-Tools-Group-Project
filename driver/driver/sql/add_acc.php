<?php include 'conn.php'; ?>

<?php
	$vehi=$_REQUEST["vehi"];
	$source=$_REQUEST["source"];
	$des=$_REQUEST["des"];
	$acctype = $_REQUEST["acctype"];
	$date=date("Y-m-d H:i:s");
	$did=$_SESSION["driver"];

	//image 1
$file_tmp1 = $_FILES['pic1']['tmp_name'];
$file_name1 = "v"."_".rand(1,100)."_".$_FILES['pic1']['name'];
echo $target_file1 = "img/".$file_name1;
if($file_tmp1!="")
{ move_uploaded_file($file_tmp1,$target_file1); }
else { $file_name1=""; }

//image 2 
$file_tmp2 = $_FILES['pic2']['tmp_name'];
$file_name2 = "v"."_".rand(1,100)."_".$_FILES['pic2']['name'];
$target_file2 = "img/".$file_name2;
if($file_tmp2!="")
{ move_uploaded_file($file_tmp2,$target_file2); }
else { $file_name2=""; }

//image 3 
$file_tmp3 = $_FILES['pic3']['tmp_name'];
$file_name3 = "v"."_".rand(1,100)."_".$_FILES['pic3']['name'];
$target_file3 = "img/".$file_name3;
if($file_tmp3!="")
{ move_uploaded_file($file_tmp3,$target_file3); }
else { $file_name3=""; }


	$sql="INSERT INTO acc(vehicle,source,des,did,date,pic1,pic2,pic3,type) 
	VALUES('$vehi','$source','$des','$did','$date','$file_name1','$file_name2','$file_name3','$acctype')";

	//Execute command 2
	if ($conn->query($sql) === TRUE) {
	  echo "<script>alert('Successfully Added!'); window.location.href='../acc.php' ;</script>";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>
