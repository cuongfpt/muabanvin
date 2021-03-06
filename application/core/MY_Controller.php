<?php

Class MY_Controller extends CI_Controller
{
    //bien gui du lieu sang ben view
    public $data = array();

    function __construct()
    {
        //ke thua tu CI_Controller
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        $controller = $this->uri->segment(1);
        switch ($controller) {
            case 'admin' : {
                $this->load->helper('language');
                $this->load->model('user_model');
                $this->lang->load('admin/common');
                $admin_login = $this->session->userdata('user_adminnew_login');
                $this->data['login'] = $admin_login;
                if ($admin_login) {
                    $admin_info = $this->user_model->get_info($admin_login);
                    $this->data['admin_info'] = $admin_info;
                }

                $this->load->helper('admin');
                $this->_check_login();
                break;
            }
            default: {

            $linkapi = $this->config->item("api_url");
            $this->data['linkapi'] = $linkapi;
            $userinfo = $this->session->userdata('infouser');
            $this->data['userinfo'] = $userinfo;
            $this->load->helper('news_helper');
            $this->load->model('category_model');
             $this->load->model('news_model');
            $this->load->model('adv_model');
            $this->load->model('system_model');
            $list = $this->get_list_category();
            $this->data['menu_list'] = $list;
            $listfooter = $this->get_list_category_footer();
            $this->data['listfooter'] = $listfooter;
            $listnewshome=$this->news_model->get_list_news_home();
            $this->data['listnewshome'] = $listnewshome;
            //quảng cáo left
            $list1 = $this->adv_model->get_adv_left();
            $this->data['list1'] = $list1;
            $list2 = $this->adv_model->get_adv_right();
            $this->data['list2'] = $list2;
            $list3 = $this->system_model->get_list();
            $this->data['list3'] = $list3;
            foreach($list3 as $item)
            {
                $this->data['linkface'] = $item->linkface;
                $this->data['codeGA'] = $item->codeGA;
                $this->data['titlePage'] = $item->titlePage;
                $this->data['guidTranfer'] = $item->guidTranfer;
                $this->data['keyword'] = $item->keyword;
                $this->data['metaDescription'] = $item->metaDescription;
                $this->data['linkfacegroup'] = $item->linkfacegroup;
                $this->data['imageTranfer'] = $item->imageTranfer;
                $this->data['bannerHome'] = $item->bannerHome;
                $this->data['Address'] = $item->Address;
                $this->data['Bank'] = $item->Bank;
                $this->data['hotline'] = $item->hotline;    
                $this->data['logo'] = $item->logo;  
                $this->data['sologant'] = $item->sologant;  
                $this->data['logobank'] = $item->logobank;  
                $this->data['CSKH'] = $item->CSKH;  
                $this->data['Zalo'] = $item->Zalo;
                $this->data['sign'] = $item->sign;
                $this->data['AddressTranfer'] = $item->AddressTranfer;
                $this->data['titleDaily'] = $item->titleDaily;
                $this->data['daily'] = $item->Daily;
                $this->data['map'] = $item->Map;
                $this->data['email'] = $item->Email;
                $this->data['bannerText'] = $item->BannerText;
                $this->data['bannerText1'] = $item->BannerText1;
                $this->data['textRun'] = $item->TextRun;
            }
            break;
            }

        }
    }

    /*
     * Kiem tra trang thai dang nhap cua admin
     */
    private function _check_login()
    {
        $controller = $this->uri->rsegment('1');
        $controller = strtolower($controller);

        $login = $this->session->userdata('user_adminnew_login');
        //neu ma chua dang nhap,ma truy cap 1 controller khac login
        if (!$login && $controller != 'login') {
            redirect(admin_url('login'));
        }
        //neu ma admin da dang nhap thi khong cho phep vao trang login nua.
        if ($login && $controller == 'login') {
            redirect(admin_url('home'));
        }
    }



    function Check_Url_Admin($current_url)
    {
        $this->load->model('accesslink_model');
        //lấy id của user đăng nhập
        $admin_login = $this->session->userdata('user_id_login');
        //lấy tất cả các link của user đó
        $list_link = $this->accesslink_model->get_list_linkacess_userid($admin_login);

        //lấy url hiện tại
        $stack = array();
        foreach ($list_link as $item) {
            array_push($stack, $item->Link);
        }
        if (in_array($current_url, $stack)) {
            return true;
        } else {
            return false;
        }
    }

    function create_slug($str)
    {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }

    public function init_pagination($base_url, $total_rows, $per_page = 100, $segment)
    {
        $ci =& get_instance();
        $config['base_url'] = $base_url;
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config["uri_segment"] = $segment;
        $config['next_link'] = 'Trang kế tiếp';
        $config['prev_link'] = 'Trang trước';
        $ci->pagination->initialize($config);
        return $config;
    }

    function dateDiff($start, $end)
    {
        date_default_timezone_set('Asia/Bangkok');
        $start_ts = strtotime($start);
        $end_ts = strtotime($end);
        $diff = $end_ts - $start_ts;
        return round($diff / 86400);
    }


    function rand_string($length)
    {
        $str = "";
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $size = strlen($chars);
        for ($i = 0; $i < $length; $i++) {
            $str .= $chars[rand(0, $size - 1)];
        }
        return $str;
    }

    function get_list_category()
    {
        $str = "";
        $categorys = $this->category_model->get_category();
        $categoryfaq = $this->category_model->get_category_faq();
        if (!empty($categorys)) {
            foreach ($categorys as $category) {
                if ($category->typepage == 1) {
                    $str .= "<li class='leaf'>";
                    $str .= " <a href=" . base_url('tuyen-dai-ly') . ">" . $category->catname . "</a>";
                    $str .= "<ul>";
                    $str .= $this->get_sub_list_category($category->id, $i = 0);
                    $str .= "</ul>";
                    $str .= "</li>";
                } else if ($category->typepage == 2) {
                    $str .= "<li class='leaf'>";
                    $str .= " <a href=" . base_url('chi-nhanh') . ">" . $category->catname . "</a>";
                    $str .= "<ul>";
                    $str .= $this->get_sub_list_category($category->id, $i = 0);
                    $str .= "</ul>";
                    $str .= "</li>";
                } else if ($category->typepage == 3) {
                    $str .= "<li class='leaf'>";
                    $str .= " <a href=" . base_url('lien-he') . ">" . $category->catname . "</a>";
                    $str .= "<ul>";
                    $str .= $this->get_sub_list_category($category->id, $i = 0);
                    $str .= "</ul>";
                    $str .= "</li>";
                } else  {
                    $str .= "<li class='leaf'>";
                    $str .= " <a href=" . base_url('danh-muc/' . $category->seolink . '-' . $category->id) . ">" . $category->catname . "</a>";
                    $str .= "<ul>";
                    $str .= $this->get_sub_list_category($category->id, $i = 0);
                    $str .= "</ul>";
                    $str .= "</li>";
                }

            }
        }
        
        return $str;
    }

    function get_sub_list_category($category_ids, $i = 0)
    {
        $str = "";
        $sub_categorys = $this->category_model->get_subcategory($category_ids);
        //kiem tra get subcategory co ton ai hay
        if (!empty($sub_categorys)) {
            foreach ($sub_categorys as $sub_category) {
                if ($sub_category->typepage == 1) {
                    $str .= "<li class='leaf'>";
                    $str .= " <a href=" . base_url('tuyen-dai-ly') . ">" . $sub_category->catname . "</a>";
                    $str .= "<ul>";
                } else if ($sub_category->typepage == 2) {
                    $str .= "<li class='leaf'>";
                    $str .= " <a href=" . base_url('chi-nhanh') . ">" . $sub_category->catname . "</a>";
                    $str .= "<ul>";
                } else if ($sub_category->typepage == 3) {
                    $str .= "<li>";
                    $str .= " <a href=" . base_url('lien-he') . ">" . $sub_category->catname . "</a>";
                    $str .= "<ul>";
                } else if ($sub_category->typepage == 0) {
                    $str .= "<li class='leaf'>";
                    $str .= " <a href=" . base_url('danh-muc/' . $sub_category->seolink . '-' . $sub_category->id) . ">" . $sub_category->catname . "</a>";
                    $str .= "<ul>";
                }
                $sub_category_con = $this->category_model->get_subcategory($sub_category->id);
                if (!empty($sub_category_con)) {
                    foreach ($sub_category_con as $sub_category) {
                        if ($sub_category->typepage == 1) {
                            $str .= "<li class='leaf'>";
                            $str .= " <a href=" . base_url('tuyen-dai-ly') . ">" . $sub_category->catname . "</a>";
                            $str .= "<li>";
                        } else if ($sub_category->typepage == 2) {
                            $str .= "<li class='leaf'>";
                            $str .= " <a href=" . base_url('chi-nhanh') . ">" . $sub_category->catname . "</a>";
                            $str .= "<li>";
                        } else if ($sub_category->typepage == 3) {
                            $str .= "<li class='leaf'>";
                            $str .= " <a href=" . base_url('lien-he') . ">" . $sub_category->catname . "</a>";
                            $str .= "<li>";
                        } else  {
                            $str .= "<li class='leaf'>";
                            $str .= " <a href=" . base_url('danh-muc/' . $sub_category->seolink . '-' . $sub_category->id) . ">" . $sub_category->catname . "</a>";
                            $str .= "</li>";
                        }
                    }
                }
                $str .= "</ul>";
                $str .= "</li>";


                if ($sub_category->id) {
                    $str .= $this->get_sub_list_category($sub_category->id, $i++);
                }
            }

        }
        return $str;
    }

    

    function get_list_category_footer()
    {
        $str = "";
        $cate_footer = $this->category_model->get_category_footer();
        //kiem tra get subcategory co ton ai hay
        if ($cate_footer) {
            foreach ($cate_footer as $category) {
                if ($category->typepage == 1) {
                    $str .= "<li>";
                    $str .= " <a href=" . base_url('vinh-danh') . ">" . $category->catname . "</a>";
                    $str .= "</li>";
                } else if ($category->typepage == 2) {
                    $str .= "<li>";
                    $str .= " <a href=" . base_url('thuong-vip') . ">" . $category->catname . "</a>";
                    $str .= "</li>";
                } else if ($category->typepage == 3) {
                    $str .= "<li>";
                    $str .= " <a href=" . base_url('lien-he') . ">" . $category->catname . "</a>";
                    $str .= "</li>";
                } else if ($category->typepage == 4) {
                    $str .= "<li>";
                    $str .= " <a href=" . base_url('hoi-dap') . ">" . $category->catname . "</a>";
                    $str .= "</li>";
                } else if ($category->typepage == 5) {
                    $str .= "<li>";
                    $str .= " <a href=" . base_url('chinh-sach') . ">" . $category->catname . "</a>";
                    $str .= "</li>";
                } else if ($category->typepage == 6) {
                    $str .= "<li>";
                    $str .= " <a href=" . base_url($category->seolink . '-' . $category->id) . ">" . $category->catname . "</a>";
                    $str .= "</li>";
                } else if ($category->typepage == 0) {
                    $str .= "<li>";
                    $str .= " <a href=" . base_url('danh-muc/' . $category->seolink . '-' . $category->id) . ">" . $category->catname . "</a>";
                    $str .= "</li>";
                }

            }
        }
        return $str;
    }
    function cut_string($str, $n_chars, $crop_str = '...') {
        $buff = strip_tags($str);
        if (mb_strlen($buff) > $n_chars) {
            $cut_index = mb_strpos($buff, ' ', $n_chars);
            $buff = mb_substr($buff, 0, ($cut_index === false ? $n_chars : $cut_index + 1), "UTF-8") . $crop_str;
        }
        return $buff;
    }

}
