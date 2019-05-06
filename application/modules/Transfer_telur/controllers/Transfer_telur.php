<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Transfer_telur extends MY_Admin {
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        // $data['judul']        = "Home";
        

        
        $data['module']       = "Transfer_telur";
        $data['view_file']    = "transaksi_telur";
       $this->load->view('Template/view_admin', $data);
    }

    function kandang_besar(){
     
        $data['module']       = "Transfer_telur";
        $data['view_file']    = "transfer_kandang_besar";
       $this->load->view('Template/view_admin', $data);
    }

    function detail_kandang_besar(){
    	$data['module']       = "Transfer_telur";
        $data['view_file']    = "detail_kandang_besar";
        $this->load->view('Template/view_admin', $data);
    }
 }   