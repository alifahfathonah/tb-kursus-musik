<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('peran')) {
            if ($this->session->userdata('peran') == 2) {
                redirect('peserta');
            }
        } else {
            redirect('home');
        }
        $this->load->model('Home_model', 'home');
        $this->load->model('Admin_model', 'admin');
    }

    public function index()
    {
        $data['info']   = $this->home->getInfo();
        $data['misi']   = $this->home->getMisi();
        $data['fas']    = $this->home->getFas();
        $data['kursus'] = $this->home->getKursus();
        $data['jadwal'] = $this->home->getJadwal();

        $data['jml_peserta'] = $this->admin->countAllPeserta();
        $data['jml_kursus'] = $this->admin->countAllKursus();

        $data['title'] = 'Dashboard';

        $this->load->view('templates/home/header', $data);
        $this->load->view('admin/navbar');
        $this->load->view('admin/index');
        $this->load->view('templates/home/footer');
    }

    public function peserta()
    {
        $data['info']   = $this->home->getInfo();
        $data['misi']   = $this->home->getMisi();
        $data['fas']    = $this->home->getFas();
        $data['kursus'] = $this->home->getKursus();
        $data['jadwal'] = $this->home->getJadwal();
        $data['peserta'] = $this->admin->getAllPeserta();
        $data['title'] = 'Peserta';

        $this->load->view('templates/home/header', $data);
        $this->load->view('admin/navbar');
        $this->load->view('admin/peserta');
        $this->load->view('templates/home/footer');
    }

    public function cetakpeserta()
    {
        $data['info']   = $this->home->getInfo();
        $data['misi']   = $this->home->getMisi();
        $data['fas']    = $this->home->getFas();
        $data['kursus'] = $this->home->getKursus();
        $data['jadwal'] = $this->home->getJadwal();
        $data['title']  = 'Profil';
        $data['user']   = $this->admin->getAllPeserta();

        $this->load->view('templates/home/header', $data);
        $this->load->view('admin/cetakpeserta');
    }

    public function cetakkursus()
    {
        $data['info']   = $this->home->getInfo();
        $data['misi']   = $this->home->getMisi();
        $data['fas']    = $this->home->getFas();
        $data['kursus'] = $this->home->getKursus();
        $data['jadwal'] = $this->home->getJadwal();
        $data['title']  = 'Profil';
        $data['user']   = $this->admin->getAllPeserta();

        $this->load->view('templates/home/header', $data);
        $this->load->view('admin/cetakkursus');
    }

    public function pesertahapus($id_user)
    {
        if (!$id_user) {
            redirect('admin/peserta');
        }

        $user = $this->admin->getPeserta($id_user);

        unlink(FCPATH . "assets/img/profile/" . $user['foto']);

        $this->session->set_flashdata('pesan', '<script>
        $(document).ready(function() {
            M.toast({
                html: "' . $user['nama'] . ' telah dikeluarkan!"
            })
        });
        </script>');

        $this->db->where('email', $user['email']);
        $this->db->delete('peserta');

        $this->db->where('email', $user['email']);
        $this->db->delete('user');

        redirect('admin/peserta');
    }

    public function setting()
    {
        $data['info']   = $this->home->getInfo();
        $data['misi']   = $this->home->getMisi();
        $data['fas']    = $this->home->getFas();
        $data['kursus'] = $this->home->getKursus();
        $data['jadwal'] = $this->home->getJadwal();
        $data['warna']  = $this->admin->getWarna();

        $data['title'] = 'Pengaturan';

        $this->load->view('templates/home/header', $data);
        $this->load->view('admin/navbar');
        $this->load->view('admin/setting');
        $this->load->view('templates/home/footer');
    }

    public function basicperbarui()
    {
        if (!$this->input->post('nama')) {
            redirect('admin/setting');
        }

        $info           = $this->home->getInfo();

        $id             = $this->input->post('id');

        $nama           = $this->input->post('nama');
        $warna          = $this->input->post('warna');
        $alamat         = $this->input->post('alamat');
        $telepon        = $this->input->post('telepon');
        $wa             = $this->input->post('wa');
        $facebook       = $this->input->post('facebook');
        $website        = $this->input->post('website');
        $instagram      = $this->input->post('instagram');
        $visi           = $this->input->post('visi');

        $upload_image = $_FILES['foto']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/logo/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $old_foto = $info['ikon'];

                unlink(FCPATH . "assets/img/logo/" . $old_foto);

                $new_foto = $this->upload->data('file_name');

                $this->db->set('ikon', $new_foto);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->set('tema', $nama);
        $this->db->set('id_warna', $warna);
        $this->db->set('alamat', $alamat);
        $this->db->set('visi', $visi);
        $this->db->set('telepon', $telepon);
        $this->db->set('website', $website);
        $this->db->set('facebook', $facebook);
        $this->db->set('instagram', $instagram);
        $this->db->set('whatsapp', $wa);
        $this->db->where('id', $id);
        $this->db->update('info');

        $this->session->set_flashdata('pesan', '<script>
            $(document).ready(function() {
                M.toast({
                    html: "Basic Info berhasil diperbarui!"
                })
            });
            </script>');
        redirect('admin/setting');
    }

    public function fasperbarui()
    {
        if (!$this->input->post('nama')) {
            redirect('admin/setting');
        }

        $id             = $this->input->post('id_fasilitas');
        $fas            = $this->input->post('nama');
        $gambar         = $this->input->post('gambar');

        $this->db->set('fasilitas', $fas);
        $this->db->set('gambar', $gambar);

        $this->db->where('id_fasilitas', $id);
        $this->db->update('fasilitas');

        $this->session->set_flashdata('pesan', '<script>
            $(document).ready(function() {
                M.toast({
                    html: "Fasilitas berhasil diperbarui!"
                })
            });
            </script>');
        redirect('admin/setting');
    }

    public function misiperbarui()
    {
        if (!$this->input->post('nama')) {
            redirect('admin/setting');
        }

        $id             = $this->input->post('id_misi');
        $misi           = $this->input->post('nama');
        $gambar         = $this->input->post('gambar');

        $this->db->set('misi', $misi);
        $this->db->set('gambar', $gambar);

        $this->db->where('id_misi', $id);
        $this->db->update('misi');

        $this->session->set_flashdata('pesan', '<script>
            $(document).ready(function() {
                M.toast({
                    html: "Misi berhasil diperbarui!"
                })
            });
            </script>');
        redirect('admin/setting');
    }
}
