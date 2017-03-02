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
                                                if ((!isset($_SESSION['firstName']) == "") and ( !isset($_SESSION['lastName']) == "")) {
                                                    echo "<h5 class='media-heading'><strong>" . $_SESSION['firstName'] . " " . $_SESSION['lastName'] . "</strong>";
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
                                if ((!isset($_SESSION['firstName']) == "") and ( !isset($_SESSION['lastName']) == "")) {
                                    echo $_SESSION['firstName'] . " " . $_SESSION['lastName'] . "<b class='caret'></b>";
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

        <!-- Page Content -->
        <div class="container">

            <hr class="featurette-divider" id="about">

            <!-- First Featurette -->
            <div class="featurette" >
                <img class="featurette-image img-circle img-responsive pull-left" src="resources/imagens/logo_ge.jpg">
                <h2 class="featurette-heading" style="font-size: 40px;">Sobre nós
                    <span class="text-muted">Gil Equipamentos Esportivos LTDA</span>
                </h2>
                <p class="lead">Criada em 1996, a Gil Equipamentos atua no ramo de acessórios para ginástica, prezando sempre a qualidade de seus produtos e a excelência no atendimento de seus clientes.
                    <br/><br/>
                    São anos de Experiência com atendimento personalizado à  Lojistas, Clubes, Academias e Clientes Domésticos.
                    <br/><br/>
                    Atendemos em todo o terrítório brasileiro.
                    <br/><br/>
                    Solicite o atendimento de um de nossos representantes comerciais e conheça nosso diferencial!</p>
            </div>

            <hr class="featurette-divider" id="accessory">

            <!-- First Featurette -->
            <div class="featurette" >
                <a href="#" class="setting"><img class="featurette-image img-circle img-responsive pull-right setting-image" src="resources/imagens/protetor.jpg"></a>
                <h2 class="featurette-heading"> Acessórios
                    <span class="text-muted">para equipamentos</span>
                </h2>
                <p class="lead">Todos os acessórios que você precisa para o seu equipamento, você encontrará aqui. Também encontrará acessórios para seu uso pessoal e para o melhoramento do seu desempenho físico.<br/>
                    <strong><u>Clique na imagem para mais Acessórios</u></strong></p>
            </div>

            <hr class="featurette-divider" id="equipaments">

            <!-- Second Featurette -->
            <div class="featurette" >
                <a href="#" class="setting"><img class="featurette-image img-circle img-responsive pull-left setting-image" src="resources/imagens/halteres.jpg"></a>
                <h2 class="featurette-heading">Equipamentos
                    <span class="text-muted">para melhorar o desempenho</span>
                </h2>
                <p class="lead">Todos os equipamentos produzidos por nós tem a melhor qualidade possível investida neles, pois buscamos sempre o melhor para os nossos cliente. Nossos produtos passam por um setor de qualidade para que possam chegar aos nossos clientes.<br/>
                    <strong><u>Clique na imagem para mais Equipamentos</u></strong></p>
            </div>

            <hr class="featurette-divider" id="support">

            <!-- Third Featurette -->
            <div class="featurette" >
                <a href="#" class="setting"><img class="featurette-image img-circle img-responsive pull-right setting-image" src="resources/imagens/suporte.jpg"></a>
                <h2 class="featurette-heading">Suportes
                    <span class="text-muted">para seus equipamentos</span>
                </h2>
                <p class="lead">O suporte certo para o equipamento certo. Se busca manter os seus produto organizados e bonitos o melhor a se fazer é comprar um suporte adequado para e feito sob medida para ele. E os melhores equipamentos você encontra aqui.<br/>
                    <strong><u>Clique na imagem para mais Suportes</u></strong></p>
            </div>

            <hr class="featurette-divider" id="contact">

            <!-- Third Featurette -->
            <div class="featurette">
                <img class="featurette-image img-circle img-responsive pull-left" src="resources/imagens/email.png">
                <h2 class="featurette-heading">Contatos</h2>
                <p class="lead">
                <ul id=contacts>
                    <li><strong>E-mail: </strong><u><a href="https://mail.google.com/mail/u/0/#inbox?compose=15a3ed58db03d81d">gilequipamentos@terra.com.br</a></u></li>
                    <li><strong>Telefone 1: </strong>(11) 5666-6920</li>
                    <li><strong>Telefone 2: </strong>(11) 3938-3710</li>
                    <li><strong>Celular 1: </strong>(11) 94352-3630</li>
                    <li><strong>Celular 2: </strong>(11) 97242-2069</li>
                    <li><strong>WhatsApp: </strong>(11) 97746-4388</li>
                </ul>
                </p>
            </div>

            <hr class="featurette-divider">        
            <!-- Footer -->
            <footer id="footer">
                <div class="row">
                    <div class="col-lg-12">
                        <p> <img src="resources/imagens/logo.jpg" class="image-setting" /><strong>BIOS Company</strong></p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>
