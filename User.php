<?php

class User extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUser');
    }
    public function login()
    {
        return $this->load->view('backend/login');
    }
    public function proseslogin()
    {
        $username=$this->input->post("username");
        $password=md5($this->input->post("password"));
        $hasil=$this->ModelUser->login($username, $password);
        if ($hasil>0) {
            echo "Berhasil login";
        } else {
            redirect("user/login");
        }
        
    }
}
