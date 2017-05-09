<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model{
    public $table = ''; //name table
    public $idkey = '';// name id

    public function __construct(){
        parent::__construct();
    }
    // get database
    public function get_users(){
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0){
            return $query->result_array();
        }else{
            return false;
        }


    }

    public function submit()
    {
        $field = array();
        $field['user_name'] = $this->input->post('name');
        $field['user_email'] = $this->input->post('email');
        $field['user_country_id'] = $this->input->post('country');

        $this->db->insert($this->table, $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

        public function get_user_id($id){
            $this->db->where($this->idkey,$id);
            $query = $this->db->get($this->table);
            if($query->num_rows() > 0){
                return $query->row_array();
            }else{
                return false;
            }
        }

    public function update(){
        $up_date=array();
        $id= $this->input->post('id_hidden');
        $up_date['user_name'] = $this->input->post('name');
        $up_date['user_email'] = $this->input->post('email');
        $up_date['user_country_id'] = $this->input->post('country');

        $this->db->where($this->idkey,$id);
        $this->db->update($this->table, $up_date);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }

    public function delete($id){
        $this->db->where($this->idkey,$id);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}