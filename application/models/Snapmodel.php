<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Snapmodel extends CI_Model
{
    public function insertData($data)
    {
        return $this->db->insert('tbl_requesttransaksi', $data);
    }

    public function updateData($data, $order_id)
    {
        $this->db->set('transaction_status', $data['transaction_status']);
        $this->db->set('status_message', $data['status_message']);
        $this->db->where('order_id', $order_id);
        $this->db->update('tbl_requesttransaksi');
        return true;
    }
}

/* End of file Snapmodel.php */
