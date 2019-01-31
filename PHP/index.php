<!--
* File Name  : index
* Description : html code to design a registration form and a table to show the data 
* Created date : 23/01/2019
* Author  : Md Wasif Ali
* Comments : whole page is divided into to division: 1 for the registration form, another one for the table
-->

<?php 
    require_once("connect.php");
    if (isset($_POST['signInButtonn'])) {
        $username =$_POST['username'];
        //echo $username;
        $password = $_POST['password'];
        $sql ="SELECT * FROM `user` WHERE `username` = '".$_POST['username']."' AND `password`='".$_POST['password']."'";
        $result=mysqli_query($db,$sql);
        if (mysqli_num_rows($result) > 0) {
            //$rowlog = mysqli_fetch_array($result);
		    $_SESSION['username'] = $username;
            header("location:home.php");
            exit();
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../CSS/registration-style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="pageBody">
    <!-- division for the registration form -->
    <div class="container-fluid content">
        <form id="registarForm"  method="post" action="index.php">
            <!--registration form header-->
            <div class=" row">

                <div class=" form-group col-xs-0 col-sm-2 col-md-3 col-lg-4">

                </div>

                <div class="registrationFormHeader form-group col-xs-12 col-sm-8 col-md-6 col-lg-4">
                    <h2>Login</h2>
                </div>

                <div class=" form-group col-xs-0 col-sm-2 col-md-3 col-lg-4">

                </div>

            </div>
            <!--registration form body-->
            <div class="row ">
                <div class=" form-group col-xs-0 col-sm-2 col-md-3 col-lg-4">

                </div>

                <div class="registrationFormBody form-group col-xs-12 col-sm-8 col-md-6 col-lg-4">

                    <div class=" form-group">
                        <label>User Name<span class="requiredField">*</span></label>
                        <div class="box">
                            <input id="username" class=" form-control formControl" type="text" name="username">
                        </div>
                    </div>
                    <div class=" form-group ">
                        <label>Password<span class="requiredField">*</span></label>
                        <div class="box">
                            <input id="password" class="formControl form-control" type="password" name="password">
                        </div>
                    </div>

                    <div class="input form-group ">
                        <center>
                
                                <input type="submit" name="signInButtonn" class="btn btn-default buttonDesign" id="signInButtonn" value="Sign In">
                       
                        </center>
                    </div>
                    <div>
                        <p>Not yet a member?<a href="registration-form.php">Sign Up</a></p>
                    </div>

                </div>
                <div class=" form-group col-xs-0 col-sm-2 col-md-3 col-lg-4">

                </div>
            </div>

        </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
