<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function getInfo()
    {
        $query = "SELECT * FROM info, warna WHERE info.id_warna = warna.id_warna";
        return $this->db->query($query)->row_array();
    }

    public function getJadwal()
    {
        $query = "SELECT * FROM jadwal, kursus WHERE jadwal.id_kursus = kursus.id_kursus";
        return $this->db->query($query)->result_array();
    }

    public function getMisi()
    {
        return $this->db->get('misi')->result_array();
    }

    public function getKursus()
    {
        return $this->db->get('kursus')->result_array();
    }

    public function getFas()
    {
        return $this->db->get('fasilitas')->result_array();
    }

}
