<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Optionaldetail_model extends CI_Model
{
    private $_table = "optionaldetail";

    public $id_optional;
    public $id_package;
    // public $name;
    public $pax2;
    public $pax5;
    public $pax9;
    public $detail;
   
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_optional)
    {
        return $this->db->get_where($this->_table, ["id_optional" => $id_optional])->result();
    }

    public function getdeskripsi($id_package)
    {
        return $this->db->get_where($this->_table, ["id_package" => $id_package])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_optional= "";
        $this->id_package = $post["id_package"];
        // $this->name = $post["name"];
        $this->detail = $post["detail"];
        $this->pax2 = $post["pax2"];
        $this->pax5 = $post["pax5"];
        $this->pax9 = $post["pax9"];
        return $this->db->insert($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_optional= $post["id_optional"];
        $this->id_package = $post["id_package"];
        // $this->name = $post["name"];
        $this->detail = $post["detail"];
        $this->pax2 = $post["pax2"];
        $this->pax5 = $post["pax5"];
        $this->pax9 = $post["pax9"];
        return $this->db->update($this->_table, $this, array('id_optional' => $post['id_optional']));
    }

    public function getAllId()
    {
        return $this->db->select('id_optional,id_package')->get($this->_table)->result();
    }

}