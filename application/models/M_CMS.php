<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_CMS extends CI_Model {

    public function get_hero() {
        $this->db->order_by('slot_number', 'ASC');
        return $this->db->get('tbl_hero')->result_array();
    }

    public function update_hero($slot_number, $data) {
        $this->db->where('slot_number', $slot_number);
        return $this->db->update('tbl_hero', $data);
    }

    public function get_features() {
        return $this->db->get('tbl_features')->result_array();
    }

    public function update_feature($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('tbl_features', $data);
    }

    public function get_banner() {
        return $this->db->get('tbl_banner')->row_array();
    }

    public function update_banner($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('tbl_banner', $data);
    }

    public function get_zigzag() {
        $this->db->order_by('id', 'ASC');
        return $this->db->get('tbl_zigzag')->result_array();
    }

    public function get_zigzag_by_id($id) {
        return $this->db->get_where('tbl_zigzag', ['id' => $id])->row_array();
    }

    public function insert_zigzag($data) {
        return $this->db->insert('tbl_zigzag', $data);
    }

    public function update_zigzag($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('tbl_zigzag', $data);
    }

    public function delete_zigzag($id) {
        $this->db->where('id', $id);
        return $this->db->delete('tbl_zigzag');
    }

}