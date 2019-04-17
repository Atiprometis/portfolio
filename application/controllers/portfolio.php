<?php 

class portfolio extends CI_Controller {
    function __construct()
    {
       parent::__construct(); 
       $this->load->view('portfolio/header-script');
    }

    function index(){
        $this->load->view('portfolio/header');
        $this->load->view('portfolio/banners-top');
        $this->load->view('portfolio/aboutme');
        $this->load->view('portfolio/myportfolio');
        $this->load->view('portfolio/footer');
     }
    
}

?>