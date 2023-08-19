<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule3d extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Schedule3d_model');
 		$this->load->library('form_validation');
	}

    public function index()
    {
        $data['schedule3d'] = $this->Schedule3d_model->getAll();

        $this->load->view('admin/schedule3d/index',$data);
    }
	
    public function formadd()
    {
        $this->load->view('admin/schedule3d/create');
    }

    public function save()
    {
        $this->Schedule3d_model->save();
        redirect(site_url('schedule3d/index'));
    }

    public function formedit()
    {

    }

    public function delete()
    {

    }
}