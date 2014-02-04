<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="description" content="Home page of Valera Rozuvan." />
	<meta name="keywords" content="Valera Rozuvan" />
	<meta name="author" content="Valera Rozuvan" />

    <title><?=CHtml::encode($this->pageTitle)?></title>
    <link rel="Shortcut Icon" href="/images/favicon.ico" type="image/x-icon" />

	<link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/superfish.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="all" />
	<link rel="stylesheet" href="/css/style2.css" type="text/css" media="all" />
    <!--[if IE 7]>
    <link rel="stylesheet" href="/css/ie7.css" type="text/css" media="screen" />
    <![endif]-->
    <!--[if IE 8]>
    <link rel="stylesheet" href="/css/ie8.css" type="text/css" media="screen" />
    <![endif]-->
	<link rel="stylesheet" href="/css/style3.css" type="text/css" media="all" />

    <!--[if lt IE 8]>
    <script src="/js/lte-ie7"></script>
    <![endif]-->

    <?
    Yii::app()->getClientScript()->registerCoreScript('comment_reply');
    Yii::app()->getClientScript()->registerCoreScript('jquery');
    Yii::app()->getClientScript()->registerCoreScript('superfish');
    Yii::app()->getClientScript()->registerCoreScript('jflickrfeed');
    Yii::app()->getClientScript()->registerCoreScript('jquery.twitter');
    Yii::app()->getClientScript()->registerCoreScript('jquery.fitvids');
    Yii::app()->getClientScript()->registerCoreScript('jquery.isotope');
    Yii::app()->getClientScript()->registerCoreScript('jquery.flexslider');
    Yii::app()->getClientScript()->registerCoreScript('tinynav');
    Yii::app()->getClientScript()->registerCoreScript('theme');
    ?>

    <script type="text/javascript">
        //<![CDATA[
        <?
        /*
        jQuery(window).load(function($){
            jQuery('#flickrBox').jflickrfeed({
                limit: 6,
                qstrings: {
                    id: '44802888@N04'
                },
                itemTemplate:
                    '<div class="flickrImage">' +
                    '<a href="{{link}}" title="{{title}}">' +
                    '<img src="{{image_s}}" alt="{{title}}" />' +
                    '</a>' +
                    '</div>'
            });
        });
        */
        ?>

        jQuery(document).ready(function() {
            jQuery("#flickrBox").getTwitter({
                userName: "valerarozuvan",
                numTweets: 3,
                loaderText: "Loading tweets...",
                slideIn: true,
                slideDuration: 750,
                showHeading: true,
                headingText: "Latest Tweets",
                showProfileLink: true,
                showTimestamp: true,
                includeRetweets: false,
                excludeReplies: true
            });
        });
        //]]>
    </script>
</head>

<body class="home page page-id-164 page-template page-template-page-portfolio-php custom-background">

    <!-- Page container -->
    <div id="container">
        <div id="header" style="">
            <div class="inside clearfix">
                <div id="logo">
                    <h1 class="logo">
                        <a href="http://valera.rozuvan.net/">
                            <img src="/images/logo3.png" alt="Ink" />
                        </a>
                    </h1>
                </div>

                <div id="mainNav" class="clearfix">
                    <div class="menu-main-container">
                            <?
                            /*
                        <ul id="menu-main" class="sf-menu sf-js-enabled sf-shadow l_tinynav1">
                            <li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-164 current_page_item menu-item-320">
                                <a href="/images/Ink.html">Portfolio</a>
                            </li>
                            <li id="menu-item-319" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-319">
                                <a href="http://themetrust.com/demos/ink/?page_id=265" class="sf-with-ul">About Us<span class="sf-sub-indicator"> »</span></a>
                                <ul class="sub-menu" style="float: none; width: 8em; display: none; visibility: hidden;">
                                    <li id="menu-item-325" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-325" style="white-space: normal; float: none; width: 100%;">
                                        <a href="http://themetrust.com/demos/ink/#" style="float: none; width: auto;">Drop Example 1</a>
                                    </li>
                                    <li id="menu-item-326" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-326" style="white-space: normal; float: none; width: 100%;">
                                        <a href="http://themetrust.com/demos/ink/#" style="float: none; width: auto;">Drop Example 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-318" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-318">
                                <a href="http://themetrust.com/demos/ink/?page_id=274">Blog</a>
                            </li>
                            <li id="menu-item-321" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-321">
                                <a href="http://themetrust.com/themes/ink">Buy This Theme</a>
                            </li>
                        </ul>
                             */
                            ?>
                    </div>
                </div>

                <!-- <div id="sidebar"> -->
                    <div id="sidebar" class="clearfix">
                        <div id="ttrust_social-2" class="ttrustSocial sidebarBox widgetBox">
                            <ul class="clearfix medium">
                                <li>
                                    <a href="https://plus.google.com/107180394340520523800" target="_blank"><span class="icon-google-plus"></span></a>
                                </li>
                                <li>
                                    <a href="http://ua.linkedin.com/pub/валера-розуван/53/a5b/ba8" target="_blank"><span class="icon-linkedin"></span></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/valera.rozuvan" target="_blank"><span class="icon-facebook"></span></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/ValeraRozuvan" target="_blank"><span class="icon-twitter"></span></a>
                                </li>
                            </ul>
                        </div>

                        <div id="ttrust_flickr-2" class="widget_ttrust_flickr sidebarBox widgetBox">
                            <div id="flickrBox" class="clearfix"></div>
                        </div>
                    </div><!-- end sidebar -->
                <!-- </div> -->
            </div>
        </div>

        <!-- Main content -->
        <div id="main" class="clearfix">

            <!-- Information -->
            <div id="content" class="fullProjects clearfix full">
                <div id="projects" class="clearfix">
                    <div id="floatingCirclesG" style="display: none;">
                        <div class="f_circleG" id="frotateG_01"></div>
                        <div class="f_circleG" id="frotateG_02"></div>
                        <div class="f_circleG" id="frotateG_03"></div>
                        <div class="f_circleG" id="frotateG_04"></div>
                        <div class="f_circleG" id="frotateG_05"></div>
                        <div class="f_circleG" id="frotateG_06"></div>
                        <div class="f_circleG" id="frotateG_07"></div>
                        <div class="f_circleG" id="frotateG_08"></div>
                    </div>

                    <ul id="filterNav" class="clearfix">
                        <li class="allBtn">
                            <a href="http://valera.rozuvan.net/#" data-filter="*" class="selected">All</a>
                        </li>
                        <li>
                            <a href="http://valera.rozuvan.net/#" data-filter=".web">Web</a>
                        </li>
                        <li>
                            <a href="http://valera.rozuvan.net/#" data-filter=".code">Code</a>
                        </li>
                        <li>
                            <a href="http://valera.rozuvan.net/#" data-filter=".music">Music</a>
                        </li>
                        <li>
                            <a href="http://valera.rozuvan.net/#" data-filter=".art">Art</a>
                        </li>
                        <li>
                            <a href="http://valera.rozuvan.net/#" data-filter=".video">Video</a>
                        </li>
                    </ul>

                    <div class="thumbs masonry isotope" style="position: relative; overflow: hidden; height: 0px;">
                        <div class="project small art  isotope-item" id="project-devian-art" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(534px, 200px); visibility: visible;">
                            <a href="http://valera-rozuvan.deviantart.com/" rel="bookmark">
                                <div class="description" style="opacity: 0; display: block;">
                                    <span class="title">Devian Art</span>
                                    <span class="divider"></span>
                                    <p>In my spare moments, when I am not programming, a pencil sketches on paper.</p>
                                </div>
                                <div class="overlay" style="opacity: 0; display: block;"></div>
                                <img width="300" height="225" src="/images/strand/devian_art.png" class="thumb wp-post-image" alt="Devian Art" title="" />
                            </a>
                        </div>

                        <div class="project small video  isotope-item" id="project-youtube-channel" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(801px, 200px); visibility: visible;">
                            <a href="http://www.youtube.com/user/valerarozuvan" rel="bookmark">
                                <div class="description" style="opacity: 0; display: block;">
                                    <span class="title">YouTube channel</span>
                                    <span class="divider"></span>
                                    <p>At times, moments require that they are captured on film. For now, only few of my own videos, but I plan to expand.</p>
                                </div>
                                <div class="overlay" style="opacity: 0; display: block;"></div>
                                <img width="300" height="225" src="/images/strand/youtube.png" class="thumb wp-post-image" alt="YouTube channel" title="" />
                            </a>
                        </div>

                        <div class="project small music  isotope-item" id="project-last-fm-profile" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(0px, 200px); visibility: visible;">
                            <a href="http://www.last.fm/user/valerarozuvan" rel="bookmark">
                                <div class="description" style="opacity: 0; display: block;">
                                    <span class="title">last.fm profile</span>
                                    <span class="divider"></span>
                                    <p>Music really makes life more bearable. When I don't forget, I sync history of listened music online.</p>
                                </div>
                                <div class="overlay" style="opacity: 0; display: block;"></div>
                                <img width="300" height="225" src="/images/strand/last_fm_profile.png" class="thumb wp-post-image" alt="last.fm profile" title="" />
                            </a>
                        </div>

                        <div class="project small web  isotope-item" id="project-old-freewebs" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(0px, 0px); visibility: visible;">
                            <a href="http://www.freewebs.com/rozouvan/" rel="bookmark">
                                <div class="description" style="opacity: 0; display: block;">
                                    <span class="title">freewebs.com/rozouvan</span>
                                    <span class="divider"></span>
                                    <p>My old site from 2004-2009. Unfortunately, I lost the credentials, so I can't edit it anymore ^_^</p>
                                </div>
                                <div class="overlay" style="opacity: 0; display: block;"></div>
                                <img width="300" height="225" src="/images/strand/old_freewebs.png" class="thumb wp-post-image" alt="Old freewebs Rozouvan" title="" />
                            </a>
                        </div>

                        <div class="project small music  isotope-item" id="project-music-composition" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(267px, 200px); visibility: visible;">
                            <a href="http://imslp.org/wiki/Category:Rozouvan,_Valerij_Stanislavovich" rel="bookmark">
                                <div class="description" style="opacity: 0; display: block;">
                                    <span class="title">Music composition</span>
                                    <span class="divider"></span>
                                    <p>I play the piano, improvise, and listen to classical music. Sometimes I have a musical idea, which I record.</p>
                                </div>
                                <div class="overlay" style="opacity: 0; display: block;"></div>
                                <img width="300" height="225" src="/images/strand/music_composition.png" class="thumb wp-post-image" alt="Music composition" title="" />
                            </a>
                        </div>

                        <? /*
                        <div class="project small web  isotope-item" id="project-darinki-net" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(534px, 0px); visibility: visible;">
                            <a href="http://darinki.net/" rel="bookmark">
                                <div class="description" style="opacity: 0; display: block;">
                                    <span class="title">darinki.net</span>
                                    <span class="divider"></span>
                                    <p>This resource I keep mostly for myself. I put up technical information that might be useful in the future.</p>
                                </div>
                                <div class="overlay" style="opacity: 0; display: block;"></div>
                                <img width="300" height="225" src="/images/strand/darinki_net.png" class="thumb wp-post-image" alt="darinki.net" title="" />
                            </a>
                        </div>
                        */ ?>

                        <div class="project small code  isotope-item" id="project-github-repositories" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(1068px, 0px); visibility: visible;">
                            <a href="https://github.com/valera-rozuvan" rel="bookmark">
                                <div class="description" style="opacity: 0; display: block;">
                                    <span class="title">GitHub repositories</span>
                                    <span class="divider"></span>
                                    <p>Most of my latest code can be found on GitHub. Open source rules the world!</p>
                                </div>
                                <div class="overlay" style="opacity: 0; display: block;"></div>
                                <img width="300" height="225" src="/images/strand/github_repositories.png" class="thumb wp-post-image" alt="GitHub repositories" title="" />
                            </a>
                        </div>

                        <div class="project small web  isotope-item" id="project-javascript-experiments" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(801px, 0px); visibility: visible;">
                            <a href="http://javascript-experiments.net/" rel="bookmark">
                                <div class="description" style="opacity: 0; display: block;">
                                    <span class="title">JavaScript Experiments</span>
                                    <span class="divider"></span>
                                    <p>This is a live version of interesting JavaScript things that I develop. Code hosted on GitHub.</p>
                                </div>
                                <div class="overlay" style="opacity: 0; display: block;"></div>
                                <img width="300" height="225" src="/images/strand/javascript_experiments.png" class="thumb wp-post-image" alt="JavaScript Experiments" title="" />
                            </a>
                        </div>

                        <div class="project small web  isotope-item" id="project-livejournal-blog" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(267px, 0px); visibility: visible;">
                            <a href="http://valera-rozuvan.livejournal.com/" rel="bookmark">
                                <div class="description" style="opacity: 0; display: block;">
                                    <span class="title">LiveJournal</span>
                                    <span class="divider"></span>
                                    <p>I have kept several blogs, most of them being lost now. I have lately been adding pictures to this one.</p>
                                </div>
                                <div class="overlay" style="opacity: 0; display: block;"></div>
                                <img width="300" height="225" src="/images/strand/livejournal_blog.png" class="thumb wp-post-image" alt="livejournal blog" title="" />
                            </a>
                        </div>

                        <? /*
                        <div class="project small print  isotope-item" id="project-frwd" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(1068px, 200px); visibility: visible;">
                            <a href="http://themetrust.com/demos/ink/?project=frwd" rel="bookmark">
                                <div class="description">
                                    <span class="title">FRWD</span>

                                    <span class="divider"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget quam orci.</p>
                                </div>
                                <div class="overlay"></div>
                                <img width="300" height="225" src="/images/frwd_thumb.jpg" class="thumb wp-post-image" alt="FRWD" title="FRWD">	</a>
                        </div>

                        <div class="project small illustration  isotope-item" id="project-the-roboticon" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(0px, 400px); visibility: visible;">
                            <a href="http://themetrust.com/demos/ink/?project=the-roboticon" rel="bookmark">
                                <div class="description">
                                    <span class="title">The Roboticon</span>

                                    <span class="divider"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget quam orci.</p>
                                </div>
                                <div class="overlay"></div>
                                <img width="300" height="225" src="/images/roboticon_thumb.jpg" class="thumb wp-post-image" alt="The Roboticon" title="The Roboticon">	</a>
                        </div>

                        <div class="project small photography  isotope-item" id="project-night-is-black" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(267px, 400px); visibility: visible;">
                            <a href="http://themetrust.com/demos/ink/?project=night-is-black" rel="bookmark">
                                <div class="description">
                                    <span class="title">Night Is Black</span>
                                </div>
                                <div class="overlay"></div>
                                <img width="300" height="225" src="/images/night_thumb-300x225.jpg" class="thumb wp-post-image" alt="Night Is Black" title="Night Is Black">	</a>
                        </div>

                        <div class="project small illustration print  isotope-item" id="project-pump-up-the-volume" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(534px, 400px); visibility: visible;">
                            <a href="http://themetrust.com/demos/ink/?project=pump-up-the-volume" rel="bookmark">
                                <div class="description" style="opacity: 0.5089759085634992; display: block;">
                                    <span class="title">Pump Up the Volume</span>

                                    <span class="divider"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget quam orci. </p>
                                </div>
                                <div class="overlay" style="opacity: 0.45807831863575765; display: block;"></div>
                                <img width="300" height="225" src="/images/pump_thumb1-300x225.jpg" class="thumb wp-post-image" alt="Pump Up the Volume" title="">	</a>
                        </div>

                        <div class="project small illustration print  isotope-item" id="project-now-twist" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(801px, 400px); visibility: visible;">
                            <a href="http://themetrust.com/demos/ink/?project=now-twist" rel="bookmark">
                                <div class="description">
                                    <span class="title">Now Twist</span>

                                    <span class="divider"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                                <div class="overlay"></div>
                                <img width="300" height="225" src="/images/now_twist_thumb-300x225.jpg" class="thumb wp-post-image" alt="Now Twist" title="Now Twist">	</a>
                        </div>

                        <div class="project small illustration print  isotope-item" id="project-alka" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(1068px, 400px); visibility: visible;">
                            <a href="http://themetrust.com/demos/ink/?project=alka" rel="bookmark">
                                <div class="description">
                                    <span class="title">Alka</span>

                                    <span class="divider"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget quam orci. </p>
                                </div>
                                <div class="overlay"></div>
                                <img width="300" height="225" src="/images/alka_11-300x225.jpg" class="thumb wp-post-image" alt="Alka" title="Alka">	</a>
                        </div>

                        <div class="project small motion  isotope-item" id="project-tube-drop" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(0px, 600px); visibility: visible;">
                            <a href="http://themetrust.com/demos/ink/?project=tube-drop" rel="bookmark">
                                <div class="description">
                                    <span class="title">Tube Drop</span>

                                    <span class="divider"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget quam orci. </p>
                                </div>
                                <div class="overlay"></div>
                                <img width="300" height="225" src="/images/tube_drop_thumb-300x225.jpg" class="thumb wp-post-image" alt="Tube Drop" title="Tube Drop">	</a>
                        </div>

                        <div class="project small photography  isotope-item" id="project-alone" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(267px, 600px); visibility: visible;">
                            <a href="http://themetrust.com/demos/ink/?project=alone" rel="bookmark">
                                <div class="description">
                                    <span class="title">Alone</span>

                                    <span class="divider"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget quam orci. </p>
                                </div>
                                <div class="overlay"></div>
                                <img width="300" height="225" src="/images/alone_11-300x225.jpg" class="thumb wp-post-image" alt="Alone" title="Alone">	</a>
                        </div>

                        <div class="project small motion  isotope-item" id="project-partitura" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(534px, 600px); visibility: visible;">
                            <a href="http://themetrust.com/demos/ink/?project=partitura" rel="bookmark">
                                <div class="description">
                                    <span class="title">Partitura</span>
                                </div>
                                <div class="overlay"></div>
                                <img width="300" height="225" src="/images/partitura_thumb-300x225.jpg" class="thumb wp-post-image" alt="Partitura" title="Partitura">	</a>
                        </div>

                        <div class="project small motion  isotope-item" id="project-the-village" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(801px, 600px); visibility: visible;">
                            <a href="http://themetrust.com/demos/ink/?project=the-village" rel="bookmark">
                                <div class="description" style="opacity: 0; display: block;">
                                    <span class="title">The Village</span>
                                </div>
                                <div class="overlay" style="opacity: 0; display: block;"></div>
                                <img width="300" height="225" src="/images/village_thumb-300x225.jpg" class="thumb wp-post-image" alt="The Village" title="">	</a>
                        </div>

                        <div class="project small motion  isotope-item" id="project-blocks" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(1068px, 600px); visibility: visible;">
                            <a href="http://themetrust.com/demos/ink/?project=blocks" rel="bookmark">
                                <div class="description">
                                    <span class="title">Blocks</span>

                                    <span class="divider"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget quam orci. </p>
                                </div>
                                <div class="overlay"></div>
                                <img width="300" height="225" src="/images/blocks_thumb-300x225.jpg" class="thumb wp-post-image" alt="Blocks" title="Blocks">	</a>
                        </div>

                        <div class="project small motion  isotope-item" id="project-rockwell" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(0px, 800px); visibility: visible;">
                            <a href="http://themetrust.com/demos/ink/?project=rockwell" rel="bookmark">
                                <div class="description">
                                    <span class="title">Rockwell</span>
                                </div>
                                <div class="overlay"></div>
                                <img width="300" height="225" src="/images/rockwell_thumb-300x225.jpg" class="thumb wp-post-image" alt="Rockwell" title="Rockwell">	</a>
                        </div>

                        <div class="project small print  isotope-item" id="project-decoder-specs" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(267px, 800px); visibility: visible;">
                            <a href="http://themetrust.com/demos/ink/?project=decoder-specs" rel="bookmark">
                                <div class="description">
                                    <span class="title">Decoder Specs</span>

                                    <span class="divider"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget quam orci. </p>
                                </div>
                                <div class="overlay"></div>
                                <img width="300" height="225" src="/images/specs_thumb1-300x225.jpg" class="thumb wp-post-image" alt="Decoder Specs" title="Decoder Specs">	</a>
                        </div>

                        <div class="project small photography  isotope-item" id="project-water-abstraction" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(534px, 800px); visibility: visible;">
                            <a href="http://themetrust.com/demos/ink/?project=water-abstraction" rel="bookmark">
                                <div class="description">
                                    <span class="title">Water Abstraction</span>
                                </div>
                                <div class="overlay"></div>
                                <img width="300" height="225" src="/images/water_abstraction-300x225.jpg" class="thumb wp-post-image" alt="Water Abstraction" title="Water Abstraction">	</a>
                        </div>

                        <div class="project small photography  isotope-item" id="project-dragonfly" style="width: 267px; position: absolute; left: 0px; top: 0px; -webkit-transform: translate(801px, 800px); visibility: visible;">
                            <a href="http://themetrust.com/demos/ink/?project=dragonfly" rel="bookmark">
                                <div class="description">
                                    <span class="title">Dragonfly</span>

                                    <span class="divider"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget quam orci. </p>
                                </div>
                                <div class="overlay"></div>
                                <img width="300" height="225" src="/images/dragonfly-300x225.jpg" class="thumb wp-post-image" alt="Dragonfly" title="Dragonfly">	</a>
                        </div>
                         */
                        ?>
                    </div>
                </div>
            </div>
            <!-- End-of: Information -->

            <!-- Footer -->
            <div id="footer">
                <div class="inside">
                    <p>&copy; 2013 <a href="mailto:valera.rozuvan@gmail.com" title="Valera Rozuvan"><strong>Valera Rozuvan</strong></a></p>
                </div>
            </div>
            <!-- End-of: Footer -->

        </div>
        <!-- End-of: Main content -->

    </div>
    <!-- End-of: Page container -->
</body>

</html>
