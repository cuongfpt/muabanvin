<?php
Class Chinhanh extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('chinhanh_model');
       
    }

    function index()
    {
        $input = array();
        $list = $this->chinhanh_model->get_list($input);
        $this->data['list'] = $list;
        $this->data['temp'] = 'admin/chinhanh/index';
        $this->load->view('admin/main', $this->data);
    }
     function add()
    {
        if (isset($_POST['addnews'])) {
            
            $data = array(
                'name' => $this->input->post('name'),
                'address' => $this->input->post('address'),
                'mobile' => $this->input->post('mobile'),
                'urlIframe' => $this->input->post('url'),
                'orderNo' => $this->input->post('orderNo'),
            );
            if ($this->chinhanh_model->create($data)) {
                //tạo ra nội dung thông báo
                $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Thêm mới thành công</label>');
                redirect(admin_url('chinhanh'));
            } else {
                $this->session->set_flashdata('message', 'Thêm mới không thành công');
            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/chinhanh/add';
        $this->load->view('admin/main', $this->data);
    }

    function edit()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        $info = $this->chinhanh_model->get_info($id);
        $this->data['info'] = $info;
        $data = array(
                'name' => $this->input->post('name'),
                'address' => $this->input->post('address'),
                'mobile' => $this->input->post('mobile'),
                'urlIframe' => $this->input->post('url'),
                'orderNo' => $this->input->post('orderNo'),
            );
        if (isset($_POST['addnews'])) {
            
            if ($this->chinhanh_model->update($id, $data)) {
                //tạo ra nội dung thông báo
                $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Cập nhật thành công</label>');
                redirect(admin_url('chinhanh'));
            } else {
                $this->session->set_flashdata('message', 'Cập nhật không thành công');
            }
        }
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        $this->data['temp'] = 'admin/chinhanh/edit';
        $this->load->view('admin/main', $this->data);
    }

    function delete()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->chinhanh_model->get_info($id);
        if (!$info) {
            $this->session->set_flashdata('message', 'Không tồn tại chi nhánh');
            redirect(admin_url('faq'));
        }
        //thuc hiện xóa
        $this->chinhanh_model->delete($id);

        $this->session->set_flashdata('message', '<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Xóa dữ liệu thành công</label>');
        redirect(admin_url('adv'));
    }
	}
?>