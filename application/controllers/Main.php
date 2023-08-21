<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('Booked_model');
        $this->load->model('Detailbooked_model');
        $this->load->model('Night_model');
        $this->load->model('Package_model');
        $this->load->model('Optionaldetail_model');
        $this->load->model('Schedule3d_model');
        $this->load->model('Schedule4d_model');
        $this->load->model('Surcharge_model');
		$this->load->library('form_validation');
	}

    public function index()
    {
        $data['package'] = $this->Package_model->kategorionly();
        // $data['hoteltour'] = $this->Hoteltour_model->getAll();
        // $data['freeneasy'] = $this->Package_model->getfneAsc();
        $this->load->view('users/index',$data);
    }
	
    public function list3d($kategori)
    {
        $data['package'] = $this->Package_model->getidbykategori($kategori);
        $data['optional'] = $this->Package_model->optional();
        $data['fullday'] = $this->Package_model->optionalfullday();
        $data['halfday'] = $this->Package_model->optionalhalfday();
        $data['transfer'] = $this->Package_model->optionaltransfer();
        $data['charter'] = $this->Package_model->optionalcharter();
        // $data['image'] = $this->Image_model->getbyIdpackage($id_package);
        // var_dump($data['optional']);die();
        $this->load->view('users/detail_hotel3D2N',$data);
    }

    public function formguest()
    {
        // booked
        $id_booked="";
        $name = $this->input->post('name',TRUE);
        $address = $this->input->post('address',TRUE);
        $zipcode = $this->input->post('zipcode',TRUE);
        $state = $this->input->post('state',TRUE);
        $country = $this->input->post('country',TRUE);
        $email = $this->input->post('email',TRUE);
        $mobilenumber = $this->input->post('mobilenumber',TRUE);
        $created_at = date("Y-m-d H:i:s");
        $updated_at ="";

        // detail booked
        $adultarray = $this->input->post('adult',TRUE);
        $childarray = $this->input->post('child',TRUE);
        $child = array_filter($childarray, 'strlen');
        $adult = array_filter($adultarray, 'strlen');

        $id_package = $this->input->post('id_package',TRUE);
        
        $pax2 = $this->input->post('pax2',TRUE);
        $pax5 = $this->input->post('pax5',TRUE);
        $pax9 = $this->input->post('pax9',TRUE);
        
        // var_dump($adultarray,$pax2);die();

        $total_price = $adult ;
        
        $this->Booked_model->create_booked($name,$address,$zipcode,$state,$country,$email,$mobilenumber,$created_at,$updated_at);
        $this->Detailbooked_model->create_booked($id_package,$adult,$child,$price,$total_price,$created_at,$updated_at);
    }

    public function cekip()
    {

        // $data['browser'] = $this->agent->browser();
      
        // $data['browser_version'] = $this->agent->version();
      
        // $data['os'] = $this->agent->platform();
      
        // $data['ip_address'] = $this->input->ip_address();
      
        $this->load->view('user/userdetail');
    }

    public function hotelall()
    {
        // $data['hotel'] = $this->Hotel_model->getAll();
        $this->load->view('user/full_hotel',$data);
    }

    public function tourall()
    {
        // $data['tour'] = $this->Tour_model->getAll();
        $this->load->view('user/full_tour',$data);
    }

    public function hoteltourall()
    {
        // $data['hoteltour'] = $this->Hoteltour_model->getAll();
        $this->load->view('user/full_tour',$data);
    }

    public function roomall($id_hotel)
    {
        // $data['room'] = $this->Room_model->getByIdhotel($id_hotel);
        $this->load->view('user/full_room',$data);
    }

    public function detailroom($id_room)
    {
        // $data['room'] = $this->Room_model->getById($id_room);
        // $data['image'] = $this->Image_model->getByIdroom($id_room);
        $this->load->view('user/detail_room',$data);
    }

    public function cart()
    {
        // $data['cart'] = $this->Cart_model->geBysessionuser($this->input->ip_address());
        $this->load->view('user/cart',$data);
    }

    public function deletecart($id_cart)
    {
        if (!isset($id_cart)) show_404();
        if ($this->Cart_model->delete($id_cart)) {
            redirect(site_url('main/cart'));
        }
    }

    public function checkout()
    {
        $kurs= 'https://booknpay.net/ver3/bnp20/htls/curmyr.php';
        $apiData = $this->curl->simple_get($kurs);
        $data['cart'] = $this->Cart_model->geBysessionuser($this->input->ip_address());
        $this->load->view('user/form_guest',$data,$apiData);
    }

    public function addcart()
    {
        // var_dump($this->Cart_model->save);die();
        $this->Cart_model->save();
        $this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('main/detailroom/1');
    }

    public function fullpayment()
    {
        $id_cart = $this->load->post('id_cart',TRUE);
        $sessionuser = $this->load->post('sessionuser',TRUE);
        $id_room = $this->load->post('id_room',TRUE);
        $id_tour = $this->load->post('id_tour',TRUE);
        $id_additional = $this->load->post('id_additional',TRUE);
        $id_hoteltour = $this->load->post('id_hoteltour',TRUE);
        $person = $this->load->post('person',TRUE);
        $adult = $this->load->post('adult',TRUE);
        $child = $this->load->post('child',TRUE);
        $datebook = $this->load->post('datebook',TRUE);
        $checkin = $this->load->post('checkin',TRUE);
        $checkout = $this->load->post('checkout',TRUE);
        $price = $this->load->post('price',TRUE);
        $qty = $this->load->post('qty',TRUE);
        $total_price = $this->load->post('total_price',TRUE);
        $created_at = $this->load->post('created_at',TRUE);
        $updated_at = $this->load->post('updated_at',TRUE);

        $this->Detailbooked_model->create_transaction($id_cart,$id_room,$id_tour,$id_additional,$id_hoteltour,$person,$adult,$child,$datebook,$checkin,$checkout,$price,$qty,$total_price,$created_at,$updated_at);
    }
}