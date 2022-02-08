<?
class Contact extends CI_Controller {          
	function __construct(){
		parent::__construct();
		$this->load->database();                     
		$this->load->model("Clientmember_m");
		$this->load->model("admin_m");
		$this->load->model("Contact_m");
		$this->load->helper(array("url", "date"));   
	}
	public function index(){
		$headerdata['list1'] = $this->Clientmember_m->getroom();
		$headerdata['list2'] = $this->Clientmember_m->getrestaurant();
		$headerdata['list3'] = $this->Clientmember_m->getservice();
		
        	$this->load->view("main_header",$headerdata);		// view폴더의 main_header.php 
		$this->load->view("contact_view");
        	$this->load->view("main_footer");		// main_footer.php 호출
	}
	public function add(){
		$data = array(
			'c_name' => $this->input->post("c_name",true),
			'q_name'=> $this->input->post("q_name",true),
			'type' => $this->input->post("type",true),
			'c_phone' => $this->input->post("c_phone",true),
			'c_email' => $this->input->post("c_email",true),
			'q_bigo' => $this->input->post("q_bigo",true)
		);
		$this->Contact_m->insertrow($data);
		redirect("/main");
	}
	public function admin_contact_list(){
        	$data["count"] = $this->admin_m->getAdminPageCount();
        	if($this->session->userdata("rank")==1) {   //관리자 계급인경우 바로 admin페이지로 넘어감
            		$data["list"] = $this->Contact_m->getlist();
            		$this->load->view("admin_header");
            		$this->load->view("admin_topbar", $data);
            		$this->load->view("admin_contact_list",$data);
            		$this->load->view("admin_footer");
        	} 
		else if($this->session->userdata("rank")==2){     //손님의 경우, 다시 홈페이지로 리다이렉트 시켜줌
            		redirect("/main");
        	} 
		else{     //세션정보가 없다면 로그인 페이지로 넘어감.
            		$this->load->view("admin_login");
        	}
    	}	
	public function admin_contact_view(){
        	$data["count"] = $this->admin_m->getAdminPageCount();
		$data["row"]=$this->Contact_m->getrow($_GET['no']);

        	$this->load->view("admin_header");
        	$this->load->view("admin_topbar", $data);
        	$this->load->view("admin_contact_view", $data);
        	$this->load->view("admin_footer");
    	}
	public function del(){
        	$no = $_GET['no'];
        	$this->Contact_m-> deleterow($no);
        	redirect("/contact/admin_contact_list");//cUserlist 이동.
   	}
}
?>
