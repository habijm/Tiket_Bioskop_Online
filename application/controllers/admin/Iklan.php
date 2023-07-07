<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');
class Iklan extends CI_Controller
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
        $data['judul'] = 'IKLAN';

        //ambil data dari database tabel iklan
        //load iklan_model
        $data['hasil'] = $this->iklan_model->get_all();

        //load file view
        $tmp['konten'] = $this->load->view('admin/iklan/home',$data,TRUE);
        $this->load->view('admin/template',$tmp);
    }

    //2. fungsi untuk tambah data
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            //start upload file
            //konfigurasi
            $config['upload_path'] = './uploaded_files/';
            $config['allowed_types'] = 'jpg|jpeg|png|bpm|gif';
            $config['max_size'] = '5048';
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('iklan_image'))
            {
                //jika upload file gagal, tampilkan pesan error
                $data['err'] = $this->upload->display_errors();
                $tmp['konten'] = $this->load->view("admin/iklan/add",$data,TRUE);
                
            }
            else
            {
                //jika berhasil, maka ambil nama filenya
                $data_upload = $this->upload->data();
                $img_iklan = $data_upload['file_name'];

                $aksi = $this->iklan_model->add($img_iklan);
                if ($aksi) 
                {
                $this->session->set_flashdata("message","data berhasil disimpan");
                redirect('admin/iklan','refresh'); 
                }
                else
                {
                     $this->session->set_flashdata("message","gagal menyimpan data baru");
                    redirect('admin/iklan/add','refresh'); 
                }
            }
        }

        $data['judul'] = "TAMBAH IKLAN";

        //load template
        $tmp['konten'] = $this->load->view('admin/iklan/add',$data,TRUE);
        $this->load->view('admin/template',$tmp);
        
    }

    //3. fungsi untuk edit data
    public function edit($id=0)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST")
         {
            $data_iklan = $this->iklan_model->get_detail_by_id($id);
            if (count($data_iklan) > 0) 
            {
                    //jika terdapat data yang akan diedit
                    $file_lama = $data_iklan['IKLAN_IMAGE'];

                    if ($file_lama != "") 
                    {
                        //jika terdapat file gambar yang sebelumnya, maka hapus terlebih dahulu dari folder
                        unlink("uploaded_files/".$file_lama);

                        //setelah terhapus, baru lakukan update data ke database dengan data yang baru
                        //start upload file
                        //konfigurasi
                        $config['upload_path'] = './uploaded_files/';
                        $config['allowed_types'] = 'jpg|jpeg|png|bpm|gif';
                        $config['max_size'] = '5048';
                        $config['encrypt_name'] = TRUE;

                        $this->upload->initialize($config);

                        if (!$this->upload->do_upload('iklan_image'))
                        {
                            //jika upload file gagal, tampilkan pesan error
                            $this->session->set_flashdata("message",$this->upload->display_errors());
                            redirect('admin/iklan/edit/'.$id,'refresh'); 
                            
                        }
                        else
                        {
                            //jika berhasil, maka ambil nama filenya
                            $data_upload = $this->upload->data();
                            $img_iklan = $data_upload['file_name'];

                            $aksi = $this->iklan_model->update_by_admin($id,$img_iklan);
                            if ($aksi) 
                            {
                            $this->session->set_flashdata("message","data berhasil disimpan");
                            redirect('admin/iklan','refresh'); 
                            }
                            else
                            {
                                 $this->session->set_flashdata("message","gagal mengubah data");
                                redirect('admin/iklan/edit/'.$id,'refresh'); 
                            }
                        }
                    }
                    else{
                         //jika tidak terdapat file foto yang lama,maka langsung lakukan update data
                        //start upload file
                        //konfigurasi
                        $config['upload_path'] = './uploaded_files/';
                        $config['allowed_types'] = 'jpg|jpeg|png|bpm|gif';
                        $config['max_size'] = '5048';
                        $config['encrypt_name'] = TRUE;

                        $this->upload->initialize($config);

                        if (!$this->upload->do_upload('iklan_image'))
                        {
                            //jika upload file gagal, tampilkan pesan error
                            $this->session->set_flashdata("message",$this->upload->display_errors());
                            redirect('admin/iklan/edit/'.$id,'refresh'); 
                            
                        }
                        else
                        {
                            //jika berhasil, maka ambil nama filenya
                            $data_upload = $this->upload->data();
                            $img_iklan = $data_upload['file_name'];

                            $aksi = $this->iklan_model->update_by_admin($id,$img_iklan);
                            if ($aksi) 
                            {
                            $this->session->set_flashdata("message","data berhasil disimpan");
                            redirect('admin/iklan','refresh'); 
                            }
                            else
                            {
                                 $this->session->set_flashdata("message","gagal mengubah data");
                                redirect('admin/iklan/edit/'.$id,'refresh'); 
                            }
                        }
                    }
                     
             }
            else{
                //jika tidak terdapat data
                $this->session->set_flashdata("message","data gagal diedit karena tidak ada data");
                redirect('admin/iklan/edit/'.$id,'refresh');
               
            }
        }
        else
        {
                $data_iklan = $this->iklan_model->get_detail_by_id($id);
                $data['judul'] = "Edit Data Iklan ".$data_iklan['IKLAN_NAME'];
                $data['hasil'] = $this->iklan_model->get_detail_by_id($id);


                //load template
                $tmp['konten'] = $this->load->view("admin/iklan/edit",$data,TRUE);
                $this->load->view("admin/template",$tmp);
        }
   
          
    }

    //4. fungsi untuk hapus data
    public function delete($id=0)
    {
        //get data
        $data_iklan = $this->iklan_model->get_detail_by_id($id);
        if (count($data_iklan) > 0) 
        {
            $file_lama = $data_iklan['IKLAN_IMAGE'];

            if($file_lama != "")
            {
                //jika terdapat file gambar yang sebelumnya, maka hapus terlebih dahulu dari folder
                unlink("uploaded_files/".$file_lama);
        
                //hapus dari database
                $aksi = $this->iklan_model->delete($id);

                if ($aksi) 
                {
                    //jika query berhasil
                    $this->session->set_flashdata("message",'data berhasil dihapus');
                    redirect('admin/iklan','refresh'); 
                }
                else
                {
                    //jika query gagal
                    $this->session->set_flashdata("message",'data gagal dihapus karena gagal query');
                    redirect('admin/iklan','refresh');
                }

            }
            else
            { 
                //hapus data dari database
                $aksi = $this->iklan_model->delete($id);
                if($aksi)
                {
                    //jika query berhasil
                    $this->session->set_flashdata("message",'data berhasil dihapus');
                    redirect('admin/iklan','refresh'); 
                }
                else
                {
                    //jika query gagal
                    $this->session->set_flashdata("message",'data gagal dihapus karena gagal query');
                    redirect('admin/iklan','refresh');
                }
            }

                     
        }
        else
        {
            //jika tidak ditemukan data
            $this->session->set_flashdata("message",'data gagal dihapus karena tidak ada datanya');
            redirect('admin/iklan','refresh');
               
        }
        
    }

}