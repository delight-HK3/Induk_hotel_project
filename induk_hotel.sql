-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 21-12-16 21:50
-- 서버 버전: 10.3.22-MariaDB
-- PHP 버전: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--
-- 테이블 구조 `jangbumeal`
--

CREATE TABLE `jangbumeal` (
  `no` int(11) NOT NULL,
  `reservation_no` varchar(10) DEFAULT NULL,
  `adult_num` int(11) DEFAULT NULL,
  `child_num` int(11) DEFAULT NULL,
  `member_no` int(11) DEFAULT NULL,
  `restaurant_no` int(11) DEFAULT NULL,
  `reservation_date` date DEFAULT NULL,
  `meal_time` time DEFAULT NULL,
  `meal_day` date DEFAULT NULL,
  `bigo` varchar(255) DEFAULT NULL,
  `state` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- 테이블 구조 `jangburoom`
--

CREATE TABLE `jangburoom` (
  `no` int(11) NOT NULL,
  `reservation_no` varchar(10) DEFAULT NULL,
  `adult_num` int(11) DEFAULT NULL,
  `child_num` int(11) DEFAULT NULL,
  `pay_day` date DEFAULT NULL,
  `checkinday` date DEFAULT NULL,
  `checkoutday` date DEFAULT NULL,
  `room_no` int(11) DEFAULT NULL,
  `adult_morning_count` int(11) DEFAULT NULL,
  `child_morning_count` int(11) DEFAULT NULL,
  `adult_morning` int(11) DEFAULT NULL,
  `child_morning` int(11) DEFAULT NULL,
  `member_no` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `pay_method` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `carpickup` int(11) DEFAULT NULL,
  `bigo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `no` int(11) NOT NULL,
  `uid` varchar(20) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `rank` tinyint(4) DEFAULT NULL,
  `zip_number` varchar(5) DEFAULT NULL,
  `juso` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- 테이블 구조 `questions`
--

CREATE TABLE `questions` (
  `no` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `q_name` varchar(100) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_phone` int(10) NOT NULL,
  `q_bigo` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `questions`
--

INSERT INTO `questions` (`no`, `type`, `q_name`, `c_name`, `c_email`, `c_phone`, `q_bigo`) VALUES
(1, '질문', '1', '123', '1@naver.com', 1, '213'),
(2, '칭찬', '객실이 깨끗해요 TEST', '홍길동', 'aaa@induk.ac.kr', 10, '전체적인 객실이 청결하고 침구류가 아주 깨끗했네요 TEST'),

-- --------------------------------------------------------

--
-- 테이블 구조 `restaurant`
--

CREATE TABLE `restaurant` (
  `no` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `image_res1` varchar(255) DEFAULT NULL,
  `image_res2` varchar(255) DEFAULT NULL,
  `image_res3` varchar(255) DEFAULT NULL,
  `Explanation` varchar(255) DEFAULT NULL,
  `opentime` time DEFAULT NULL,
  `closetime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `restaurant`
--

INSERT INTO `restaurant` (`no`, `name`, `image_res1`, `image_res2`, `image_res3`, `Explanation`, `opentime`, `closetime`) VALUES
(1, '화련 (MICHERIN 3 star)', 'hwarun1.jpg', 'hwarun2.jpg', 'hwarun3.jpg', '품격 있는 한식 정찬을 선보이는 화련은 전통 한식을 현대적인 조리법으로 세련되게 표현해냈습니다, 우아하고 편안한 식사 경험을 제공하기 위해 구비한 고급 식기와 백자를 형상화한 그릇은 레스토랑이 지향하는 또 다른 차원의 섬세함을 잘 드러냅니다,현대적으로 재해석한 메뉴에 와인을 조합해 즐길 수 있으며, 요구하지 않아도 세심한 배려가 돋보이는 서비스는 이곳의 또 다른 매력입니다.', '10:00:00', '21:00:00'),
(2, 'Saint-Tropez-Corée', 'Saint-Tropez1.jpg', 'Saint-Tropez2.jpg', 'Saint-Tropez3.jpg', '클래식한 프랑스 요리와 편안하고 아늑한 분위기는 마치 프랑스 본토에 와 있는 듯한 착각에 빠져들게 합니다, 레스토랑의 이름은 Saint-Tropez은 프로방스의 생트로페 도시를 의미하고 Corée는 대한민국을 프랑스어로 번역한 것 입니다, Saint-Tropez-Corée에서 선사하는 맛있는 음식과 분위기를 음미하며 잠시 도심의 소란스러움을 잊어보는 것도 좋을 것 입니다.', '10:00:00', '21:00:00');

-- --------------------------------------------------------

--
-- 테이블 구조 `restaurant_reple`
--

CREATE TABLE `restaurant_reple` (
  `no` int(11) NOT NULL,
  `reple_id` varchar(20) DEFAULT NULL,
  `reple_rank` int(11) DEFAULT NULL,
  `reple_text` varchar(255) DEFAULT NULL,
  `reple_date` date DEFAULT NULL,
  `restaurant_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- 테이블 구조 `room`
--

CREATE TABLE `room` (
  `no` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image_room1` varchar(255) DEFAULT NULL,
  `image_room2` varchar(255) DEFAULT NULL,
  `image_room3` varchar(255) DEFAULT NULL,
  `normal` varchar(255) DEFAULT NULL,
  `bathroom` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `Explanation` varchar(255) DEFAULT NULL,
  `gubun_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `room`
--

INSERT INTO `room` (`no`, `name`, `price`, `image_room1`, `image_room2`, `image_room3`, `normal`, `bathroom`, `other`, `Explanation`, `gubun_no`) VALUES
(1, 'VIP Room', 1500000, 'VIP1.jpg', 'VIP2.jpg', 'VIP3.jpg', '60\" HD TV / 미니바 / 티포트 / 금고/ 사무용 데스크 / 전화기 / 우산 / 구둣주걱 / 스타일러 / 프리미엄 베딩시스템 / 맞춤형 베개 제공 / 턴다움 서비스 / 기본 생필품 제공', '세면대 2개 / 면도기 / 면봉 / 비데 / 샤워 캡 / 슬리퍼 / 욕실용품 / (Diptyque) / 욕조 / 목욕가운 / 헤어드라이어 / 칫솔,치약', '무료 유무선 초고속 Wi-fi / 케이블 TV채널 / 무료 생수 1일 2병 / 무료 일간신문 / 룸서비스 1회 무료제공 / 커피 및 티 메이커 / 개인 PC제공 / 숙박 기간동안 조식 전면 무료 / 차량 픽업 서비스 무료', '인덕호텔의 VIP 룸은 넓은 공간과 쾌적한 거실로 럭셔리한 디자인의 응접실, 최고급 레스토랑을 연상시키는 다이닝룸 등의 공간 구성으로 고급스러운 분위기를 연출하는 객실입니다.\r\n사회적으로 존경 받는 각계각층 VIP의 안락한 휴식을 위해 설계된\r\nVIP 룸은 아름다운 서울의 전망과 함께 인덕호텔 만의 세심한 서비스와 안전을 제공합니다.', 1),
(2, 'Premier room', 900000, 'Premier1.jpg', 'Premier2.jpg', 'Premier3.jpg', '55\" HD TV / 미니바 / 티포트 / 금고/ 사무용 데스크 / 전화기 / 우산 / 구둣주걱 / 맞춤형 베개 제공 / 턴다움 서비스 / 기본 생필품 제공', '세면대 2개 / 면도기 / 면봉 / 비데 / 샤워 캡 / 슬리퍼 / 욕실용품 / (Diptyque) / 욕조 / 목욕가운 / 헤어드라이어 / 1회용 칫솔,치약', '무료 유무선 초고속 Wi-fi / 케이블 TV채널 / 무료 생수 1일 2병 / 무료 일간신문 / 커피 및 티 메이커 ', '인덕호텔의  프리미어 룸은 침실과 함께 여유로운 업무 공간이 구비되어 성공적인 비즈니스와 여유로운 휴식을 함께 즐길 수 있는 고급 비즈니스 객실입니다.  또한 업무 중 잠깐 바라보는 서울의 풍경과 편안한 숙박환경은 업무의 피로를 잊게 해줄 것입니다. ', 2),
(3, 'Premier Induk Room', 940000, 'premier_room1.jpg', 'premier_room2.jpg', 'premier_room3.jpg', '55\" HD TV / 미니바 / 티포트 / 금고/ 사무용 데스크 / 전화기 / 우산 / 구둣주걱 / 맞춤형 베개 제공 / 턴다움 서비스 / 기본 생필품 제공', '세면대 2개 / 면도기 / 면봉 / 비데 / 샤워 캡 / 슬리퍼 / 욕실용품 / (Diptyque) / 욕조 / 목욕가운 / 헤어드라이어 / 1회용 칫솔,치약', '무료 유무선 초고속 Wi-fi / 케이블 TV채널 / 무료 생수 1일 2병 / 무료 일간신문 / 커피 및 티 메이커 ', '인덕호텔의 프리미어 인덕 룸은 넓고 여유로운 공간에서 고품격 휴식을 만끽할 수 있는 고급형 프리미어 룸입니다.\r\n여유로운 공간과 고급스러운 인테리어는 고객의 안락함을 최우선으로 고려하여 설계되어 고객님에게 더욱 더 최고의 투숙 경험을 선사합니다.', 2),
(4, 'Deluxe Suite Room', 630000, 'deluxe_room1.jpg', 'deluxe_room2.jpg', 'deluxe_room3.jpg', '55\" HD TV / 미니바 / 티포트 / 금고/ 사무용 데스크 / 전화기 / 우산 / 구둣주걱 / 맞춤형 베개 제공 / 턴다움 서비스 / 기본 생필품 제공', '세면대 2개 / 면도기 / 면봉 / 비데 / 샤워 캡 / 슬리퍼 / 욕실용품 / (Diptyque) / 욕조 / 목욕가운 / 헤어드라이어 / 1회용 칫솔,치약', '무료 유무선 초고속 Wi-fi / 케이블 TV채널 / 무료 생수 1일 2병 / 무료 일간신문 / 커피 및 티 메이커 ', '인덕호텔의 디럭스 스위트 룸은 다른 객실보다 더욱 넓은 공간을 제공하는 객실입니다. 침실과 응접실이 공간이 분리되어 있어 편안함과 안정된 휴식을 누리실 수 있는 객실입니다.', 3),
(5, 'Korean Suite Room', 740000, 'korean_room1.jpg', 'korean_room2.jpg', 'korean_room3.jpg', '55\" HD TV / 미니바 / 티포트 / 금고/ 사무용 데스크 / 전화기 / 우산 / 구둣주걱 / 맞춤형 베개 제공 / 턴다움 서비스 / 기본 생필품 제공', '세면대 2개 / 면도기 / 면봉 / 비데 / 샤워 캡 / 슬리퍼 / 욕실용품 / (Diptyque) / 욕조 / 목욕가운 / 헤어드라이어 / 1회용 칫솔,치약', '무료 유무선 초고속 Wi-fi / 케이블 TV채널 / 무료 생수 1일 2병 / 무료 일간신문 / 커피 및 티 메이커 ', '인덕호텔의 코리안 스위트 룸은 최고의 전망을 자랑하는 객실입니다,또한 한국 전통미와 현대적인 시설의 조화가 이루어진 최고급 온돌로 구성되어 있으며 한국의 궁을 테마로 한 온돌, 객실 곳곳에 배치된 전통가구와 편백나무로 구성된 욕실은 한국적인 멋을 더욱 돋보이게 합니다.', 3),
(6, 'Royal Suite Room', 850000, 'royal_room1.jpg', 'royal_room2.jpg', 'royal_room3.jpg', '60\" HD TV / 미니바 / 티포트 / 금고/ 사무용 데스크 / 전화기 / 우산 / 구둣주걱 / 맞춤형 베개 제공 / 턴다움 서비스 / 기본 생필품 제공', '세면대 2개 / 면도기 / 면봉 / 비데 / 샤워 캡 / 슬리퍼 / 욕실용품 / (Diptyque) / 욕조 / 목욕가운 / 헤어드라이어 / 1회용 칫솔,치약', '무료 유무선 초고속 Wi-fi / 케이블 TV채널 / 무료 생수 1일 2병 / 무료 일간신문 / 커피 및 티 메이커 ', '인덕호텔의 로얄 스위트 룸은 세련미와 우아함을 더한 고급스러운 인테리어로 구성되어 있으며, 창문을 통해 서울의 화려한 장관을 감상할 수 있는 고품격 객실입니다. 또한, 인덕호텔 로얄 스위트룸의 욕실은 이탈리아 북부 알프스 천연 대리석으로 제작되어 고품격 휴식을 즐기기에 충분합니다.', 3);

-- --------------------------------------------------------

--
-- 테이블 구조 `room_gubun`
--

CREATE TABLE `room_gubun` (
  `no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `room_gubun`
--

INSERT INTO `room_gubun` (`no`, `name`) VALUES
(1, 'VIP '),
(2, 'PREMIER '),
(3, 'SUITE ');

-- --------------------------------------------------------

--
-- 테이블 구조 `room_reple`
--

CREATE TABLE `room_reple` (
  `no` int(11) NOT NULL,
  `reple_id` varchar(20) DEFAULT NULL,
  `reple_rank` int(11) DEFAULT NULL,
  `reple_text` varchar(500) DEFAULT NULL,
  `reple_date` date DEFAULT NULL,
  `room_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `room_reple`
--

INSERT INTO `room_reple` (`no`, `reple_id`, `reple_rank`, `reple_text`, `reple_date`, `room_no`) VALUES
(12, 'admin', 4, 'good', '2021-12-16', 3),
(13, 'sample', 5, 'very good', '2021-12-16', 1);

-- --------------------------------------------------------

--
-- 테이블 구조 `service`
--

CREATE TABLE `service` (
  `no` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `bego` varchar(255) DEFAULT NULL,
  `opentime` time DEFAULT NULL,
  `closetime` time DEFAULT NULL,
  `Explanation` varchar(255) DEFAULT NULL,
  `insertbigo` varchar(255) DEFAULT NULL,
  `image_serve1` varchar(255) DEFAULT NULL,
  `image_serve2` varchar(255) DEFAULT NULL,
  `image_serve3` varchar(255) DEFAULT NULL,
  `image_serve4` varchar(255) NOT NULL,
  `image_serve5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `service`
--

INSERT INTO `service` (`no`, `name`, `price`, `bego`, `opentime`, `closetime`, `Explanation`, `insertbigo`, `image_serve1`, `image_serve2`, `image_serve3`, `image_serve4`, `image_serve5`) VALUES
(2, 'Fitness Center', 30000, '고객의 스케줄에 맞춰 운동효과를 극대화하는 전문 트레이너 1:1 맞춤형 운동 프로그램인 PT Studio를 운영하고 있습니다.', '05:00:00', '23:00:00', '60여대의 최첨단 기구로 구성된 인덕 호텔의 피트니스센터는 최고급 프리미엄 브랜드 테크노짐의 ARTIS 장비로 트레이닝에 즐거움을 더해 드립니다.\r\nCardio Zone, Strength Zone, Free Weight Zone, Stretching Zone 등의 공간이 최적의 편리함을 제공하며, 또한 전문강사들의 퍼스널 트레이닝, 필라테스 강습 프로그램을 통하여 고객의 다양한 스타일을 충족시켜 드립니다.', '체형보정과 유연성, 재활, 근지구력을 향상시킴으로써 신체 밸런스를 유지시켜 주는 다양한 강습 프로그램인 PILATES Studio를 운영하고 있습니다.', 'gym1.png', 'gym2.jpg', 'gym3.jpg', 'gym4.jpg', 'gym5.jpg'),
(4, 'Swimming Pool', 30000, '1:1 맞춤형 수영레슨과 수중재활 프로그램 등 다양한 강습 프로그램을 운영하고 있습니다.', '06:00:00', '21:00:00', '인덕 서울 호텔 실내수영장은 한국적인 곡선미를 모티브로 설계되었으며, 남쪽 햇살을 가득 담은 옥빛풀에서 편안하고 여유로운 시간을 즐기실 수 있습니다.\r\n자동 필터링 관리 시스템으로 최상의 수질을 보증함은 물론, 안락한 풀사이드 베드와 버블제트 수중 마사지는 스트레스에 지친 현대인의 긴장과 피로를 완화하여 재충전의 기회를 제공합니다.', '만 12세 이하 고객의 경우, 단독 출입이 제한되오니 양해해 주시기 바랍니다.', 'pool1.jpg', 'pool2.jpg', 'pool3.jpg', 'pool4', 'pool5'),
(5, 'Evian Spa', 80000, '오롯이 심신의 건강을 고려한 활력 있는 다중감각 공간으로서, 에비앙스파 서울은 편안하고 여유로운 환경에서 프리미엄 수분공급이라는 독특한 경험을 제공해 드립니다.', '06:00:00', '21:00:00', '인덕 호텔 별관에 위치한 에비앙스파는 고상하고 순결한 에비앙 산의 이미지에서 영감을 얻은 자연 본연의 훼손되지 않은 휴식처입니다.\r\n고급스럽고 감각적인 소재, 자연채광과 환상적인 서울의 전망이 어우러진 에비앙스파는 심신의 재충전을 위한 기대 이상의 여행으로 고객님을 초대합니다.', '에비앙스파는 에비앙 물에 투영된 4가지 경험 (Celestial, Mineral, Precious, Vitalizing)을 통해 자연의 기적을 불러 일으키는 코스로 구성이 되어 있습니다.', 'spa1.jpg', 'spa2.jpg', 'spa3.jpg', 'spa4.jpg', 'spa5.jpg'),
(6, 'The Lounge', 26000, '미쉐린 3스타 셰프 및 팀이 만든 메뉴와 다양한 Beverage 메뉴를 제공합니다.', '04:00:00', '21:00:00', '인덕 호텔의 더라운지는 `아름다운 하늘에 떠있는 구름` 을 형상화 한 조각가 박선기의 작품을 중심으로 펼쳐져 있습니다. 도심 속 최고층에 위치한 힐링 공간, 더 라운지에서 미쉐린 3스타 야닉 알레노 셰프가 컨설팅한 메뉴 및 다양한 음료를 즐겨보시기 바랍니다.', '특별히 로스팅 한 SIGNIEL INDUK 80, SIGNIEL INDUK 254 원두로 내린 커피가 준비되어 있습니다.', 'lounge1.jpg', 'lounge2.jpg', 'lounge3.jpg', 'lounge4.jpg', 'lounge5');

-- --------------------------------------------------------

--
-- 테이블 구조 `service_reple`
--

CREATE TABLE `service_reple` (
  `no` int(11) NOT NULL,
  `reple_id` varchar(20) DEFAULT NULL,
  `reple_rank` int(11) DEFAULT NULL,
  `reple_text` varchar(255) DEFAULT NULL,
  `reple_date` date DEFAULT NULL,
  `service_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `service_reple`
--

INSERT INTO `service_reple` (`no`, `reple_id`, `reple_rank`, `reple_text`, `reple_date`, `service_no`) VALUES
(4, 'sample', 4, 'very good', '2021-12-16', 2);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `jangbumeal`
--
ALTER TABLE `jangbumeal`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `jangburoom`
--
ALTER TABLE `jangburoom`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `restaurant_reple`
--
ALTER TABLE `restaurant_reple`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `room_gubun`
--
ALTER TABLE `room_gubun`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `room_reple`
--
ALTER TABLE `room_reple`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `service_reple`
--
ALTER TABLE `service_reple`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `jangbumeal`
--
ALTER TABLE `jangbumeal`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 테이블의 AUTO_INCREMENT `jangburoom`
--
ALTER TABLE `jangburoom`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- 테이블의 AUTO_INCREMENT `questions`
--
ALTER TABLE `questions`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 테이블의 AUTO_INCREMENT `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 테이블의 AUTO_INCREMENT `restaurant_reple`
--
ALTER TABLE `restaurant_reple`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 테이블의 AUTO_INCREMENT `room`
--
ALTER TABLE `room`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- 테이블의 AUTO_INCREMENT `room_gubun`
--
ALTER TABLE `room_gubun`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- 테이블의 AUTO_INCREMENT `room_reple`
--
ALTER TABLE `room_reple`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 테이블의 AUTO_INCREMENT `service`
--
ALTER TABLE `service`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 테이블의 AUTO_INCREMENT `service_reple`
--
ALTER TABLE `service_reple`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
