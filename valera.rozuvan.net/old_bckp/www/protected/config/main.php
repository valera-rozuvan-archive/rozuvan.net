<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'     => 'Valera Rozuvan',

    // preloading 'log' component
    'preload' => array('log'),

    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.modules.simple_rbac.models.*',
        'application.modules.simple_rbac.components.*',
        'application.modules.simple_rbac.models.forms.*',
        'application.modules.simple_rbac.models.db_tables.*',
        'application.modules.simple_rbac.models.data_providers.*',
    ),

    'modules' => array(
        // uncomment the following to enable the Gii tool

        'gii' => array(
            'class'     => 'system.gii.GiiModule',
            'password'  => '111',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),

        'simple_rbac' => array(
            // 'setup' => true,
        ),
    ),

    // application components
    'components' => array(
        "clientScript" => array(
            "packages" => array(
                "comment_reply" => array(
                    "baseUrl" => "/js/",
                    "js"      => array("comment_reply.js"),
                ),
                "jquery" => array(
                    "baseUrl" => "/js/",
                    "js"      => array("jquery.min.js"),
                ),
                "superfish" => array(
                    "baseUrl" => "/js/",
                    "js"      => array("superfish.js"),
                ),
                "jflickrfeed" => array(
                    "baseUrl" => "/js/",
                    "js"      => array("jflickrfeed.js"),
                ),
                "jquery.twitter" => array(
                    "baseUrl" => "/js/",
                    "js"      => array("jquery.twitter.js"),
                ),
                "jquery.fitvids" => array(
                    "baseUrl" => "/js/",
                    "js"      => array("jquery.fitvids.js"),
                ),
                "jquery.isotope" => array(
                    "baseUrl" => "/js/",
                    "js"      => array("jquery.isotope.min.js"),
                ),
                "jquery.flexslider" => array(
                    "baseUrl" => "/js/",
                    "js"      => array("jquery.flexslider.min.js"),
                ),
                "tinynav" => array(
                    "baseUrl" => "/js/",
                    "js"      => array("tinynav.min.js"),
                ),
                "theme" => array(
                    "baseUrl" => "/js/",
                    "js"      => array("theme.js"),
                ),
            ),
        ),
        "promptar" => array(
            "class" => "application.extensions.promptar.Promptar",
        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin'=> true,
        ),
        'request' => array(
            'enableCookieValidation' => true,
            'enableCsrfValidation'   => true,
        ),
        'urlManager' => array(
            'class'         => 'application.components.UrlManager',
            'urlFormat'     => 'path',
            'showScriptName'=> false,
            'rules'         => array(
                '<language:(ru|en)>/<controller:(admin)>/<action>'    => 'simple_rbac/<controller>/<action>',
                '<language:(ru|en)>/<controller:(admin)>/<action>/*'    => 'simple_rbac/<controller>/<action>',
                '<language:(ru|en)>/<controller:(admin)>/'            => 'simple_rbac/admin',

                '<language:(ru|en)>/'                                                  => 'site/index',
                '<language:(ru|en)>/<action:(capabilities)>/<id:\w+>'                       => 'site/<action>',
                '<language:(ru|en)>/<action:(index|about|projects|capabilities|contacts|privacy_policy|help|site_map|faq|login|logout)>/*'  => 'site/<action>',
                '<language:(ru|en)>/<controller:\w+>/<id:\d+>'                         => '<controller>/view',
                '<language:(ru|en)>/<controller:\w+>/<action:\w+>/<id:\d+>'            => '<controller>/<action>',
                '<language:(ru|en)>/<controller:\w+>/<action:\w+>/*'                   => '<controller>/<action>',
            ),
        ),
        'db' => array(
            'class'            => 'CDbConnection',
            'connectionString' => 'mysql:host=localhost;port=3306;dbname=db',
            'emulatePrepare'   => true,
            'username'         => 'username',
            'password'         => '1234567890',
            'charset'          => 'utf8',
            'tablePrefix'      => 'tbl_',
        ),
        'authManager' => array(
            'class'           => 'CDbAuthManager',
            'connectionID'    => 'db',
            'itemTable'       => '{{AuthItem}}',
            'itemChildTable'  => '{{AuthItemChild}}',
            'assignmentTable' => '{{AuthAssignment}}',
            'defaultRoles'    =>  array(
                'guest',
                'authenticated',
            ),
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction'=> 'site/error',
        ),
        'log' => array(
            'class'  => 'CLogRouter',
            'routes' => array(
                array(
                    'class'  => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                // uncomment the following to show log messages on web pages
                /*
                    array(
                        'class'=>'CWebLogRoute',
                    ),
                    */
            ),
        ),
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail'=> 'farady@mail.ru',
        // 'languages' => array('ru' => 'Ru', 'en' => 'En'),
        'languages' => array('ru' => 'Russian', 'en' => 'English'),
    ),
);
