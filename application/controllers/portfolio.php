<?php 

class portfolio extends CI_Controller {
    function __construct()
    {
       parent::__construct(); 
       $this->load->view('fileportfolio/header-script');
       $this->load->library('upload');
    }
    
    function index(){
      $data['query'] = $this->queryDB_m->getContact();

      $data['queryimages'] = $this->selectDB_m->selectImageDB();
      $data['querywebsite'] = $this->selectDB_m->queryWebsiteimageDB();
      $data['querydesign'] = $this->selectDB_m->queryDesignimageDB();
      $data['queryother'] = $this->selectDB_m->queryOtherimageDB();
      // $this->load->view('fileportfolio/aboutme',$data);

        $this->load->view('fileportfolio/header');
        $this->load->view('fileportfolio/banners-top');
        // $this->load->view('fileportfolio/aboutme',$data);
        $this->load->view('fileportfolio/myportfolio',$data);
        $this->load->view('fileportfolio/footer');
      // $this->load->view('test1');
      
     }
 
     function testView(){
       $data['query'] = $this->selectDB_m->selectImageDB();
       $this->load->view('selectImages',$data);
     }


    function add(){
       $data['name'] = $this->input->post('name');
       $data['email'] = $this->input->post('email');
       $data['tel'] = $this->input->post('tel');
       $data['detail'] = $this->input->post('detail');

       $this->insertDB_m->insertDB($data);
       redirect('portfolio/index');
       $this->load->view('fileportfolio/myportfolio', $data);
    }
    
    function getContact(){
       $data['query'] = $this->queryDB_m->getContact();
       $this->load->view('fileportfolio/aboutme',$data);
      //      $data['get'] = $this->member_m->getMember($id);
      //     $this->load->view('member',$data);
      }
}

?>