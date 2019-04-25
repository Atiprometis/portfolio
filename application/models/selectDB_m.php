<?php 

class selectDB_m extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
    function selectImageDBAll(){
                $query = $this->db->query("SELECT `id_image`, `image`, `image_path`, `image_link`, `typework` FROM `image_portfolio`");
                return $query;
    }
    function selectWebsiteDBAll(){
        $query = $this->db->query("SELECT `id_image`, `image`, `image_path`, `image_link`, `typework` FROM `image_portfolio`WHERE `typework` = 'website' ");
        return $query;
    }
    function selectDesignimageDBAll(){
        $query = $this->db->query("SELECT `id_image`, `image`, `image_path`, `image_link`, `typework` FROM `image_portfolio` WHERE `typework` = 'design'");
        return $query;
    }

    function selectOtherimageDBAll(){
        $query = $this->db->query("SELECT `id_image`, `image`, `image_path`, `image_link`, `typework` FROM `image_portfolio` WHERE `typework` = 'other'");
        return $query;
    }

    function selectImageDB(){


        
        //  $this->db->select('id_image','image','image_path');
        // $query = $this->db->get('image_portfolio');
        $query = $this->db->query("SELECT `id_image`, `image`, `image_path`, `image_link`, `typework` FROM `image_portfolio` limit 8");
        return $query;


        // switch ($dataformmoreview) {
        //     case "1":
        //         echo "Your favorite color is red!";
        //         break;
            
        //     default:
        //     $query = $this->db->query("SELECT `id_image`, `image`, `image_path`, `image_link`, `typework` FROM `image_portfolio` limit 8");
        //     return $query;
            
        // }
    }

    function queryWebsiteimageDB(){
        $query = $this->db->query("SELECT `id_image`, `image`, `image_path`, `image_link`, `typework` FROM `image_portfolio` WHERE `typework` = 'website' limit 8");
        return $query;
    }

    function queryDesignimageDB(){
        $query = $this->db->query("SELECT `id_image`, `image`, `image_path`, `image_link`, `typework` FROM `image_portfolio` WHERE `typework` = 'design' limit 8");
        return $query;
    }

    function queryOtherimageDB(){
        $query = $this->db->query("SELECT `id_image`, `image`, `image_path`, `image_link`, `typework` FROM `image_portfolio` WHERE `typework` = 'other'limit 8 ");
        return $query;
    }

}

?>