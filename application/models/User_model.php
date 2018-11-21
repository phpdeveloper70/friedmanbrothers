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

}
