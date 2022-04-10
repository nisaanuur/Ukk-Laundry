<?php
class ModelMember extends CI_Model
{
    public function __construct() {
        parent::__construct();
        $this->table = "member";
    }

    public function getAll()
    {
        return $this->db->get($this->table);
    }

    public function getOne($id)
    {
        return $this->db->get_where($this->table,["id" => $id])->first_row();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id)
    {
        $this->db->where("id", $id);
        $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where("id", $id);
        $this->db->delete($this->table);
    }
}

?>