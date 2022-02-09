<?
class Reservation_m extends CI_Model{
	public function getgubun()
	{
		$sql="select * from room_gubun";    
		return $this->db->query($sql)->result();
	}
        public function getroom()
	{
		$sql="select room.*,
			room_gubun.name as gubun_name from 
			room left join room_gubun on 
			room.gubun_no=room_gubun.no";   
		return $this->db->query($sql)->result();
	}
	public function getselectroom($room)
	{
		$sql="select * from room where name like '%$room%'";
		return $this->db->query($sql)->row();
	}
	public function getmember($no)
	{
		$sql="select * from member where no like $no";
		return $this->db->query($sql)->row();
	}
	public function insertrow($row)
	{
		return $this->db->insert("jangburoom",$row);
	}
}
?>
