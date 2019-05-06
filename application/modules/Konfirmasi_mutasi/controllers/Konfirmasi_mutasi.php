<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Konfirmasi_mutasi extends MY_Admin {

	 function __construct() {
        parent::__construct();
    }
    
    function index(){
        // $data['judul']        = "Home";
        

        
        $data['module']       = "Konfirmasi_mutasi";
        $data['view_file']    = "konfirmasi_mutasi";
       $this->load->view('Template/view_admin', $data);
    }

}	