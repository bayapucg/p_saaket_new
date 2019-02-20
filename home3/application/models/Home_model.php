<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function save_contact($data){
		$this->db->insert('contact',$data);
		return $this->db->insert_id();
	}
	
	
	
	
	
	
	
	
	
		

}