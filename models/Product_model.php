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
	
	  	/*=====Added By priiyanka on 28 nov 18 for add whishlist============*/

		public function check_wishlist_data($userid,$prodid)
	{
		$this->db->where('userid',$userid);
		$this->db->where('prodid',$prodid);
		return $this->db->get('favorites')->result();
	}
	public function save_wishlist_data($data)
	{
		$this->db->insert('favorites',$data);
		return $this->db->insert_id();
	}
 	
 	public function get_wishlist_data($userid)
	{ 
		$this->db->select("product.*, wish.id as wish_id, wish.userid, wish.prodid");
		$this->db->from('favorites as wish');
		$this->db->join('products as product','product.id = wish.prodid','inner');
		$this->db->where('wish.userid',$userid);
		//$this->db->limit(4);
		return $this->db->get()->result();
	}
	
	public function delete_wishlist($id)
	{    // print_R($id);die;
		$this->db->where('prodid',$id);
		$this->db->delete('favorites');
	}
 	
}
