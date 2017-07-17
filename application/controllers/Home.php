<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mo_content');
        $this->load->model('mo_contact');
        $this->load->model('mo_category');
        $this->load->model('mo_news');
        $this->load->model('mo_slide');
        $this->load->model('mo_maincontent');
        $this->load->helper('function');

    }
    public function index() {
        $this->mViewData['data_slide'] = $this->mo_slide->get_all();
        $this->mViewData['data_news'] = $this->mo_news->get_first_news();
        $this->mViewData['data_maincontent'] = $this->mo_maincontent->get_all();

        $this->mViewData['data_cat2'] = $this->mo_category->get_by_main();
            
            // $array = array();
            // foreach($this->mViewData['data_cat2'] as $row){
                
            //     $array[] = array('category_id'=>$row->category_id,'category_name'=>$row->category_name,'category_title'=>$row->category_title,'category_image'=>$row->category_image);
                
            //     if($this->get_category_tree($row->category_id)!=NULL){
            //         $array_dummy = $this->get_category_tree($row->category_id);
            //         $array = array_merge($array,$array_dummy);
            //         $array_dummy = array();
            //     }
                
            // }

            // $this->mViewData['data_cat2'] = $array;
            $this->render('home');
    }
    public function get_category_tree($id=null) {
            $array = array();
            $sub = $this->mo_category->get_by_sub($id);
            if(!empty($sub)){
                foreach($sub as $row){
                    $array[] = array('category_id'=>$row->category_id,'category_name'=>$row->category_name,'category_title'=>$row->category_title);

                    if($this->get_category_tree($row->category_id)!=NULL){
                        $array_dummy = $this->get_category_tree($row->category_id);
                        $array = array_merge($array,$array_dummy);
                        $array_dummy = array();
                    }
                }
                return $array;
            }
            else{
                return null;
            }
        }
    public function getheader(){
        return $this->mo_content->get_content();
    }
    public function getfooter(){
        return $this->mo_contact->get_contact();
    }

}
