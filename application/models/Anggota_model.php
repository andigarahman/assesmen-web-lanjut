<?php
class Anggota_model extends CI_Model
{
    public $table = 'anggota';

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
        //echo $this->db->last_query(); exit;
    }

    // get all data
    function get_all()
    {
        $this->db->order_by('id_anggota', 'DESC');
        return $this->db->get($this->table)->result();
    }

    function delete($id)
    {
        $this->db->where('id_anggota', $id);
        $this->db->delete($this->table);
    }    

    function get_by_id($id)
    {
        $this->db->where('id_anggota', $id);
        return $this->db->get($this->table)->row();
    }

        function update($id, $data)
    {
        $this->db->where('id_anggota', $id);
        $this->db->update($this->table, $data);
    }

    public function get_total_rows()
    {
        return $this->db->count_all('anggota');
    }
}