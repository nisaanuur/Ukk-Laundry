<?php

class Transaksi extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelTransaksi');
    }

    public function index()
    {
        #Ambil data dari database
        $data["transaksi"]=$this->ModelTransaksi->getAll();
        $data["page"]="transaksi";
        $this->load->view("backend/index", $data);
    }

    public function save()
    {
        if (empty($this->input->post("id"))) {
            $data = [
                "id" => $this->input->post("id"),
                "id_member" => $this->input->post("id_member"),
                "tanggal" => $this->input->post("tanggal"),
                "batas_waktu" => $this->input->post("batas_waktu"),
                "tanggal_bayar" => $this->input->post("tanggal_bayar"),
                "status" => $this->input->post("status"),
                "dibayar" => $this->input->post("dibayar"),
                "id_user" => $this->input->post("id_user"),
            ];
            $this->ModelTransaksi->insert($data);
        } else {
            $data = [
                "id" => $this->input->post("id"),
                "id_member" => $this->input->post("id_member"),
                "tanggal" => $this->input->post("tanggal"),
                "batas_waktu" => $this->input->post("batas_waktu"),
                "tanggal_bayar" => $this->input->post("tanggal_bayar"),
                "status" => $this->input->post("status"),
                "dibayar" => $this->input->post("dibayar"),
                "id_user" => $this->input->post("id_user"),
            ];
            $id = $this->input->post("id");
            $this->ModelTransaksi->update($data, $id);
        }
        redirect(site_url("transaksi"));
    }
    public function delete($id)
    {
        $this->ModelTransaksi->delete($id);
        redirect(site_url("transaksi"));
    }
}
