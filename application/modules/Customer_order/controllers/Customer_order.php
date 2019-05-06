<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Customer_order extends MY_Admin {
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        // $data['judul']        = "Home";
        

        
        $data['module']       = "Customer_order";
        $data['view_file']    = "input_order";
       $this->load->view('Template/view_admin', $data);
    }

    function detail_data(){
    	$data['module']       = "Customer_order";
        $data['view_file']    = "detail_order";
       $this->load->view('Template/view_admin', $data);
    }

     function print(){
        $data['module']       = "Customer_order";
        $data['view_file']    = "print_order";
       $this->load->view('Template/view_admin', $data);
    }

    function view(){
        $data['module']       = "Customer_order";
        $data['view_file']    = "view_order";
       $this->load->view('Template/view_admin', $data);
    }
 }   