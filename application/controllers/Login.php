<?php

class Login extends CI_Controller{
    function __construct(){
        parent:: __construct();
    }


function index(){
    $this->load->view('v_Login');
}

function aksi(){
    $email = $this->input->post('email');
    $password = $this->input->post('password');
//    $check_user = $this->Model_login->check_user($email, $password);
}

}
?>