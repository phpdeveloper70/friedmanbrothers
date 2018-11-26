<?php 
class Category_model extends CI_Model
{	
	protected $table = 'categories';
	public function get_all_category()
	{
		{ 
		$this->db->select('categories.*,departments.DeptTitle'); 
		$this->db->from("categories");
		$this->db->join('departments', 'departments.id = categories.DeptID', 'left');
		$query=$this->db->get();
		    if($query->num_rows() > 0)
		    {
		        return $query->result();
		    }
		     return false;
		}

	 return $this->db->get($this->table)->result();
	}
	public function save_category($data)
	{
		$this->db->insert($this->table,$data);
	}
	public function get_category_by_id($id)
	{
		$this->db->where('id',$id);
		return $this->db->get($this->table)->result();
	}
	
    public function update_category_by_id($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}
		function delete_category_by_id($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
    public function get_all_dept()
	{
		$this->db->order_by("id");
	 return $this->db->get('departments')->result();
	}

    public function check_child_category($id)
	{
		$this->db->where('DeptID',$id);
		return $this->db->get($this->table)->result();
	}
	public function get_all_child_category($DeptID,$level =0)
	{
		$this->db->where('DeptID',$DeptID);

		$query_data = $this->db->get($this->table)->result();
		
		
		if(count($query_data)>0)
		{		
			$level++;
			foreach($query_data as $data)
			{
				//$selected = ($id!=0 && $id==$data->id)?'selected':'';
				echo '<option value="'.$data->id.'">';
				echo str_repeat('--',$level-1).' '.$data->CatTitle;
				$child = $this->check_child_category($data->id);
				if(count($child))
				{
					$this->get_all_child_category($data->id,$level);
				}
				echo '</option>';
			}					
		}	
	}
	
	
}
