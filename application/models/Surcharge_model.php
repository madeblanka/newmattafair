<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Surcharge_model extends CI_Model
{
    private $_table = "surcharge";

    public $id_surcharge;
    public $id_package;
    public $deskripsi;
    public $tgl;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_surcharge)
    {
        return $this->db->get_where($this->_table, ["id_surcharge" => $id_surcharge])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_surcharge= $post["id_surcharge"];
        $this->id_package = $post["id_package"];
        $this->deskripsi = $post["deskripsi"];
        $this->tgl = $post["tgl"];
        return $this->db->insert($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_surcharge= $post["id_surcharge"];
        $this->id_package = $post["id_package"];
        $this->deskripsi = $post["deskripsi"];
        $this->deskripsi = $post["deskripsi"];
        $this->tgl = $post["tgl"];
        return $this->db->update($this->_table, $this, array('id_surcharge' => $post['id_surcharge']));
    }

    public function getAllId()
    {
        return $this->db->select('id_surcharge,id_package')->get($this->_table)->result();
    }

}