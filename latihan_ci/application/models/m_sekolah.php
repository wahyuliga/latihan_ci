<?php
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class M_Sekolah extends CI_Model
{
    // get data dropdown
    function dd_sekolah()
    {
        // ambil data dari db
        $this->db->order_by('sekolah', 'asc');
        $result = $this->db->get('sekolah');
        
        // bikin array
        // please select berikut ini merupakan tambahan saja agar saat pertama
        // diload akan ditampilkan text please select.
        $dd[''] = 'Please Select';
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
            // tentukan value (sebelah kiri) dan labelnya (sebelah kanan)
                $dd[$row->id_sekolah] = $row->sekolah;
            }
        }
        return $dd;
    }
    function tampil_data(){
        $this->db->order_by('sekolah', 'asc');
        return $this->db->get('sekolah');
    }
    function input_data($dat,$table){
        $this->db->insert($table,$dat);
    }
}