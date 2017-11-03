<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Catalog extends CI_Controller {

	public function index()
	{
		
		$re=getNewBooks();
		//foreach($data->result() as $row){
		//	echo $row->Book_id;
		//}
		$data['result']=$re->result();
		$this->load->view('homepage',$data);
	}
	
	public function getHotBooks(){

	}
	public function getNewBooks(){
		$this->load->model("Model_Catalog");
		return $this->Model_Catalog->getNewBooks();
	}
	public function search(){
		$this->load->model("Model_Catalog");
		$namebook=$this->input->post("searchname");
		$Model_Catalog=$this->Model_Catalog;
		$re=$Model_Catalog->search($namebook);
		
		$data['result']=$re->result();
		$this->load->view('showlist',$data);

	}
	public function getDeatilBook($id){
		$this->load->model("Model_Catalog");
		$Model_Catalog=$this->Model_Catalog;
		$re=$Model_Catalog->getDetailBook($id);
		
		$data['result']=$re->result();
		$this->load->view('showdetailbooks',$data);
	
	}
	
}
