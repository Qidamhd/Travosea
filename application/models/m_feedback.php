<?php
defined("BASEPATH") or exit("No direct script access allowed");
class M_feedback extends CI_Model
{
    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM packages");
        return $query->result();
    }
    public function save($data)
    {
        $simpan = $this->db->insert('feedback', $data);
        return $simpan;
    }
}
