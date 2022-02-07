<?
class Adminrestaurant extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();                     // �����ͺ��̽� ����
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
            $data["list"] = $this->admin_m->getRestaurantlist();
            $this->load->view("admin_header");
            $this->load->view("admin_topbar",$data);
            $this->load->view("admin_restaurant_list",$data);
            $this->load->view("admin_footer");
        } else if($this->session->userdata("rank")==2){     //손님의 경우, 다시 홈페이지로 리다이렉트 시켜줌
            redirect("/~team1/main");
        } else{     //세션정보가 없다면 로그인 페이지로 넘어감.
            $this->load->view("admin_login");
        }
    }

    public function clientlogout(){
        $data = array('uid','rank');
        $this->session->unset_userdata($data);
        redirect("/~team1/admin");
    }

    public function view()
    {
        $data["count"] = $this->admin_m->getAdminPageCount();
        $data["row"]=$this->admin_m->getRestaurantrow($_GET['no']);

        $this->load->view("admin_header");
        $this->load->view("admin_topbar", $data);
        $this->load->view("admin_restaurant_view", $data);
        $this->load->view("admin_footer");
    }

    public function edit()
    {
        $data["count"] = $this->admin_m->getAdminPageCount();
        $this->load->view("admin_header");
        $this->load->view("admin_topbar", $data);
        $data["row"]=$this->admin_m->getRestaurantrow($_GET['no']);
        $this->load->view("admin_restaurant_edit", $data);
        $this->load->view("admin_footer");
    }

    public function goedit()
    {
        $no = $_GET['no'];

        $data = array(
            'name'		  => $this->input->post("name",true),
            'opentime'		  => $this->input->post("opentime",true),
            'closetime'	  => $this->input->post("closetime",true),
            'Explanation' => $this->input->post("explanation",true),
        );

        for ($i = 1; $i < 4; $i++) {
            $picname = $this->call_upload($i);
            if ($picname) $data["image_res".$i]=$picname;
        }

        $this->admin_m->updateRestaurantrow($data,$no);
        redirect("/~team1/adminrestaurant");
    }

    public function del()
    {
        $no = $_GET['no'];

        $this->admin_m->deleteRestaurantrow($no);
        redirect("/~team1/adminrestaurant");
    }

    public function cAdd()
    {
        $data["count"] = $this->admin_m->getAdminPageCount();
        $data["list"]=$this->admin_m->getlist_gubun();

        $this->load->view("admin_header");
        $this->load->view("admin_topbar", $data);
        $this->load->view("admin_restaurant_add", $data);
        $this->load->view("admin_footer");
    }

    public function add()
    {
        $data = array(
            'name'		  => $this->input->post("name",true),
            'opentime'		  => $this->input->post("opentime",true),
            'closetime'	  => $this->input->post("closetime",true),
            'Explanation' => $this->input->post("explanation",true),
        );

        for ($i = 1; $i < 4; $i++) {
            $picname = $this->call_upload($i);
            if ($picname) $data["image_res".$i]=$picname;
        }

        $this->admin_m->insertRestaurant($data);
        redirect("/~team1/adminrestaurant");

    }

    public function call_upload($number)
    {
        $config['upload_path'] = './my/img/restaurant/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['overwrite'] = TRUE;
        $config['max_size'] = 10000000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('pic' . $number)) {
            $picname = $this->upload->data("file_name");

            $config['image_library'] = 'gd2';
            $config['source_image'] = './my/img/restaurant/' . $picname;
            $config['thumb_maker'] = '';
            $config['new_image'] = './my/img/restaurant/thumb';
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
