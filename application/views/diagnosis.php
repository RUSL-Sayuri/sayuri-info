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
            <h3>
                <?php echo $title_1; ?>
            </h3>
            <div class="row clearfix">
                <div class="col-md-3 column col-md-offset-1">
                    <img alt="140x140" height="150px" class="pull-right" src="<?php echo base_url('assests/images/info-portal/diagnosis_1.jpg'); ?>" />
                </div>
                <div class="col-md-6 column">
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
                        <?php echo $text_3; ?>
                    </p>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <h3>
                        <?php echo $title_2; ?>
                    </h3>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-9 column col-md-offset-1">
                    <p>
                        <?php echo $text_4; ?>
                    </p>
                    <ol>
                        <li><?php echo $ol_1_li_1; ?></li>
                        <li><?php echo $ol_1_li_2; ?></li>
                        <li><?php echo $ol_1_li_3; ?></li>
                    </ol>
                    <p>
                        <?php echo $text_5; ?>
                    </p>
                    <ol start="4">
                        <li><?php echo $ol_2_li_1; ?></li><img class="img-rounded" width="250px" src="<?php echo base_url('assests/images/info-portal/diagnosis_2.jpg'); ?>"/>
                        <li><?php echo $ol_2_li_2; ?></li><img class="img-rounded" width="250px" src="<?php echo base_url('assests/images/info-portal/diagnosis_3.jpg'); ?>"/>
                        <li><?php echo $ol_2_li_3; ?></li><img class="img-rounded" width="250px" src="<?php echo base_url('assests/images/info-portal/diagnosis_4.jpg'); ?>"/>
                        <li><?php echo $ol_2_li_4; ?></li><img class="img-rounded" width="250px" src="<?php echo base_url('assests/images/info-portal/diagnosis_5.jpg'); ?>"/>
                        <li><?php echo $ol_2_li_5; ?></li>
                    </ol>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <h3>
                        <?php echo $title_3; ?>
                    </h3>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-9 column col-md-offset-1">
                    <p>
                        <?php echo $text_6; ?>
                    </p>
                    <ol>
                        <li class="text-justify"><?php echo $ol_3_li_1; ?></li>
                        <li class="text-justify"><?php echo $ol_3_li_2; ?></li>
                        <li class="text-justify"><?php echo $ol_3_li_3; ?></li>
                        <li class="text-justify"><?php echo $ol_3_li_4; ?></li>
                        <li class="text-justify"><?php echo $ol_3_li_5; ?></li>
                        <li class="text-justify"><?php echo $ol_3_li_6; ?></li>
                    </ol>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <img class="center-block img-rounded" height="250px" alt="140x140" src="<?php echo base_url('assests/images/info-portal/diagnosis_6.jpg'); ?>" />
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <h3>
                        <?php echo $title_4; ?>
                    </h3>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-9 column col-md-offset-1">
                    <p class="text-justify">
                        <?php echo $text_7; ?>
                    </p>
                    <ol>
                        <li class="text-justify"><?php echo $ol_4_li_1; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_2; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_3; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_4; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_5; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_6; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_7; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_8; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_9; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_10; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_11; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_12; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_13; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_14; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_15; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_16; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_17; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_18; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_19; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_20; ?></li>
                        <li class="text-justify"><?php echo $ol_4_li_21; ?></li>
                    </ol>
                    <p class="text-justify">
                        <?php echo $text_8; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('partial/page_footer'); ?>
</div>
<?php
$this->load->view('partial/footer');
?>