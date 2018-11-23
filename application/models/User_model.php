<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model
{

  function user_login($username,$password)
  {
      $this->db->where('name',$username);
      //$this->db->or_where('mail_user',$username);
      $this->db->where('password',md5($password));
      $data = $this->db->get('users');
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
   function add_details($data_array){
     $this->db->insert('contacts',$data_array);
        
   }

}
