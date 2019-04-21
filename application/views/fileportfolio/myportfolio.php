
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php echo link_tag('assets/css/myportfolio.css')?>
    <?php echo link_tag('assets/img/minmin.png')?>
</head>
<body>
    

    <div class="container">
        <h1 class="head-port">PORTFOLIO</h1>
        
       <div class="tabs-portfolio">
             <nav > 
                <div class="nav justify-content-center " id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active color-gray" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ALL</a>
                    <a class="nav-item nav-link color-gray" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">WEB</a>
                    <a class="nav-item nav-link color-gray" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">DESIGN</a>
                    <a class="nav-item nav-link color-gray" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">OTHER</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                <div class="container">
                    <div class="row">
                        <div class="col-4 ">
                            <div class="card img-wrapper" >
                            <img src="<?php echo base_url('assets/img/view1.jpg'); ?>" class="bb-hover" >

                            </div>
                        </div>
                        <div class="col-4 ">
                            <div class="card img-wrapper" >
                            <img src="<?php echo base_url('assets/img/view2.jpg'); ?>" class="bb-hover" >

                            </div>
                        </div>
                        <div class="col-4 ">
                            <div class="card img-wrapper" >
                            <img src="<?php echo base_url('assets/img/view3.jpg'); ?>" class="bb-hover" >

                            </div>
                        </div>
                        
                        
                    </div>
                </div>


                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">.asdasdasdasdasdasd..</div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">.asdasdasdasd..</div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">.asdasdasdasd..</div>
            </div>
       </div>
    
    </div>

</body>
</html>