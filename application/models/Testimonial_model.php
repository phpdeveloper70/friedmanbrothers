<?php 
class Testimonial_model extends CI_Model
{	
	protected $table = 'tbl_testimonials';
	public function add_testimonial($data)
	{
		$this->db->insert($this->table,$data);
	}
	public function get_all_testimonial()
	{
		return $this->db->get($this->table)->result();
	}
	public function get_testimonial_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
	}
	public function update_testimonial_by_id($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}
	
	public function get_all_active_testimonial()
	{
		$this->db->where('status',1);
		return $this->db->get($this->table)->result();
	}
	
	public function delete_testimonial_by_id($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
	
}
