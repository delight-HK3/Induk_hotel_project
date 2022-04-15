<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

 class Contact_m extends CI_Model{
	public function getrow($no)  
	{
		$sql="select * from questions where no=$no";
		return $this->db->query($sql)->row();
	}	
	public function getlist()
	{
        	$sql="select * from questions order by no";
        	return $this->db->query($sql)->result();              
    	}
	public function insertrow($row){
		return $this->db->insert("questions",$row);
	}
	public function geteditrow($no)
	{
        	$sql="select * from questions where no='$no'";
        	return $this->db->query($sql)->row();
	}
	public function deleterow($no)
	{
        	$sql="delete from questions where no=$no";
        	return $this->db->query($sql);
	}
}
?>
