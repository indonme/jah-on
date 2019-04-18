<?php

class M_login extends CI_Model(){

    public function check_user($username, $email, $password){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $this->db->where('email', $email);
        $this->db->where('password', $password);

        $check = $this->db->get();
        if($check->num_rows()>0){
            return $check->row();
        }else{
            return false;
        }
    }
}
?>