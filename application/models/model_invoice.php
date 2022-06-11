<?php

class Model_invoice extends CI_Model
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $tanggal = $this->input->post('tanggal');

        $invoice = array(
            'nama'      => $nama,
            'alamat'    => $alamat,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar'  => date('Y-m-d H:i:s', mktime(
                date('H'),
                date('i'),
                date('s'),
                date('m'),
                date('d') + 7,
                date('Y')
            )),
        );
        $this->db->insert('tbl_invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data = array(
                'id_invoice'  => $id_invoice,
                'id_gdg'      => $item['id'],
                'nama_gdg'    => $item['name'],
                'jumlah'      => $item['qty'],
                'harga'       => $item['price'],
                'tgl_booking' => $tanggal
            );
            $this->db->insert('tbl_pesanan', $data);
        }
        return TRUE;
    }
    public function tampil_data()
    {
        $result = $this->db->get('tbl_invoice');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }

    public function ambil_id_invoice($id_invoice)
    {

        $result = $this->db->where('id', $id_invoice)->limit(1)->get('tbl_invoice');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function ambil_id_pesanan($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->limit(1)->get('tbl_pesanan');

        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return array();
        }
    }
}
