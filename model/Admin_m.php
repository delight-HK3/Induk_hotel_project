<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_m extends CI_Model     // 모델 클래스 선언
{
    //index page 파트
    public function getAdminPageCount()
    {
        $sql = "SELECT COUNT(*) AS mb_count FROM member";
        $data = $this->db->query($sql)->row();

        $result['mb_count'] = $data->mb_count;

        $sql = "SELECT COUNT(*) AS rm_count FROM room";
        $data = $this->db->query($sql)->row();

        $result['rm_count'] = $data->rm_count;

        $sql = "SELECT COUNT(*) AS sv_count FROM service";
        $data = $this->db->query($sql)->row();

        $result['sv_count'] = $data->sv_count;

        $sql = "SELECT COUNT(*) AS rt_count FROM restaurant";
        $data = $this->db->query($sql)->row();

        $result['rt_count'] = $data->rt_count;

		$sql = "SELECT COUNT(*) AS qs_count FROM questions";
        $data = $this->db->query($sql)->row();

        $result['qs_count'] = $data->qs_count;

        return $result;
    }

    public function getArealist($year)
    {
        /*$sql="select room.name as room_name,
			sum( if(month(checkinday)=0, jangburoom.price, 0)) as s1,
			sum( if(month(checkinday)=2, jangburoom.price, 0)) as s2,
			sum( if(month(checkinday)=3, jangburoom.price, 0)) as s3,
			sum( if(month(checkinday)=4, jangburoom.price, 0)) as s4,
			sum( if(month(checkinday)=5, jangburoom.price, 0)) as s5,
			sum( if(month(checkinday)=6, jangburoom.price, 0)) as s6,
			sum( if(month(checkinday)=7, jangburoom.price, 0)) as s7,
			sum( if(month(checkinday)=8, jangburoom.price, 0)) as s8,
			sum( if(month(checkinday)=9, jangburoom.price, 0)) as s9,
			sum( if(month(checkinday)=10, jangburoom.price, 0)) as s10,
			sum( if(month(checkinday)=11, jangburoom.price, 0)) as s11,
			sum( if(month(checkinday)=12, jangburoom.price, 0)) as s12
			from jangburoom left join room on jangburoom.room_no=room.no
			where year(jangburoom.checkinday)=$year
			group by jangburoom.room_no
			order by room.name";*/

        $sql="select
			sum( if(month(checkinday)=1, jangburoom.price, 0)) as s1,
			sum( if(month(checkinday)=2, jangburoom.price, 0)) as s2,
			sum( if(month(checkinday)=3, jangburoom.price, 0)) as s3,
			sum( if(month(checkinday)=4, jangburoom.price, 0)) as s4,
			sum( if(month(checkinday)=5, jangburoom.price, 0)) as s5,
			sum( if(month(checkinday)=6, jangburoom.price, 0)) as s6,
			sum( if(month(checkinday)=7, jangburoom.price, 0)) as s7,
			sum( if(month(checkinday)=8, jangburoom.price, 0)) as s8,
			sum( if(month(checkinday)=9, jangburoom.price, 0)) as s9,
			sum( if(month(checkinday)=10, jangburoom.price, 0)) as s10,
			sum( if(month(checkinday)=11, jangburoom.price, 0)) as s11,
			sum( if(month(checkinday)=12, jangburoom.price, 0)) as s12
			from jangburoom
			where year(jangburoom.checkinday)=$year and state like 1";

        //데이터 뽑기
        $result = $this->db->query($sql)->row();

        //배열로, 1월부터 순서대로 출력되고 있음
        foreach( $result AS $month ){
            $arr[] = $month;
        }

        //차트에 사용하기 좋게 데이터를 스트링으로 묶어서 출력
        return @implode( ', ', $arr );// 쿼리실행, 결과 리턴
    }

    public function getBarlist($year)
    {

//        $sql="SELECT DATE_FORMAT(jangbumeal.meal_day, '%m') AS date, count(*) AS cnt FROM jangbumeal
//        GROUP BY DATE_FORMAT(jangbumeal.meal_day, '%m') ORDER BY date DESC";
//
//        return $this->db->query($sql)->result();
//
////        $result = $this->db->query($sql)->result();
////        echo('<pre>');
////        print_r($result);
////        echo('</pre>');
////        exit;
///
        //1월
        $sql = "SELECT COUNT(*) AS c1_meal FROM jangbumeal
        where month(meal_day)=1 and year(meal_day)=$year and state like 1";
        $data = $this->db->query($sql)->row();
        $result['c1_meal'] = $data->c1_meal;
        //2월
        $sql = "SELECT COUNT(*) AS c2_meal FROM jangbumeal
        where month(meal_day)=2 and year(meal_day)=$year and state like 1";
        $data = $this->db->query($sql)->row();
        $result['c2_meal'] = $data->c2_meal;
        //3월
        $sql = "SELECT COUNT(*) AS c3_meal FROM jangbumeal
        where month(meal_day)=3 and year(meal_day)=$year and state like 1";
        $data = $this->db->query($sql)->row();
        $result['c3_meal'] = $data->c3_meal;
        //4월
        $sql = "SELECT COUNT(*) AS c4_meal FROM jangbumeal
        where month(meal_day)=4 and year(meal_day)=$year and state like 1";
        $data = $this->db->query($sql)->row();
        $result['c4_meal'] = $data->c4_meal;
        //5월
        $sql = "SELECT COUNT(*) AS c5_meal FROM jangbumeal
        where month(meal_day)=5 and year(meal_day)=$year and state like 1";
        $data = $this->db->query($sql)->row();
        $result['c5_meal'] = $data->c5_meal;
        //6월
        $sql = "SELECT COUNT(*) AS c6_meal FROM jangbumeal
        where month(meal_day)=6 and year(meal_day)=$year and state like 1";
        $data = $this->db->query($sql)->row();
        $result['c6_meal'] = $data->c6_meal;
        //7월
        $sql = "SELECT COUNT(*) AS c7_meal FROM jangbumeal
        where month(meal_day)=7 and year(meal_day)=$year and state like 1";
        $data = $this->db->query($sql)->row();
        $result['c7_meal'] = $data->c7_meal;
        //8월
        $sql = "SELECT COUNT(*) AS c8_meal FROM jangbumeal
        where month(meal_day)=8 and year(meal_day)=$year and state like 1";
        $data = $this->db->query($sql)->row();
        $result['c8_meal'] = $data->c8_meal;
        //9월
        $sql = "SELECT COUNT(*) AS c9_meal FROM jangbumeal
        where month(meal_day)=9 and year(meal_day)=$year and state like 1";
        $data = $this->db->query($sql)->row();
        $result['c9_meal'] = $data->c9_meal;
        //10월
        $sql = "SELECT COUNT(*) AS c10_meal FROM jangbumeal
        where month(meal_day)=10 and year(meal_day)=$year and state like 1";
        $data = $this->db->query($sql)->row();
        $result['c10_meal'] = $data->c10_meal;
        //11월
        $sql = "SELECT COUNT(*) AS c11_meal FROM jangbumeal
        where month(meal_day)=11 and year(meal_day)=$year and state like 1";
        $data = $this->db->query($sql)->row();
        $result['c11_meal'] = $data->c11_meal;
        //12월
        $sql = "SELECT COUNT(*) AS c12_meal FROM jangbumeal
        where month(meal_day)=12 and year(meal_day)=$year and state like 1";
        $data = $this->db->query($sql)->row();
        $result['c12_meal'] = $data->c12_meal;

//        $sql="SELECT MONTH( meal_day ) AS month_date, COUNT(*) AS c1_meal FROM jangbumeal
//           WHERE
//              meal_day LIKE '".$year."' AND
//            GROUP BY month_date
//              ORDER BY month_date ASC";
//        $result = $this->db->query($sql)->row();
//
//        echo('<pre>');
//        print_r($result);
//        echo('</pre>');
//        exit;

        return $result;
    }

    public function getPielist($year,$month)
    {
//        $sql = "SELECT room_no COUNT(*) AS cm_room FROM jangburoom
//        where month(checkinday)=$month and year(checkinday)=$year";

        $sql = "SELECT COUNT(*) AS no_room1 FROM jangburoom
        where month(checkinday)=$month and year(checkinday)=$year and room_no = 1 and state like 1";
        $data = $this->db->query($sql)->row();
        $result['no_room1'] = $data->no_room1;

        $sql = "SELECT COUNT(*) AS no_room2 FROM jangburoom
        where month(checkinday)=$month and year(checkinday)=$year and room_no = 2 and state like 1";
        $data = $this->db->query($sql)->row();
        $result['no_room2'] = $data->no_room2;

        $sql = "SELECT COUNT(*) AS no_room3 FROM jangburoom
        where month(checkinday)=$month and year(checkinday)=$year and room_no = 3 and state like 1";
        $data = $this->db->query($sql)->row();
        $result['no_room3'] = $data->no_room3;

        $sql = "SELECT COUNT(*) AS no_room4 FROM jangburoom
        where month(checkinday)=$month and year(checkinday)=$year and room_no = 4 and state like 1";
        $data = $this->db->query($sql)->row();
        $result['no_room4'] = $data->no_room4;

        $sql = "SELECT COUNT(*) AS no_room5 FROM jangburoom
        where month(checkinday)=$month and year(checkinday)=$year and room_no = 5 and state like 1";
        $data = $this->db->query($sql)->row();
        $result['no_room5'] = $data->no_room5;

		 $sql = "SELECT COUNT(*) AS no_room6 FROM jangburoom
        where month(checkinday)=$month and year(checkinday)=$year and room_no = 6 and state like 1";
        $data = $this->db->query($sql)->row();
        $result['no_room6'] = $data->no_room6;

        return $result;

//        echo('<pre>');
//        print_r($result);
//        echo('</pre>');
//        exit;

    }


    public function rowcount( $text1)
    {
        $sql="select room_no from jangburoom
			where year(checkinday)=$text1 group by room_no";

        return $this->db->query($sql)->num_rows();
    }

    //member 파트
    public function getlist()
    {
        $sql="select * from member order by name";
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }

    public function getrow($no)
    {
        $sql="select * from member where no=$no";
        return  $this->db->query($sql)->row();
    }

    public function geteditrow($no)
    {
        $sql="select * from member where no='$no'";
        return  $this->db->query($sql)->row();
    }

    public function updaterow($row, $no)
    {
        $where=array("no"=>$no);
        return $this->db->update("member",$row,$where);
    }

    public function deleterow($no)
    {
        $sql="delete from member where no=$no";
        return  $this->db->query($sql);
    }

    //Room 파트
    public function getRoomlist()
    {
        $sql="select room.*, room_gubun.name as room_gubun_name
            from room left join room_gubun on room.gubun_no=room_gubun.no
            order by room.name";
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }

    public function getRoomrow($no)
    {
        $sql="select room.*, room_gubun.name as room_gubun_name
            from room left join room_gubun on room.gubun_no=room_gubun.no
            where room.no=$no";
        return $this->db->query($sql)->row();
    }

    public function getRoomeditrow($no)
    {
        $sql="select room.*, room_gubun.name as room_gubun_name
            from room left join room_gubun on room.gubun_no=room_gubun.no
            where room.no=$no";
        return  $this->db->query($sql)->row();
    }

    function getlist_gubun()
    {
        $sql="select * from room_gubun order by no";
        return $this->db->query($sql)->result();
    }

    public function deleteRoomrow($no)
    {
        $sql="delete from room where no=$no";
        return  $this->db->query($sql);
    }

    public function updateRoomrow($row, $no)
    {
        $where=array("no"=>$no);
        return $this->db->update("room",$row,$where);
    }

    public function insertRoom($data)
    {
        return $this->db->insert("room",$data);
    }

    //Gubun 파트

    public function getGubunlist()
    {
        $sql="select * from room_gubun order by no";
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }

    public function getGubunrow($no)
    {
        $sql="select * from room_gubun where no=$no";
        return  $this->db->query($sql)->row();
    }

    public function geteditGubunrow($no)
    {
        $sql="select * from room_gubun where no='$no'";
        return  $this->db->query($sql)->row();
    }

    public function insertGubun($data)
    {
        return $this->db->insert("room_gubun",$data);
    }

    public function updateGubunrow($row, $no)
    {
        $where=array("no"=>$no);
        return $this->db->update("room_gubun",$row,$where);
    }

    public function deleteGubunrow($no)
    {
        $sql="delete from room_gubun where no=$no";
        return  $this->db->query($sql);
    }

    //restaurant 파트

    public function getRestaurantlist()
    {
        $sql="select * from restaurant order by no";
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }

    public function insertRestaurant($data)
    {
        return $this->db->insert("restaurant",$data);
    }

    public function getRestaurantrow($no)
    {
        $sql="select * from restaurant where no=$no";
        return  $this->db->query($sql)->row();
    }

    public function deleteRestaurantrow($no)
    {
        $sql="delete from restaurant where no=$no";
        return  $this->db->query($sql);
    }

    public function updateRestaurantrow($row, $no)
    {
        $where=array("no"=>$no);
        return $this->db->update("restaurant",$row,$where);
    }
    
    //service 파트
    
    public function getservicelist()
    {
        $sql="select * from service order by no";
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }

    public function insertservice($data)
    {
        return $this->db->insert("service",$data);
    }

    public function getservicerow($no)
    {
        $sql="select * from service where no=$no";
        return  $this->db->query($sql)->row();
    }

    public function deleteservicerow($no)
    {
        $sql="delete from service where no=$no";
        return  $this->db->query($sql);
    }

    public function updateservicerow($row, $no)
    {
        $where=array("no"=>$no);
        return $this->db->update("service",$row,$where);
    }

    //Jangbu_restaurant 파트

    public function getjrestaurantlist()
    {
        $sql="select jangbumeal.*, restaurant.name as restaurant_name, member.name as member_name from jangbumeal 
            left join restaurant on jangbumeal.restaurant_no=restaurant.no
            left join member on jangbumeal.member_no=member.no
            order by meal_day";
        /*$sql="SELECT A.*, B.`Explanation`, C.name FROM `jangbumeal` AS A
           LEFT JOIN `restaurant` AS B ON `B`.`no`=`A`.`rastaurant_no` 
            LEFT JOIN `member` AS C ON `C`.`no`=`A`.`member_no` 
        WHERE 1
        ORDER BY `meal_day`";*/
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }

    public function getjrestaurantrow($no)
    {
        $sql="select jangbumeal.*, restaurant.name as restaurant_name, member.name as member_name from jangbumeal 
            left join restaurant on jangbumeal.restaurant_no=restaurant.no
            left join member on jangbumeal.member_no=member.no
            where jangbumeal.no=$no";
        return $this->db->query($sql)->row();
    }

    public function getjrestauranteditrow($no)
    {
        $sql="select jangbumeal.*, restaurant.name as restaurant_name, member.name as member_name from jangbumeal 
            left join restaurant on jangbumeal.restaurant_no=restaurant.no
            left join member on jangbumeal.member_no=member.no
            where jangbumeal.no=$no";
        return  $this->db->query($sql)->row();
    }

    public function updatejrestaurantrow($row, $no)
    {
        $where=array("no"=>$no);
        return $this->db->update("jangbumeal",$row,$where);
    }

    public function deletejrestaurantrow($no)
    {
        $sql="delete from jangbumeal where no=$no";
        return  $this->db->query($sql);
    }

    function getlist_restaurant()
    {
        $sql="select * from restaurant order by no";
        return $this->db->query($sql)->result();
    }

    //Jangbu_room 파트

    public function getjroomlist()
    {
        $sql="select jangburoom.*, room.name as room_name, member.name as member_name from jangburoom 
            left join room on jangburoom.room_no=room.no
            left join member on jangburoom.member_no=member.no
            order by checkinday";
        /*$sql="SELECT A.*, B.`Explanation`, C.name FROM `jangbumeal` AS A
           LEFT JOIN `restaurant` AS B ON `B`.`no`=`A`.`rastaurant_no`
            LEFT JOIN `member` AS C ON `C`.`no`=`A`.`member_no`
        WHERE 1
        ORDER BY `meal_day`";*/
        return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
    }

    public function getjroomrow($no)
    {
        $sql="select jangburoom.*, room.name as room_name, member.name as member_name from jangburoom 
            left join room on jangburoom.room_no=room.no
            left join member on jangburoom.member_no=member.no
            where jangburoom.no=$no";
        return $this->db->query($sql)->row();
    }

    public function getjroomeditrow($no)
    {
        $sql="select jangburoom.*, room.name as room_name, member.name as member_name from jangburoom 
            left join room on jangburoom.room_no=room.no
            left join member on jangburoom.member_no=member.no
            where jangburoom.no=$no";
        return  $this->db->query($sql)->row();
    }
	
    public function updatejroomrow($row, $no)
    {
        $where=array("no"=>$no);
        return $this->db->update("jangburoom",$row,$where);
    }

    public function deletejroomrow($no)
    {
        $sql="delete from jangburoom where no=$no";
        return  $this->db->query($sql);
    }

    function getlist_room()
    {
        $sql="select * from room order by no";
        return $this->db->query($sql)->result();
    }

}
?>
