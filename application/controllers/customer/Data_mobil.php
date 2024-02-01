<?php

class Data_mobil extends CI_Controller
{
	public function index()
	{
		$data['mobil'] = $this->ModelRental->get_data('mobil')->result();
		$this->load->view('templates_customer/header');
		$this->load->view('customer/data_mobil', $data);
		$this->load->view('templates_customer/footer');
	}
	
	public function detail_mobil($id)
	{
		$data['detail'] = $this->ModelRental->ambil_id_mobil($id);
		$this->load->view('templates_customer/header');
		$this->load->view('customer/detail_mobil', $data);
		$this->load->view('templates_customer/footer');
	}
}

?>