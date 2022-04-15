<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Room_m extends CI_Model{
	public function getresult($no)
	{
		$sql="select * from room where no like $no";
		return $this->db->query($sql)->row();
	}
	public function getreplenum($no)
	{
		$sql="select * from room_reple where room_no like $no";
		return $this->db->query($sql)->num_rows();
	}
	public function getreple($no)
	{
		$sql="select * from room_reple where room_no like $no order by no DESC";
		return $this->db->query($sql)->result();
	}
	public function getroom()
	{
		$sql="select * from room";
		return $this->db->query($sql)->result();
	}
	public function deletereple($no)
	{
		$sql="delete from room_reple where no like $no";
		return  $this->db->query($sql);
	}
	public function insertreple($row)
	{
		return $this->db->insert("room_reple",$row);
	}
}
?>
