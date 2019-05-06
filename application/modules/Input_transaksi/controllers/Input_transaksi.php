<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Input_transaksi extends MY_Admin {
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        // $data['judul']        = "Home";
        

        
        $data['module']       = "Input_transaksi";
        $data['view_file']    = "view_transaksi";
       $this->load->view('Template/view_admin', $data);
    }

    function detail_data(){
    	$data['module']       = "Input_transaksi";
        $data['view_file']    = "view_detail_transaksi";
       $this->load->view('Template/view_admin', $data);
    }
}