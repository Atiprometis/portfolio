<?php 

class queryDB_m extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    function getContact(){
        // $sql ="SELECT * FROM user";
        // $data['query'] = $this->db->query($sql)->result();
  
        // $data['content'] = 'fileportfolio/queryDB_v';
        // $this->load->view('fileportfolio/aboutme',$data);

        $query = $this->db->get('user');
       
        // foreach ($query->result() as $row)
        // {
        //          $row->name."<br>";
        //          $row->email."<br>";
        //          $row->tel."<br>";
        // }

        return $query;

        
        // $this->load->view('fileportfolio/aboutme',$query);

      }
    
}

?>