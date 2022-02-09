<?
class Service_m extends CI_Model{
	public function getservice()
	{
		$sql="select * from service";   
		return $this->db->query($sql)->result();
	}
	public function getrow($no)
	{
		$sql="select * from service where no like $no";   
		return $this->db->query($sql)->row();
	}
	public function getreplenum($no)
	{
		$sql="select * from service_reple where service_no like $no";
		return $this->db->query($sql)->num_rows();
	}
	public function getreple($no)
	{
		$sql="select * from service_reple where service_no like $no order by no DESC";
		return $this->db->query($sql)->result();
	}
	public function deletereple($no)
	{
		$sql="delete from service_reple where no like $no";
		return  $this->db->query($sql);
	}
	public function insertreple($row)
	{
		return $this->db->insert("service_reple",$row);
	}
}
?>
