<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Product extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mo_product');
        $this->load->model('mo_category');
        $this->load->model('mo_maincontent');
        $this->load->library('pagination');
        $this->load->helper('function');

    }
    public function index($offset = 0) {
        $config["base_url"] = base_url() . "product";
        $config["total_rows"] = $this->mo_product->record_count();
        $config["per_page"] = 9;
        $this->pagination->initialize($config); 
        $page =  $this->input->get("p");
        if(!empty($page) && $page!=0)
            $page = ($page-1)*9;

        $this->mViewData['data_product'] = $this->mo_product->paditionpage($config["per_page"], $page);
        $this->mViewData['data_main'] = $this->mo_category->get_by_main();
        $this->render('product');
    }
    public function category($id ,$offset = 0){
        $cate_main2 = $this->mo_product->get_categorymain($id);
        $cate_main = array();
        foreach($cate_main2 as $row){
            $cate_main[] = $row->category_id;
        }
        if(in_array($id, $cate_main)){
            $this->mViewData['cat_id'] = $id;
        }else{
            $result_subcat= $this->mo_category->get_by_key($id);
            $this->mViewData['cat_id'] = $result_subcat[0]->category_main;
        }
        //product group 
        $this->mViewData['group_select'] = $this->mo_category->get_by_key($id);

        $config["base_url"] = base_url() . "product/category/".$id;
        $this->mViewData['data_test'] = $this->get_category_tree($id);
        $config["total_rows"] = $this->mo_product->record_count2($id,$this->mViewData['data_test']);
        $config["per_page"] = 6;
        $this->pagination->initialize($config); 
        $page =  $this->input->get("p");
        if(!empty($page) && $page!=0)
            $page = ($page-1)*6;
        $this->mViewData['data_product'] = $this->mo_product->get_all_productcat($id,$config["per_page"], $page,$this->mViewData['data_test']);
        $this->render('category_product');


    }
    public function detail($key){
        $this->mViewData['data_count'] = $this->mo_product->count_product($key);
        $this->mViewData['data_detail'] = $this->mo_product->get_by_key($key);
        $this->mViewData['data_maincontent'] = $this->mo_maincontent->get_all();
        $this->render('detail_product');
    }

    public function get_category_tree($id=null) {
            $array = array();
            $sub = $this->mo_product->get_all_productcat2($id);
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


}
