<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Adminservice extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();                     
        $this->load->model("admin_m");    // 모델 admin_m 연결
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->library('image_lib');
        $this->load->helper(array("url", "date"));
    }

    public function index()
    {
        $data["count"] = $this->admin_m->getAdminPageCount();
        if($this->session->userdata("rank")==1) {   //관리자 계급인경우 바로 admin페이지로 넘어감
            $data["list"] = $this->admin_m->getservicelist();
            $this->load->view("admin_header");
            $this->load->view("admin_topbar",$data);
            $this->load->view("admin_service_list",$data);
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
        $data["row"]=$this->admin_m->getservicerow($_GET['no']);

        $this->load->view("admin_header");
        $this->load->view("admin_topbar",$data);
        $this->load->view("admin_service_view", $data);
        $this->load->view("admin_footer");
    }

    public function edit()
    {
        $data["count"] = $this->admin_m->getAdminPageCount();
        $this->load->view("admin_header");
        $this->load->view("admin_topbar",$data);
        $data["row"]=$this->admin_m->getservicerow($_GET['no']);
        $this->load->view("admin_service_edit", $data);
        $this->load->view("admin_footer");
    }

    public function goedit()
    {
        $no = $_GET['no'];

        $data = array(
            'name'		  => $this->input->post("name",true),
            'bego'      => $this->input->post("bego",true),
            'price'     => $this->input->post("price",true),
            'opentime'		  => $this->input->post("opentime",true),
            'closetime'	  => $this->input->post("closetime",true),
            'Explanation' => $this->input->post("explanation",true),
            'insertbigo' => $this->input->post("insertbigo",true),
        );

        for ($i = 1; $i < 6; $i++) {
            $picname = $this->call_upload($i);
            if ($picname) $data["image_serve".$i]=$picname;
        }

        $this->admin_m->updateservicerow($data,$no);
        redirect("/adminservice");
    }

    public function del()
    {
        $no = $_GET['no'];

        $this->admin_m->deleteservicerow($no);
        redirect("/adminservice");
    }

    public function cAdd()
    {
        $data["count"] = $this->admin_m->getAdminPageCount();
        $data["list"]=$this->admin_m->getlist_gubun();

        $this->load->view("admin_header");
        $this->load->view("admin_topbar",$data);
        $this->load->view("admin_service_add", $data);
        $this->load->view("admin_footer");
    }

    public function add()
    {
        $data = array(
            'name'		  => $this->input->post("name",true),
            'bego'      => $this->input->post("bego",true),
            'price'     => $this->input->post("price",true),
            'opentime'		  => $this->input->post("opentime",true),
            'closetime'	  => $this->input->post("closetime",true),
            'Explanation' => $this->input->post("explanation",true),
            'insertbigo' => $this->input->post("insertbigo",true),
        );

        for ($i = 1; $i < 6; $i++) {
            $picname = $this->call_upload($i);
            if ($picname) $data["image_serve".$i]=$picname;
        }

        $this->admin_m->insertservice($data);
        redirect("/adminservice");

    }

    public function call_upload($number)
    {
        $config['upload_path'] = './my/img/service/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['overwrite'] = TRUE;
        $config['max_size'] = 10000000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('pic' . $number)) {
            $picname = $this->upload->data("file_name");

            $config['image_library'] = 'gd2';
            $config['source_image'] = './my/img/service/' . $picname;
            $config['thumb_maker'] = '';
            $config['new_image'] = './my/img/service/thumb';
            $config['create_thumb'] = FALSE;    //이거때문에 thumb 뒤에 _thumb붙었습니다. 문제가 있다고 생각됩니다.
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 200;
            $config['height'] = 150;

            $this->image_lib->initialize($config);
            $this->image_lib->resize();

        } else {
            $picname = "";
        }
        return $picname;
    }

}
?>
