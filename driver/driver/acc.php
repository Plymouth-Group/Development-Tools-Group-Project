<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Accidents</title>
	<?php include 'main.php'; ?>
	<style type="text/css">
		body{
            background-image:url("img/accident.jpg");
            background-repeat:no-repeat;
            background-size:cover;
        }
        .b{ 
        		width: 700px;
        		height: auto; 
        		margin-left: auto;
        		margin-right: auto;
        		padding: 10px;
        		margin-top: 50px;
        }
        .boxshadow {
				    -webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 15px 5px rgba(0,199,255,0);
				    box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 15px 5px rgba(0,199,255,0);
				}
	</style>
</head>
<body>
	<div class="b">
	<div class="container mt-3" >
		<a class="btn btn-warning" href="add_acc.php">Add New Accident</a>
		<a class="btn btn-warning" href="?logout=1">LogOut</a>
	</div>

	<?php
if(isset($_REQUEST["logout"]))
{
  session_destroy();
  echo "<script>alert('You are loged out!'); window.location.href='index.php' ;</script>";
}

?>

	<div class="container mt-4">
		<h1 style='color:#ffffff;'>Recorded Accidents</h1><hr>

		<?php
		include 'sql/conn.php';
	$did=$_SESSION["driver"];
	$sql=" SELECT * FROM acc";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
	{
		$accid=$row["accid"];
		$vehicle=$row["vehicle"];
		$source=$row["source"];
		$des=$row["des"];
?>

		<div>
			<div class="card mb-3 boxshadow" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/acc.jpeg" class="h-100 img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body text-dark">
        <h5 class="card-title">Accident No : 000<?php echo $accid; ?></h5>
        <p class="card-text"><?php echo $des ?></p>
        <p class="card-text"><small class="text-muted">Vehicle : <?php echo $vehicle ?></small></p>
        <a href="view.php?accid=<?php echo $accid ?>" class="btn btn-warning" >View Details</a>
        <a href="sql/del.php?accid=<?php echo $accid ?>" class="btn btn-warning" >Delete</a>
		<a href="sql/del.php?accid=<?php echo $accid ?>" class="btn btn-warning" >Update</a>
      </div>
    </div>
  </div>
</div>
		</div>
	<?php } ?>
	</div>
</div>
</body>
</html>