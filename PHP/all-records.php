<!--
* File Name  : all-records
* Description : html code to display all registered members data 
* Created date : 1/02/2019
* Author  : Md Wasif Ali
* Comments : whole page is divided into to division: 1 for the registration form, another one for the table
-->
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
                <a class="navlink" href="home.php">Home</a>
                <a class="active navlink" href="#all-records">All Records</a>
                <a class="navlink logout" href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-0 col-sm-0 col-md-2 col-lg-3"></div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
            <table class="table table-striped">
            
            </table>
            </div>
            <div class="col-xs-0 col-sm-0 col-md-2 col-lg-3"></div>
        </div>
    </div>
     <!-- Modal -->
     <div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <form class="form" id="update-form" method="post" action="update-record.php">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Update Data</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" class="id" name="id">
                            <div class="status">
                                
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control username"  name="username" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control email"  name="email" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control password" name="password" placeholder="password">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>

    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <form class="form" id="delete-form" method="post" action="delete-record.php">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Do you really want to delete the data?</h4>
                    </div>
                    
                    <div class="modal-body">
                        <input type="hidden" class="id" name="id">
                        <div class="status">
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>