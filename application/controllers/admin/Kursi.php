<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
class Kursi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //digunakan untuk memastikan bahwa halaman ini dapat diakses jika session bernilai TRUE
        if ( $this->session->userdata("login_status") == FALSE)
        {
            $this->session->set_flashdata("message","acces denied");
            redirect("admin/login", "refresh");
        }
    }

    // 1. fungsi untuk menampilkan data dari database
    public function index()
    {
      $data['judul'] = 'LAYOUT KURSI';

      //ambil data dari database tabel kursi
      //load kursi_model
      $data['hasil'] = $this->kursi_model->get_all();

      //load file view
      $tmp['konten'] = $this->load->view('admin/kursi/home',$data,TRUE);
      $this->load->view('admin/template',$tmp);
    }

    //2. fungsi untuk tambah data
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            $this->form_validation->set_rules('kursi_row', 'Baris', 'trim|required');

          if ($this->form_validation->run() == FALSE) {
              $data ['err'] = validation_errors();
              $tmp['konten'] = $this->load->view("admin/kursi/add",$data,TRUE);
          }
          else{

            $aksi = $this->kursi_model->add();
            if ($aksi) {
                $this->session->set_flashdata("message",'data berhasil disimpan');
                redirect('admin/kursi','refresh'); 
            }
            else{
                 $this->session->set_flashdata("message",'gagal menyimpan data baru');
                redirect('admin/kursi/add','refresh'); 
            }
           
          }
        }
        $data['judul'] = "TAMBAH DATA KURSI ";

        //load template
        $tmp['konten'] = $this->load->view("admin/kursi/add",$data,TRUE);
        $this->load->view("admin/template",$tmp);
    }

    //3. fungsi untuk edit data
    public function edit($id=0)
    {
         if ($_SERVER['REQUEST_METHOD'] == "POST")
         {
                $data_kursi = $this->kursi_model->get_detail_by_id($id);
                if (count($data_kursi) > 0) 
                {
                    $aksi = $this->kursi_model->update_by_admin($id);
                    if ($aksi) 
                    {
                        $this->session->set_flashdata("message",'data berhasil disimpan');
                        redirect('admin/kursi','refresh'); 
                    }
                    else{
                         $this->session->set_flashdata("message",'gagal mengubah data');
                        redirect('admin/kursi/edit/'.$id,'refresh');
                    }
                     
                }
                else{
                    $this->session->set_flashdata("message",'data gagal diedit karena tidak ada data');
                    redirect('admin/kursi/edit/'.$id,'refresh');
               
                }
        }
        else{
        $data_kursi = $this->kursi_model->get_detail_by_id($id);
        $data['judul'] = "Edit Data Kursi ".$data_kursi['KURSI_ROW'];
        $data['hasil'] = $this->kursi_model->get_detail_by_id($id);


        //load template
        $tmp['konten'] = $this->load->view("admin/kursi/edit",$data,TRUE);
        $this->load->view("admin/template",$tmp);
        }
          
    }

    //4. fungsi untuk hapus data
    public function delete($id=0)
    {
        $data_kursi = $this->kursi_model->get_detail_by_id($id);
        if (count($data_kursi) > 0) 
        {
            //hapus dari database
            $aksi = $this->kursi_model->delete($id);

            if ($aksi) 
            {
                //jika query berhasil
                $this->session->set_flashdata("message",'data berhasil dihapus');
                redirect('admin/kursi','refresh'); 
            }
            else
            {
                //jika query gagal
                $this->session->set_flashdata("message",'data gagal dihapus karena gagal query');
                redirect('admin/kursi'.$id,'refresh');
            }
                     
        }
        else
        {
            //jika tidak ditemukan data
            $this->session->set_flashdata("message",'data gagal dihapus karena tidak ada datanya');
            redirect('admin/kursi','refresh');
               
        }
    }

}