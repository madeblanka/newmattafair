<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule4d_model extends CI_Model
{
    private $_table = "schedule4d";

    public $id_schedule4d;
    public $kategori;
    public $day1;
    public $activity1;
    public $day2;
    public $activity2;
    public $day4;
    public $activity4;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_schedule4d)
    {
        return $this->db->get_where($this->_table, ["id_schedule4d" => $id_schedule4d])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_schedule4d= $post["id_schedule4d"];
        $this->kategori = $post["kategori"];
        $this->day1 = $post["day1"];
        $this->activity1 = $post["activity1"];
        $this->day2 = $post["day2"];
        $this->activity2 = $post["activity2"];
        $this->day4 = $post["day4"];
        $this->activity4 = $post["activity4"];
        return $this->db->insert($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_schedule4d= $post["id_schedule4d"];
        $this->kategori = $post["kategori"];
        $this->day1 = $post["day1"];
        $this->activity1 = $post["activity1"];
        $this->day2 = $post["day2"];
        $this->activity2 = $post["activity2"];
        $this->day4 = $post["day4"];
        $this->activity4 = $post["activity4"];
        return $this->db->update($this->_table, $this, array('id_schedule4d' => $post['id_schedule4d']));
    }

    public function getAllId()
    {
        return $this->db->select('id_schedule4d,day1')->get($this->_table)->result();
    }

    public function getfneAsc()
    {
        $this->db->select('*');
        $this->db->from('package');
        $this->db->where('kategori','Free and Easy');
        $this->db->order_by('id_schedule4d ASC');
        return $this->db->get()->result();
    }
}