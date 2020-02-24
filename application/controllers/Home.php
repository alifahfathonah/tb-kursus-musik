<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model', 'home');
    }

    public function index()
    {
        $data['info'] = $this->home->getInfo();
        $data['misi'] = $this->home->getMisi();
        $data['fas'] = $this->home->getFas();
        $data['kursus'] = $this->home->getKursus();
        $data['jadwal'] = $this->home->getJadwal();

        $this->load->view('templates/home/header', $data);
        $this->load->view('templates/home/navbar');
        $this->load->view('home/index');
        $this->load->view('templates/home/footer');
    }

    public function login()
    {
        if (!$this->input->post('email')) {
            redirect('home');
        }
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($pass, $user['sandi'])) {
                $data = [
                    'email' => $user['email'],
                    'peran' => $user['peran']
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('pesan', '<script>
                $(document).ready(function() {
                    M.toast({
                        html: "Anda berhasil login, ' . $user['nama'] . '!"
                    })
                });
                </script>');
                if ($user['peran'] == 1) {
                    redirect('admin');
                } else {
                    redirect('peserta');
                }
            } else {
                $this->session->set_flashdata('pesan', '<script>
                $(document).ready(function() {
                    M.toast({
                        html: "Password tidak cocok!"
                    })
                });
                </script>');
                redirect('home');
            }
        } else {
            $this->session->set_flashdata('pesan', '<script>
            $(document).ready(function() {
                M.toast({
                    html: "' . $email . ' tidak terdaftar!"
                })
            });
            </script>');
            redirect('home');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('peran');


        $this->session->set_flashdata('pesan', '<script>
        $(document).ready(function() {
            M.toast({
                html: "Anda telah logout!"
            })
        });
        </script>');

        redirect('home');
    }

    public function daftar()
    {
        if (!$this->input->post('nama')) {
            redirect('home');
        }
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
                $foto = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data = [
            'nama' => $nama,
            'id_kursus' => $kursus,
            'alamat' => $alamat,
            'jk' => $jk,
            'no_hp' => $hp,
            'email' => $email,
            'foto' => $foto
        ];
        $data_user = [
            'nama' => $nama,
            'email' => $email,
            'sandi' => '$2y$10$5rdEgr3URb.KISk2hQxlW.GIe6CuPbiI7Qcaw5wBnXSnidkw3oBcm',
            'peran' => 2
        ];
        if ($this->db->insert('peserta', $data) && $this->db->insert('user', $data_user)) {
            $this->session->set_flashdata('pesan', '<script>
            $(document).ready(function() {
                M.toast({
                    html: "' . $nama . ' berhasil mendaftar! Password default anda adalah: <b>admin</b>"
                })
            });
            </script>');
            redirect('home');
        }
    }
}
