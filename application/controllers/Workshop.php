<?php
/**
 *
 */
require_once ('razorpay-php/Razorpay.php');
use Razorpay\Api\Api as RazorpayApi;

class Workshop extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->library('user_agent');
    $this->load->model('Workshop_Model');
  }
  //Workshop list
  public function index()
  {
    $arg['pageTitle'] = 'WORKSHOP';
    $data = layouts($arg);
    $this->load->view('home/workshop',$data);
  }
  //Workshop
  public function Workshop()
  {
    $arg['pageTitle'] = 'WORKSHOP';
    $data = layouts($arg);
    $this->load->view('home/workshop',$data);
  }
  //register
  public function registration()
  {
    $arg['pageTitle'] = 'WORKSHOP REGISTRATION';
    $data = layouts($arg);
    $this->load->view('home/workshop_registration',$data);
  }
  //insert
  public function insert()
  {
    $post_data = $this->input->post();
    if ($post_data) {
      $addl_data = array('created_on' => date('Y-m-d H:i:s'));
      $post_data = array_merge($post_data,$addl_data);
      if ($this->Workshop_Model->insert($post_data)) {
        $api_id = $this->config->item('keyId');
        $api_Secret = $this->config->item('API_keySecret');
        $api = new RazorpayApi($api_id,$api_Secret);
        $orderData = [
          'receipt'         => 1,
          'amount'          => 3000 * 100, // 2000 rupees in paise
          'currency'        => 'INR',
          'payment_capture' => 1 // auto capture
        ];
        $razorpayOrder = $api->order->create($orderData);
        $razorpayOrderId = $razorpayOrder['id'];
        $displayAmount = $amount = $orderData['amount'];
        $displayCurrency=$orderData['currency'];
        $data['details'] = [
          "key"               => $api_id,
          "amount"            => $amount,
          "name"              => $post_data['name'],
          "description"       => "Activate for cloud account",
          "image"             => "",
          "prefill"           => [
            "name"              => $post_data['name'],
            "email"             => $post_data['email'],
            "contact"           => $post_data['phone'],
          ],
          "notes"             => [
            "address"           => $post_data['phone'],
            "merchant_order_id" => 1,
          ],
          "theme"             => [
            "color"             => "#F37254"
          ],
          "order_id"          => $razorpayOrderId,
          "display_currency"  => $orderData['currency'],
        ];
        $data['user_data']=$post_data;
        $this->load->view('home/payments',$data);
      } else {
        $this->session->set_flashdata('error','Please try again');
        redirect($this->agent->referrer());
      }
    } else {
      $this->session->set_flashdata('error','Please try again');
      redirect($this->agent->referrer());
    }
  }
  public  function success(){
  //   $payment_type=$this->input->post('payment');
  //   $razorpay_payment_id=$this->input->post('razorpay_payment_id');
  //   $razorpay_order_id=$this->input->post('razorpay_order_id');
  //   $email=$this->input->post('email');
  //   $razorpay_signature=$this->input->post('razorpay_signature');
  //   $this->load->library('email');
  //
  // //  $email=$this->input->post('email');
  // $email='kasimahesh34@gmail.com';
  //   $razorpay_signature=$this->input->post('razorpay_signature');
  //
  // //  $email=$this->input->post('email');
  //
  //
  //   $config = array(
  //                   'charset' => 'utf-8',
  //                   'wordwrap' => TRUE,
  //                   'mailtype' => 'html'
  //               );
  //   $this->load->library('email');
  //    $this->email->initialize($config);
  //
  //
  //
  //   $mesg=$this->load->view('home/message','',true);
  //     $this->email->set_newline("\r\n");
  //     $this->email->set_mailtype("html");
  //     $this->email->to($email);
  //     $this->email->from('admin@psaaket.com');
  //     $this->email->subject('Payment Success');
  //     $body = "Your payment is success";
  //     $this->email->message($mesg);
  //     if ($this->email->send())
  //     {
  //       //$this->session->set_flashdata('success',"Pa sent to your registered email address. Please Check your registered email address");
  //       $this->load->view('home/thankyou');
  //     }else{
  //       echo 'notworking';exit;
  //       $this->session->set_flashdata('error'," In Localhost mail  didn't sent");
  //       $this->load->view('home/thankyou');
  //     }
  //   //$this->load->view('home/thankyou');
  $payment_type=$this->input->post('payment');
    $razorpay_payment_id=$this->input->post('razorpay_payment_id');
    $razorpay_order_id=$this->input->post('razorpay_order_id');

    $email=$this->input->post('email');
  $config = array(
                    'charset' => 'utf-8',
                    'wordwrap' => TRUE,
                    'mailtype' => 'html'
                );

   $mesg=$this->load->view('home/message','',true);
  $this->load->library('email');
  $this->email->initialize($config);

$this->email->from('admin@psaaket.com', 'Psaaket');
$this->email->to($email);


$this->email->subject('Psaaket Payment');
$this->email->message($mesg);
if ($this->email->send())
    {

      $this->load->view('home/thankyou');
    }
    else{
      $this->load->view('home/thankyou');
    }


  }

}

?>
