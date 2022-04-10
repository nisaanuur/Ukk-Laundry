<?php

class Paket extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelPaket');
    }

    public function index()
    {
        #Ambil data dari database
        $data["paket"]=$this->ModelPaket->getAll();
        $data["page"]="paket";
        $this->load->view("backend/index", $data);
    }

    public function save()
    {
        if (empty($this->input->post("id"))) {
            $data = [
                "id" => $this->input->post("id"),
                "nama_paket" => $this->input->post("nama_paket"),
                "harga" => $this->input->post("harga"),
            ];
            $this->ModelPaket->insert($data);
        } else {
            $data = [
                "nama_paket" => $this->input->post("nama_paket"),
                "harga" => $this->input->post("harga"),
                
            ];
            $id = $this->input->post("id");
            $this->ModelPaket->update($data, $id);
        }
        redirect(site_url("paket"));
    }
    public function delete($id)
    {
        $this->ModelPaket->delete($id);
        redirect(site_url("paket"));
    }
}
