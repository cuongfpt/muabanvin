<?php
Class System extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('system_model');
    }
    function index()
    {
        $input = array();
        $list = $this->system_model->get_list($input);
        $this->data['list'] = $list;
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/system/index';
        $this->load->view('admin/main', $this->data);
    }
    function add()
    {

        if (isset($_POST['addnews'])) {
            $file_name = $_FILES['images']['name'];
            $file_name_banner = $_FILES['imagesbanner']['name'];
            $file_name_tranfer = $_FILES['imagestranfer']['name'];
            $file_name_logobank = $_FILES['imageslogobank']['name'];

            $file_size = $_FILES['images']['size'];
            $file_tmp = $_FILES['images']['tmp_name'];
            $file_tmp_banner = $_FILES['imagesbanner']['tmp_name'];
            $file_tmp_tranfer = $_FILES['imagestranfer']['tmp_name'];
            $file_tmp_logobank = $_FILES['imageslogobank']['tmp_name'];
            $file_ext = strtolower(end(explode('.', $_FILES['images']['name'])));
            $expensions = array("jpeg", "jpg", "png");
            if (in_array($file_ext, $expensions) === false) {
                $this->session->set_flashdata('message', 'Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.');
            }
            if ($file_size > 2097152) {
                $this->session->set_flashdata('message', 'Kích cỡ file nên là 2 MB');
            }
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "public/uploads/adv/" . $file_name);
                move_uploaded_file($file_tmp_banner, "public/uploads/adv/" . $file_name_banner);
                move_uploaded_file($file_tmp_tranfer, "public/uploads/adv/" . $file_name_tranfer);
                move_uploaded_file($file_tmp_logobank, "public/uploads/adv/" . $file_name_logobank);
            }
            $data = array(
                'linkface' => $this->input->post('linkface'),
                'codeGA' => $this->input->post('codeGa'),
                'titlePage' => $this->input->post('titlepage'),
                'keyword' => $this->input->post('keyword'),
                'metaDescription' => $this->input->post('metadesc'),
                'linkfacegroup' => $this->input->post('linkfacegroup'),
                'guidTranfer' => $this->input->post('guidtranfer'),
                'imageTranfer' => $file_name_tranfer,
                'bannerHome' =>  $file_name_banner,
                'Address' => $this->input->post('address'),
                'Bank' => $this->input->post('bank'),
                'hotline' => $this->input->post('Hotline'),
                'logo' => $file_name,
                'sologant' => $this->input->post('sologant'),
                'logobank' => $file_name_logobank,
                'CSKH' => $this->input->post('cskh'),
                'Zalo' => $this->input->post('Zalo'),
                 'sign' => $this->input->post('sign'),
                'titleDaily' => $this->input->post('dailytitle'),
                'Daily' => $this->input->post('daily'),
                'Map' => $this->input->post('map'),
                'AddressTranfer' => $this->input->post('addresstranfer'),
                'Email' => $this->input->post('email'),
                'BannerText' => $this->input->post('bannerText'),
                'BannerText1' => $this->input->post('bannerText1'),
                'TextRun' => $this->input->post('textrun'),
                
            );
            if ($this->system_model->create($data)) {
                //tạo ra nội dung thông báo
                $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Thêm mới thành công</label>');
                redirect(admin_url('system'));
            } else {
                $this->session->set_flashdata('message', 'Thêm mới không thành công');
            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/system/add';
        $this->load->view('admin/main', $this->data);
    }
    function edit()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        $info = $this->system_model->get_info($id);
        $this->data['info'] = $info;
        if (isset($_POST['updatenews'])) {
             $file_name = $_FILES['images']['name'];
            $file_name_banner = $_FILES['imagesbanner']['name'];
            $file_name_tranfer = $_FILES['imagestranfer']['name'];
            $file_name_logobank = $_FILES['imageslogobank']['name'];
            $file_size = $_FILES['images']['size'];
            $file_tmp = $_FILES['images']['tmp_name'];
            $file_tmp_banner = $_FILES['imagesbanner']['tmp_name'];
            $file_tmp_tranfer = $_FILES['imagestranfer']['tmp_name'];
            $file_tmp_logobank = $_FILES['imageslogobank']['tmp_name'];
            $file_ext = strtolower(end(explode('.', $_FILES['images']['name'])));
            $expensions = array("jpeg", "jpg", "png");
           if (in_array($file_ext, $expensions) === false) {
                $this->session->set_flashdata('message', 'Không chấp nhận định dạng ảnh có đuôi này, mời bạn chọn JPEG hoặc PNG.');
            }
            if ($file_size > 2097152) {
                $this->session->set_flashdata('message', 'Kích cỡ file nên là 2 MB');
            }
       
            if ($_FILES['images']['name'] != "") {
                        $logo =  array('logo' => $_FILES['images']['name']);
                       }
                else{
                        $logo= array('logo' => $this->input->post('imagevalue'));
                    }
                if ($_FILES['imagesbanner']['name'] != "") {
                        $bannerHome = array('bannerHome' => $_FILES['imagesbanner']['name']);
                       }
                else{
                        $bannerHome = array('bannerHome' => $this->input->post('imagebannervalue'));
                       }
                if ($_FILES['imagestranfer']['name'] != "") {
                        $imageTranfer = array('imageTranfer' =>  $_FILES['imagestranfer']['name']);
                       }
                else{
                          $imageTranfer = array('imageTranfer' => $this->input->post('imagetranfervalue'));
                       }
                     
                if ($_FILES['imageslogobank']['name'] != "") {
                        $logobank = array('logobank' =>  $_FILES['imageslogobank']['name']);
                       }
                else{
                         $logobank = array('logobank' => $this->input->post('imagebankvalue'));
                       }
         
                $data = array(
                    'linkface' => $this->input->post('linkface'),
                    'codeGA' => $this->input->post('codeGa'),
                    'titlePage' => $this->input->post('titlepage'),
                    'keyword' => $this->input->post('keyword'),
                    'metaDescription' => $this->input->post('metadesc'),
                    'linkfacegroup' => $this->input->post('linkfacegroup'),
                    'guidTranfer' => $this->input->post('guidtranfer'),
                    'Address' => $this->input->post('address'),
                    'Bank' => $this->input->post('bank'),
                    'hotline' => $this->input->post('Hotline'),
                    'sologant' => $this->input->post('sologant'),
                    'CSKH' => $this->input->post('cskh'),
                    'Zalo' => $this->input->post('Zalo'),
                    'sign' => $this->input->post('sign'),
                    'titleDaily' => $this->input->post('dailytitle'),
                    'Daily' => $this->input->post('daily'),
                    'Map' => $this->input->post('map'),
                    'AddressTranfer' => $this->input->post('addresstranfer'),
                    'Email' => $this->input->post('email'),
                    'BannerText' => $this->input->post('bannerText'),
                    'BannerText1' => $this->input->post('bannerText1'),
                    'TextRun' => $this->input->post('textrun'),
                );
                $data1=array_merge($data,$logo, $bannerHome, $imageTranfer,$logobank);
                move_uploaded_file($file_tmp, "public/uploads/adv/" . $file_name);
                move_uploaded_file($file_tmp_banner, "public/uploads/adv/" . $file_name_banner);
                move_uploaded_file($file_tmp_tranfer, "public/uploads/adv/" . $file_name_tranfer);
                move_uploaded_file($file_tmp_logobank, "public/uploads/adv/" . $file_name_logobank);
                if ($this->system_model->update($id, $data1)) {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật thành công</label>');
                    redirect(admin_url('system'));
                } else {
                    $this->session->set_flashdata('message', 'Cập nhật không thành công');
                }
            }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/system/edit';
        $this->load->view('admin/main', $this->data);
    }
    function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->system_model->get_info($id);
        if (!$info) {
            $this->session->set_flashdata('message', 'Không tồn tại bản ghi này');
            redirect(admin_url('system'));
        }
        //thuc hiện xóa
        $this->system_model->delete($id);

        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Xóa dữ liệu thành công</label>');
        redirect(admin_url('system'));
    }
}
