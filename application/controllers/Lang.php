<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lang extends CI_Controller
 {
   function __construct()
    {
      parent::__construct();
      $this->load->library('session');
         // $this->load->model('ApiModel');
          //$this->load->model('UniversalModel');
        //  $this->load->model('Getdata');

        }

public function eng(){
$url=$this->input->get('urll');
$this->session->set_userdata('Language','en');
redirect($url);

}
public function nep(){
$url=$this->input->get('urll');
$this->session->set_userdata('Language','nep');
redirect($url);

}


public function admin_lang(){

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  			$lang=$this->input->post('language');
  			if($lang=='nep')
  			{
  				$this->session->set_userdata('Language','nep');
  			}
  			if($lang=='en')
  			{
  				$this->session->set_userdata('Language','en');
  			}
  			print_r(json_encode(array('status'=>'success','message'=>'Language Set successfully')));
  			 exit;
  		}
  		else{
  	    	print_r(json_encode(array('status'=>'error','message'=>'Cannot Perform this Operation')));
  	        exit;
  	    }
//redirect($url);

}


public function test_lang(){

$lang=$this->session->get_userdata('Language');
//echo $lang['Language'];
if($lang['Language']=='en'){

 echo 'welcome';

}else{

echo 'स्वागत';


}


}
}
