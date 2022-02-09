 <?
 class Contact_m extends CI_Model                            // 모델 클래스 선언
    {
		function getrow($no)  {
		$sql="select * from questions where no=$no";
		return  $this->db->query($sql)->row();
		}
		
		public function getlist()
    {
        $sql="select * from questions order by no";
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }

		public function insertrow($row){
			return $this->db->insert("questions",$row);
		}

		public function geteditrow($no)
		{
        $sql="select * from questions where no='$no'";
        return  $this->db->query($sql)->row();
		}
	

		public function deleterow($no)
		{
        $sql="delete from questions where no=$no";
        return  $this->db->query($sql);
		}



	}
?>