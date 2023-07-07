<?php 
class Theater_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // 1. fungsi untuk menampilkan semua data 
    function get_all(){
        $data = array();
        $this->db->select('*');
        $this->db->order_by('NAMA_THEATER ASC');
        $Q = $this->db->get('THEATER');

        if ($Q->num_rows() > 0)
        {
            foreach ($Q->result_array() as $row)
            {
                $data[] = $row;
            }
        }

        $Q->free_result();
        return $data;
    }

    //2. fungsi untuk melihat detail berdasarkan id
    function get_detail_by_id($id){
        $data = array();
        $this->db->select('*');
        $this->db->where('THEATER.THEATER_ID',$id);
        $Q = $this->db->get('THEATER');

        if ($Q->num_rows() > 0)
        {
            $data = $Q->row_array();
        }

        $Q->free_result();
        return $data;

    }

    //3. fungsi untuk tambah data
    function add($img){
        $action = $this->db->query("INSERT INTO THEATER (THEATER_ID, NAMA_THEATER, DAERAH, ALAMAT, PHONE, KURSI_IMAGE) VALUES (theater_id_seq.NEXTVAL,'".$this->input->post('nama_theater')."', '".$this->input->post('daerah')."','".$this->input->post('alamat')."','".$this->input->post('phone')."','".$img."')");

            return $action;
    }

    //4. fungsi untuk ubah data
    function update_by_admin($id,$img)
    {

        $data = array(
            'NAMA_THEATER' => $this->input->post('nama_theater'),
            'DAERAH' => $this->input->post('daerah'),
            'ALAMAT' => $this->input->post('alamat'),
            'PHONE' => $this->input->post('phone'),
            'KURSI_IMAGE' => "$img"
        );

        $this->db->where('THEATER_ID',$id);
        $action = $this->db->update('THEATER', $data);

        return $action;
    }

     //5. fungsi untuk hapus data
     function delete($id){
        $this->db->where('THEATER_ID', $id);
        $action = $this->db->delete('THEATER');
        return $action;
    }

     function get_drop_down(){
        $data = array();
        $this->db->select('*');
        $this->db->order_by('NAMA_THEATER ASC');
        $Q = $this->db->get('THEATER');

        if ($Q->num_rows() > 0)
        {

            $data[""] = "== Silahkan pilih ==";
            foreach ($Q->result_array() as $row)
            {
                $data[$row['THEATER_ID']] = $row['NAMA_THEATER'];
            }
        }
        else
        {
            $data[""] = "Data Not Available";
        }

        $Q->free_result();
        return $data;
    }

   

}