<?php 
class Main_model extends CI_Model {
	public function volunteer_table($data4) {
		$this->load->database();
		return $this->db->insert('volunteer',$data4);
	}
	public function contact_form($data3) {
		$this->load->database();
		return $this->db->insert('contact_table',$data3);
	}
	public function insertform($data) {
		$this->load->database();
		return $this->db->insert('user_table',$data);
	}

	public function checkform($usermail,$userpass) {
		$this->load->database();
		$result=$this->db->get_where('user_table', array( 'email'=> $usermail, 'password'=>$userpass));
	       return $result->row_array();
		   
	}
	public function donate_form($result) {
		$this->load->database();
		return $this->db->insert('donate_table',$result);
	}

	public function admin_login($admin_mail,$admin_pass) {
		$this->load->database();
		$result=$this->db->get_where('admin_user', array( 'email'=> $admin_mail, 'password'=>$admin_pass));
	       return $result->row_array();
		   
	}
	public function profile_user_update($data9,$id) {
		$this->load->database();
		$this->db->where('id',$id);
		return $this->db->update('user_table',$data9);
	}
	public function insert_member($data10) {
		$this->load->database();
		return $this->db->insert('member_table',$data10);
	}
	public function check_member($check_membname,$check_membpass) {
		$this->load->database();
		$result=$this->db->get_where('member_table', array( 'username'=> $check_membname, 'password'=>$check_membpass));
	       return $result->row_array();
	}

 public function vol_fetch(){
	$this->load->database();
	return $this->db->get('volunteer')->result();
	// echo "<pre>";
	// print_r($result);
 }

 public function delete_vol($id){
	$this->load->database();
		$this->db->where('id',$id);
	return	$this->db->delete('volunteer');
 }

 public function contact_fetch(){
	$this->load->database();
	return $this->db->get('contact_table')->result();
 }
 public function delete_contact(){
	$this->load->database();
	return $this->db->get('contact_table')->result();

 }
 public function user_fetch(){
	$this->load->database();
	return $this->db->get('user_table')->result();
 }
 public function delete_user(){
	$this->load->database();
	return $this->db->get('user_table')->result();

 }
	public function pay_check($registrationData){
		$this->load->database();
		return $this->db->insert('donate_table',$registrationData);
	}
}
?>
