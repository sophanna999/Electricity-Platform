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
				$config['ci_bootstrap_menu']['menu']['content'] = array(
					'name' => 'Banner Management',
					'url' => 'content/create/1',
					'icon' => 'glyphicon glyphicon-modal-window',
				);
				$config['ci_bootstrap_menu']['menu']['slide'] = array(
					'name' => 'Slide Management',
					'url' => 'slide',
					'icon' => 'fa fa-picture-o',
					'children' => array(
						'รายการสไลด์ทั้งหมด' => 'slide',
						'เพิ่มสไลด์' => 'slide/create'
					)
				);
				$config['ci_bootstrap_menu']['menu']['maincontent'] = array(
					'name' => 'Promotions',
					'url' => 'maincontent/create/1',
					'icon' => 'glyphicon glyphicon-list-alt',
				);
				$config['ci_bootstrap_menu']['menu']['news'] = array(
					'name' => 'News',
					'url' => 'news',
					'icon' => 'fa fa-newspaper-o',
					'children' => array(
						'ข่าวสารทั้งหมด' => 'news',
						'เพิ่มข่าวสาร' => 'news/create'
					)
				);
				$config['ci_bootstrap_menu']['menu']['category'] = array(
					'name' => 'Category',
					'url' => 'category',
					'icon' => 'glyphicon glyphicon-tasks',
					'children' => array(
						'หมวดหมู่ทั้งหมด' => 'category',
						'เพิ่มหมวดหมู่' => 'category/create'
					)
				);
				$config['ci_bootstrap_menu']['menu']['product'] = array(
					'name' => 'Product',
					'url' => 'product',
					'icon' => 'fa fa-cart-plus',
					'children' => array(
						'รายการสินค้าทั้งหมด' => 'product',
						'เพิ่มสินค้า' => 'product/create'
					)
				);
				$config['ci_bootstrap_menu']['menu']['about'] = array(
					'name' => 'About us',
					'url' => 'about/create/1',
					'icon' => 'fa fa-address-card-o',
				);
				$config['ci_bootstrap_menu']['menu']['contact'] = array(
					'name' => 'ติดต่อเรา',
					'url' => 'contact/create/1',
					'icon' => 'fa fa-users',
				);
				$config['ci_bootstrap_menu']['menu']['download'] = array(
					'name' => 'ไฟล์ดาวน์โหลด',
					'url' => 'download',
					'icon' => 'fa fa-file-pdf-o',
					'children' => array(
						'รายการไฟล์ทั้งหมด' => 'download',
						'เพิ่มไฟล์ดาวน์โหลด' => 'download/create'
					)
				);
				$config['ci_bootstrap_menu']['menu']['contactuser'] = array(
					'name' => 'ฟอร์มติดต่อ',
					'url' => 'contactuser',
					'icon' => 'fa fa-window-maximize',
					'children' => array(
						'รายการฟอร์มติดต่อทั้งหมด' => 'contactuser',
						'เพิ่มฟอร์มติดต่อ' => 'contactuser/create'
					)
				);
				$config['ci_bootstrap_menu']['menu']['logout'] = array(
					'name' => 'ออกจากระบบ',
		            'url' => 'panel/logout',
		            'icon' => 'fa fa-sign-out',
				);