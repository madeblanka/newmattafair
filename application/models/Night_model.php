<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Night_model extends CI_Model
{
    private $_table = "night";

    public $id_night;
    public $id_package;
    public $image;
    public $threeday2pax;
    public $threeday5pax;
    public $threeday9pax;
    public $fourday2pax;
    public $fourday5pax;
    public $fourday9pax;
    public $extendedt1;
    public $extendedt2;
    public $extendedt3;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_night)
    {
        return $this->db->get_where($this->_table, ["id_night" => $id_night])->result();
    }
    
    public function get3d($a)
    {
        $data = get_object_vars($a[0]);
        $id_package = $data['id_package'];
        // var_dump($a['benefit2'],$a->benefit2);die();
        return $this->db->query("SELECT id_night,id_package,image,threeday2pax,threeday5pax,threeday9pax FROM night where id_package = $id_package ")->result();
    }

    public function get4d()
    {
        return $this->db->query("SELECT id_night,id_package,image,fourday2pax,fourday5pax,fourday9pax FROM night order by id_package")->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_night= "";
        $this->id_package = $post["id_package"];
        $this->image =  $this->_uploadImage();
        $this->threeday2pax = $post["threeday2pax"];
        $this->threeday5pax = $post["threeday5pax"];
        $this->threeday9pax = $post["threeday9pax"];
        $this->fourday2pax = $post["fourday2pax"];
        $this->fourday5pax = $post["fourday5pax"];
        $this->fourday9pax = $post["fourday9pax"];
        $this->extendedt1 = $post["extendedt1"];
        $this->extendedt2 = $post["extendedt2"];
        $this->extendedt3 = $post["extendedt3"];
        return $this->db->insert($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_night= $post["id_night"];
        $this->id_package = $post["id_package"];
        $this->image = $post["image"];
        $this->threeday2pax = $post["threeday2pax"];
        $this->threeday5pax = $post["threeday5pax"];
        $this->threeday9pax = $post["threeday9pax"];
        $this->fourday2pax = $post["fourday2pax"];
        $this->fourday5pax = $post["fourday5pax"];
        $this->fourday9pax = $post["fourday9pax"];
        $this->extendedt1 = $post["extendedt1"];
        $this->extendedt2 = $post["extendedt2"];
        $this->extendedt3 = $post["extendedt3"];
        return $this->db->update($this->_table, $this, array('id_night' => $post['id_night']));
    }

    public function getAllId()
    {
        return $this->db->select('id_night,id_package')->get($this->_table)->result();
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './night/';
        $config['allowed_types']        = 'jpg|png|jpeg|webp';
        $config['file_name']            = $this->id_package.'-'.$this->threeday2pax;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "defaultimage.jpg";
    }

    private function _deleteImage($id_hotel)
    {
      $additional = $this->getById($id_hotel);

      if ($additional->image != "default.jpg")
      {
	         $filename = explode(".", $additional->image)[0];
		       return array_map('unlink', glob(FCPATH."hotel/$filename.*"));
      }

    }
}