<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ecommerce extends CI_Controller 
{
	public function index()
	{
		if(!$this->session->userdata('cart'))
		{
			$cart = array(
								'total_items' => 0,
 									);
			$this->session->set_userdata('cart', $cart);
		}

		$this->load->model('ecommerce_model');
		$view_items['items'] = $this->ecommerce_model->get_all_items();

		$this->load->view('items', $view_items);
	
	}

	public function cart()
	{
		
		$cart = $this->session->userdata('cart');
		$this->load->model('ecommerce_model');
		$show_cart = array();
		$total_price = 0;

		foreach ($cart as $key => $value) 
		{
			if($key != 'total_items')
			{
				$item = $this->ecommerce_model->get_item($key);
				$show_cart[] = array(
													'id' => $item['id'],
													'quantity' => $value,
													'description' => $item['description'],
													'price' => ($item['price'] * $value),
														);
				$total_price += ($item['price'] * $value);
			}
		}
		$show_cart['total_price'] = $total_price;
		$send['cart'] = $show_cart;
		$this->load->view('checkOutCart', $send); 
	}
		//--------------end of add item info---------------
		


	public function addToCart()
	{
		$product_id = $this->input->post('add');
		$quantity = $this->input->post('quantity');
		$cart = $this->session->userdata('cart');
		
		if(array_key_exists($product_id, $cart))
		{
			$cart['total_items'] = $cart['total_items'] + $quantity;
			$cart[$product_id] = $cart[$product_id] + $quantity;
			$this->session->set_userdata('cart', $cart);
		}
		else
		{
			$cart['total_items'] = $cart['total_items'] + $quantity;
			$cart[$product_id] = $quantity;
			$this->session->set_userdata('cart', $cart);
		}
		redirect('/');
	}

	public function delete($id)
	{
		$cart = $this->session->userdata('cart');
		$total_items = $this->session->userdata('cart')['total_items'];
		$total_items = $total_items - $cart[$id];
		$cart['total_items'] = $total_items;
		unset($cart[$id]);
		$this->session->set_userdata('cart', $cart);
		redirect('ecommerce/cart');
	}

}