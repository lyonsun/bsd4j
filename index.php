<?php 
    //no direct access
	defined('_JEXEC') or die;
    //detecting site title
    $app = JFactory::getApplication();
    $doc = JFactory::getDocument();

    //testing
    $templateparams = $app->getTemplate(true)->params;
    echo "<pre>";
    print_r($this->countModules());
    echo "</pre>";
    die();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <jdoc:include type="head" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/assets/css/bootstrap.css">

    <style type="text/css">
    body {
        padding-top: 60px;
        padding-bottom: 40px;
        background: #860e00;
    }

    .carousel {
        
    }

    .carousel img {
        width: 100%;
        height: 500px;
    }
    </style>

    <link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/assets/css/bootstrap-responsive.css">
    <!--[if lt IE 9]><script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/assets/ico/favicon.png">
</head>
<body>
    <!-- testing -->
    <!-- <div style="border:1px solid #000;padding:2px;">
        <jdoc:include type="modules" name="position-xyz" />
    </div> -->

    <!-- navi bar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="<?php echo $this->baseurl ?>">
                    <?php echo $app->getCfg('sitename'); ?>
                </a>
                <div class="nav-collapse collapse">
                    <jdoc:include type="modules" name="position-1" style="none"/>
                </div>
            </div>
        </div>
    </div> <!-- end of navi bar -->

    <!-- main content -->
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span9">
                <div class="hero-unit">
                    <?php 
                        $view = JRequest::getCmd('view');
                        if ($view == 'featured') {
                            # code...
                            echo "this is featured page<br>";
                        }
                        $date = JFactory::getDate();
                        echo $date;
                        $navposition = $this->params->get('navposition');
                        echo $navposition;
                     ?>
                    <jdoc:include type="component" />
                </div> <!-- end hero unit -->
            </div> <!-- end span 9 -->
            <div class="span3">
                <?php if ($this->countModules('position-7')): ?>
                <div class="well sidebar-nav">
                    <jdoc:include type="modules" name="position-7" />
                </div> <!-- end well -->
                <?php endif; ?>
            </div> <!-- end span 3 -->
        </div> <!-- end row -->
    </div> <!-- end fluid container -->

    <!-- place script on the bottom so that the page will load faster -->
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/assets/js/bootstrap.js"></script>
    <script type="text/javascript">
        jQuery.noConflict();
    </script>
</body>
</html>

