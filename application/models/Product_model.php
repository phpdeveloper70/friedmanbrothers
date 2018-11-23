<?php 
class Product_model extends CI_Model
{	
	protected $table = 'products';
	public function get_all_product()
	{
	 return $this->db->get($this->table)->result();
	}
	public function save_product($data)
	{
		$this->db->insert($this->table,$data);
	}
	public function get_product_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
	}
	
    public function update_product_by_id($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}
		function delete_product_by_id($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
    public function get_all_dept()
	{
		$this->db->order_by("id");
	 return $this->db->get('departments')->result();
	}


	
	
}
