<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InventoryController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    if(($this->session->userdata('logged_in'))!=TRUE)
    {

      redirect('admin');
    }else{

    }


    $this->load->model('Inventory_model');
    $this->load->model('Table_model');

  }

//english start

  public function get_inventory(){

   $this->session->set_userdata('inventory_language','en');
  $cat=$this->input->get('cat');



    $this->body['data']=$this->Inventory_model->get_invetory_data($cat,'en');
      $this->body['cat']=$cat;

  //var_dump($this->body['data']);
  //admin check
  $admin_type=$this->session->userdata('user_type');

  $this->body['admin']=$admin_type;
  //admin check


    $this->load->view('admin/header',$this->body);
    $this->load->view('admin/inventory_tbl',$this->body);
    $this->load->view('admin/footer');



  }

  public function upload_csv_emerg(){



$table_name = 'inventory_tbl';
$cat= $this->input->get('cat');
$lang= $this->input->get('lang');
if (isset($_POST['submit'])) {

$max_id=$this->Table_model->get_max_id($table_name);





  $fields=$this->db->list_fields($table_name);

  unset($fields[0]);
  unset($fields[7]);
  unset($fields[8]);

  $field_name=implode(",",$fields);
  //var_dump($field_name);





  $f=$_FILES["uploadedfile"];
  $path=$f["tmp_name"];
  chmod($path, 0777);
  $filename=$f["name"];


// var_dump($path);
// var_dump($filename);
// var_dump($field_name);
// var_dump($table_name);

  $c=$this->Table_model->table_copy($path,$filename,$field_name,$table_name);


  if($c==1){


      $data=array(
        'category'=>$cat,
        'language'=>$lang,
      );
      $up=$this->Table_model->update_cat($max_id['id'],$data,$table_name);

    $this->session->set_flashdata('msg','Csv Was successfully Added');

    // if($table_name == 'emergency_contact'){
    //
    $lang=$this->session->get_userdata('inventory_language');
    if($lang['inventory_language']=='en'){

   redirect('get_inventory?cat='.$cat);

    }else{

      redirect('get_inventory_nep?cat='.$cat);

    }

    //
    // }else{
    //
    //       redirect('emergency_personnel?cat='.$cat);
    // }


  }else{

    // $this->session->set_flashdata('msg','Id number '.$id.' row data was deleted successfully');
    // //redirect('data_tables?tbl_name='.base64_encode($table_name));

  }

  // code...
} else {


  //admin check
  $admin_type=$this->session->userdata('user_type');

  $this->body['admin']=$admin_type;
  //admin check


  $this->load->view('admin/header',$this->body);
  $this->load->view('admin/upload_csv_emerg');
  $this->load->view('admin/footer');
}


  }


  public function delete_inventory(){

    $cat=$this->input->get('cat');
    $tbl='inventory_tbl';
  $lang=$this->session->get_userdata('inventory_language');

    $delete=$this->Inventory_model->delete($this->input->get('id'),$tbl);


    if($delete){

      $this->session->set_flashdata('msg','Successfully Deleted');

      if($lang['inventory_language']=='en'){

     redirect('get_inventory?cat='.$cat);

      }else{

        redirect('get_inventory_nep?cat='.$cat);

      }

    }

  }



  public function edit_inventory(){

    $cat=$this->input->get('cat');
    $tbl='inventory_tbl';

    $lang=$this->session->get_userdata('inventoey_language');
    if(isset($_POST['submit'])){

      unset($_POST['submit']);



      $update=$this->Inventory_model->update_emerg($this->input->post('id'),$_POST,$tbl);

      if($update){


        $this->session->set_flashdata('msg','Updated successfully');
        if($lang['inventoey_language']=='en'){

            redirect('get_inventory?cat='.$cat);
        }else{
            redirect('get_inventory_nep?cat='.$cat);

        }


      }else{

        //db error
      }


    }else{




      $this->body['e_data']=$this->Inventory_model->e_data(base64_decode($this->input->get('id')));
      //echo base64_decode($this->input->get('id'));
      // var_dump($this->body['e_data']);

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check


      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/edit_inventory',$this->body);
      $this->load->view('admin/footer');

    }


  }
//english end


//nepali start
public function get_inventory_nep(){

 $this->session->set_userdata('inventory_language','nep');
$cat=$this->input->get('cat');



  $this->body['data']=$this->Inventory_model->get_invetory_data($cat,'nep');
    $this->body['cat']=$cat;

//var_dump($this->body['data']);
//admin check
$admin_type=$this->session->userdata('user_type');

$this->body['admin']=$admin_type;
//admin check


  $this->load->view('admin/header',$this->body);
  $this->load->view('admin/inventory_tbl_nep',$this->body);
  $this->load->view('admin/footer');



}

//nepali end

}//claSS END
