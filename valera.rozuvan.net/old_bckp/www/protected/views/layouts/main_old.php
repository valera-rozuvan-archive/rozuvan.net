<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

    <title><?=CHtml::encode($this->pageTitle)?></title>
    <link rel="Shortcut Icon" href="/images/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/css/responsive.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/css/camera.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/css/css_x.css" type="text/css">

    <?
    Yii::app()->getClientScript()->registerCoreScript('jquery');
    Yii::app()->getClientScript()->registerCoreScript('superfish');
    Yii::app()->getClientScript()->registerCoreScript('camera');
    Yii::app()->getClientScript()->registerCoreScript('jquery.mobilemenu');
    Yii::app()->getClientScript()->registerCoreScript('jquery.cookie');
    Yii::app()->getClientScript()->registerCoreScript('jquery.easing');
    Yii::app()->getClientScript()->registerCoreScript('jquery.ui.totop');
    Yii::app()->getClientScript()->registerCoreScript('jquery.mobile.customized');
    Yii::app()->getClientScript()->registerCoreScript('jquery.carouFredSel');
    Yii::app()->getClientScript()->registerCoreScript('jquery.touchSwipe');
    ?>

    <? /* Animate the Home Page slider. Only necessary for 'site/index'.*/ ?>
    <? if ((Yii::app()->controller->id == 'site') && (Yii::app()->controller->action->id == 'index')): ?>
    <script>
        $(window).load( function(){
            jQuery('.camera_wrap').camera();

            // Responsive layout, resizing the items.
            $('#carousel-1').carouFredSel({
                'auto': false,
                'responsive': true,
                'width': '100%',
                'scroll': 1,
                'prev': '#prev-1',
                'next': '#next-1',
                'pagination': false,
                'mousewheel': false,
                'swipe': {
                    'onMouse': true,
                    'onTouch': true
                },
                'items': {
                    'width': 268,
                    'height': 'auto', // Optionally, resize item-height.
                    'visible': {
                        'min': 1,
                        'max': 1
                    }
                }
            });
        });
    </script>
    <? endif; ?>

    <!--[if lt IE 8]>
        <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
                <img
                    src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg"
                    border="0"
                    height="42"
                    width="820"
                    alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
        </div>
    <![endif]-->

	<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link rel="stylesheet" href="/css/ie.css" type="text/css" media="screen">
        <link href='http://fonts.googleapis.com/css?family=BenchNine:700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=BenchNine:400' rel='stylesheet' type='text/css'>
    <![endif]-->
</head>

<body>

    <!-- ============================== Header ================================= -->
    <header>
        <div class="container">

            <!-- ============================== Header main content ================================= -->
            <div class="navbar navbar_ clearfix">
                <div class="coll-right">
                    <? /* id language-selector is used in /protected/components/widgets/views/languageSelector.php */ ?>
                    <div style="margin: 5px 0px 0px 0px; padding: 0px; display: inline; float: right; clear: none;">
                        <? $this->widget('application.components.widgets.LanguageSelector'); ?>
                    </div>
                    <div class="list-top">
                        <a href="<?=$this->createUrl('site/help')?>">Help</a>
                        <a href="<?=$this->createUrl('site/site_map')?>">Site map</a>
                        <a href="<?=$this->createUrl('site/faq')?>">FAQs</a>
                    </div>
                    <form id="search" action="search.php" method="GET" accept-charset="utf-8" >
                        <div class="clearfix">
                            <input
                                type="text"
                                name="s"
                                onBlur="if(this.value=='') this.value=''"
                                onFocus="if(this.value =='' ) this.value=''" />
                            <a href="#" onClick="document.getElementById('search').submit()" class="btn btn-1">search</a>
                        </div>
                    </form>
                    <div class="list-soc">
                        <a href="#"><img alt="" src="/images/soc-icon1.png"></a>
                        <a href="#"><img alt="" src="/images/soc-icon2.png"></a>
                        <a href="#"><img alt="" src="/images/soc-icon3.png"></a>
                        <a href="#"><img alt="" src="/images/soc-icon4.png"></a>
                    </div>
                </div>
                <div class="coll-left clearfix">
                    <h1 class="brand">
                        <a href="<?=$this->createUrl('site/index')?>"><img alt="rio" src="/images/logo.png"></a>
                    </h1>
                    <div class="nav-collapse nav-collapse_  collapse">
                        <ul class="nav sf-menu">
                            <li class="<?=$this->isActive('index')?>"><a href="<?=$this->createUrl('site/index')?>">Home page</a></li>
                            <li class="<?=$this->isActive('about')?>">
                                <a href="<?=$this->createUrl('site/about')?>">About</a>
                                <ul>
                                    <li><a href="#">Welcome Message</a></li>
                                    <li>
                                        <a href="#">Company Profile</a>
                                        <ul>
                                            <li><a href="#">Our Capabilities</a></li>
                                            <li><a href="#">Advantages</a></li>
                                            <li><a href="#">Work Team</a></li>
                                            <li><a href="#">Partnership</a></li>
                                            <li><a href="#">Support</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Our History</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                </ul>
                            </li>
                            <li class="<?=$this->isActive('projects')?>"><a href="<?=$this->createUrl('site/projects')?>">Projects</a></li>
                            <li class="<?=$this->isActive('capabilities')?>"><a href="<?=$this->createUrl('capabilities/web_development')?>">Capabilities </a></li>
                            <li class="<?=$this->isActive('contacts')?>"><a href="<?=$this->createUrl('site/contacts')?>">Contacts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================== End-of: Header main content ================================= -->

            <!-- ============================== Slider ================================= -->
            <? /* Home Page slider. Only necessary for 'site/index'.*/ ?>
            <? if ((Yii::app()->controller->id == 'site') && (Yii::app()->controller->action->id == 'index')): ?>
            <div class="slider">
                <div class="camera_wrap">
                    <?
                    $headerMessages = HeaderMessages::getMessages();
                    foreach ($headerMessages as $headerMessage):
                    ?>
                    <div data-src="<?=$headerMessage['img_src']?>">
                        <div class="camera_caption fadeIn"><?=$headerMessage['message']?></div>
                    </div>
                    <? endforeach; ?>
                </div>
                <div class="part-slider-bottom"></div>
            </div>
            <? endif; ?>
            <!-- ============================== End-of: Slider ================================= -->

        </div>
    </header>
    <!-- ============================== End-of: Header ================================= -->

    <!-- ============================== Content ================================= -->
    <?=$content?>
    <!-- ============================== End-of: Content ================================= -->

    <!-- ============================== Footer ================================= -->
    <footer>
        <div class="container clearfix">
            <div class="box-phone"><span>e-mail us</span> <strong><a href="mailto:info@example.com">info@example.com</a></strong></div>
            <div class="privacy">example.com &copy; 2013 <span>|</span> <a href="<?=$this->createUrl('site/privacy_policy')?>">Privacy Policy</a></div>
        </div>
    </footer>
    <!-- ============================== End-of: Footer ================================= -->

</body>

</html>
