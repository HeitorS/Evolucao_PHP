<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>
        <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="resources/css/bootstrap-theme.min.css">
        <script type="text/javascript" rsc="resources/javascript/bootstrap.js"></script>
        <script type="text/javascript" rsc="resources/javascript/bootstrap.min.js"></script>
        <script type="text/javascript" rsc="resources/javascript/npm.js"></script>
    </head>
    <body>
        
        
    </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>One Page Wonder - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="resources/css/one-page-wonder.css" rel="stylesheet">

    <!-- Custom JavaScript -->
    <script type="text/javascript" src="resources/javascript/jquery.js"></script>
    <script type="text/javascript" src="resources/javascript/bootstrap.js"></script>

    <!-- Ajustes de Imagem -->
    <link rel="stylesheet" type="text/css" href="resources/css/index_public.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php
    session_start("user");
    ?>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Gil Equipamentos</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#about">Sobre nós</a>
                    </li>
                    <li>
                        <a href="#accessory">Acessórios</a>
                    </li>
                    <li>
                        <a href="#equipaments">Equipamentos</a>
                    </li>
                    <li>
                        <a href="#support">Suportes</a>
                    </li>
                    <li>
                        <a href="#contact">Contato</a>
                    </li>
                </ul>
                <?php 
                    if (isset($_SESSION['firstName']) && !empty($_SESSION['firstName'])) {
                ?>
                <ul class="nav navbar-nav col-lg-3 col-md-3 col-sm-12 col-xs-12" style="float:right;">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-envelope"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu message-dropdown">
                            <li class="message-preview pull-right">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <?php 
                                                if (isset($_SESSION['firstName']) && !empty($_SESSION['firstName'])) {
                                                    echo "<h5 class='media-heading'><strong>".$_SESSION['firstName']." ".$_SESSION['lastName']."</strong>";
                                                }
                                            ?>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-bell"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu alert-dropdown">
                            <li>
                                <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                            </li>
                            <li>
                                <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                            <?php 
                                if (isset($_SESSION['firstName']) && !empty($_SESSION['firstName'])) {
                                    echo $_SESSION['firstName']." ".$_SESSION['lastName']."<b class='caret'></b>";
                                }
                             ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#"><i class="glyphicon glyphicon-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="glyphicon glyphicon-envelope"></i> Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="glyphicon glyphicon-cog"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <button id="logout"><i class="glyphicon glyphicon-off"></i> Log Out</a></button>
                            </li>
                        </ul>
                    </li>
                </ul>
                <?php 
                    }else{
                ?>
                <button style="float:right;" type="submit" class="btn_login">Logar</button>
                <?php 
                    }
                ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Full Width Image Header -->
    <header class="header-image">
        <div class="headline">
            <div class="container">
                <div id="homeSlider" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#homeSlider" data-slide-to="0" class="active"></li>
                        <li data-target="#homeSlider" data-slide-to="1"></li>
                        <li data-target="#homeSlider" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active"><img src="http://placehold.it/1900x800" alt="image1"></div>
                        <div class="item"><img src="http://placehold.it/1900x800" alt="image2"></div>
                        <div class="item"><img src="http://placehold.it/1900x800" alt="image3"></div>
                    </div>
                    <a class="left carousel-control" href="#homeSlider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#homeSlider" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </header>