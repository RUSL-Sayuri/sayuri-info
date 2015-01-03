<?php
$this->load->view('partial/header');
?>
</head>
<body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <?php $this->load->view('partial/page_header'); ?>
                <?php $this->load->view('partial/page_navigation'); ?>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-3 column">
                <div class="well well-sm">
                    <h4>
                        I am a;
                    </h4>
                    <ul>
                        <li>
                            <a href="#">Family Member</a>
                        </li>
                        <li>
                            <a href="#">Professional</a>
                        </li>
                        <li>
                            <a href="#">Researcher</a>
                        </li>
                        <li>
                            <a href="#">Special School</a>
                        </li>
                    </ul>
                </div> 
                <div class="well well-sm">
                    <button type="button" class="btn btn-link btn-block">App Center</button> 
                </div>
                <div class="well well-sm">
                    <button type="button" class="btn btn-link btn-block">Forum</button>
                </div>
            </div>
            <div class="col-md-9 column">
                <div class="row">
                    <div class="col-md-5">
                        <p>
                            Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
                        </p>
                    </div>
                    <div class="col-md-7">
                        <img class="img-responsive" src="<?php echo base_url('assests/images/Sayuri_Logo_400_400.png'); ?>"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-3 column">
                <div class="well well-sm">
                    <h4>Contact us</h4>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 column">
                <div class="well well-sm">
                    <h4 class="text-center">Become a Member</h4>
                    <img class="center-block img-rounded img-responsive" src="<?php echo base_url('assests/images/Sayuri_Logo_400_400.png'); ?>"/>
                </div>
            </div>
            <div class="col-md-3 column">
                <div class="well well-sm">
                    <h4 class="text-center">About Autism</h4>
                    <img class="center-block img-rounded img-responsive" src="<?php echo base_url('assests/images/Sayuri_Logo_400_400.png'); ?>"/>
                </div>
            </div>
            <div class="col-md-3 column">
                <div class="well well-sm">
                    <h4 class="text-center">Resources</h4>
                    <img class="center-block img-rounded img-responsive" src="<?php echo base_url('assests/images/Sayuri_Logo_400_400.png'); ?>"/>
                </div>
            </div>
        </div>
        <?php $this->load->view('partial/page_footer'); ?>
    </div>
    <?php
    $this->load->view('partial/footer');
    ?>