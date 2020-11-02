<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Register_model extends CI_Model {
		function __construct(){
            parent::__construct();
		}
		
	


        function register_insert($data){
			$this->db->insert('personal_information',$data);
		}
		
		function register_insert2($data){
			$this->db->insert('work_address',$data);
		}

		function register_insert3($data){
			$this->db->insert('current_address',$data);
        }
        
		function register_insert4($data){
			$this->db->insert('member_se',$data);
		}
		


		function login($Username, $password)
    {
        $this->db->where('Username', $Username);
        $this->db->where('Password', $password);
        $result = $this->db->get('member_se');
        $message = '';
        if ($result->num_rows() > 0) {
            $message = true;

            // $this->load->view('list');

        } else {
            $message = false;
        }
        $data = array(
            "message" => $message, "data" => $result->result()

        );
        return $data;
    }
		function showUser()
		{
			$query = $this->db->get('personal_information');
			return $query->result();
		}

		function show()
		{
			$query = $this->db->get('personal_information');
			return $query->result();
		}

		function showprofile($a)
		{
			$this->db->where('Member_id',$a);
			$query = $this->db->get('personal_information');
			return $query->result();
		}

		
		function update($data)
		{
			$id =  $this->session->userdata('Member_id');
			$this->db->where('Member_id',$id);
			$this->db->update('personal_information',$data);
		}

		function editprofile($mid){
			$this->db->select('Member_id, F_name,L_name,Phone,Email');
			$result = $this->db->get_where('personal_information', array('Member_id' => $mid));
			return $result;
		}
	
		function show_search($search)
    {
        
        
        $this->db->or_like('personal_information' . "." . 'Member_id', $search);
		$this->db->or_like('personal_information' . "." . 'Studentcode', $search);
		$this->db->or_like('personal_information' . "." . 'L_name', $search);
		$this->db->or_like('personal_information' . "." . 'F_name', $search);
        $result = $this->db->get('personal_information');

        return $result->result();
    }

}
