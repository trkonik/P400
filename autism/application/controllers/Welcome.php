<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('section/header');
		$this->load->view('pages/home');
		$this->load->view('section/footer');
	}
	public function about()
	{
		$this->load->view('section/header');
		$this->load->view('pages/about');
		$this->load->view('section/footer');
	}
	public function causes()
	{
		$this->load->view('section/header');
		$this->load->view('pages/causes');
		$this->load->view('section/footer');
	}
	public function donate()
	{
		$this->load->view('section/header');
		$this->load->view('pages/donate');
		$this->load->view('section/footer');
	}
	public function blog()
	{
		$this->load->view('section/header');
		$this->load->view('pages/blog');
		$this->load->view('section/footer');
	}
	public function gallery()
	{
		$this->load->view('section/header');
		$this->load->view('pages/gallery');
		$this->load->view('section/footer');
	}
	public function event()
	{
		$this->load->view('section/header');
		$this->load->view('pages/event');
		$this->load->view('section/footer');
	}
	public function contact()
	{
		$this->load->view('section/header');
		$this->load->view('pages/contact');
		$this->load->view('section/footer');
	}
	

}
