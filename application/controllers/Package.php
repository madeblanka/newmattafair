<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Package_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $data['package'] = $this->Package_model->getAll();

        $this->load->view('admin/package/index',$data);
    }
	
    public function formadd()
    {
        $data['package'] = $this->Package_model->getAll();

        $this->load->view('admin/package/create',$data);
    }

    public function save()
    {
        $this->Package_model->save();
        redirect(site_url('package/index'));
    }

    public function formedit()
    {

    }

    public function delete()
    {

    }
}