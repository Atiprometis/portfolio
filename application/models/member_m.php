<?php 

class member_m extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    function getMember($id){
        $type ='';
        switch($id){
            case '1':
                $type = "keemark";
                break;
            case '2':
                $type = "keehee";
                break;
        }
        return $type;
    }
}
?>