<?php

class Member extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelMember');
    }

    public function index()
    {
        #Ambil data dari database
        $data["member"]=$this->ModelMember->getAll();
        $data["page"]="member";
        $this->load->view("backend/index", $data);
    }

    public function save()
    {
        if (empty($this->input->post("id"))) {
            $data = [
                "id" => $this->input->post("id"),
                "nama_member" => $this->input->post("nama_member"),
                "alamat" => $this->input->post("alamat"),
                "jenis_kelamin" => $this->input->post("jenis_kelamin"),
                "telepon" => $this->input->post("telepon"),
            ];
            $this->ModelMember->insert($data);
        } else {
            $data = [
                "id" => $this->input->post("id"),
                "nama_member" => $this->input->post("nama_member"),
                "alamat" => $this->input->post("alamat"),
                "jenis_kelamin" => $this->input->post("jenis_kelamin"),
                "telepon" => $this->input->post("telepon"),
            ];
            $id = $this->input->post("id");
            $this->ModelMember->update($data, $id);
        }
        redirect(site_url("member"));
    }
    public function delete($id)
    {
        $this->ModelMember->delete($id);
        redirect(site_url("member"));
    }
}
