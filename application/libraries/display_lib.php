<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Display_lib
{
    public function user_page($data, $name)
    {
        $CI =& get_instance();

        $CI->load->view('pages/header_view');

        $CI->load->view($name . '_view', $data);

        $CI->load->view('footer_view');


    }
}