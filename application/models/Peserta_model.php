<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta_model extends CI_Model
{
    public function getPeserta($email)
    {
        $query = "SELECT * FROM peserta, kursus, user WHERE peserta.id_kursus=kursus.id_kursus AND peserta.email = user.email AND peserta.email='$email'";
        return $this->db->query($query)->row_array();
    }
}
