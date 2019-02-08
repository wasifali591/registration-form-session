<!--
* File Name  : home
* Description : html code to  show  user details 
* Created date : 1/02/2019
* Author  : Md Wasif Ali
* Comments : whole page is divided into to division: 1 for a navbar, another one to show user details
-->
<?php 
    include('user-details.php');
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
        <div class="row">
            <div class="navbar  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a class="active navlink" href="#home">Home</a>
                <a class="navlink" href="all-records.php">User Details</a>
                <a class="navlink moveright" href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
                <a class="navlink moveright" href="#" data-toggle="modal" data-target="#changePassword-modal">Change Password</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <form id="registarForm" method="post" action="index.php">
                    <!--registration form header-->
                    <div class=" row">

                        <div class=" form-group col-xs-0 col-sm-2 col-md-3 col-lg-4">

                        </div>

                        <div class="registrationFormHeader form-group col-xs-12 col-sm-8 col-md-6 col-lg-4">
                            <h2>Welcome
                                <?php echo $_SESSION['username'] ?>
                            </h2>
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
                                <label>User Id:
                                    <?php echo $row["id"]; ?></label><br>
                                <label>Name:
                                    <?php echo $row["username"]; ?></label><br>
                                <label>Email:
                                    <?php echo $row["email"]; ?></label><br>
                                <label>Password:
                                    <?php echo $row["password"]; ?></label>

                            </div>
                        </div>
                        <div class=" form-group col-xs-0 col-sm-2 col-md-3 col-lg-4">

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

     <!--change password modal-->
     <div class="modal fade" id="changePassword-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <form class="form" id="changePassword" method="post" action="change-password.php">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Change your password.</h4>
                    </div>
                    
                    <div class="modal-body">
                        <input type="hidden" class="id" name="id">
                        <div class="status">
                            
                        </div>
                        <div class="form-group">
                                <input type="text" class="form-control" id="oldPassword" name="oldPassword"  placeholder="Old Password">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="newPassword" name="newPassword" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="closeButton">Close</button>
                        <button type="submit" class="btn btn-success" id="submitButton">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="home.js"></script>
</body>

</html>