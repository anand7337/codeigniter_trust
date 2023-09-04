<?php   

require APPPATH.'views/razorpay/Razorpay.php';
use Razorpay\Api\Api;

class Main extends CI_Controller{
   public function __construct(){
	parent::__construct();
	$this->load->model('Main_model');
	$this->load->helper('url');
	$this->load->library('session');
	
   }
	public function index(){
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function about(){
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function events(){
		$this->load->view('header');
		$this->load->view('events');
		$this->load->view('footer');

	}
	public function gallery(){
		$this->load->view('header');
		$this->load->view('gallery');
		$this->load->view('footer');

	}
	public function contact(){
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function volunteer_form() {
		extract($_REQUEST);
		$data4= [
			'name' => $volunteer_name,
			'gender' => $volunteer_gender,
			'email' => $volunteer_email,
			'reach' => $volunteer_reach,
			'mobile' => $volunteer_number,
			'experience' => $volunteer_experience,
		];
		$this->load->model('Main_model');
		$result=$this->Main_model->volunteer_table($data4);
		if($result) {
			redirect(base_url('main/index'));
		}
		else {
			echo 'cannot send details please try later';
		}
	}
	public function contact_form() {
		extract($_POST);
		$data3 = [
            'name' => $form_name,
			'email' => $form_email,
			'phone' => $form_phone,
			'subject' => $form_subject,
			'message' => $form_message,
		];
		$this->load->model('Main_model');
		$result=$this->Main_model->contact_form($data3);
		// echo "<pre>";
		// print_r($result);
		if($result){
             redirect(base_url('main/contact'));
		}

	}
	public function donate(){
		if($this->session->userdata('user')){
		$this->load->view('header');
		$this->load->view('donate');
		$this->load->view('footer');
		}
		else{
			redirect(base_url('main/login'));
		}
	}
	public function login(){
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function signup(){
		$this->load->view('header');
		$this->load->view('signup');
		$this->load->view('footer');
	}
	public function user_setting() {
		$this->load->view('header');
		$this->load->view('user_setting');
		$this->load->view('footer');
	}
	public function member(){
		$this->load->view('header');
		$this->load->view('member');
		$this->load->view('footer');
	}
	public function travel(){
		if($this->session->userdata('member')){
			$this->load->view('header');
			$this->load->view('travel');
			$this->load->view('footer');
			}
			else{
				echo 'login with member to enter travel site';
			}
	}
	public function sport(){
		if($this->session->userdata('member')){
			$this->load->view('header');
			$this->load->view('sport');
			$this->load->view('footer');
			}
			else{
				echo 'login with member to enter sport site';
			}
	}

	public function create(){
		
		extract($_POST);
		$data = [
            'name' => $username,
			'email' => $usermail,
			'password' => $userpassword,
		];
		$this->load->model('Main_model');
		$result=$this->Main_model->insertform($data);
		// echo "<pre>";
		// print_r($result);
		if($result){
             redirect(base_url('main/login'));
		}
	}
	public function user_profile_update() {
        extract($_POST);
		$id=$form_id_edit;
		$data9 = [
			'name' => $form_name_edit,
			'email' => $form_email_edit,
			'password' => $form_password_edit,
		];
		$this->load->model('Main_model');
		$result=$this->Main_model->profile_user_update($data9,$id);
		if($result) {
			redirect(base_url('main/user_setting'));
		}
	}
	public function signin() {
		extract($_REQUEST);
		// $data1 = [
		// 	'email'=> $checkmail,
		// 	'password'=> $checkpass,
		// ];
		$usermail=$this->input->post('checkmail');
		$userpass=$this->input->post('checkpass');
		$this->load->model('Main_model');
		$result=$this->Main_model->checkform($usermail,$userpass);
		if($result) {
			$this->session->set_userdata('user',$result);
			redirect(base_url('main/donate'));
		}
		else {
			echo 'invalid username and password';
		}
	}
    // public function donate_form() {
	
	// }
    public function membership_create() {
		extract($_POST);
		$data10 = [
			'username'=>$memb_user,
			'password'=>$memb_password,
			'gender'=>$memb_gender,
			'email'=>$memb_email,
			'dob'=>$memb_dob,
			'mobile'=>$memb_mobile,
			'id_proof'=>$memb_proof,
			'address'=>$memb_address,
			'pincode'=>$memb_pincode,
		];
		$this->load->model('Main_model');
		$result=$this->Main_model->insert_member($data10);
		if($result) {
			redirect(base_url('main/member'));
		}
		else {
			echo "could't create please try again";
		}
	}

    public function membership_check() {
		extract($_POST);
		// $data1 = [
		// 	'email'=> $checkmail,
		// 	'password'=> $checkpass,
		// ];
		$check_membname=$this->input->post('check_membname');
		$check_membpass=$this->input->post('check_membpass');
		$this->load->model('Main_model');
		$result=$this->Main_model->check_member($check_membname,$check_membpass);
		if($result) {
			$this->session->set_userdata('member',$result);
			redirect(base_url('main/travel'));
		}
		else {
			echo 'invalid username and password';
		}
	}

	public function logout(){
		$this->session->unset_userdata('user');
		redirect('/');
	}

	//********************************payment integration razorpay*************************************//

	

	public function pay()
	{

        $_SESSION['donate_name'] = $this->input->post('donate_name');
		$_SESSION['donate_amount'] = $this->input->post('donate_amount');
		$_SESSION['donate_email']  = $this->input->post('donate_email');
		$_SESSION['donate_mobile'] = $this->input->post('donate_mobile');
        $_SESSION['donate_address'] = $this->input->post('donate_address');
		$_SESSION['donate_district'] = $this->input->post('donate_district');
		$_SESSION['donate_state'] = $this->input->post('donate_state');
		$_SESSION['donate_pincode'] = $this->input->post('donate_pincode');

        $key_id='rzp_test_EQ3NN4h7zdh7hB';
	    $secret='0oT5oaWKyEzlZgM0kX1Sjloc'; 
        $api = new Api($key_id, $secret);

		$razorpayOrder = $api->order->create(array(
			'receipt'         => rand(),
			'amount'          => $_SESSION['donate_amount'] * 100, // 2000 rupees in paise
			'currency'        => 'INR',
			'payment_capture' => 1 // auto capture
		));


		$amount = $razorpayOrder['amount'];

		$razorpayOrderId = $razorpayOrder['id'];

		$_SESSION['razorpay_order_id'] = $razorpayOrderId;

		$data = $this->prepareData($amount,$razorpayOrderId);

		$this->load->view('payment_check',array('data' => $data));
	}

	/**
	 * This function verifies the payment,after successful payment
	 */
	public function verify()
	{
		$success = true;
		$error = "payment_failed";
        $key_id='rzp_test_EQ3NN4h7zdh7hB';
	    $secret='0oT5oaWKyEzlZgM0kX1Sjloc'; 
  
		if (empty($_POST['razorpay_payment_id']) === false) {
			$api = new Api( $key_id,    $secret);
		try {
				$attributes = array(
					'razorpay_order_id' => $_SESSION['razorpay_order_id'],
					'razorpay_payment_id' => $_POST['razorpay_payment_id'],
					'razorpay_signature' => $_POST['razorpay_signature']
				);
				$api->utility->verifyPaymentSignature($attributes);
              
			}
             catch(SignatureVerificationError $e) {
				$success = false;
				$error = 'Razorpay_Error : ' . $e->getMessage();
			}
		}
		if ($success === true) {
			$this->setRegistrationData();
		}
		else {
			// redirect(base_url().'register/paymentFailed');
            echo "Payment failed";
            // $this->setFailed();
		}
	}


	/**
	 * This function preprares payment parameters
	 * @param $amount
	 * @param $razorpayOrderId
	 * @return array
	 */
	public function prepareData($amount,$razorpayOrderId)

	{
        $key_id='rzp_test_EQ3NN4h7zdh7hB';
        $secret='0oT5oaWKyEzlZgM0kX1Sjloc'; 

		
        $api = new Api($key_id, $secret);
		$data = array(
			"key" => $key_id,
			"amount" => $amount,
			"name" => "Coding Birds Online",
			"description" => "Learn To Code",
			"image" => "https://demo.codingbirdsonline.com/website/img/coding-birds-online/coding-birds-online-favicon.png",
			"prefill" => array(
				"name"  => $this->input->post('donate_name'),
				"email"  => $this->input->post('donate_email'),
				"contact" => $this->input->post('donate_mobile'),
			),
			"notes"  => array(
				"address"  => "Hello World",
				"merchant_order_id" => rand(),
			),
			"theme"  => array(
				"color"  => "#F37254"
			),
			"order_id" => $razorpayOrderId,
		);
		return $data;
	}

	/**
	 * This function saves your form data to session,
	 * After successfull payment you can save it to database
	 */
	public function setRegistrationData()
	{

        extract($_POST);
		
		$name     =   $_SESSION['donate_name']; 
		$amount   =  $_SESSION['donate_amount']; 
		$email    =  $_SESSION['donate_email']; 
		$mobile   =  $_SESSION['donate_mobile']; 
        $address  =  $_SESSION['donate_address']; 
		$district =  $_SESSION['donate_district']; 
		$state    =  $_SESSION['donate_state']; 
		$pincode  =  $_SESSION['donate_pincode']; 


		$registrationData = array(
			'order_id' => $_SESSION['razorpay_order_id'],
			'name' => $name,
			'amount' => $amount,
			'email' => $email,
			'mobile' => $mobile,
            'address' => $address,
			'district' => $district,
			'state'  => $state,
			'pincode' => $pincode,
            'status' => 'success',
		);
        // echo "<pre>";
        // print_r($registrationData);
		// save this to database
        $this->load->model('Main_model');
        $result= $this->Main_model->pay_check($registrationData);
        if($result){
            redirect(base_url('main/donate'));
        }

	}




	//****************** END ************************//


public function dashboard(){
	if($this->session->userdata('user')){
	$this->load->view('dashboard/index');
	}
	else{
		redirect(base_url('main/admin'));
	}
}

public function volunteer_details(){

	if($this->session->userdata('user')){
		$this->load->model('Main_model');
		$result['table']=$this->Main_model->vol_fetch();
		$this->load->view('dashboard/volunteer',$result);
		}
		else{
			redirect(base_url('main/admin'));
		}
}

public function contact_details(){

	if($this->session->userdata('user')){
		$this->load->model('Main_model');
		$result['table']=$this->Main_model->contact_fetch();
		$this->load->view('dashboard/contact',$result);
		}
		else{
			redirect(base_url('main/admin'));
		}

	
}

public function user_details(){

	if($this->session->userdata('user')){
		$this->load->model('Main_model');
	$result['table']=$this->Main_model->user_fetch();
	$this->load->view('dashboard/user',$result);
		}
		else{
			redirect(base_url('main/admin'));
		}
}

public function donate_details(){

	if($this->session->userdata('user')){
		$this->load->view('dashboard/donate');
		}
		else{
			redirect(base_url('main/admin'));
		}
}
public function admin(){
$this->load->view('admin');
}
public function admin_profile() {
	$this->load->view('dashboard/profile');
}
public function user_admin(){

	extract($_POST);
	$admin_mail=$this->input->post('admin_email');
	$admin_pass=$this->input->post('admin_password');
	$this->load->model('Main_model');
	$result=$this->Main_model->admin_login($admin_mail,$admin_pass);
	if($result) {
		$this->session->set_userdata('user',$result);
		redirect(base_url('main/dashboard'));
	}
	else {
		echo 'invalid username and password';
	}

}

public function admin_logout(){
	$this->session->unset_userdata('user');
	redirect('/');
}


// public function volunteer_fetch(){
// 	$this->load->model('Main_model');
// 	$result['table']=$this->Main_model->vol_fetch();
// 	// echo "<pre>";
// 	// print_r($result);
// 	$this->load->view('dashboard/volunteer',$result);
// }

public function volunteer_del($id){
	$this->load->model('Main_model');
	$result=$this->Main_model->delete_vol($id);
	if($result){
		redirect(base_url('main/volunteer_details'));
	}
}

public function contact_del($id){
	$this->load->model('Main_model');
	$result=$this->Main_model->delete_contact($id);
	if($result){
		redirect(base_url('main/volunteer_details'));
	}
}

public function user_del($id){
	$this->load->model('Main_model');
	$result=$this->Main_model->delete_user($id);
	if($result){
		redirect(base_url('main/volunteer_details'));
	}
}

public function demo(){
	$this->load->view('demo_ci3');
}


}

?>
