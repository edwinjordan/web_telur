<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Dashboard extends MX_Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $data['judul']        = "Home";
        $data['module']       = "Dashboard";
        $data['view_file']    = "view_dashboard";
        echo Modules::run('Template/view_admin', $data);
    }
}