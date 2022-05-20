<!DOCTYPE html>
<html>
<head>
	<?php include 'main.php'; ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
</head>
<body>

	<style type="text/css">
		input{
			margin-bottom: 20px;
		}
		body{
            background-image:url("img/signup1.jpg");
            background-repeat:no-repeat;
            background-size:cover;
        }
        #bg{
        	margin-top: 100px;
        }
        .boxshadow {
		    -webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 15px 5px rgba(0,199,255,0);
		    box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 15px 5px rgba(0,199,255,0);
		}
	</style>
	<div id="bg">
    <div class="container bg-dark boxshadow text-white p-3 mt-3" align="center" style="opacity: 0.9;width: 700px;">
    	<h3>Create Driver Account</h3><hr>
	<form action="sql/createacc.php" >
		<input placeholder="Enter Name" class="form-control bg-dark text-white" type="text" name="name">
		<input placeholder="Enter NIC" class="form-control bg-dark text-white" type="text" name="nic">
		<input placeholder="Enter Telephone" class="form-control bg-dark text-white" type="text" name="tel">
		<input placeholder="Enter Licence Number" class="form-control bg-dark text-white" type="text" name="licnum">
		<input placeholder="Enter Insurance Number" class="form-control bg-dark text-white" type="text" name="insunum">
		<input placeholder="Create Username" class="form-control bg-dark text-white" type="text" name="uname">
		<input placeholder="Create Password" class="form-control bg-dark text-white" type="text" name="pw">
		<input type="submit" value="Create Account" class="btn btn-warning">
	</form>
</div>
</div>

</body>
</html>