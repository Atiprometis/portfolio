<?php 
 
 class home extends CI_Controller{
     function __construct()
     {
         parent::__construct();
        // $this->load->model('member_m'); โหลดจาก autoload ไม่ต้องเขียนตรงนี้
     }

     function getMember($id){
         $data['get'] = $this->member_m->getMember($id);
        $this->load->view('member',$data);
    }
//      function index(){
//         $this->load->view('header');
//         $this->load->view('body');
//         $this->load->view('footer');
//      }
//      function main($id=null){
//          echo "HI Guy = ".$id;
//      }

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
