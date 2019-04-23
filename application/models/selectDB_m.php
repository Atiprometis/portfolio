<?php 

class selectDB_m extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    function selectImageDB(){

        //  $this->db->select('id_image','image','image_path');
        $query = $this->db->get('image_portfolio');
        return $query;
    }

    function queryWebsiteimageDB(){
        $query = $this->db->query("SELECT `id_image`, `image`, `image_path`, `image_link`, `typework` FROM `image_portfolio` WHERE `typework` = 'website'");
        return $query;
    }

    function queryDesignimageDB(){
        $query = $this->db->query("SELECT `id_image`, `image`, `image_path`, `image_link`, `typework` FROM `image_portfolio` WHERE `typework` = 'design'");
        return $query;
    }

    function queryOtherimageDB(){
        $query = $this->db->query("SELECT `id_image`, `image`, `image_path`, `image_link`, `typework` FROM `image_portfolio` WHERE `typework` = 'other'");
        return $query;
    }

}

?>