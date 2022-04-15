<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant_m extends CI_Model    {
	public function getresult($no)
	{
		$sql="select * from restaurant where no like $no";
		return $this->db->query($sql)->row();
	}
	public function getreplenum($no)
	{
		$sql="select * from restaurant_reple where restaurant_no like $no";
		return $this->db->query($sql)->num_rows();
	}
	public function getreple($no)
	{
		$sql="select * from restaurant_reple where restaurant_no like $no order by no DESC";
		return $this->db->query($sql)->result();
	}
	public function getrestaurant()
	{
		$sql="select * from restaurant";
		return $this->db->query($sql)->result();
	}
	public function getmember()
	{
		$sql="select * from member";
		return $this->db->query($sql)->row();
	}
	public function insertrow($row)
	{
		return $this->db->insert("jangbumeal",$row);
	}
	public function deletereple($no)
	{
		$sql="delete from restaurant_reple where no like $no";
		return  $this->db->query($sql);
	}
	public function insertreple($row)
	{
		return $this->db->insert("restaurant_reple",$row);
	}
    }
?>
