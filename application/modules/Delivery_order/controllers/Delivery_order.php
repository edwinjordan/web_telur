<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Delivery_order extends MY_Admin {
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        // $data['judul']        = "Home";
        

        
        $data['module']       = "Delivery_order";
        $data['view_file']    = "delivery_order";
       $this->load->view('Template/view_admin', $data);
    }

     function print(){
        $data['module']       = "Delivery_order";
        $data['view_file']    = "print_daftar_timbang";
       $this->load->view('Template/view_admin', $data);
    }

    function view(){
        $data['module']       = "Delivery_order";
        $data['view_file']    = "view_do";
       $this->load->view('Template/view_admin', $data);
    }

    function retur(){
        $data['module']       = "Delivery_order";
        $data['view_file']    = "view_retur";
       $this->load->view('Template/view_admin', $data);
    }

}    