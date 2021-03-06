<?php 

class upload_controller extends CI_Controller {
    
public function __construct() {
    parent::__construct();
    }

    public function custom_view(){
    $this->load->view('custom_view', array('error' => ' ' ));
    }

    public function do_upload(){
    $config = array(
    'upload_path' => "./assets/uploads/",
    'allowed_types' => "gif|jpg|png|jpeg|pdf",
    'overwrite' => TRUE,
    'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
    'max_height' => "1768",
    'max_width' => "1924"
    );

    $this->load->library('upload', $config);
    if( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('custom_view', $error);       
        }
    else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success',$data);
    
            $this->insertDB_m->insertImages($data);
        }
    }
}

?>