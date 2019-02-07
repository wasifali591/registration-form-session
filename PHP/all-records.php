
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

    <div class="container-fluid content">
        <div class="row">
            <div class="navbar  col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a class="navlink" href="home.php">Home</a>
                <a class="active navlink" href="#all-records">User Details</a>
                <a class="navlink moveright" href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-0 col-sm-0 col-md-2 col-lg-3">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">

                <table class="table table-striped dataTable">
            
                </table>

                <button type="Button" class="btn btn-primary btn-sm buttonDesign" data-toggle="modal" data-target="#add">
                    <i class="glyphicon glyphicon-plus"></i>
                    Add New Record
                </button>
            </div>

            <div class="col-xs-0 col-sm-0 col-md-2 col-lg-3">
                <table class="table table-striped tableNotes">
                    
                    
                </table>
                <form method="post" action="add-notes.php">
                    <div class="box form-group">
                        <input type="text" class="formControl form-control " name="note" id="note" >
                        <button type="submit" class="buttonDesign" name="noteButton" id="noteButton">
                            <i class="glyphicon glyphicon-send" id="noteIcon"> 
                            </i>
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

     <!-- add data Modal -->
     <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form class="form" id="add-form" method="post" action="add-record.php">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add New Data</h4>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <div class="status">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
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
                                <input type="text" class="form-control email"  name="email" placeholder="email" readonly="true">
                            </div>
                            <!-- <div class="form-group">
                                <input type="text" class="form-control password" name="password" placeholder="password">
                            </div> -->
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
                        <div class="form-group">
                                <input type="text" class="form-control username"  name="username" placeholder="Name" readonly="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control email"  name="email" placeholder="email" readonly="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control password" name="password" placeholder="password" readonly="true">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger" id="deleteButton">Delete</button>
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