<?php
/**
 * Created by PhpStorm.
 * User: dk
 * Date: 8/26/2015
 * Time: 3:47 PM
 */?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UG Directory - Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<!--    <link href="../css/bootstrap.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        window.onload = function()
        {
            CKEDITOR.replace( 'a_content' );
        };
        $(document).ready(function () {
//            alert("testing 1 2");
            console.log("first log: ","test log message");
        });
//        }
    </script>

</head>

<body>

<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Ug Directory</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu message-dropdown">
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                            <div class="media-body">
                                <h5 class="media-heading"><strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-footer">
                    <a href="#">Read All New Messages</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu alert-dropdown">
                <li>
                    <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">View All</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Tamale Mirundi <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="events.php"><i class="fa fa-fw fa-calendar"></i> Events</a>
            </li>
            <li>
                <a href="tables.html"><i class="fa fa-fw fa-book"></i> Directory</a>
            </li>
            <li class="active">
                <a href="info_guide.php"><i class="fa fa-fw fa-info-circle"></i> Info Guide</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Dashboard <small>Info Guide Overview</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <i class="fa fa-info-circle"></i> Info Guide
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <?php
            if(!isset($_GET['q'])) {
                ?>
                <div class="col-lg-10">
                    <h2>All Articles <a href="info_guide.php?q=new" class="btn btn-danger pull-right" role="button">New
                            Article</a></h2>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Order #</th>
                                <th>Order Date</th>
                                <th>Order Time</th>
                                <th>Amount (USD)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>3326</td>
                                <td>10/21/2013</td>
                                <td>3:29 PM</td>
                                <td>$321.33</td>
                            </tr>
                            <tr>
                                <td>3325</td>
                                <td>10/21/2013</td>
                                <td>3:20 PM</td>
                                <td>$234.34</td>
                            </tr>
                            <tr>
                                <td>3324</td>
                                <td>10/21/2013</td>
                                <td>3:03 PM</td>
                                <td>$724.17</td>
                            </tr>
                            <tr>
                                <td>3323</td>
                                <td>10/21/2013</td>
                                <td>3:00 PM</td>
                                <td>$23.71</td>
                            </tr>
                            <tr>
                                <td>3322</td>
                                <td>10/21/2013</td>
                                <td>2:49 PM</td>
                                <td>$8345.23</td>
                            </tr>
                            <tr>
                                <td>3321</td>
                                <td>10/21/2013</td>
                                <td>2:23 PM</td>
                                <td>$245.12</td>
                            </tr>
                            <tr>
                                <td>3320</td>
                                <td>10/21/2013</td>
                                <td>2:15 PM</td>
                                <td>$5663.54</td>
                            </tr>
                            <tr>
                                <td>3319</td>
                                <td>10/21/2013</td>
                                <td>2:13 PM</td>
                                <td>$943.45</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
            }else if($_GET['q']=="new"){
                ?>
                <div class="col-lg-10">
                    <h3>New Article</h3>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="category" class="col-sm-2 control-label">Category</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="category">
                                    <option>Forex</option>
                                    <option>Financial Services</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Article Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" placeholder="Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="a_content" class="col-sm-2 control-label">Article Body</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="a_content" id="a_content" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked"> Publish
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                    </div> <!--end of form div-->
            <?php
            }
            ?>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<!--<script src="js/jquery.js"></script>-->

<!-- Bootstrap Core JavaScript -->
<!--<script src="js/bootstrap.min.js"></script>-->

<!-- Morris Charts JavaScript -->
<!--<script src="js/plugins/morris/raphael.min.js"></script>-->
<!--<script src="js/plugins/morris/morris.min.js"></script>-->
<!--<script src="js/plugins/morris/morris-data.js"></script>-->

<!--<script type="text/javascript">
    /*window.onload = function()
     {
     CKEDITOR.replace( 'a_content' );
     };*/
    $(document).ready(function () {
        alert("testing 1 2");
        console.log("bhjbsj");
    });
//    }
</script>-->

</body>

</html>
