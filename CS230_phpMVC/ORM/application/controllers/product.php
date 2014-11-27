<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __contruct()
	{
		parent::__contruct();
	}

	public function index()
	{
		$product = new Item();
		$products['name'] = $product->get()->all_to_array();
		$this->load->view('display', $products);
	}

	public function add()
	{
		$product = new Item();
		$product->name = $this->input->post('name');
		$product->price = $this->input->post('price');
		$product->description = $this->input->post('description');
		$product->created_at = date('F d Y');
		$product->save();

		redirect('/');
	}

	public function delete($id)
	{
		$product = new Item();
		$product->WHERE('id', $id)->get();
		$product->delete();

		redirect('/');
	}

}