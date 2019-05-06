<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Validasi_gudang extends MY_Admin {
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        // $data['judul']        = "Home";
        

        
        $data['module']       = "Validasi_gudang";
        $data['view_file']    = "validasi_gudang";
       $this->load->view('Template/view_admin', $data);
    }
 }   