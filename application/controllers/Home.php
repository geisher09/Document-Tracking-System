<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
                parent::__construct();
                $this->load->helper(array('form', 'url'));
    }
	
	public function index(){
		$header_data['title']="DTS";
		
		$this->load->view('header',$header_data);
		$this->load->view('home');
		$this->load->view('footer');
	}
	
	public function docu(){
		$header_data['title']="All Documents";
		
		$this->load->view('header',$header_data);
		$this->load->model('dts_model');
		$documents = $this->dts_model->getDocuments();
		$this->load->view('documents',['do'=>$documents]);
		$this->load->view('footer');
	}
	
	public function add(){
		$header_data['title']="Add Documents";
		
		$this->load->view('header',$header_data);
		$this->load->view('add');
		$this->load->view('footer');
	}

	public function login(){
		$header_data['title']="Login";		
		$this->load->view('login',$header_data);
	}

	public function save(){
		$this->form_validation->set_rules('document_id', 'Tracking No', 'required');
	  	$this->form_validation->set_rules('document_title', 'Title', 'required');
	 	$this->form_validation->set_rules('document_desc', 'Description', 'required');
  		$this->form_validation->set_error_delimiters('<div class="text-danger bg-danger">', '</div>');

        if ($this->form_validation->run()){

               	$data = $this->input->post();
               	$url = $this->do_upload();
             	$this->load->model('dts_model');
             	if ($this->dts_model->saveDocuments($data,$url)){
             		$this->session->set_flashdata('response', 'Saved Succesfully!');
				 }
				 else{
             		$this->session->set_flashdata('response', 'Failed :(');
				 }
				 return redirect('home/add');

        }
        else{
            	$header_data['title']="Add Documents";		
				$this->load->view('header',$header_data);
				$this->load->view('add');
				$this->load->view('footer');
				echo "WAAAAAAAAAAAAAa";
        }
	

	}

	public function do_upload(){
		$type = explode('.', $_FILES["file"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "./uploads/".uniqid(rand()).'.'.$type;

		if(in_array($type, array("doc", "docs", "pdf", "txt")))
					if(is_uploaded_file($_FILES["file"]["tmp_name"]))
						if(move_uploaded_file($_FILES["file"]["tmp_name"],$url))
								return $url;

		return redirect('home/add');					
	}



}
?>