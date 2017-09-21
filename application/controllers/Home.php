<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index(){
		$header_data['title']="DTS";
		
		$this->load->view('header',$header_data);
		$this->load->view('home');
		$this->load->view('footer');
	}
	
	public function docu(){
		$header_data['title']="All Documents";
		
		$this->load->view('header',$header_data);
		$this->load->view('documents');
		$this->load->view('footer');
	}
	
	public function add(){
		$header_data['title']="Add Documents";
		
		$this->load->view('header',$header_data);
		$this->load->view('add');
		$this->load->view('footer');
	}
	
}
?>