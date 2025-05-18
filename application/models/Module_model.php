<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Module_model extends CI_Model
{

    public function get_module($table)
    {
        return $this->db->get($table);
    }
}
