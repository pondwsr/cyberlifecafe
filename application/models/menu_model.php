<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu_model extends CI_Model{
	public function read_menu(){
		return $this->db
		->join('category','category.category_id  = menu.mcategory_id ','left') //การ จอย ตาราง ถ้าชื่อตารางเหมือนกันให้ใช้ ชื่อตาราง.ชื่อฟิว
		->get('menu') //ชื่อตาราง ที่เราจะใช้
		->result_array(); //จากนั้นคืนค่าเป็น array
	}
}
