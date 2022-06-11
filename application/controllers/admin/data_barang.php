<?php
class Data_barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != 1) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>
            Anda belum login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['barang'] = $this->model_gedung->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_aksi()
    {
        $nama_gdg = $this->input->post('nama_gdg');
        $alamat_gdg = $this->input->post('alamat_gdg');
        $pemilik = $this->input->post('pemilik');
        $keterangan = $this->input->post('keterangan');
        $luas_gdg = $this->input->post('luas_gdg');
        $luas_tanah_gdg = $this->input->post('luas_tanah_gdg');
        $kapasitas = $this->input->post('kapasitas');
        $harga = $this->input->post('harga');
        $denah = $_FILES['denah']['name'];
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal di upload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        if ($denah = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('denah')) {
                echo "denah gagal di upload!";
            } else {
                $denah = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_gdg' => $nama_gdg,
            'alamat_gdg' => $alamat_gdg,
            'pemilik' => $pemilik,
            'keterangan' => $keterangan,
            'luas_gdg' => $luas_gdg,
            'luas_tanah_gdg' => $luas_tanah_gdg,
            'kapasitas' => $kapasitas,
            'harga' => $harga,
            'denah' => $denah,
            'gambar' => $gambar
        );
        $this->model_gedung->tambah_barang($data, 'tbl_gedung');
        redirect('admin/data_barang/index');
    }
    public function edit($id)
    {
        $where = array('id_gdg' => $id);
        $data['barang'] = $this->model_gedung->edit_barang($where, 'tbl_gedung')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_gdg');
        $nama_gdg = $this->input->post('nama_gdg');
        $alamat_gdg = $this->input->post('alamat_gdg');
        $pemilik = $this->input->post('pemilik');
        $keterangan = $this->input->post('keterangan');
        $luas_gdg = $this->input->post('luas_gdg');
        $luas_tanah_gdg = $this->input->post('luas_tanah_gdg');
        $kapasitas = $this->input->post('kapasitas');
        $harga = $this->input->post('harga');
        $denah = $_FILES['denah']['name'];
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal di upload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        if ($denah = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('denah')) {
                echo "denah gagal di upload!";
            } else {
                $denah = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_gdg' => $nama_gdg,
            'alamat_gdg' => $alamat_gdg,
            'pemilik' => $pemilik,
            'keterangan' => $keterangan,
            'luas_gdg' => $luas_gdg,
            'luas_tanah_gdg' => $luas_tanah_gdg,
            'kapasitas' => $kapasitas,
            'harga' => $harga,
            'denah' => $denah,
            'gambar' => $gambar
        );

        $where = array(
            'id_gdg' => $id
        );
        $this->model_gedung->update_data($where, $data, 'tbl_gedung');
        redirect('admin/data_barang/index');
    }

    public function hapus($id)
    {
        $where = array('id_gdg' => $id);
        $this->model_gedung->hapus_data($where, 'tbl_gedung');
        redirect('admin/data_barang/index');
    }
}
