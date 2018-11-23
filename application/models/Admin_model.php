<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model
{
 

		function admin_login($username,$password)
		  {
		      $this->db->where('name',$username);
		      //$this->db->or_where('mail_user',$username);
		      $this->db->where('password',md5($password));
		      $data = $this->db->get('users');
		      return $data->result();
		  }




    public function count_all_users()
	{
	 	 $this->db->from('users');
         return $num_rows = $this->db->count_all_results();
    }
    public function get_all_users()
	{
	 return $this->db->get('users')->result();
	}
	public function get_all_admin()
	{
		$this->db->where('usertype','admin');
		return $this->db->get('users')->result();
	}
    public function count_all_categories()
	 	{
	 	 $this->db->from('categories');
         return $cat_rows = $this->db->count_all_results();
    	 }
    public function get_all_user_type()
	{
		$this->db->select('usertype'); 
		$this->db->from('users');
		$this->db->group_by('usertype');   
		return $this->db->get()->result();
	}
	public function save_user_data($data)
	{
		$this->db->insert('users',$data);
	}
     
	
}

