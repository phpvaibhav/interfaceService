<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Common_Back_Controller {

    public $data = "";

    function __construct() {
        parent::__construct();
        $this->check_admin_user_session();
     
    }

    public function index() { 
        
        $data['title'] = lang('Users');
        $this->load->admin_render('users', $data);
    } 
    public function add_user() { 
        
        $data['title'] = lang('Users');
        $this->load->admin_render('add_user', $data);
    }
    public function userDetail(){
    
        $userId  = decoding($this->uri->segment(3));

        $data['title']      = lang('Profile');
        $where              = array('id'=>$userId);
        $result             = $this->common_model->getsingle('users',$where);
        $data['userData']   = $result;
        $this->load->admin_render('userDetail', $data, '');
    } 
    public function changePassword(){
        
        $userId             = decoding($this->uri->segment(3));
        $data['title']      = lang('Change_password');
        $where              = array('id'=>$userId);
        $result             = $this->common_model->getsingle('users',$where);
        $data['userData']   = $result;
        $this->load->admin_render('changePassword', $data, '');
    }   
}