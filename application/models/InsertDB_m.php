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

    function insertImages(){
        $data = array(
            'url' => $this->_url,
        );
        $this->db->insert('picture', $data);
        return $this->db->insert_id();
    }

}

?>