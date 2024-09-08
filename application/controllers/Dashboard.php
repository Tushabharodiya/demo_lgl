<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){
		$this->load->view('index');
	}
	
	public function privacy(){
		$this->load->view('privacy');
	}
	
	public function terms(){
		$this->load->view('terms');
	}
	
	public function faqs(){
		$this->load->view('faqs');
	}
	
	public function contact(){
	    if($this->input->post('submit')){
            $newData = array(
                'contact_name'=>$this->input->post('contact_name'),
                'contact_email'=>$this->input->post('contact_email'),
                'contact_mobile'=>$this->input->post('contact_mobile'),
                'contact_deletion_reason'=>$this->input->post('contact_deletion_reason'),
                'contact_message'=>$this->input->post('contact_message'),
            );
            $newDataEntry = $this->DataModel->insertData('legal_contact', $newData);
            if($newDataEntry){
                $this->session->set_userdata('session_contact', true);
                redirect('contact');  
            }
        }
		$this->load->view('contact');
	}
}
