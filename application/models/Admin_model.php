<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getAllPeserta()
    {
        $query = "SELECT * FROM peserta, kursus, user WHERE peserta.id_kursus=kursus.id_kursus AND peserta.email = user.email AND user.peran = 2";
        return $this->db->query($query)->result_array();
    }

    public function countAllPeserta()
    {
        return $this->db->get('peserta')->num_rows();
    }

    public function countAllKursus()
    {
        return $this->db->get('kursus')->num_rows();
    }

    public function getPeserta($id_user)
    {
        $query = "SELECT * FROM peserta, kursus, user WHERE peserta.id_kursus=kursus.id_kursus AND peserta.email = user.email AND user.id_user='$id_user'";
        return $this->db->query($query)->row_array();
    }

    public function getWarna()
    {
        return $this->db->get('warna')->result_array();
    }
}
