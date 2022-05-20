<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Acc</title>
</head>
<body>

	<?php 
	include 'main.php';
      $accid=$_REQUEST["accid"];

	include 'sql/conn.php';
	$sql=" SELECT * FROM acc WHERE accid=$accid ";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
	{
		$date=$row["date"];
		$vehicle=$row["vehicle"];
		$source=$row["source"];
		$des=$row["des"];
		$type=$row["type"];    
		$pic1=$row["pic1"];
		$pic2=$row["pic2"];
		$pic3=$row["pic3"];
?>

<style type="text/css">
	img{
		height: 500px;
	}
</style>

<div class="card mb-3 mt-3 container">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="sql/img/<?php echo $pic1 ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="sql/img/<?php echo $pic2 ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="sql/img/<?php echo $pic3 ?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $vehicle ?></h5>
    <p class="card-text"><?php echo $source ?></p>
    <p class="card-text"><?php echo $date ?></p>
    <p class="card-text"><?php echo $des ?></p>
    <p class="card-text"><?php echo $type ?></p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>

	
<?php } ?>
</body>
</html>