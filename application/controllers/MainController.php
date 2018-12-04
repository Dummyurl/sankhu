<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MainController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('Main_model');
    $this->load->model('Upload_model');
    $this->load->library('general');


  }

  public function contact(){
    // echo "<pre>";
    // print_r($this->general->get_count_table_rows('*','emergency_contact'));die;
    // language
    if($this->session->userdata('Language')==NULL){

      $this->session->set_userdata('Language','nep');
    }

    $lang=$this->session->get_userdata('Language');


    if($lang['Language']=='en'){

      $this->body['site_info']=$this->Main_model->site_setting_en();
      //eng contact
       $emerg_lang='en';


      $this->body['health']=$this->Main_model->get_contact('health','emergency_contact',$emerg_lang);
      $this->body['responders']=$this->Main_model->get_contact('responders','emergency_contact',$emerg_lang);
      $this->body['security']=$this->Main_model->get_contact('security','emergency_contact',$emerg_lang);
      $this->body['ngo']=$this->Main_model->get_contact('ngo','emergency_contact',$emerg_lang);
      $this->body['ddr']=$this->Main_model->get_contact('ddr','emergency_personnel',$emerg_lang);
      $this->body['personnel']=$this->Main_model->get_contact('personnel','emergency_personnel',$emerg_lang);
      $this->body['members']=$this->Main_model->get_contact('members','emergency_personnel',$emerg_lang);

      $this->body['chairpersons']=$this->Main_model->get_contact('chairpersons','emergency_personnel',$emerg_lang);
      $this->body['chief']=$this->Main_model->get_contact('chief','emergency_personnel',$emerg_lang);
      $this->body['elected']=$this->Main_model->get_contact('elected','emergency_personnel',$emerg_lang);
      $this->body['municipal_ex']=$this->Main_model->get_contact('municipal_ex','emergency_personnel',$emerg_lang);
      $this->body['disaster']=$this->Main_model->get_contact('disaster','emergency_personnel',$emerg_lang);
      $this->body['nntds']=$this->Main_model->get_contact('nntds','emergency_personnel',$emerg_lang);




      //eng end


    }else{

      $emerg_lang='nep';
      $this->data['test'] = $this->general->get_tbl_data_result('*','emergency_contact',array('category'=>'health','language'=>'en'),'id');
      // echo $this->db->last_query();die;
      //pp($this->data['test']);
      $this->body['health']=$this->Main_model->get_contact('health','emergency_contact',$emerg_lang);
      $this->body['responders']=$this->Main_model->get_contact('responders','emergency_contact',$emerg_lang);
      $this->body['security']=$this->Main_model->get_contact('security','emergency_contact',$emerg_lang);
      $this->body['ngo']=$this->Main_model->get_contact('ngo','emergency_contact',$emerg_lang);
      $this->body['ddr']=$this->Main_model->get_contact('ddr','emergency_personnel',$emerg_lang);
      $this->body['personnel']=$this->Main_model->get_contact('personnel','emergency_personnel',$emerg_lang);
      $this->body['members']=$this->Main_model->get_contact('members','emergency_personnel',$emerg_lang);

      $this->body['chairpersons']=$this->Main_model->get_contact('chairpersons','emergency_personnel',$emerg_lang);
      $this->body['chief']=$this->Main_model->get_contact('chief','emergency_personnel',$emerg_lang);
      $this->body['elected']=$this->Main_model->get_contact('elected','emergency_personnel',$emerg_lang);
      $this->body['municipal_ex']=$this->Main_model->get_contact('municipal_ex','emergency_personnel',$emerg_lang);
      $this->body['disaster']=$this->Main_model->get_contact('disaster','emergency_personnel',$emerg_lang);
      $this->body['nntds']=$this->Main_model->get_contact('nntds','emergency_personnel',$emerg_lang);



     $this->body['site_info']=$this->Main_model->site_setting_nep();


    }

    $this->body['urll']=$this->uri->segment(1);

    //language

    $this->load->view('header',$this->body);
    $this->load->view('contact',$this->body);
  //  $this->load->view('contact_static',$this->body);
    $this->load->view('footer',$this->body);

  }


  public function map_page(){


    $this->load->view('header');
    $this->load->view('mapt');
    $this->load->view('footer');


  }
  public function publication(){

    $this->load->model('Publication_model');
    $this->body['data']=$this->Publication_model->get_all_data();

    //language
    if($this->session->userdata('Language')==NULL){

      $this->session->set_userdata('Language','nep');
    }

    $lang=$this->session->get_userdata('Language');


    if($lang['Language']=='en'){
        $this->body['pub_lang']='en';

      $this->body['site_info']=$this->Main_model->site_setting_en();

    }else{

     $this->body['site_info']=$this->Main_model->site_setting_nep();
       $this->body['pub_lang']='nep';


    }
   $this->body['urll']=$this->uri->segment(1);
    //language
    $this->load->view('header',$this->body);
    $this->load->view('publication',$this->body);
    $this->load->view('footer',$this->body);
  }



  public function default_page()
  {

    $this->load->model('Report_model');
    $tbl='categories_tbl';
    $this->body['feature']=$this->general->get_tbl_data_result('*','featured_dataset',array('lang'=>'en','default'=>'1'));
    //views add
    $count=$this->Report_model->get_count_views('home');
    $add_count=$count['views_count']+1;
    $data=array(
        'views_count'=>$add_count,
      );
    $this->Report_model->update_views($count['id'],$data);
    //views add end
    //incident type count
    $incident_count=$this->Report_model->get_incident_count();
    //pp($incident_count);
    $incident_count_list=array();
    foreach($incident_count as $c){

      $d=array($c['incident_type']=>$c['count']);
      array_push($incident_count_list,$d);
    }
    $incident_count_datas = call_user_func_array('array_merge', $incident_count_list);
    ///pp($incident_count_datas);
    $this->body['report_inci']=$incident_count_datas;
    //exit();
    // incident count end
    //language
    if($this->session->userdata('Language')==NULL){
      $this->session->set_userdata('Language','nep');
    }
    $lang=$this->session->get_userdata('Language');
    if($lang['Language']=='en'){
        $language='en';
        $this->body['site_info'] = "";
        $this->body['feature']=$this->Main_model->get_feature();
        $this->body['feat_lang']='en';
        $this->body['hazard_data']=$this->general->get_tbl_data_result('id,category_name,category_photo,category_table,category_type,public_view,language',$tbl,array('category_type'=>'Hazard_Data','language'=>$language));
       // Exposure_Data
        $this->body['exposure_data']=$this->general->get_tbl_data_result('id,category_name,category_photo,category_table,category_type,public_view,language',$tbl,array('category_type'=>'Exposure_Data','language'=>$language),'id');
        $this->body['baseline_data']=$this->general->get_tbl_data_result('id,category_name,category_photo,category_table,category_type,public_view,language',$tbl,array('category_type'=>'Baseline_Data','language'=>$language),'id');
        $cat_tbl_list=$this->general->get_tbl_data_result('id,category_name,category_photo,category_table,category_type,public_view,language',$tbl,array('language'=>$language),'id');
        $tbl_list=array();
        foreach($cat_tbl_list as $list){
            if($this->db->table_exists($list['category_table'])) {
                array_push($tbl_list,$this->Main_model->count_dat_tbl($list['category_table']));
            }
        }
        $data_count_cat = call_user_func_array('array_merge', $tbl_list);
        $this->body['data_count_cat']=$data_count_cat;
    }else{
        $language='nep';
        $this->body['feature']=$this->Main_model->get_feature_nep();
        $this->body['feat_lang']='nep';
        $this->body['hazard_data']=$this->general->get_tbl_data_result('id,category_name,category_photo,category_table,category_type,public_view,language',$tbl,array('category_type'=>'Hazard_Data','language'=>$language));
        $this->body['exposure_data']=$this->general->get_tbl_data_result('id,category_name,category_photo,category_table,category_type,public_view,language',$tbl,array('category_type'=>'Exposure_Data','language'=>$language),'id');
        $this->body['baseline_data']=$this->general->get_tbl_data_result('id,category_name,category_photo,category_table,category_type,public_view,language',$tbl,array('category_type'=>'Baseline_Data','language'=>$language),'id');
        $cat_tbl_list=$this->general->get_tbl_data_result('id,category_name,category_photo,category_table,category_type,public_view,language',$tbl,array('language'=>$language),'id');
        $tbl_list=array();
      foreach($cat_tbl_list as $list){
        array_push($tbl_list,$this->Main_model->count_dat_tbl($list['category_table']));
      }
      $data_count_cat = call_user_func_array('array_merge', $tbl_list);
      $this->body['data_count_cat']=$data_count_cat;
    }
    $this->body['urll']=$this->uri->segment(1);
    //language
    //$this->body['emerg_contact']=$this->Upload_model->get_emergency_con();
    $this->load->view('header',$this->body);
    $this->load->view('main',$this->body);
    $this->load->view('footer',$this->body);
  }


  public function log(){

    $this->load->view('admin/login-page');

  }

  //about
  public function about_page(){

    $this->load->model('Report_model');

    $this->body['proj_data']=$this->Main_model->get_proj_data();
    $this->body['disaster']=$this->Main_model->get_about_where(1);
    $this->body['risk']=$this->Main_model->get_about_where(2);
    $this->body['utility']=$this->Main_model->get_about_where(3);
    $this->body['house']=$this->Main_model->get_about_where(4);
    $this->body['query']=$this->Main_model->get_about_where(5);

    //views add
    $count=$this->Report_model->get_count_views('about');

    $add_count=$count['views_count']+1;

    $data=array(
      'views_count'=>$add_count,

    );


    $this->Report_model->update_views($count['id'],$data);
    //language
    if($this->session->userdata('Language')==NULL){

      $this->session->set_userdata('Language','nep');
    }

    $lang=$this->session->get_userdata('Language');


    if($lang['Language']=='en'){

      $this->body['site_info']=$this->Main_model->site_setting_en();

    }else{

     $this->body['site_info']=$this->Main_model->site_setting_nep();


    }
   $this->body['urll']=$this->uri->segment(1);
    //language
    //views add end

    $this->load->view('header',$this->body);
    $this->load->view('about',$this->body);
    $this->load->view('footer',$this->body);



  }

  //datasets view page

  public function dataset_page(){


    //language
    if($this->session->userdata('Language')==NULL){

      $this->session->set_userdata('Language','nep');
    }

    $lang=$this->session->get_userdata('Language');


    if($lang['Language']=='en'){


  //datasetss english start
  if(isset($_POST['submit_search'])){

    $this->body['checked_data']=array();
    $this->body['search']=$this->input->post('search');
    $this->body['data']=$this->Main_model->get_category();
    $this->body['data_panel']=$this->Main_model->get_category();

  }else{

    $this->body['search']="";
    $this->body['checked_data']=array();
    $this->body['data']=$this->Main_model->get_category();
    $this->body['data_panel']=$this->Main_model->get_category();

  }
  if(isset($_POST['submit'])){

  unset($_POST['submit']);
  //var_dump($_POST);

   if($_POST == NULL){
       $this->body['checked_data']=array();
       $this->body['data']=$this->Main_model->get_category();
   }else{
      $checked_dataset=$_POST['dataset'];
      $this->body['data']=$this->Main_model->get_checked_dataset($checked_dataset);
      $this->body['checked_data']=$checked_dataset;

   }





    $this->body['data_panel']=$this->Main_model->get_category();


  }

  //datasetss english end

  $this->body['site_info']=$this->Main_model->site_setting_en();


    }else{

      //datasetss nepali start

      if(isset($_POST['submit_search'])){

        $this->body['checked_data']=array();
        $this->body['search']=$this->input->post('search');
        $this->body['data']=$this->Main_model->get_category_nep();
        $this->body['data_panel']=$this->Main_model->get_category_nep();

      }else{

        $this->body['search']="";
        $this->body['checked_data']=array();
        $this->body['data']=$this->Main_model->get_category_nep();
        $this->body['data_panel']=$this->Main_model->get_category_nep();

      }
      if(isset($_POST['submit'])){

      unset($_POST['submit']);
      //var_dump($_POST);

       if($_POST == NULL){
           $this->body['checked_data']=array();
           $this->body['data']=$this->Main_model->get_category_nep();
       }else{
          $checked_dataset=$_POST['dataset'];
          $this->body['data']=$this->Main_model->get_checked_dataset($checked_dataset);
          $this->body['checked_data']=$checked_dataset;

       }





        $this->body['data_panel']=$this->Main_model->get_category();


      }

      //datasetss nepali end


     $this->body['site_info']=$this->Main_model->site_setting_nep();


    }
    $this->body['urll']=$this->uri->segment(1);
    //language

    $this->load->view('header', $this->body);
    $this->load->view('datasets',$this->body);
    $this->load->view('footer', $this->body);


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

  public function inventory(){
    //language
    if($this->session->userdata('Language')==NULL){

      $this->session->set_userdata('Language','nep');
    }

    $lang=$this->session->get_userdata('Language');


    if($lang['Language']=='en'){

      $this->body['site_info']=$this->Main_model->site_setting_en();

    }else{

     $this->body['site_info']=$this->Main_model->site_setting_nep();


    }
    $this->body['urll']=$this->uri->segment(1);
    //language
    $this->load->view('header', $this->body);
    $this->load->view('inventory');
    $this->load->view('footer', $this->body);


  }

  public function get_csv_emergency(){

    $this->load->dbutil();

    $this->load->helper('file');
    $this->load->helper('download');

    array_map('unlink', glob("uploads/emergency_personnel/file/*.csv"));


    $type=$this->input->get('type');
    $namee=$this->input->get('name');
    $tbl=$this->input->get('tbl');





    //echo 'asdasd';


    $report=$this->Main_model->get_contact_csv($type,$tbl);











    /*  pass it to db utility function  */
    $new_report = $this->dbutil->csv_from_result($report);
    //var_dump(mb_convert_encoding($new_report, 'UTF-8', 'auto'));
  //  exit();
    $name = $namee.'.csv';
    /*  Now use it to write file. write_file helper function will do it */
    file_put_contents('uploads/emergency_personnel/file/'.$name,$new_report);

    $data=file_get_contents('uploads/emergency_personnel/file/'.$name);
    force_download($name,$data);

    // $path='uploads/csv/'.$name;
    // echo $path;
    // unlink($path);
  }



}
