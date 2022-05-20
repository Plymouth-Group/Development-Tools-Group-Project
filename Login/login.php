<?php session_start(); ?>
<?php include('config/constants.php');?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme29.css">
</head>

<body>
    <div class="login">
    <div class="form-body without-side">  
       
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/graphic3.svg" alt="">
                </div>
            </div>
            
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Login to account</h3>
                        <p>Access to the most powerfull crash reporting website.</p>

                        <?php
                             if(isset($_SESSION['login']))
                            {
                                 echo $_SESSION['login'];
                                 unset($_SESSION['login']);
                            }
                            if(isset($_SESSION['no-login-message']))
                            {
                                 echo $_SESSION['no-login-message'];
                                 unset($_SESSION['no-login-message']);
                            }

                           // echo $message;
                        ?>
                        <br><br>
                        <form action="login.php" method="post">
                           <text style="color:#ffffff;"> Username: </text>
                            <input class="form-control" style="color:#FFFFFF;" type="text" name="username" placeholder="Username" required>
                            <text style="color:#ffffff;">Password: </text><br>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" name="submit" value="login" type="submit" class="ibtn">Login</button> <a href="../driver/driver">Login as Driver</a>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<script src="../../javascript/jquery.min.js"></script>
<script src="../../javascript/jquery.min.js"></script>
<script src="../../javascript/jquery.min.js"></script>
<script src="../../javascript/jquery.min.js"></script>
</body>
</html>


<?php
   
    $message = "";

    //check whether the submit button is cliked or not
    if(isset($_POST['submit']))
    {
       $username = $_POST['username'];
        $password = $_POST['password'];

        $hashed_password = md5($password);

        echo $username;
        echo $password;
        //2.SQL to check whether the user with username and password exists or not
        $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
        
        //3.Execute the Query
        $res = mysqli_query($conn, $sql);

        $result = $conn->query($sql);

        
        if ($result->num_rows > 0) {
          // output data of each ro
          while($row = $result->fetch_assoc()) {
            $utype=$row["user_type"];
            $uname=$row["username"];
            $pwd=$row["password"];
          }
      
            $_SESSION['user_type']=$utype;
            
            //user available and login success
            $_SESSION['login']="<div class='sucess' style='color:#ffffff;'>Login Sucessful.</div>";
            $_SESSION['user']=$uname; //To check whether the user is logged in or not and logout will unset it

             if($password==$pwd){
                 if($utype=="admin"){echo"<script>   window.location = 'admindash.php';      </script>";}
                 elseif($utype=="insurance"){echo"<script>   window.location = 'insurancedash.php';     </script>";}
                 elseif($utype=="police"){echo"<script>   window.location = 'policedash.php';    </script>";}

             }           
        }
        else{
            $_SESSION['login']="<div class='error' style='color:#ffffff;'>Login Failed.</div>";
        }
       
    }
?>