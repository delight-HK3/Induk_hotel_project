<?
class Clientmember_m extends CI_Model{
	public function insert($row)
	{
		return $this->db->insert("member",$row);
	}
	public function searchid($uid){
		$sql = "select * from member where uid like '$uid'";
		$query = $this->db->query($sql);
		if( $query->num_rows() > 0 ){ //아이디 중복
			return "no";
		} else { //아이디 중복없음
			return "ok";
		}
	}
	public function getrow($uid,$pwd)//정보목록보기
        {
		$sql="select * from member where uid='$uid' and pwd='$pwd'";
		$query = $this->db->query($sql);
		if( $query->num_rows() > 0 ){ //정보 있음
			return $this->db->query($sql)->row();
		} else { //정보 없음 
			return "no";
		}
        }
	public function getroom(){
		$sql="select * from room";   
		return $this->db->query($sql)->result();
	}
	public function getrestaurant(){
		$sql="select * from restaurant";   
		return $this->db->query($sql)->result();
	}
	public function getservice(){
		$sql="select * from service";   
		return $this->db->query($sql)->result();
	}
}
?>
