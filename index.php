<?php 
    //no direct access
	defined('_JEXEC') or die;
    //detecting site title
    $app = JFactory::getApplication();
    $menu = $app->getMenu();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.css">

    <style type="text/css">
        .row, .row-fluid {
            text-align: center;
        }

        .row .span4 > h2, p {
            /*color:#555;*/
        }

        .row .span4 > p {
            margin-left: 15px;
            text-align: left;
        }

    </style>

    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/main.css">
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
                <a class="brand" href="#">
                    Suuri Tang
                    <?php //echo $app->getCfg('sitename'); ?>
                </a>
                <div class="nav-collapse collapse pull-right">
                    <jdoc:include type="modules" name="navbar" style="none" />
                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div>



    <div class="container main">
        <!-- <div style="height:50px"></div> -->
        <div class="intro">
            <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/intro.jpg" alt="intro" class="intro">            
        </div>

        <?php if($menu->getActive() == $menu->getDefault()): ?>
        
        

      <!-- Three columns of text below the carousel -->
        <div class="row">
            <!-- <div class="span3"></div> -->
            <div class="span4">
                <a href="#">
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/car.jpg" style="width: 200px; height: 200px;" alt="200x200" class="img-polaroid" data-src="holder.js/200x200"><br>
                <h2>MUKAAN</h2>
                </a>
                <p class="lead">home delivery. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa quaerat consequatur repellat placeat aspernatur inventore labore qui magnam unde. Magni recusandae quasi quis perspiciatis culpa sapiente delectus in quisquam voluptatibus.</p>
            </div><!-- /.span4 -->
            <div class="span4">
                <a href="#">
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/car.jpg" style="width: 200px; height: 200px;" alt="200x200" class="img-polaroid" data-src="holder.js/200x200">                    
                </a>
                <h2>LOUNAS</h2>
                <p class="lead">lunch menu. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quam eius odit est ullam excepturi animi harum optio aperiam natus tempora maxime minima sint impedit suscipit eveniet deserunt. Dignissimos similique!</p>
            </div><!-- /.span4 -->
            <div class="span4">
                <a href="#">
                    <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/car.jpg" style="width: 200px; height: 200px;" alt="200x200" class="img-polaroid" data-src="holder.js/200x200">                    
                </a>
                <h2>A LA CATÉ</h2>
                <p class="lead">food menu. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quam eius odit est ullam excepturi animi harum optio aperiam natus tempora maxime minima sint impedit suscipit eveniet deserunt. Dignissimos similique!</p>
            </div><!-- /.span4 -->
            <!-- <div class="span3"></div> -->
        </div><!-- /.row -->

    

        <?php else: ?>
        
        <jdoc:include type="message" />
        <jdoc:include type="component" />

        <?php endif; ?>
        <hr>

        <footer>
            <p>&copy; <em><a href="#"><?php echo $app->getCfg('sitename'); ?></a> 2012-2013.</em></p>
        </footer>
    </div>

    


    <!-- place script on the bottom so that the page will load faster -->
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.js"></script>
    <script type="text/javascript">
        
    </script>
</body>
</html>

