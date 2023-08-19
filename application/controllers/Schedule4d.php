<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule4d extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Schedule4d_model');
 		$this->load->library('form_validation');
	}

    public function index()
    {
        $data['schedule4d'] = $this->Schedule4d_model->getAll();

        $this->load->view('admin/schedule4d/index',$data);
    }
	
    public function formadd()
    {
        $this->load->view('admin/schedule4d/create');
    }

    public function save()
    {
        $this->Schedule4d_model->save();
        redirect(site_url('schedule4d/index'));
    }

    public function formedit()
    {

    }

    public function delete()
    {

    }
}