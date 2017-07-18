<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------------
  | CI Bootstrap 3 Configuration
  | -------------------------------------------------------------------------
  | This file lets you define default values to be passed into views
  | when calling MY_Controller's render() function.
  |
  | See example and detailed explanation from:
  | 	/application/config/ci_bootstrap_example.php
 */

$config['ci_bootstrap_menu'] = array(
 'menu' => array(
        'home' => array(
            'name' => 'หน้าหลัก',
            'url' => '',
            'icon' => 'fa fa-home',
        ),
    //     'user' => array(
    //         'name' => 'Users',
    //         'url' => 'user',
    //         'icon' => 'fa fa-users',
    //         'children' => array(
    //             'List' => 'user',
    //             'Create' => 'user/create',
    //             'User Groups' => 'user/group',
    //         )
    //     ),
        'panel' => array(
            'name' => 'Admin Panel',
            'url' => 'panel',
            'icon' => 'fa fa-cog',
            'children' => array(
                'Admin Users' => 'panel/admin_user',
                'Create Admin User' => 'panel/admin_user_create',
                'Admin User Groups' => 'panel/admin_user_group',
            )
        ),
    //     'upload' => array(
    //         'name' => 'Upload Files',
    //         'url' => 'upload/index',
    //         'icon' => 'fa fa-folder',
    //         'children' => array(
    //             'Upload Images' => 'upload/images',
    //             'Upload Files' => 'upload/files'
    //         )
    //     ),
    //     'page' => array(
    //         'name' => 'Content Management',
    //         'url' => 'page/index',
    //         'icon' => 'fa fa-database',
    //     ),
    //     'util' => array(
    //         'name' => 'Utilities',
    //         'url' => 'util',
    //         'icon' => 'fa fa-cogs',
    //         'children' => array(
    //             'Database Versions' => 'util/list_db',
    //         )
    //     ),
    //     'logout' => array(
    //         'name' => 'Sign Out',
    //         'url' => 'panel/logout',
    //         'icon' => 'fa fa-sign-out',
    //     )
    	)
	);
				$config['ci_bootstrap_menu']['menu']['news'] = array(
					'name' => 'News',
					'url' => 'news',
					'icon' => 'fa fa-newspaper-o',
					'children' => array(
						'List' => 'news',
						'Create' => 'news/create'
					)
				);
				$config['ci_bootstrap_menu']['menu']['about'] = array(
					'name' => 'about',
					'url' => 'about',
					'icon' => 'fa fa-building-o',
					'children' => array(
						'List' => 'about',
						'Create' => 'about/create'
					)
				);

				$config['ci_bootstrap_menu']['menu']['contact'] = array(
					'name' => 'contact',
					'url' => 'contact',
					'icon' => 'fa fa-phone-square',
					'children' => array(
						'List' => 'contact',
						'Create' => 'contact/create'
					)
				);
				$config['ci_bootstrap_menu']['menu']['slide'] = array(
					'name' => 'slide',
					'url' => 'slide',
					'icon' => 'fa fa-sliders',
					'children' => array(
						'List' => 'slide',
						'Create' => 'slide/create'
					)
				);

				$config['ci_bootstrap_menu']['menu']['logout'] = array(
					'name' => 'ออกจากระบบ',
		            'url' => 'panel/logout',
		            'icon' => 'fa fa-sign-out',
				);

