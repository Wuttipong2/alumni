<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('register_model','register');
	}
	public function showall()
	{
        $data['query'] = $this->register->showUser();
		$this->load->view('show',$data);
		
    }

    public function showalledit()
	{
        $data['query'] = $this->register->showUser();
		$this->load->view('showedit',$data);
		
    }
    public function profil_info()
	{
        $a = $this->input->post('Member_id');
        $data['query'] = $this->register->showprofile($a);
        $this->load->view('read_register',$data);
        
    }

    function showedit()
    {
        $a = $this->input->post('Member_id');
        $data['query'] = $this->register->showprofile($a);
        $this->load->view('edit',$data);
    }

    public function editprofile()
	{
		$a = $this->input->get("Member_id");
		$data['query'] = $this->register->editprofile($a);
		//echo $edit_mid;
		$this->load->view('read_register',$data);
	}
    function edit()
    {
        $data = array(
            
            'Member_id'=> $this->input->post("txtid"),
            'F_name'=> $this->input->post("txtname"),
            'L_name'=> $this->input->post("txtlastname"),
            'Email'=> $this->input->post("txtEmail"),
            'Phone'=> $this->input->post("txtPhone")
        );
        $menu_id = $this->input->post("Member_id");
		//echo $menu_id;
		$this->register->update($data,$menu_id);
		echo "<center>";
		echo "อัพเดทเมนู รหัส ".$menu_id." เรียบร้อยแล้ว";
        $this->load->view('home');
        $this->load->view('bootstap');
        $this->load->view('footer');
    }

    public function search()
    {
        $search =   $this->input->post('search');
        $data['xx'] = $this->register->show_search($search);
        $this->load->view('view_search', $data);
    }
	

}