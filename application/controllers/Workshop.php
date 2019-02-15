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
    $payment_type=$this->input->post('payment');
    $razorpay_payment_id=$this->input->post('razorpay_payment_id');
    $razorpay_order_id=$this->input->post('razorpay_order_id');
    $razorpay_signature=$this->input->post('razorpay_signature');
    $this->load->view('home/thankyou');
  }

}

?>
