<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Package_model extends CI_Model
{
    private $_table = "package";

    public $id_package;
    public $name;
    public $image;
    public $kategori;
    public $startfrom;
    public $benefit1;
    public $benefit2;
    public $benefit3;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_package)
    {
        return $this->db->get_where($this->_table, ["id_package" => $id_package])->result();
    }

    public function getidbykategori($kategori)
    {
        return $this->db->get_where($this->_table, ["kategori" => str_replace("-"," ",$kategori)])->result();
    }

    public function optional()
    {
        $this->db->like('kategori','optional');
        $this->db->group_by('kategori');
        return $this->db->get('package')->result();
    }
    public function optionalfullday()
    {
        return $this->db->get_where($this->_table, ["kategori" => "Optional Fullday Tour"])->result();
    }

    public function optionalhalfday()
    {
        return $this->db->get_where($this->_table, ["kategori" => "Optional Halfday Tour"])->result();
    }

    public function optionaltransfer()
    {
        return $this->db->get_where($this->_table, ["kategori" => "Optional Transafer"])->result();
    }

    public function optionalcharter()
    {
        return $this->db->get_where($this->_table, ["kategori" => "Optional Charter"])->result();
    }

    public function kategorionly()
    {
        return $this->db->query("SELECT kategori,image, MIN(startfrom) startfrom FROM package GROUP BY kategori")->result();
        // var_dump($this->db->query("SELECT kategori, MIN(startfrom) startfrom FROM package GROUP BY kategori")->result());die();
        
    }

    public function getByOptional()
    {
        $this->db->select("id_package,name,image,kategori");
        $this->db->from("package");
        $this->db->like('kategori','optional');
        return $this->db->get()->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_package= "";
        $this->name = $post["name"];
        $this->image =  $this->_uploadImage();
        $this->kategori = $post["kategori"];
        $this->startfrom = $post["startfrom"];
        $this->benefit1 = $post["benefit1"];
        $this->benefit2 = $post["benefit2"];
        $this->benefit3 = $post["benefit3"];
        return $this->db->insert($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_package= $post["id_package"];
        $this->name = $post["name"];
        // $this->image =  $this->_uploadImage();
        $this->kategori = $post["kategori"];
        $this->startfrom = $post["startfrom"];
        $this->benefit1 = $post["benefit1"];
        $this->benefit2 = $post["benefit2"];
        $this->benefit3 = $post["benefit3"];
        return $this->db->update($this->_table, $this, array('id_package' => $post['id_package']));
    }

    public function getAllId()
    {
        return $this->db->select('id_package,name,kategori')->get($this->_table)->result();
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './package/';
        $config['allowed_types']        = 'jpg|png|jpeg|webp';
        $config['file_name']            = $this->name.' - '.$this->kategori;
        $config['overwrite']			= true;
        $config['max_size']             = 2048; // 1MB
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