<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * ***************************************************************
 * Script : 
 * Version : 
 * Date :
 * Author : Pudyasto Adi W.
 * Email : mr.pudyasto@gmail.com
 * Description : 
 * ***************************************************************
 */

/**
 * Description of Dashboard
 *
 * @author Pudyasto
 */
class Users extends CI_Controller{
    //put your code here
    public function __construct()
    {
        parent::__construct();
    }    
    
    public function index() {        
        $this->load->view('design/header');
        $this->load->view('users/index');
        $this->load->view('design/footer');
    }
    
    public function blank_page() {        
        $this->load->view('design/header');
        $this->load->view('users/blank_page');
        $this->load->view('design/footer');
    }
}
