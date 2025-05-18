<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Destination_model extends CI_Model
{

    public function get_config($table)
    {
        return $this->db->get($table);
    }

    public function get_destination($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update($data, $table)
    {
        $this->db->update($table, $data);
    }

    public function delete($id_destination)
    {
        $this->db->where('id_destination', $id_destination);
        return $this->db->delete('mdestination');
    }
}
