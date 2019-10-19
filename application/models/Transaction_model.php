<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Transaction_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    // Add wishlist to database
    public function addWish($id)
    { 
        $data = [
            'wishlist_id' => null,
            'user_id' => $this->session->userdata('user_id'),
            'product_id' => $id
        ];
        $this->db->insert('wishlist',$data);

        $data['Title'] = "Wishlist Success";
        $data['Type'] = "success";
        $data['Url'] = base_url('product/view/' . $id);
        $data['Desc'] = "Berhasil di tambah ke wishlist";
        $this->load->view('notif/Notif', $data);
    }

    // Order system
    public function order_system($input)
    {
        $data = [
            'order_id' => null,
            'oder_user_id' => $input['order_user_id'],
            'order_product_id' => $input['product_id'],
            'order_product_name' => $input['product_name'],
            'order_product_price' => $input['product_price'],
            'order_product_purchased' => $input['product_purchased'],
            'order_product_ongkir' => $input['product_ongkir'],
            'order_product_total' => $input['product_total'],
            'order_address_id' => $input['address'],
            'order_status' => 1,
            'month' => date('m') 
        ];

        $this->db->insert('order_list',$data);

        $data['Title'] = "Berhasil Dipesan";
        $data['Type'] = "success";
        $data['Url'] = base_url('product/view/'.$input['product_id']);
        $data['Desc'] = "Tunggu sesaat sampai admin merespon pesanan anda";
        $this->load->view('notif/Notif', $data);
    }

    // Change status to success
    public function order_success($id)
    {
        $data = ['order_status'=>3];

        $this->db->where('order_id', $id);
        $this->db->update('order_list', $data);
    }

    // Add review 
    public function addreview($input)
    {
        $data1 = [
            'ulasan_id' => null,
            'ulasan_range' => $input['range'],
            'ulasan_text' => $input['ulasan'],
            'ulasan_product_id' => $input['product_id']
        ];   

        $this->db->insert('ulasan',$data1);

        $data2 = [
            'order_status' => 4
        ];

        $this->db->where('order_id',$input['order_id']);
        $this->db->update('order_list',$data2);
    }
}