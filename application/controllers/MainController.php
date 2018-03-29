<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MainController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('Main_model');
  }



public function map_page(){


  $this->load->view('header');
  $this->load->view('mapt');
  $this->load->view('footer');


}


  public function post_data()

  {

    $tbl='crops_2015';

    $get=$this->Main_model->get_post($tbl);
    var_dump($get);


  }

  public function default_page()
  {

    // echo $this->db->query("SELECT VERSION()")->row('version');

    //echo base_url();
    $tbl='categories_tbl';
   $this->body['data_cat']=$this->Main_model->get_cat($tbl);

    $this->load->view('header');
    $this->load->view('main',$this->body);
    $this->load->view('footer');



  }


public function log(){

$this->load->view('admin/login-page');

}

  public function about_page(){

    $this->load->view('header');
    $this->load->view('about');
    $this->load->view('footer');



  }

  //datasets view page

  public function dataset_page(){

    $this->load->view('header');
    $this->load->view('datasets');
    $this->load->view('footer');


  }

  public function get_map(){

    $tbl='survey';

    $get=$this->Main_model->get($tbl);

    foreach ($get as $value){

      $features[] = array(
        'type' => 'Feature',
        'properties' => array(
          'id'=>$value['id'],
          'name_of_surveyor'=>$value['name_of_surveyor'],
          'name_of_district'=>$value['name_of_district'],
          'name_of_municipality'=>$value['name_of_municipality'],
          'ward_no'=>$value['ward_no'],
          'address'=>$value['address'],
        ),
        'geometry' => array(
          'type' => 'Point',
          'coordinates' => array(
            $value['longitude'],
            $value['latitude'],
            1.0
          ),
        ),
      );

    }

    $new_data = array(
      'type' => 'FeatureCollection',
      'features' => $features,
    );

    $this->body['geo']= json_encode($new_data, JSON_NUMERIC_CHECK);
    $this->load->view('map',$this->body);



  }





}
