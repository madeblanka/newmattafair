<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Optionaldetail extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Optionaldetail_model');
        $this->load->model('Package_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $data['optionaldetail'] = $this->Optionaldetail_model->getAll();

        $this->load->view('admin/optionaldetail/index',$data);
    }
	
    public function formadd()
    {
        $data['package'] = $this->Package_model
        
        ->getByOptional();

        $this->load->view('admin/optionaldetail/create',$data);
    }

    public function save()
    {
        $this->Optionaldetail_model->save();
        redirect(site_url('optionaldetail/index'));
    }

    public function formedit()
    {

    }

    public function delete()
    {

    }
}