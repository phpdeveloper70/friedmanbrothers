<?php 
class Product_model extends CI_Model
{	
	protected $table = 'products';
	/*start forum product model*/
	public function save_product($postdata)
	{
		$this->db->insert($this->table,$postdata);
	}
	public function get_all_product()
	{
		return $this->db->get($this->table)->result();
	}
}