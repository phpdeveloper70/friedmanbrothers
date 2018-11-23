<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Front_model extends CI_Model
{
  function get_top_category()
  {
    //SELECT * FROM departments WHERE DeptType='Products' AND published_state='yes' ORDER BY DisplayOrder
    $this->db->where('DeptType','Products');
    $this->db->where('published_state','yes');
    $this->db->order_by('DisplayOrder');
    $data = $this->db->get('departments');
    return $data->result();
  }

  function get_product_list($dept_id,$cat_id)
  {
      //SELECT * FROM products WHERE DeptID='$dept' AND CatID='$cat' AND NOT published_state='no' ORDER BY $orderby;
      $this->db->where('DeptID',$dept_id);
      if(!empty($cat_id))
      {
          $this->db->where('CatID',$cat_id);
      }
      $this->db->where('published_state','yes');
      $data = $this->db->get('products');
      return $data->result();
  }

  function count_product_list($dept_id,$cat_id)
  {
      //SELECT * FROM products WHERE DeptID='$dept' AND CatID='$cat' AND NOT published_state='no' ORDER BY $orderby;
      $this->db->where('DeptID',$dept_id);
      $this->db->where('CatID',$cat_id);
      $this->db->where('published_state','yes');
      $data = $this->db->get('products');
      return count($data->result());
  }

  function get_department_category($dept_id)
  {
     //SELECT * FROM categories WHERE DeptID=? ORDER BY DisplayOrder;","i",array($id)
     $this->db->where('DeptID',$dept_id);
     $this->db->order_by('DisplayOrder');
     $data = $this->db->get('categories');
     return $data->result();
  }

  function get_category_by_id($cat_id)
  {
     //SELECT * FROM categories WHERE id=? ORDER BY DisplayOrder;","i",array($id)
     $this->db->where('id',$cat_id);
     $data = $this->db->get('categories');
     $this->db->where('published_state','yes');
     $this->db->order_by('DisplayOrder');
     return $data->result();
  }

  function get_department_category_single_id($dept_id)
  {
     //SELECT * FROM categories WHERE DeptID=? ORDER BY DisplayOrder;","i",array($id)
     $this->db->where('DeptID',$dept_id);
     $this->db->where('isHeader !=','x');
     $this->db->order_by('DisplayOrder');
     $data = $this->db->get('categories')->result();
     return (count($data)>0)?$data[0]->id:'';
  }

  function get_department_by_id($id)
  {
      //SELECT * FROM departments WHERE id=?
      $this->db->where('id',$id);
      $data = $this->db->get('departments');
      return $data->result();
  }
  /*----change on 22 nov by priyanka ====*/
function fetch_country()
 {
  $this->db->order_by("name", "ASC");
  $query = $this->db->get("countries");
  return $query->result();
 }

function fetch_country_name($id)
 {
  $this->db->where('id', $id);
  $query = $this->db->get("countries");
  return $query->row()->name;;
 }

  function fetch_country_code($id)
 {
  $this->db->where('id', $id);
  $query = $this->db->get("countries");
  return $query->row()->sortname;;
 }

function fetch_state($id)
 {
  $this->db->where('country_id', $id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('states');
  $output = '<option value="">Select State</option>';
  foreach($query->result() as $row)
  {
    //print_r($row);
   $output .= '<option value="'.$row->name.'">'.$row->name.'</option>';
  }
  return $output;
 }

 public function update_user($id,$data)
  {
    $this->db->where('id',$id);
    return $this->db->update('users',$data);
  }

  public function get_user_by_id($id)
  {
    $this->db->where('id',$id);
    $rows = $this->db->get('users')->result();
     return $rows;
  }

    public function get_address_by_user($id)
  {
    $this->db->where('UserID',$id);
    $rows = $this->db->get('contacts')->result();
     return $rows;
  }
	 public function search_products($keyword)
  {

    $this->db->like('ProdTitle',$keyword);
    $this->db->or_like('sku',$keyword);
   return $this->db->get('products')->result();

  }
}
