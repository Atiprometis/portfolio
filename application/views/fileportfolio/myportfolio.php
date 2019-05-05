
<!DOCTYPE html>
<html lang="en">
<head>

    <?php echo link_tag('assets/css/myportfolio.css')?>
    <?php echo link_tag('assets/img/minmin.png')?>
</head>
<body>

  
    <div class="container">
        <h1 class="head-port">PORTFOLIO</h1>
        
       <div class="tabs-portfolio">
             <nav > 
                <div class="nav justify-content-center " id="nav-tab" role="tablist">
                    <a class="nav-item nav-link color-gray active " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ALL</a>
                    <a class="nav-item nav-link color-gray " id="nav-web-tab" data-toggle="tab" href="#nav-web" role="tab" aria-controls="nav-web" aria-selected="false">WEB</a>
                    <a class="nav-item nav-link color-gray" id="nav-design-tab" data-toggle="tab" href="#nav-design" role="tab" aria-controls="nav-design" aria-selected="false">DESIGN</a>
                    <a class="nav-item nav-link color-gray" id="nav-other-tab" data-toggle="tab" href="#nav-other" role="tab" aria-controls="nav-other" aria-selected="false">OTHER</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

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
                    
                        <?php 
                        $attributes = array('class' => 'wrapperbutton');
                        echo form_open('portfolio/viewmore',$attributes);
                        ?>
                        
                        <button class="button-viewmore" name=" name1" id="name1" value="1" onclick="location.href='<?php echo base_url();?>index.php/portfolio/viewmore'">VIEWMORE</button>
                        <?php                        
                        echo form_close();
                        ?>
                </div>


                </div>
                <div class="tab-pane fade" id="nav-web" role="tabpanel" aria-labelledby="nav-web-tab">
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
                    <?php 
                        $attributes = array('class' => 'wrapperbutton');
                        echo form_open('portfolio/viewmore',$attributes);
                        ?>
                        <button  class="button-viewmore" name="name1"  id="name1" value="2" onclick="location.href='<?php echo base_url();?>index.php/portfolio/viewmore'">VIEWMORE</button>
                        <?php                        
                        echo form_close();
                    ?>
                </div>
                </div>
                <div class="tab-pane fade" id="nav-design" role="tabpanel" aria-labelledby="nav-design-tab">
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
                    <?php 
                        $attributes = array('class' => 'wrapperbutton');
                        echo form_open('portfolio/viewmore',$attributes);
                        ?>
                        <button class="button-viewmore" name="name1" id="name1" value="3" onclick="location.href='<?php echo base_url();?>index.php/portfolio/viewmore'">VIEWMORE</button>
                        <?php                        
                        echo form_close();
                    ?>
                </div>
                </div>
                <div class="tab-pane fade" id="nav-other" role="tabpanel" aria-labelledby="nav-other-tab">
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
                    <?php 
                        $attributes = array('class' => 'wrapperbutton');
                        echo form_open('portfolio/viewmore',$attributes);
                        ?>
                        <button class="button-viewmore" name="name1" id="name1" value="4" onclick="location.href='<?php echo base_url();?>index.php/portfolio/viewmore'">VIEWMORE</button>
                        <?php                        
                        echo form_close();
                    ?>
                </div>   
                </div>

            </div>

       </div>
    
    </div>

</body>
</html>