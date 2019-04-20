<?php 

class portfolio extends CI_Controller {
    function __construct()
    {
       parent::__construct(); 
       $this->load->view('fileportfolio/header-script');
       $this->load->model('queryDB_m');
       $this->load->model('insertDB_m');
    }

    function index(){
      $data['query'] = $this->queryDB_m->getContact();
      // $this->load->view('fileportfolio/aboutme',$data);

        $this->load->view('fileportfolio/header');
        $this->load->view('fileportfolio/banners-top');
        $this->load->view('fileportfolio/aboutme',$data);
        $this->load->view('fileportfolio/myportfolio');
        $this->load->view('fileportfolio/footer');
      // $this->load->view('test1');
      
     }
    function add(){
       $data['name'] = $this->input->post('name');
       $data['email'] = $this->input->post('email');
       $data['tel'] = $this->input->post('tel');
       $data['detail'] = $this->input->post('detail');

       $this->insertDB_m->insertDB($data);
       redirect('portfolio/index');
      //  $this->load->view('fileportfolio/myportfolio', $data);
    }
    
    function getContact(){
       $data['query'] = $this->queryDB_m->getContact();
       $this->load->view('fileportfolio/aboutme',$data);
      //      $data['get'] = $this->member_m->getMember($id);
      //     $this->load->view('member',$data);
      }
}

?>