u<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
class Komentar extends CI_Controller
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
        $data['judul'] = 'KOMENTAR PENGGUNA';

        //ambil data dari database tabel komentar
        //load komentar_model
        $data['hasil'] = $this->komentar_model->get_all();

        //load file view
        $tmp['konten'] = $this->load->view('admin/komentar/home',$data,TRUE);
        $this->load->view('admin/template',$tmp);
    }

    //2. fungsi untuk tambah data
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->form_validation->set_rules('komentar_name', 'Nama Pengomentar', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $data['err'] = validation_errors();
                $tmp['konten'] = $this->load->view("admin/komentar/add", $data, TRUE);
            } else {

                $aksi = $this->komentar_model->add();
                if ($aksi) {
                    $this->session->set_flashdata("message", 'Komentar berhasil');
                    redirect('home', 'refresh');
                } else {
                    $this->session->set_flashdata("message", 'Gagal megirim komentar');
                    redirect('admin/komentar/add', 'refresh');
                }
            }
        }
        $data['judul'] = "TAMBAH KOMENTAR";

        //load template
        $tmp['konten'] = $this->load->view("admin/komentar/add", $data, TRUE);
        $this->load->view("admin/template", $tmp);
        
    }

    //3. fungsi untuk edit data
    public function edit($id=0)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST")
         {
            $data_komentar = $this->komentar_model->get_detail_by_id($id);
            if (count($data_komentar) > 0) 
            {
                    //jika terdapat data yang akan diedit
                    $file_lama = $data_komentar['FOTO_PROFILE'];

                    if ($file_lama != "") 
                    {
                        //jika terdapat file gambar yang sebelumnya, maka hapus terlebih dahulu dari folder
                        unlink("uploaded_files/".$file_lama);

                        //setelah terhapus, baru lakukan update data ke database dengan data yang baru
                        //start upload file
                        //konfigurasi
                        $config['upload_path'] = './uploaded_files/';
                        $config['allowed_types'] = 'jpg|jpeg|png|bpm|gif';
                        $config['max_size'] = '2048';
                        $config['encrypt_name'] = TRUE;

                        $this->upload->initialize($config);

                        if (!$this->upload->do_upload('foto_profile'))
                        {
                            //jika upload file gagal, tampilkan pesan error
                            $this->session->set_flashdata("message",$this->upload->display_errors());
                            redirect('admin/komentar/edit/'.$id,'refresh'); 
                            
                        }
                        else
                        {
                            //jika berhasil, maka ambil nama filenya
                            $data_upload = $this->upload->data();
                            $img_komentar = $data_upload['file_name'];

                            $aksi = $this->komentar_model->update_by_admin($id,$img_komentar);
                            if ($aksi) 
                            {
                            $this->session->set_flashdata("message","data berhasil disimpan");
                            redirect('admin/komentar','refresh'); 
                            }
                            else
                            {
                                 $this->session->set_flashdata("message","gagal mengubah data");
                                redirect('admin/komentar/edit/'.$id,'refresh'); 
                            }
                        }
                    }
                    else{
                         //jika tidak terdapat file foto yang lama,maka langsung lakukan update data
                        //start upload file
                        //konfigurasi
                        $config['upload_path'] = './uploaded_files/';
                        $config['allowed_types'] = 'jpg|jpeg|png|bpm|gif';
                        $config['max_size'] = '2048';
                        $config['encrypt_name'] = TRUE;

                        $this->upload->initialize($config);

                        if (!$this->upload->do_upload('foto_profile'))
                        {
                            //jika upload file gagal, tampilkan pesan error
                            $this->session->set_flashdata("message",$this->upload->display_errors());
                            redirect('admin/komentar/edit/'.$id,'refresh'); 
                            
                        }
                        else
                        {
                            //jika berhasil, maka ambil nama filenya
                            $data_upload = $this->upload->data();
                            $img_komentar = $data_upload['file_name'];

                            $aksi = $this->komentar_model->update_by_admin($id,$img_komentar);
                            if ($aksi) 
                            {
                            $this->session->set_flashdata("message","data berhasil disimpan");
                            redirect('admin/komentar','refresh'); 
                            }
                            else
                            {
                                 $this->session->set_flashdata("message","gagal mengubah data");
                                redirect('admin/komentar/edit/'.$id,'refresh'); 
                            }
                        }
                    }
                     
             }
            else{
                //jika tidak terdapat data
                $this->session->set_flashdata("message","data gagal diedit karena tidak ada data");
                redirect('admin/komentar/edit/'.$id,'refresh');
               
            }
        }
        else
        {
                $data_komentar = $this->komentar_model->get_detail_by_id($id);
                $data['judul'] = "Edit Data komentar ".$data_komentar['KOMENTAR_NAME'];
                $data['hasil'] = $this->komentar_model->get_detail_by_id($id);


                //load template
                $tmp['konten'] = $this->load->view("admin/komentar/edit",$data,TRUE);
                $this->load->view("admin/template",$tmp);
        }
   
          
    }

    //4. fungsi untuk hapus data
    public function delete($id=0)
    {
        $data_komentar = $this->komentar_model->get_detail_by_id($id);
        if (count($data_komentar) > 0) 
        {
            //hapus dari database
            $aksi = $this->komentar_model->delete($id);

            if ($aksi) 
            {
                //jika query berhasil
                $this->session->set_flashdata("message",'data berhasil dihapus');
                redirect('admin/komentar','refresh'); 
            }
            else
            {
                //jika query gagal
                $this->session->set_flashdata("message",'data gagal dihapus karena gagal query');
                redirect('admin/komentar'.$id,'refresh');
            }
                     
        }
        else
        {
            //jika tidak ditemukan data
            $this->session->set_flashdata("message",'data gagal dihapus karena tidak ada datanya');
            redirect('admin/komentar','refresh');
               
        }
        
    }

}