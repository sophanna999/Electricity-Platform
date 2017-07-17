<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config['ci_bootstrap'] = array(
    // Site name
    'site_name' => 'CI Bootstrap 3',
    // Default page title prefix
    'page_title_prefix' => '',
    // Default page title
    'page_title' => '',
    // Default meta data
    'meta_data' => array(
        'author' => '',
        'description' => '',
        'keywords' => ''
    ),
    // Default scripts to embed at page head or end
    'scripts' => array(
        'head' => array(
            'assets/dist/frontend/jquery.min.js',
        ),
        'foot' => array(
            'assets/dist/frontend/lib.min.js',
            'assets/dist/frontend/app.min.js',
            'assets/dist/frontend/datatables.min.js',

            'assets/js/bootstrap.min.js',
            'assets/js/main.js',
            'assets/js/owl.carousel.js',
            'assets/js/wow.min.js',
            'assets/js/smoothproducts.min.js'
        ),
    ),
    // Default stylesheets to embed at page head
    'stylesheets' => array(
        'screen' => array(
            'assets/dist/frontend/lib.min.css',
            'assets/dist/frontend/app.min.css',
            'assets/dist/frontend/dataTables.min.css',
            'assets/dist/frontend/bootstrap.min.css',
            'assets/dist/frontend/dataTables.bootstrap.min.css',


            'assets/css/animate.css',
            'assets/css/animate.min.css',
            'assets/css/font-awesome.min.css',
            'assets/css/main.css',
            'assets/css/owl.carousel.css',
            'assets/css/owl.theme.default.min.css',
            'assets/css/prettyphoto.css',
            'assets/css/responsive.css',
        )
    ),
    // Default CSS class for <body> tag
    'body_class' => '',
    // Multilingual settings
    'languages' => array(
        /*'default' => 'en',
        'autoload' => array('general'),
        'available' => array(
            'en' => array(
                'label' => 'English',
                'value' => 'english'
            ),
            'zh' => array(
                'label' => '繁體中文',
                'value' => 'traditional-chinese'
            ),
            'cn' => array(
                'label' => '简体中文',
                'value' => 'simplified-chinese'
            ),
            'es' => array(
                'label' => 'Español',
                'value' => 'spanish'
            )
        )*/
    ),
    // Google Analytics User ID
    'ga_id' => '',
    // Menu items
    'menu' => array(
        'home' => array(
            'name' => 'Home',
            'url' => '',
        ),
    ),
    // Login page
    'login_url' => '',
    // Restricted pages
    'page_auth' => array(
    ),
    // Email config
    'email' => array(
        'from_email' => '',
        'from_name' => '',
        'subject_prefix' => '',
        // Mailgun HTTP API
        'mailgun_api' => array(
            'domain' => '',
            'private_api_key' => ''
        ),
    ),
    // Debug tools
    'debug' => array(
        'view_data' => FALSE,
        'profiler' => FALSE
    ),
);

/*
  | -------------------------------------------------------------------------
  | Override values from /application/config/config.php
  | -------------------------------------------------------------------------
 */
$config['sess_cookie_name'] = 'ci_session_frontend';
