<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo link_tag('assets/css/myportfolio.css')?>
    <?php echo link_tag('assets/img/minmin.png')?>
</head>
<body>


<?php echo var_dump($name1); ?>

<div class="container">
        <h1 class="head-port">PORTFOLIO</h1>

       <div class="tabs-portfolio">
             <nav > 
                <div class="nav justify-content-center " id="nav-tab" role="tablist">
                    
                    <a class="nav-item nav-link color-gray " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="">ALL</a>
                    <a class="nav-item nav-link color-gray  "nav-web-tab" data-toggle="tab" href="#nav-web" role="tab" aria-controls="nav-web" aria-selected="">WEB</a>
                    <a class="nav-item nav-link color-gray  "nav-design-tab" data-toggle="tab" href="#nav-design" role="tab" aria-controls="nav-design" aria-selected="">DESIGN</a>
                    <a class="nav-item nav-link color-gray "  nav-other-tab" data-toggle="tab" href="#nav-other" role="tab" aria-controls="nav-other" aria-selected="">OTHER</a>
                   
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade <?php switch($name1){ case "1": echo "show active" ;break; default: " ";}?>" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                <div class="container">
                    <div class="row">
                        <?php
                            foreach ($queryimages->result() as $row)
                                {
                        ?> 
                        <div class="col-lg-3 col-md-6 col-sm-6 martop10">
                            <div class="img-wrapper" >         
                                                <a href= "<?php echo $row->image_link ?>">
                                                <img src="<?php echo base_url('assets/uploads/'.$row->image); ?>" class="bb-hover" >      
                                               </a>
                            </div>
                        </div>
                        <?php                     
                                }
                        ?>
                    </div>
                </div>


                </div>
                <div class="tab-pane fade <?php switch($name1){ case "2": echo "show active";break; default: " ";}?>" id="nav-web" role="tabpanel" aria-labelledby="nav-web-tab">
                <div class="container">
                    <div class="row">
                        <?php
                            foreach ($querywebsite->result() as $row)
                                {
                        ?> 
                        <div class="col-lg-3 col-md-6 col-sm-6 martop10">
                            <div class="img-wrapper" >         
                                                <a href= "<?php echo $row->image_link ?>">
                                                <img src="<?php echo base_url('assets/uploads/'.$row->image); ?>" class="bb-hover" >      
                                               </a>
                            </div>
                        </div>
                        <?php                     
                                }
                        ?>
                    </div>
                </div>
                </div>
                <div class="tab-pane fade <?php switch($name1){ case "3": echo "show active";break; default: " ";}?>" id="nav-design" role="tabpanel" aria-labelledby="nav-design-tab">
                <div class="container">
                    <div class="row">
                        <?php
                            foreach ($querydesign->result() as $row)
                                {
                        ?> 
                        <div class="col-lg-3 col-md-6 col-sm-6 martop10">
                            <div class="img-wrapper" >         
                                                <a href= "<?php echo $row->image_link ?>">
                                                <img src="<?php echo base_url('assets/uploads/'.$row->image); ?>" class="bb-hover" >      
                                               </a>
                            </div>
                        </div>
                        <?php                     
                                }
                        ?>
                    </div>
                </div>
                </div>
                <div class="tab-pane fade <?php switch($name1){ case "4": echo "show active";break; default: " ";}?>" id="nav-other" role="tabpanel" aria-labelledby="nav-other-tab">
                <div class="container">
                    <div class="row">
                        <?php
                            foreach ($queryother->result() as $row)
                                {
                        ?> 
                        <div class="col-lg-3 col-md-6 col-sm-6 martop10">
                            <div class="img-wrapper" >         
                                                <a href= "<?php echo $row->image_link ?>">
                                                <img src="<?php echo base_url('assets/uploads/'.$row->image); ?>" class="bb-hover" >      
                                               </a>
                            </div>
                        </div>
                        <?php                     
                                }
                        ?>
                    </div>
                </div>   
                </div>

            </div>
            
         </div>
         
    
    </div>
</div>

</body>
</html>