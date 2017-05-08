<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index(){
        $data = array();

        $data['all_users'] = $this->users_model->get_users();

        $name = 'pages/index';
        $this->display_lib->user_page($data,$name);
    }

    public function add(){

        $data = array();
        $name = 'pages/add';
        $this->display_lib->user_page($data,$name);

    }
    public function submit(){
        $data = array();
        $result_btn = $this->users_model->submit();
        if($result_btn){
           $this->session->set_flashdata('success_msg','Added user successfully!!!');
       }else{
            $this->session->set_flashdata('error_msg','File to add record!!!');
       }
        redirect(base_url());

    }

    public function edit($id){
        $data = array();
        $data['user_edit'] = $this->users_model->get_user_id($id);
        $name = 'pages/edit';
        $this->display_lib->user_page($data,$name);
    }

    public function update(){
        $result = $this->users_model->update();
        if($result){
            $this->session->set_flashdata('success_msg','update user successfully!!!');
        }else{
            $this->session->set_flashdata('error_msg','File to update record!!!');
        }
        redirect(base_url());

    }

    public function delete($id){
        $result = $this->users_model->delete($id);
        if($result){
            $this->session->set_flashdata('success_msg','Deleted user successfully!!!');
        }else{
            $this->session->set_flashdata('error_msg','File to delete record!!!');
        }
        redirect(base_url());

    }

}