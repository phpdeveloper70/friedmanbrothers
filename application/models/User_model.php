<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model
{

  function user_login($username,$password)
  {
      $this->db->select('users.*,contacts.email'); 
      $this->db->from("users");
      $this->db->join('contacts', 'contacts.UserID = users.id', 'left');
      $this->db->where('users.name',$username);
      $this->db->or_where('contacts.email',$username);
      $this->db->where('users.password',md5($password));
      $this->db->where('users.user_status',"verified");
      $data = $this->db->get();
       return $data->result();
       
  }

  function get_user_by_id($id)
  {
      $this->db->where('id',$id);
      $data = $this->db->get('users');
      return $data->result();
  }

  function insert_user($user_data)
  {
      $this->db->insert('users',$user_data);
      $uid = $this->db->insert_id();

      //name,row_type,user_joined
      //$this->insert_user_info($user_info);
      return $uid;
  }

  function insert_user_info($user_info_data)
  {
      $this->db->insert('user_info',$user_info_data);
      $uid = $this->db->insert_id();
      return $uid;
  }

  function insert_user_contact($user_contacts_data)
  {
      $this->db->insert('contacts',$user_contacts_data);
      $uid = $this->db->insert_id();
      return $uid;
  }

   function update_user_contact($user_contacts_data,$user_id)
  {
      $this->db->where('id',$user_id);
      return $this->db->update('contacts',$user_contacts_data);
  }
   function add_details($data_array){
     $this->db->insert('contacts',$data_array);
        
   }


  function user_log($firstname,$lastname ,$email)
  {
      $this->db->where('firstname',$firstname);
      $this->db->where('lastname',$lastname);
      $this->db->where('email',$email);
      //$this->db->where('email2',$email);
      $this->db->order_by("id", "asc");
      $data = $this->db->get('contacts');
      return $data->result();
  }

   public function update_user($user_id,$data)
  {
    $this->db->where('id',$user_id);
    return $this->db->update('users',$data);
  }
   public function db_update($id)
  {

     $this->db->where('id',$id);
     $this->db->set('user_status',"verified");
     return $this->db->update('users');
   
  }


  

}
