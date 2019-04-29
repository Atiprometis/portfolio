<?php 

class insertDB_m extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    function insertDB($data){
        // $data = array(
        //     'name' => 'name',
        //     'email' => 'email',
        //     'tel' => 'tel',
        //     'detail' => 'detail'
        // );

        $this->db->insert('user',$data);
    }

    function insertImages($data){
        
        $data = array(
            'image' => $this->upload->data('file_name'),
            'image_path' => $this->upload->data('file_path'),
            'image_link' => $this->input->post('link'),
            'typework' => $this->input->post('typework'),
        );
        
        $this->db->insert('image_portfolio', $data); 
        
    }
    function testinsert($data){
        $this->db->insert('test',$data);
    }

}

?>