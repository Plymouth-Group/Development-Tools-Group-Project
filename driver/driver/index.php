<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Sign In</title>
	<?php include 'main.php'; ?>
</head>
<body>

	<style type="text/css">
		input{
			margin-bottom: 20px;
		}
		body{
            background-image:url("img/log.jpg");
            background-repeat:no-repeat;
            background-size: cover;
            

        }
        #bg{
        	margin-top: 180px;
        }
        .boxshadow {

			box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
		}
	</style>
	
	<div id="bg">
		  
		<div class="container boxshadow  text-white p-3 mt-3" align="center" style="opacity:0.9;width: 550px;">
		<h3><b>Sign In To Your Account</b></h3><hr>
		<form action="sql/signin.php" method="post">
			<input placeholder="Enter Username" class="form-control bg-dark text-white" type="text" name="uname" >
			<input placeholder="Enter Password" class="form-control bg-dark text-white" type="password" name="pw">
			<a href="signup.php">Don't Have An Account? <b>Sign Up</b></a>
			<br><br>
			<input type="submit" value="Submit" class="btn btn-warning">
		</form>
	</div>
</div>

</body>
</html>
