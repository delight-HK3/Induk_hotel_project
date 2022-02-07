<?
class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();                    
        $this->load->model("clientmember_m");    
        $this->load->model("admin_m");    // 모델 admin_m 연결
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->library('image_lib');
        $this->load->helper(array("url", "date"));

        date_default_timezone_set("Asia/Seoul");
    }

    public function index()
    {

        $data["count"] = $this->admin_m->getAdminPageCount();


        if (@$_GET['year']){
            $year = $_GET['year'];
            $data["year"] = $year;
        } else
        {
            $year = date("Y");
        }
        if (@$_GET['month']){
            $month = $_GET['month'];
            $data["month"] = $month;
        } else
        {
            $month = date("m");
        }

        $data["year"] = $year;
        $data["month"] = $month;
        $data["area_chart_data"] = $this->admin_m->getArealist($year);    // 자료읽어 data배열에 저장
        $data["area_bar_data"] = $this->admin_m->getBarlist($year);    // 자료읽어 data배열에 저장
        $data["area_pie_data"] = $this->admin_m->getPielist($year,$month);    // 자료읽어 data배열에 저장

        if($this->session->userdata("rank")==1) {   //관리자 계급인경우 바로 admin페이지로 넘어감
            $this->load->view("admin_header");
            $this->load->view("admin_topbar_home",$data);
            $this->load->view("admin_index",$data);
            $this->load->view("admin_footer");
        } else if($this->session->userdata("rank")==2){     //손님의 경우, 다시 홈페이지로 리다이렉트 시켜줌
            redirect("/main");
        } else{     //세션정보가 없다면 로그인 페이지로 넘어감.
            $this->load->view("admin_login");
        }
    }

    public function login()
    {
        $this->load->view("admin_header");
        $this->load->view("admin_topbar");
        $this->load->view("admin_footer");
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
                "uid"  =>$result->uid,
                "name"  =>$result->name,
                "rank"	=>$result->rank
            );
            $this->session->set_userdata($data);
        }
        redirect("/admin");
    }

    public function clientlogout(){
        $data = array('uid','rank');
        $this->session->unset_userdata($data);
        redirect("/admin");
    }

    public function cUserlist(){
        $data["count"] = $this->admin_m->getAdminPageCount();
        if($this->session->userdata("rank")==1) {   //관리자 계급인경우
            $data["list"] = $this->admin_m->getlist();
            $this->load->view("admin_header");
            $this->load->view("admin_topbar", $data);
            $this->load->view("admin_User_list", $data);
            $this->load->view("admin_footer");
        } else if($this->session->userdata("rank")==2){     //손님의 경우
            redirect("/main");
        } else{     //세션정보가 없다면 로그인 페이지로 넘어감.
            $this->load->view("admin_login");
        }
    }

    public function view()
    {
        $data["count"] = $this->admin_m->getAdminPageCount();
        $data["row"]=$this->admin_m->getrow($_GET['no']);

        $this->load->view("admin_header");
        $this->load->view("admin_topbar", $data);
        $this->load->view("admin_User_view", $data);
        $this->load->view("admin_footer");
    }

    public function edit()
    {
        $data["count"] = $this->admin_m->getAdminPageCount();
        $data["row"]=$this->admin_m->geteditrow($_GET['no']);

        $this->load->view("admin_header");
        $this->load->view("admin_topbar", $data);
        $this->load->view("admin_User_edit", $data);
        $this->load->view("admin_footer");
    }

    public function goedit(){
        $no = $_GET['no'];

        $tel1 = $this->input->post("myphone1",true);
        $tel2 = $this->input->post("myphone2",true);
        $tel3 = $this->input->post("myphone3",true);
        $tel = sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);
        if($tel == ""){
            return;
        }
        $juso1 = $this->input->post("myinjuso",true); //주소
        $juso2 = $this->input->post("myinmojuso",true); //참고주소
        $juso3 = $this->input->post("myindejuso",true); //상세주소
        $juso = $juso1."!".$juso2."!".$juso3;
        $data = array(
            'uid'		 =>	$this->input->post("myuid",true),
            'pwd'		 => $this->input->post("mypwd",true),
            'name'	     => $this->input->post("myname",true),
            'email'		 => $this->input->post("myemail",true),
            'phone'		 => $tel,
            'birthday'   => $this->input->post("mybirthday",true),
            'rank'	     => $this->input->post("myrank",true),
            'zip_number' => $this->input->post("myzip",true),
            'juso'		 => $juso
        );
        $this->admin_m->updaterow($data,$no);
        redirect("/admin/cUserlist");//cUserlist 이동.
    }

    public function del()
    {
        $no = $_GET['no'];

        $this->admin_m->deleterow($no);
        redirect("/admin/cUserlist");//cUserlist 이동.
    }

    public function cAdd()
    {
        $data["count"] = $this->admin_m->getAdminPageCount();
        $this->load->view("admin_header");
        $this->load->view("admin_topbar", $data);
        $this->load->view("admin_User_add");
        $this->load->view("admin_footer");
    }

    public function add()
    {
        $tel1 = $this->input->post("aphone1",true);
        $tel2 = $this->input->post("aphone2",true);
        $tel3 = $this->input->post("aphone3",true);
        $tel = sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);
        $juso1 = $this->input->post("ainjuso",true); 
        $juso2 = $this->input->post("ainmojuso",true); 
        $juso3 = $this->input->post("aindejuso",true); 
        $juso = $juso1."!".$juso2."!".$juso3;
        $data = array(
            'uid'		 =>	$this->input->post("auid",true),
            'pwd'		 => $this->input->post("apwd",true),
            'name'	     => $this->input->post("aname",true),
            'email'		 => $this->input->post("aemail",true),
            'phone'		 => $tel,
            'birthday'   => $this->input->post("abirthday",true),
            'rank'	     => $this->input->post("arank",true),
            'zip_number' => $this->input->post("azip",true),
            'juso'		 => $juso
        );
        $this->clientmember_m->insert($data);
        redirect("/admin/cUserlist");//cUserlist 이동.

    }
}
?>
