<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Image_model');
        $this->load->model('Package_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
        $data['image'] = $this->Image_model->getAll();
		$this->load->view('admin/image/index',$data);
    }
    
    public function formadd()
    {
        $data['package'] = $this->Package_model->getAllId();
        $this->load->view('admin/image/create',$data);
    }

    public function adminsaveimage()
    {
        $image = $this->Image_model->save();
        redirect(site_url('image/adminindeximage'));
    }
}