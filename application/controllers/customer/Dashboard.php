<?php

class Dashboard extends CI_Controller
{
	public function index()
	{
		$data['mobil'] = $this->ModelRental->get_data('mobil')->result();
		$this->load->view('templates_customer/header');
		$this->load->view('customer/dashboard', $data);
		$this->load->view('templates_customer/footer');
	}
}

?>