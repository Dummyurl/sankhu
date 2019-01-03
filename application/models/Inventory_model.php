<?php
class Inventory_model extends CI_Model {



  public function get_invetory_data($cat,$lang){

  $this->db->select('*');
  $this->db->where('language',$lang);
  $this->db->where('category',$cat);

  $query=$this->db->get('inventory_tbl');
  return $query->result_array();


  }
  public function delete($id,$tbl){

  $this->db->where('id',$id);
  return $this->db->delete($tbl);

  }


  public function e_data($id){

  $this->db->select('*');
  $this->db->where('id',$id);
  $query=$this->db->get('inventory_tbl');
  return $query->row_array();

  }

  public function update_emerg($id,$data,$tbl){

    $this->db->where('id',$id);
    return $this->db->update($tbl,$data);


  }




}
