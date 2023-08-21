<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Detailbooked_model extends CI_Model
{
    private $_table = "detailbooked";

    public $id_booked;
    public $id_package;
    public $adult;
    public $child;
    public $price;
    public $total_price;
    public $created_at;
    public $updated_at;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_booked)
    {
        return $this->db->get_where($this->_table, ["id_booked" => $id_booked])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_package = $post["id_package"];
        $this->adult = $post["adult"];
        $this->child = $post["child"];
        $this->price = $post["price"];
        $this->total_price = $post['price'] * $post['adult'] + ((0.85*$post["price"])*$post['child']);
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = "";
        return $this->db->insert_batch($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id_booked = $post["id_booked"];
        $this->id_room = $post["id_room"];
        $this->id_tour = $post["id_tour"];
        $this->id_additional = $post["id_additional"];
        $this->id_hoteltour = $post["id_hoteltour"];
        $this->person = $post["person"];
        $this->datebook = $post["datebook"];
        $this->checkin = $post["checkin"];
        $this->checkout = $post["checkout"];
        $this->price = $post["price"];
        $this->qty = $post["qty"];
        $this->total_price = $post["total_price"];
        $this->created_at = $post["created_at"];
        $this->updated_at = date('Y-m-d H:i:s');
        return $this->db->update($this->_table, $this, array('id_booked' => $post['id_booked']));
    }

    function create_booked($id_package,$adult,$child,$price,$total_price,$created_at,$updated_at){
        $this->db->trans_start();
            //INSERT TO PACKAGE
            $data  = array(
			'id_package'=>$id_package,  // Ambil dan set data id_tour sesuai index array dari $index
			'adult'=>$adult, 
			'child'=>$child, // Ambil dan set data telepon sesuai index array dari $index
            'price'=>$price,
            'total_price'=>$total_price,
            'created_at'=>$created_at,
            'updated_at'=>$updated_at,
            );

            $array = [];
            for ($i = 0; $i < count($data['id_package']); $i++) {
              $array[] = array(
                'id_package' => $data['id_package'],
                'adult' => $data['adult'][$i],
                'child' => $data['child'][$i],
                'price' => $data['price'][$i],
                'total_price' => $data['total_price'][$i],
                'created_at' => $data['created_at'][$i],
                'updated_at' => $data['updated_at'][$i]
              );
            }
            //MULTIPLE INSERT TO DETAIL TABLE
            $this->db->insert_batch('detailbooked', $array);
        $this->db->trans_complete();
    }
 
}