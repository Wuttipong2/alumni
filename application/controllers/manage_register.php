<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('register_model','register');
    }
    
    public function regis()
	{
		$this->load->view('insert_register');
		
	}

	public function ins_register(){
        //echo $this->input->post("Prefix");
		$data = array(
			'img' => "",
			'Prefix' => $this->input->post("Prefix"),
			'F_name' => $this->input->post("Fname"),
            'L_name'=> $this->input->post("Lname"),
            'Sex'=> $this->input->post("Sex"),
            'Date_of_birth'=> $this->input->post("Dateofbirth"),
            'Studentcode'=> $this->input->post("Studentcode"),
            'Phone'=> $this->input->post("Phone"),
            'Email'=> $this->input->post("Email"),
            'Highest_education'=> $this->input->post("Highesteducation"),
            'Subject'=> $this->input->post("Subject"),
            'Institute_for_further_study'=> $this->input->post("Instituteforfurtherstudy"),
            'Country'=> $this->input->post("Country"),
            'Graduation_year'=> $this->input->post("Graduationyear"),
            'Company_name'=> $this->input->post("Companyname"),
            'Job_position'=> $this->input->post("Jobposition"),
            'Salary'=> $this->input->post("Salary"),
        );
        $data2 = array(
            'House_number'=> $this->input->post("Housenumber"),
            'Swine'=> $this->input->post("Swine"),
            'District'=> $this->input->post("Studentcode"),
            'Canton'=> $this->input->post("Canton"),
            'Province'=> $this->input->post("Province"),
            'Postal_code'=> $this->input->post("Postalcode"),
        );
        $data3 = array(
            'House_number'=> $this->input->post("Housenumber2"),
            'Swine'=> $this->input->post("Swine2"),
            'District'=> $this->input->post("District2"),
            'Canton'=> $this->input->post("Canton2"),
            'Province'=> $this->input->post("Province2"),
            'Postal_code'=> $this->input->post("Postalcode2"),
        );
        $data4 = array(
            'Username'=> $this->input->post("User"),
            'Password'=> $this->input->post("Pass"),
		);
		// if($this->input->post("Studentcode")!= "" && $this->input->post("Fname")!== ""){
        	$this->register->register_insert($data);
        	$this->register->register_insert2($data2);
        	$this->register->register_insert3($data3);
            $this->register->register_insert4($data4);
			$this->load->view('home');
		// }else {
		// 	echo "บันทึกไม่สำเร็จ";
		// }
    }
    
    
    

}
