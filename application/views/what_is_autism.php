<?php
$this->load->view('partial/header');
?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <?php $this->load->view('partial/page_header'); ?>
            <?php $this->load->view('partial/page_navigation'); ?>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <h2><?php echo $title; ?></h2>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-4 column col-md-offset-1">
            <img class="img-responsive" alt="140x140" src="<?php echo base_url('assests/images/info-portal/what_is_autism_1.jpg'); ?>" />
            <br>
        </div>
        <div class="col-md-5 column">
            <p class="text-justify">
                <?php echo $text_1; ?>
            </p>
            <p class="text-justify">
                <?php echo $text_2; ?>
            </p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-9 column col-md-offset-1">
            <p class="text-justify">
                <?php echo $text_7; ?>
            </p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-7 column col-md-offset-1">
            <br>
            <br>
            <p class="text-justify">
                <?php echo $text_3; ?>
            </p>
            <ul>
                <li>
                    <?php echo $ul_1_li_1; ?>
                </li>
                <li>
                    <?php echo $ul_1_li_2; ?>
                </li>
                <li>
                    <?php echo $ul_1_li_3; ?>
                </li>
                <li>
                    <?php echo $ul_1_li_4; ?>
                </li>
            </ul>
        </div>
        <div class="col-md-3 column">
            <img class="img-responsive" alt="140x140" src="<?php echo base_url('assests/images/info-portal/what_is_autism_2.jpg'); ?>" />
            <br>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-9 column col-md-offset-1">
            <p  class="text-justify">
                <?php echo $text_8; ?>
            </p>
            <p  class="text-justify">
                <?php echo $text_4; ?>
            </p>
            <p class="text-justify">
                <?php echo $text_5; ?>
            </p>

        </div>
    </div>
    <div class="row clearfix">

        <div class="col-md-6 column">
            <h3>
                <?php echo $title_2; ?>
            </h3>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-3 column col-md-offset-1">
            <img class="img-responsive" alt="140x140" src="<?php echo base_url('assests/images/info-portal/what_is_autism_3.jpg'); ?>" />
            <br>
        </div>
        <div class="col-md-6 column">
            <br>
            <p class="text-justify">
                <?php echo $text_6; ?>
            </p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
        </div>
    </div>
    <?php $this->load->view('partial/page_footer'); ?>
</div>
<?php
$this->load->view('partial/footer');
?>