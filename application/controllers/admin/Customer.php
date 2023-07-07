<?php if (!defined('BASEPATH')) exit('No direct script acces allowed');
class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //digunakan untuk memastikan bahwa halaman ini dapat diakses jika session bernilai TRUE
        if ($this->session->userdata("login_status") == FALSE) {
            $this->session->set_flashdata("message", "acces denied");
            redirect("admin/login", "refresh");
        }
    }

    // 1. fungsi untuk menampilkan data dari database
    public function index()
    {
        $data['judul'] = 'DATA CUSTOMER';

        //ambil data dari database tabel customer
        //load customer_model
        $data['hasil'] = $this->customer_model->get_all();

        //load file view
        $tmp['konten'] = $this->load->view('admin/customer/home', $data, TRUE);
        $this->load->view('admin/template', $tmp);
    }

    //2. fungsi untuk tambah data
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->form_validation->set_rules('customer_name', 'Nama Customer', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $data['err'] = validation_errors();
                $tmp['konten'] = $this->load->view("admin/customer/add", $data, TRUE);
            } else {

                $aksi = $this->customer_model->add();
                if ($aksi) {
                    $this->session->set_flashdata("message", 'Registrasi Berhasil');
                    redirect('login', 'refresh');
                } else {
                    $this->session->set_flashdata("message", 'gagal menyimpan data baru');
                    redirect('admin/customer/add', 'refresh');
                }
            }
        }
        $data['judul'] = "TAMBAH DATA CUSTOMER";

        //load template
        $tmp['konten'] = $this->load->view("admin/customer/add", $data, TRUE);
        $this->load->view("admin/template", $tmp);
    }

    //3. fungsi untuk edit data
    public function edit($id = 0)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data_customer = $this->customer_model->get_detail_by_id($id);
            if (count($data_customer) > 0) {
                $aksi = $this->customer_model->update_by_admin($id);
                if ($aksi) {
                    $this->session->set_flashdata("message", 'data berhasil disimpan');
                    redirect('admin/customer', 'refresh');
                } else {
                    $this->session->set_flashdata("message", 'gagal mengubah data');
                    redirect('admin/customer/edit/' . $id, 'refresh');
                }
            } else {
                $this->session->set_flashdata("message", 'data gagal diedit karena tidak ada data');
                redirect('admin/customer/edit/' . $id, 'refresh');
            }
        } else {
            $data_customer = $this->customer_model->get_detail_by_id($id);
            $data['judul'] = "Edit Data Customer " . $data_customer['CUSTOMER_NAME'];
            $data['hasil'] = $this->customer_model->get_detail_by_id($id);


            //load template
            $tmp['konten'] = $this->load->view("admin/customer/edit", $data, TRUE);
            $this->load->view("admin/template", $tmp);
        }
    }

    //4. fungsi untuk hapus data
    public function delete($id = 0)
    {
        $data_customer = $this->customer_model->get_detail_by_id($id);
        if (count($data_customer) > 0) {
            //hapus dari database
            $aksi = $this->customer_model->delete($id);

            if ($aksi) {
                //jika query berhasil
                $this->session->set_flashdata("message", 'data berhasil dihapus');
                redirect('admin/customer', 'refresh');
            } else {
                //jika query gagal
                $this->session->set_flashdata("message", 'data gagal dihapus karena gagal query');
                redirect('admin/customer', 'refresh');
            }
        } else {
            //jika tidak ditemukan data
            $this->session->set_flashdata("message", 'data gagal dihapus karena tidak ada datanya');
            redirect('admin/customer', 'refresh');
        }
    }
}
