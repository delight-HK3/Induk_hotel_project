<?
    class Mypage_m extends CI_Model     // 모델 클래스 선언
    {
        public function getrow($uid){ // member 정보 불러오기
			$sql="select * from member where uid like '$uid'";
			return  $this->db->query($sql)->row();
		}
		public function geteditrow($no){ // member 수정정보 불러오기
			$sql="select * from member where no like '$no'";
			return  $this->db->query($sql)->row();
		}
		public function updaterow($row, $no){ // member 업데이트
			$where=array("no"=>$no);
			return $this->db->update("member",$row,$where);
		}

		public function getjangburoom($no){ //room 장부 불러오기
			$sql="select jangburoom.*,
					room.name as room_name from 
					jangburoom left join room on 
					jangburoom.room_no=room.no where member_no like $no and state = 1";
			return  $this->db->query($sql)->result();
		}
		public function getjangbumeal($no){ //meal 장부 불러오기
			$sql="select jangbumeal.*,
					restaurant.name as restaurant_name from 
					jangbumeal left join restaurant on 
					jangbumeal.restaurant_no=restaurant.no where member_no like $no and state = 1";
			return  $this->db->query($sql)->result();
		}

		public function getjangburoom_nostate($no){ //상세정보용 jangburoom
			$sql="select jangburoom.*,
					room.name as room_name from 
					jangburoom left join room on 
					jangburoom.room_no=room.no where jangburoom.no like $no";
			return  $this->db->query($sql)->row();	
		}
		public function getjangbumeal_nostate($no){ //상세정보용 jangbumeal
			$sql="select jangbumeal.*,
					restaurant.name as meal_name from 
					jangbumeal left join restaurant on 
					jangbumeal.restaurant_no=restaurant.no where jangbumeal.no like $no";
			return  $this->db->query($sql)->row();	
		}

		public function getroom_detail_room($no){ //상세정보용 room
			$sql="select * from room where no like $no";
			return $this->db->query($sql)->row();	
		}
		
		public function jangbu_room_update($row, $no){ //업데이트 room
			$where=array("no"=>$no);
			return $this->db->update("jangburoom",$row,$where);
		}
		public function jangbu_meal_update($row, $no){ //업데이트 meal
			$where=array("no"=>$no);
			return $this->db->update("jangbumeal",$row,$where);
		}

    }
?>
