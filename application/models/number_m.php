<?php 

 class number_m extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    function getNumber($num1,$num2){
        $total = 0; 
        
        $total =  $num1+$num2;

        

        return $total;
        // $type ='';
        // switch($id){
        //     case '1':
        //         $type = "keemark";
        //         break;
        //     case '2':
        //         $type = "keehee";
        //         break;
        // }
        // return $type;
    }

 }

?>