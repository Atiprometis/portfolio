<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php
                foreach ($query->result() as $row)
                
                {
?>                   

                   <!-- <?php     echo $row->id_image."<br>";?>
                   <?php     echo $row->image."<br>";?>
                   <?php     echo $row->image_path."<br>";?> -->
                   
                   <img src="<?php echo base_url('assets/uploads/'.$row->image); ?>" class="bb-hover" >
                    
<?php                     
                }
              
              
?>


</body>
</html>