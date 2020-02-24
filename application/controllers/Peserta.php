<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('peran')) {
            if ($this->session->userdata('peran') == 1) {
                redirect('admin');
            }
        } else {
            redirect('home');
        }
        $this->load->model('Home_model', 'home');
        $this->load->model('Peserta_model', 'peserta');
    }

    public function index()
    {
        $data['info']   = $this->home->getInfo();
        $data['misi']   = $this->home->getMisi();
        $data['fas']    = $this->home->getFas();
        $data['kursus'] = $this->home->getKursus();
        $data['jadwal'] = $this->home->getJadwal();
        $data['title']  = 'Profil';

        $data['user']   = $this->peserta->getPeserta($this->session->userdata('email'));

        $this->load->view('templates/home/header', $data);
        $this->load->view('peserta/navbar');
        $this->load->view('peserta/index');
        $this->load->view('templates/home/footer');
    }

    public function edit()
    {
        $data['info']   = $this->home->getInfo();
        $data['misi']   = $this->home->getMisi();
        $data['fas']    = $this->home->getFas();
        $data['kursus'] = $this->home->getKursus();
        $data['jadwal'] = $this->home->getJadwal();
        $data['title']  = 'Edit';
        $data['user']   = $this->peserta->getPeserta($this->session->userdata('email'));

        $this->load->view('templates/home/header', $data);
        $this->load->view('peserta/navbar');
        $this->load->view('peserta/edit');
        $this->load->view('templates/home/footer');
    }

    public function perbarui()
    {
        if (!$this->input->post('nama')) {
            redirect('home');
        }
        $user   = $this->peserta->getPeserta($this->session->userdata('email'));

        $nama   = $this->input->post('nama');
        $kursus = $this->input->post('kursus');
        $alamat = $this->input->post('alamat');
        $jk     = $this->input->post('jk');
        $hp     = $this->input->post('nohp');
        $email  = $this->input->post('email');

        $upload_image = $_FILES['foto']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $old_foto = $user['foto'];

                unlink(FCPATH . "assets/img/profile/" . $old_foto);

                $new_foto = $this->upload->data('file_name');

                $this->db->set('foto', $new_foto);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->set('nama', $nama);
        $this->db->set('id_kursus', $kursus);
        $this->db->set('alamat', $alamat);
        $this->db->set('jk', $jk);
        $this->db->set('no_hp', $hp);
        $this->db->where('email', $email);
        $this->db->update('peserta');

        $this->db->set('nama', $nama);
        $this->db->where('email', $email);
        $this->db->update('user');

        $this->session->set_flashdata('pesan', '<script>
            $(document).ready(function() {
                M.toast({
                    html: "Data anda berhasil diperbarui!"
                })
            });
            </script>');
        redirect('peserta');
    }

    public function cetak()
    {
        $data['info']   = $this->home->getInfo();
        $data['misi']   = $this->home->getMisi();
        $data['fas']    = $this->home->getFas();
        $data['kursus'] = $this->home->getKursus();
        $data['jadwal'] = $this->home->getJadwal();
        $data['title']  = 'Profil';
        $data['user']   = $this->peserta->getPeserta($this->session->userdata('email'));

        $this->load->view('templates/home/header', $data);
        $this->load->view('peserta/cetak');
    }

    public function hapus()
    {
        $user   = $this->peserta->getPeserta($this->session->userdata('email'));
        unlink(FCPATH . "assets/img/profile/" . $user['foto']);

        $this->session->set_flashdata('pesan', '<script>
        $(document).ready(function() {
            M.toast({
                html: "' . $user['nama'] . ' telah mengundurkan diri!"
            })
        });
        </script>');

        $this->db->where('email', $user['email']);
        $this->db->delete('peserta');

        $this->db->where('email', $user['email']);
        $this->db->delete('user');

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('peran');

        redirect('home');
    }
}
