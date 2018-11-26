<?php 
class Product_model extends CI_Model
{	
	protected $table = 'products';
	 function get_all_product()
		{
		     $this->db->select('products.*,categories.CatTitle,departments.DeptTitle');
		     $this->db->from("products");
		     $this->db->join('categories', 'products.CatID = categories.id', 'left');
		     $this->db->join('departments', 'products.DeptID = departments.id', 'left');
		     $query=$this->db->get();
		          if($query->num_rows() > 0)
		          {
		          return $query->result();
		          }
		     return false;
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
