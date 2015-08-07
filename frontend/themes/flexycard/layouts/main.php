<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

//AppAsset::register($this);

?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <meta name="description" content="FlexyCodes - FlexyCard vCard Template. Creating my personal page!"/>

    <!-- CSS | bootstrap -->
    <!-- Credits: http://getbootstrap.com/ -->
    <link  rel="stylesheet" type="text/css" href="<?= $this->theme->getUrl('css/bootstrap.min.css');?>" />

    <!-- CSS | font-awesome -->
    <!-- Credits: http://fortawesome.github.io/Font-Awesome/icons/ -->
    <link rel="stylesheet" type="text/css" href="<?= $this->theme->getUrl('css/font-awesome.min.css');?>" />

    <!-- CSS | Colors -->
    <link rel="stylesheet" type="text/css" href="<?= $this->theme->getUrl('css/colors/DarkBlue.css');?>" id="colors-style" />
    <link rel="stylesheet" type="text/css" href="<?= $this->theme->getUrl('css/switcher.css');?>" />

    <!-- CSS | animate -->
    <!-- Credits: http://daneden.github.io/animate.css/ -->
    <link rel="stylesheet" type="text/css" href="<?= $this->theme->getUrl('css/animate.min.css');?>" />

    <!-- CSS | Normalize -->
    <!-- Credits: http://manos.malihu.gr/jquery-custom-content-scroller -->
    <link rel="stylesheet" type="text/css" href="<?= $this->theme->getUrl('css/jquery.mCustomScrollbar.css');?>" />

    <!-- CSS | Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

    <!-- CSS | Style -->
    <!-- Credits: http://themeforest.net/user/FlexyCodes -->
    <link rel="stylesheet" type="text/css" href="<?= $this->theme->getUrl('css/main.css');?>" />

    <!-- CSS | prettyPhoto -->
    <!-- Credits: http://www.no-margin-for-errors.com/ -->
    <link rel="stylesheet" type="text/css" href="<?= $this->theme->getUrl('css/prettyPhoto.css');?>"/>


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= $this->theme->getUrl('images/favicon/favicon.ico');?>">

    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="<?= $this->theme->getUrl('css/icons/font-awesome-ie7.min.css');?>"/>
    <![endif]-->

    <style>

        @media only screen and (max-width : 991px){
            .resp-vtabs .resp-tabs-container {
                margin-left: 0px !important;
            }
            .resp-vtabs ul.resp-tabs-list {
                width: 10%;
                margin-right: 2px !important;
            }
        }

        @media only screen and (max-width : 800px){

            .widget-profil {
                float: none !important;
            }
        }

        .widget-profil {
            float: left;
        }

        .resp-vtabs ul.resp-tabs-list {
            float: right;
        }


    </style>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Laoding page -->
    <div id="preloader"><div id="spinner"></div></div>

    <!-- .slideshow -->
    <ul class="cb-slideshow" id="cb_slideshow" style="display:none">
        <li><span>Image 01</span><div></div></li>
        <li><span>Image 02</span><div></div></li>
        <li><span>Image 03</span><div></div></li>
        <li><span>Image 04</span><div></div></li>
        <li><span>Image 05</span><div></div></li>
        <li><span>Image 06</span><div></div></li>
    </ul>
    <!-- /.slideshow -->

    <!-- .wrapper -->
    <div class="wrapper">

        <!--- .Content -->
        <section class="tab-content">
            <div class="container">

                <?= Alert::widget() ?>

                <div class="row">

                    <div class="col-md-12">

                        <div class="row">

                            <div class="col-md-3 widget-profil">

                                <div class="row">

                                    <!-- Profile Image -->
                                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-12 ">



                                        <div class="image-holder one" id="pic_prof_1" style="display:block">

                                            <img class="head-image up circle" src="<?= $this->theme->baseUrl;?>/images/img/up.png" width="150" height="150" alt="" />
                                            <img class="head-image up-left circle" src="<?= $this->theme->baseUrl;?>/images/img/upleft.png" width="150" height="150" alt="" />
                                            <img class="head-image left circle" src="<?= $this->theme->baseUrl;?>/images/img/left.png" width="150" height="150" alt="" />
                                            <img class="head-image down-left circle" src="<?= $this->theme->baseUrl;?>/images/img/downleft.png" width="150" height="150" alt="" />
                                            <img class="head-image down circle" src="<?= $this->theme->baseUrl;?>/images/img/down.png" width="150" height="150" alt="" />
                                            <img class="head-image down-right circle" src="<?= $this->theme->baseUrl;?>/images/img/downright.png" width="150" height="150" alt="" />
                                            <img class="head-image right circle" src="<?= $this->theme->baseUrl;?>/images/img/right.png" width="150" height="150" alt="" />
                                            <img class="head-image up-right circle" src="<?= $this->theme->baseUrl;?>/images/img/upright.png" width="150" height="150" alt="" />
                                            <img class="head-image front circle" src="<?= $this->theme->baseUrl;?>/images/img/front.png" width="150" height="150" alt="" />

                                        </div>

                                        <!-- style for simple image profile -->
                                        <div class="circle-img" id="pic_prof_2" style="display:none"></div>


                                    </div>
                                    <!-- End Profile Image -->

                                    <div class="col-lg-12 col-md-12 col-sm-9 col-xs-12">


                                        <!-- Profile info -->
                                        <div id="profile_info">
                                            <h1 id="name" class="transition-02">Ramin Farmani</h1>
                                            <h4 class="line">MOBILE &amp; WEB APP DEVELOPER</h4>
                                            <!--<h6><span class="fa fa-map-marker"></span> San Francisco , CA</h6>-->
                                        </div>
                                        <!-- End Profile info -->


                                        <!-- Profile Description -->
                                        <div id="profile_desc">
                                            <p>

                                            </p>
                                            <p>

                                            </p>
                                        </div>
                                        <!-- End Profile Description -->


                                        <!-- Name -->
                                        <div id="profile_social">
                                            <h6>My Social Profiles</h6>
                                            <a href="https://www.facebook.com/ramin.farmani"><i class="fa fa-facebook"></i></a>
                                            <a href="https://www.twitter.com/ramin.farmani"><i class="fa fa-twitter"></i></a>
                                            <a href="https://www.linkedin.com/ramin.farmani"><i class="fa fa-linkedin"></i></a>
                                            <!-- <a href="#"><i class="fa fa fa-dribbble"></i></a> -->
                                            <!-- <a href="#"><i class="fa fa-foursquare"></i></a> -->
                                            <div class="clear"></div>
                                        </div>
                                        <!-- End Name -->



                                    </div>

                                </div>
                            </div>

                            <div class="col-md-9 flexy_content" style="padding-left: 0;padding-right: 0;">

                                <?= $content ?>

                            </div><!-- End flexy_content -->


                        </div><!-- End row -->

                    </div><!-- End col-md-12 -->

                </div><!-- End row -->

            </div><!-- End container -->

        </section>
        <!-- End Content -->

    </div>
    <!-- End wrapper -->


    <?php $this->endBody() ?>

    <!-- jquery | jQuery 1.11.0 -->
    <!-- Credits: http://jquery.com -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Js | bootstrap -->
    <!-- Credits: http://getbootstrap.com/ -->
    <script type="text/javascript" src="<?= $this->theme->getUrl('js/bootstrap.min.js');?>"></script>

    <!-- Js | jquery.cycle -->
    <!-- Credits: https://github.com/malsup/cycle2 -->
    <script type="text/javascript" src="<?= $this->theme->getUrl('js/jquery.cycle2.min.js');?>"></script>

    <!-- jquery | rotate and portfolio -->
    <!-- Credits: http://jquery.com -->
    <script type="text/javascript" src="<?= $this->theme->getUrl('js/jquery.mixitup.min.js');?>"></script>
    <script type="text/javascript" src="<?= $this->theme->getUrl('js/HeadImage.js');?>"></script>

    <!-- Js | easyResponsiveTabs -->
    <!-- Credits: http://webtrendset.com/demo/easy-responsive-tabs/Index.html -->
    <script type="text/javascript" src="<?= $this->theme->getUrl('js/easyResponsiveTabs.min.js');?>"></script>

    <!-- Js | jquery.cookie -->
    <!-- Credits: https://github.com/carhartl/jquery-cookie -->
    <script type="text/javascript" src="<?= $this->theme->getUrl('js/jsSwitcher/jquery.cookie.js');?>"></script>

    <!-- Js | switcher -->
    <!-- Credits: http://themeforest.net/user/FlexyCodes -->
    <script type="text/javascript" src="<?= $this->theme->getUrl('js/jsSwitcher/switcher.js');?>"></script>

    <!-- Js | mCustomScrollbar -->
    <!-- Credits: http://manos.malihu.gr/jquery-custom-content-scroller -->
    <script type="text/javascript" src="<?= $this->theme->getUrl('js/jquery.mCustomScrollbar.concat.min.js');?>"></script>

    <!-- jquery | prettyPhoto -->
    <!-- Credits: http://www.no-margin-for-errors.com/ -->
    <script type="text/javascript" src="<?= $this->theme->getUrl('js/jquery.prettyPhoto.js');?>"></script>

    <!-- Js | gmaps -->
    <!-- Credits: http://maps.google.com/maps/api/js?sensor=true-->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="<?= $this->theme->getUrl('js/gmaps.min.js');?>"></script>

    <!-- Js | Js -->
    <!-- Credits: http://themeforest.net/user/FlexyCodes -->
    <script type="text/javascript" src="<?= $this->theme->getUrl('js/main.js');?>"></script>

    <!-- code js for image rotate -->
    <script type="text/javascript">

        var mouseX;
        var mouseY;
        var imageOne;

        /* Calling the initialization function */
        $(init);

        /* The images need to re-initialize on load and on resize, or else the areas
         * where each image is displayed will be wrong. */
        $(window).load(init);
        $(window).resize(init);

        /* Setting the mousemove event caller */
        $(window).mousemove(getMousePosition);

        /* This function is called on document ready, on load and on resize
         * and initiallizes all the images */
        function init() {

            /* Instanciate the mouse position variables */
            mouseX = 0;
            mouseY = 0;

            /* Instanciate a HeadImage class for every image */
            imageOne = new HeadImage("one");

        }

        /* This function is called on mouse move and gets the mouse position.
         * It also calls the HeadImage function to display the correct image*/
        function getMousePosition(event) {

            /* Setting the mouse position variables */
            mouseX = event.pageX;
            mouseY = event.pageY;

            /*Calling the setImageDirection function of the HeadImage class
             * to display the correct image*/
            imageOne.setImageDirection();

        }

    </script>


    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    </body>
    </html>
<?php $this->endPage() ?>
