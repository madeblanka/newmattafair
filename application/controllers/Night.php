<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Night extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Night_model');
        $this->load->model('Package_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $data['night'] = $this->Night_model->getAll();

        $this->load->view('admin/night/index',$data);
    }
	
    public function formadd()
    {
        $data['package'] = $this->Package_model->getAll();

        $this->load->view('admin/night/create',$data);
    }

    public function save()
    {
        $this->Night_model->save();
        redirect(site_url('night/index'));
    }

    public function formedit()
    {

    }

    public function delete()
    {

    }
}