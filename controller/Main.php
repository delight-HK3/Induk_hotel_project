<?
class Main extends CI_Controller {               // Ŭ�����̸� ù ���ڴ� �빮��
	function __construct(){
        parent::__construct();
        $this->load->database();                     // �����ͺ��̽� ����
        $this->load->model("clientmember_m");    // �� a_member_m ����
		$this->load->helper(array("url", "date"));   
    }
    public function index()                              // ���� ���� ����Ǵ� �Լ�
    {
		$data["list1"]=$this->clientmember_m->getroom();
		$data["list2"]=$this->clientmember_m->getrestaurant();
		$data["list3"]=$this->clientmember_m->getservice();

        $this->load->view("main_header",$data);   // view������ main_header.php ��
		$this->load->view("main_view");
        $this->load->view("main_footer");     // main_footer.php ȣ��
    }
	public function add(){
		$tel1 = $this->input->post("phone1",true);
		$tel2 = $this->input->post("phone2",true);
		$tel3 = $this->input->post("phone3",true);
		$tel = sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);
		$juso1 = $this->input->post("injuso",true); //�ּ�
		$juso2 = $this->input->post("inmojuso",true); //�����ּ�
		$juso3 = $this->input->post("indejuso",true); //���ּ�
		$juso = $juso1."!".$juso2."!".$juso3;
		$data = array(
			'uid'		 =>	$this->input->post("inuid",true),
			'pwd'		 => $this->input->post("inpwd",true),
			'name'	     => $this->input->post("inname",true),
			'email'		 => $this->input->post("inemail",true),
			'phone'		 => $tel,
			'birthday'   => $this->input->post("inbirthday",true),
			'rank'	     => 2,
			'zip_number' => $this->input->post("inzip",true),
			'juso'		 => $juso
		);
		$this->clientmember_m->insert($data);
		redirect("/~team1/main/main_join");
	}
	public function clientlogin(){
		$uid=$this->input->post("uid",TRUE);
		$pwd=$this->input->post("pwd",TRUE);
		
		$result = $this->clientmember_m->getrow($uid,$pwd);
		if($result == "no"){
			$returnArray['responseText'] = $result;
			echo json_encode($returnArray);
		}
		else{
			$data=array(
				"no" =>$result->no,
				"uid"  =>$result->uid,
				"name" =>$result->name,
				"rank" =>$result->rank
			);
			$this->session->set_userdata($data);
		}
	}
	public function clientlogout(){
		$data = array('no','uid','name','rank');
		$this->session->unset_userdata($data);
		redirect("/~team1/main");
	}
	
	public function check_id(){
		$uid=$this->input->post("uid",TRUE);
		$result = $this->clientmember_m->searchid($uid);
		$returnArray['responseText'] = $result;
		echo json_encode($returnArray);
	}
	public function main_join(){
		$this->load->view("main_header");   // view������ main_header.php ��
		$this->load->view("main_join");
        $this->load->view("main_footer");     // main_footer.php ȣ��
	}
}
?>
