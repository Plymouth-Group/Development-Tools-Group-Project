<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Accident</title>
	<?php include 'main.php' ?>
</head>
<body>

	<style type="text/css">
		input , textarea{
			margin-bottom: 20px;
		}
		.bg{
			margin-top: 140px;
		}
		body{
            background-image:url("img/addaccident.jpg");
            background-repeat:no-repeat;
            background-size:cover;
            background-position: center;
        }
        .boxshadow {
		    -webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, -1px 1px 13px 1px rgba(0,0,0,0.45); 
			box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, -1px 1px 13px 1px rgba(0,0,0,0.45);
		}
	</style>
	<div class="bg">
	<div class="container boxshadow p-3 mt-3" align="center" style="width:600px;height: auto;"><br>
		<h2 style="color:white;"><b>Add Accident</b></h2><hr>
		<form action="sql/add_acc.php" method="post" enctype="multipart/form-data" >
			<input class="form-control" type="text" placeholder="Accidented Vehicle" name="vehi">
			<input  class="form-control" type="text" placeholder="Accidented Vehicle No" name="source">
			<select name="acctype" class="form-control" placeholder="Select here" >
				<option value="Bad Weather" >Bad Weather</option>
				<option value="Drunk Driving">Drunk Driving</option>
				<option value="Speeding">Speeding</option>
				<option value="Distractions">Distractions</option>



			</select><br>
			<textarea name="des" class="form-control" placeholder="Location"></textarea>
			<p style="color:white;">Add Images</p>
			<input class="form-control" type="file" name="pic1">
			<input class="form-control" type="file" name="pic2">
			<input class="form-control" type="file" name="pic3">
			<input type="submit" value="Add" class="btn btn-warning">
		</form><br>
	</div>
</div>
</body>
</html>