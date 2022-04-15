<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Adminroomgubun extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();                     
        $this->load->model("admin_m");    // 모델 admin_m 연결
        $this->load->library('session');
        $this->load->helper(array("url", "date"));
    }

    public function index()
    {
        $data["count"] = $this->admin_m->getAdminPageCount();
        if($this->session->userdata("rank")==1) {   //관리자 계급인경우 바로 admin페이지로 넘어감
            $data["list"] = $this->admin_m->getGubunlist();
            $this->load->view("admin_header");
            $this->load->view("admin_topbar", $data);
            $this->load->view("admin_Gubun_list",$data);
            $this->load->view("admin_footer");
        } else if($this->session->userdata("rank")==2){     //손님의 경우, 다시 홈페이지로 리다이렉트 시켜줌
            redirect("/main");
        } else{     //세션정보가 없다면 로그인 페이지로 넘어감.
            $this->load->view("admin_login");
        }
    }

    public function clientlogout(){
        $data = array('uid','rank');
        $this->session->unset_userdata($data);
        redirect("/admin");
    }


    public function view()
    {
        $data["count"] = $this->admin_m->getAdminPageCount();
        $data["row"]=$this->admin_m->getGubunrow($_GET['no']);

        $this->load->view("admin_header");
        $this->load->view("admin_topbar",$data);
        $this->load->view("admin_Gubun_view", $data);
        $this->load->view("admin_footer");
    }

    public function edit()
    {
        $data["count"] = $this->admin_m->getAdminPageCount();
        $data["row"]=$this->admin_m->geteditGubunrow($_GET['no']);

        $this->load->view("admin_header");
        $this->load->view("admin_topbar",$data);
        $this->load->view("admin_Gubun_edit", $data);
        $this->load->view("admin_footer");
    }

    public function goedit(){
        $no = $_GET['no'];

        $data = array(
            'name'	     => $this->input->post("ename",true),
        );
        $this->admin_m->updateGubunrow($data,$no);
        redirect("/adminroomgubun");
    }

    public function del()
    {
        $no = $_GET['no'];

        $this->admin_m->deleteGubunrow($no);
        redirect("/adminroomgubun");
    }

    public function cAdd()
    {
        $data["count"] = $this->admin_m->getAdminPageCount();
        $this->load->view("admin_header");
        $this->load->view("admin_topbar",$data);
        $this->load->view("admin_Gubun_add");
        $this->load->view("admin_footer");
    }

    public function add()
    {
        $data = array(
            'name'	     => $this->input->post("aname",true),
        );
        $this->admin_m->insertGubun($data);
        redirect("/adminroomgubun");

    }
}
?>
