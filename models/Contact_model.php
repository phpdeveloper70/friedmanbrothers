<?php 
class Contact_model extends CI_Model
{	
	protected $table = 'contacts';
	public function get_all_contact()
	{
	 return $this->db->get($this->table)->result();
	}
    public function get_user_profile($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
	}
		public function get_contact_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
	}

	public function update_contact_by_id($id)
	{    
		$this->db->where('id',$id);
	 $this->db->get($this->table)->result();
	}


	/*=======*/

	
	
}
