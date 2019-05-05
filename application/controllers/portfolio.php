<?php 

class portfolio extends CI_Controller {
    function __construct()
    {
       parent::__construct(); 
       $this->load->view('fileportfolio/header-script');
       $this->load->library('upload');
      //  $this->load->view('fileportfolio/header');
       $this->load->library('javascript');
       $this->load->view('fileportfolio/scriptall');
       $this->load->view('fileportfolio/bganimation');
    }
    
    function index(){
      $data['query'] = $this->queryDB_m->getContact();

      $data['queryimages'] = $this->selectDB_m->selectImageDB();
      $data['querywebsite'] = $this->selectDB_m->queryWebsiteimageDB();
      $data['querydesign'] = $this->selectDB_m->queryDesignimageDB();
      $data['queryother'] = $this->selectDB_m->queryOtherimageDB();
      // $this->load->view('fileportfolio/aboutme',$data);

      
      $this->load->view('fileportfolio/banners-top');
        // $this->load->view('fileportfolio/aboutme',$data);
      $this->load->view('fileportfolio/myportfolio',$data);
        // $this->load->view('fileportfolio/footer');
        $this->load->view('rellax');
      
     }
     function viewmore(){

      $data['name1'] = $this->input->post('name1');

      $data['queryimages'] = $this->selectDB_m->selectImageDBAll();
      $data['querywebsite'] = $this->selectDB_m->selectWebsiteDBAll();
      $data['querydesign'] = $this->selectDB_m->selectDesignimageDBAll();
      $data['queryother'] = $this->selectDB_m->selectOtherimageDBAll();
      $this->load->view('fileportfolio/viewmore',$data);
     }

     function testView(){
      //  $this->load->view('parallax');
       $this->load->view('rellax');
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

    function testinsert(){
      $data['name1'] = $this->input->post('name1');
      $this->insertDB_m->testinsert($data);

     }
    
    function getContact(){
       $data['query'] = $this->queryDB_m->getContact();
       $this->load->view('fileportfolio/aboutme',$data);
      //      $data['get'] = $this->member_m->getMember($id);
      //     $this->load->view('member',$data);
      }
}

?>