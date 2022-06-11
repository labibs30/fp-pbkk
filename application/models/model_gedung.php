<?php
class Model_gedung extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tbl_gedung');
    }
    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function find($id)
    {
        $result = $this->db->where('id_gdg', $id)
            ->limit(1)
            ->get('tbl_gedung');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    public function detail_gdg($id_gdg)
    {
        $result = $this->db->where('id_gdg', $id_gdg)->get('tbl_gedung');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }
}
