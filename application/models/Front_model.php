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


}
