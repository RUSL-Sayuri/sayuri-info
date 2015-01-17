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
                            <a href="<?php echo base_url('index.php/register/family_member'); ?>">Family Member</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/register/professional'); ?>">Professional</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/register/researcher'); ?>">Researcher</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/register/special_school'); ?>">Special School</a>
                        </li>
                    </ul>
                </div> 
                <div class="well well-sm">
                    <img  class="center-block img-rounded img-responsive" src="<?php echo base_url('assests/images/info-portal/app_logo_png.png'); ?>"/>

                </div>
                <div class="well well-sm">
                    <img  class="center-block img-rounded img-responsive" src="<?php echo base_url('assests/images/info-portal/forum_logo_png.png'); ?>"/>

                </div>
            </div>
            <div class="col-md-9 column">
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel slide" id="carousel-133954">
                            <ol class="carousel-indicators">
                                <li class="active" data-slide-to="0" data-target="#carousel-133954">
                                </li>
                                <li data-slide-to="1" data-target="#carousel-133954">
                                </li>
                                <li data-slide-to="2" data-target="#carousel-133954">
                                </li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img alt="" src="<?php echo base_url('assests/images/info-portal/carousel_1.jpg'); ?>" />
                                    <div class="carousel-caption">
                                        <h4>
                                            <?php echo $carousel_quote_1; ?> 
                                        </h4>
                                        <p>
                                            <?php echo $carousel_quote_author_1; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="" src="<?php echo base_url('assests/images/info-portal/carousel_2.jpg'); ?>" />
                                    <div class="carousel-caption">
                                        <h4>
                                            <?php echo $carousel_quote_2; ?> 
                                        </h4>
                                        <p>
                                            <?php echo $carousel_quote_author_2; ?>

                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="" src="<?php echo base_url('assests/images/info-portal/carousel_3.jpg'); ?>" />
                                    <div class="carousel-caption">
                                        <h4>
                                            <?php echo $carousel_quote_3; ?> 

                                        </h4>
                                        <p>
                                            <?php echo $carousel_quote_author_3; ?>

                                        </p>
                                    </div>
                                </div>
                            </div> <a class="left carousel-control" href="#carousel-133954" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-133954" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-3 column">
                <div class="well well-sm">
                    <h4>Contact us</h4>
                    <form id="form_subscribe_email" class="form-horizontal" role="form" onsubmit="return validate_subscribe_email();" method="POST" action="<?php echo base_url('index.php/home/email_subscribe'); ?>">
                        <div class="form-group">
                            <label for="subscribe_email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="subscribe_email" class="form-control" id="subscribe_email" />
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
                <div class="well well-sm" data-toggle="modal" data-target="#What_is_autism" style="cursor:pointer">
                    <h4 class="text-center"><?php echo $what_is_autism; ?></h4>
                    <img height="200px" width="200px" class="center-block img-rounded img-responsive" src="<?php echo base_url('assests/images/info-portal/home_what_is_autism.png'); ?>"/>
                </div>
            </div>
            <div class="col-md-3 column">
                <div class="well well-sm" style="cursor:pointer">
                    <h4 class="text-center"><?php echo $resources; ?></h4>
                    <img height="200px" width="200px"  class="center-block img-rounded img-responsive" src="<?php echo base_url('assests/images/info-portal/home_resources.png'); ?>"/>
                </div>
            </div>
            <div class="col-md-3 column">
                <div class="well well-sm" style="cursor:pointer">
                    <h4 class="text-center"><?php echo $join_us; ?></h4>
                    <img height="200px" width="200px" class="center-block img-rounded img-responsive" src="<?php echo base_url('assests/images/info-portal/home_join_us.png'); ?>"/>
                </div>
            </div>
        </div>
        <?php $this->load->view('partial/page_footer'); ?>
    </div>

    <!-- Modals -->
    <!-- Modal What_is_autism -->
    <div class="modal fade" id="What_is_autism" tabindex="-1" role="dialog" aria-labelledby="What_is_autism_label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="What_is_autism_label"><?php echo $model_what_is_autism_title; ?></h4>
                </div>
                <div class="modal-body">
                    <p class="text-justify"><?php echo $model_what_is_autism_text_1; ?></p>
                    <p class="text-justify"><?php echo $model_what_is_autism_text_2; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Model End What_is_autism -->
    <?php if ($email_subscribe) {
        ?>
        <!-- Modal Email Subscription-->
        <div class="modal fade" id="email_subscription" tabindex="-1" role="dialog" aria-labelledby="email_subscription_label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="email_subscription_label"><?php echo $email_subscribe_title; ?></h4>
                    </div>
                    <div class="modal-body">
                        <p class="text-center"><?php echo $email_subscribe_message; ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Model End Email Subscription-->
        <?php
    }
    $this->load->view('partial/footer');
    if ($email_subscribe) {
        ?>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#email_subscription').modal();
            });
        </script>
        <?php
    }
    ?>
    <script type="text/javascript" src="<?php echo base_url('assests/js/jquery.validate.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assests/js/additional-methods.js'); ?>"></script>
    <script type="text/javascript">
        $('#form_subscribe_email').validate();
    </script>