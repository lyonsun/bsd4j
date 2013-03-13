<?php 
    //no direct access
	defined('_JEXEC') or die;
    //detecting site title
    $app = JFactory::getApplication();
    $menu = $app->getMenu();
    $document = JDocument;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.css">

    <style type="text/css">
        .tabbable .nav > li > a {
            background: #0f0;
        }

        .footer {
            background: #777;
            /*color:#fff;*/
        }

    </style>

    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/main.css">

    <link href='http://fonts.googleapis.com/css?family=Merienda:400' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]><script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/ico/favicon.ico">
</head>
<body>
    <!-- navigation bar -->
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container" style="">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="<?php echo $this->baseurl ?>">
                    Suuri Tang
                    <?php echo $app->getCfg('sitedescription');//echo $app->getCfg('sitename'); ?>
                </a>
                <div class="nav-collapse collapse ">
                    <jdoc:include type="modules" name="navbar" style="none" />
                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div>



    <div class="container main">
        <!-- <div style="height:50px"></div> -->
        <div class="intro">
        <jdoc:include type="modules" name="intro" />
        <?php if($this->countModules('intro')): ?>
            <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/intro.jpg" alt="intro" class="intro">            
        <?php endif; ?>
        </div>
        
        <?php if($this->countModules('breadcrumbs')): ?>
        <div class="breadcrumb">
            <jdoc:include type="modules" name="breadcrumbs" />
        </div>
        <?php endif ?>

        <?php if($menu->getActive() == $menu->getDefault()): ?>
        
        <jdoc:include type="message" />
        
        <div class="row-fluid">
            <!-- <div class="span3"></div> -->
            <div class="span4">
                <a href="#">
                <h2>MUKAAN</h2>
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/car.jpg" style="width: 200px; height: 200px;" alt="200x200" class="img-circle" data-src="holder.js/200x200"><br>
                </a>
                <p class="">home delivery. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus rerum suscipit accusantium in tempora magnam assumenda debitis ratione itaque nihil consectetur quos animi ipsam quia velit ducimus cumque facilis doloremque?</p>
                <!-- <hr> -->
            </div><!-- /.span4 -->
            <div class="span4">
                <a href="#">
                <h2>LOUNAS</h2>
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/car.jpg" style="width: 200px; height: 200px;" alt="200x200" class="img-circle" data-src="holder.js/200x200">                    
                </a>
                <p class="lead">lunch menu. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora quia maiores culpa nesciunt excepturi recusandae pariatur. Et quasi reiciendis possimus neque nemo minus magni in expedita totam maiores necessitatibus assumenda!</p>
                <!-- <hr> -->
            </div><!-- /.span4 -->
            <div class="span4">
                <a href="#">
                <h2>A LA CATÉ</h2>
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/car.jpg" style="width: 200px; height: 200px;" alt="200x200" class="img-circle" data-src="holder.js/200x200">                    
                </a>
                <p class="lead">food menu. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum perferendis culpa et enim molestias harum eaque! Ea architecto quibusdam dolorem perspiciatis alias illo odit. Est qui beatae minus illo officia!</p>
                <!-- <hr> -->
            </div><!-- /.span4 -->
            <!-- <div class="span3"></div> -->
        </div><!-- /.row -->

        <div class="row-fluid footer">
            <div class="span4" style="border-right:1px solid #eee;">Column 1</div>
            <div class="span4">Column 2</div>
            <div class="span4" style="border-left:1px solid #eee;">Column 3</div>
        </div>

        <?php else: ?>
    

        <div class="">
            <jdoc:include type="component" />            
        </div>

        <?php endif; ?>
        <!-- <hr> -->

        <footer>
            <jdoc:include type="modules" name="footer" />
            <!-- <div>Copyright &copy; <a href="#"><?php echo $app->getCfg('sitename'); ?></a> 2012-2013. All rights reserved!</div> -->
        </footer>
    </div>

    


    <!-- place script on the bottom so that the page will load faster -->
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.js"></script>
    <script type="text/javascript">
        
    </script>
</body>
</html>

