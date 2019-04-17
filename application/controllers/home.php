<?php 
 
 class home extends CI_Controller{
     function __construct()
     {
         parent::__construct();
        //  $this->load->model('number_m');
        // $this->load->model('member_m'); โหลดจาก autoload ไม่ต้องเขียนตรงนี้
     }

    //  function getNumber($num1,$num2){
    //      $data['get'] = $this->number_m->getNumber($num1,$num2);
    //      $this->load->view('body',$data);
    //  }
    //  function getMember($id){
    //      $data['get'] = $this->member_m->getMember($id);
    //     $this->load->view('member',$data);
    // }

     function index(){
        $this->load->view('portfolio/header');
        $this->load->view('portfolio/aboutme');
        $this->load->view('portfolio/myportfolio');
        $this->load->view('portfolio/footer');
     }

    //  function main($id=null){
    //      echo "HI Guy = ".$id;
    //  }


//      function showview($id=null){
//          $data = array();
//          $data['name'] = $id;

//          $this->load->view('showview',$data);
//     }

// function member(){
//     $data['member'] = array(
//         'da1',
//         'da2',
//         'da3',
//         'da4'
//     );
//     $this->load->view('member',$data);
// }

    

 }

 ?>
