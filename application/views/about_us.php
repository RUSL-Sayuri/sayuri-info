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
        <div class="col-md-12 column" >
            <center><img alt="Sayuri Logo" width="200px" height="200px" src="<?php echo base_url('assests/images/Sayuri_Logo_400_400.png'); ?>" /></center>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <h3>
                <?php
                echo $about_team_title;
                ?>
            </h3>
            <p>
                <?php
                echo $about_team_text;
                ?>
            </p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <h3>
                <?php
                echo $about_project_title;
                ?>
            </h3>

            <p class="text-justify">
                <?php
                echo $about_project_text1;
                ?>
            </p>
            <p class="text-justify">
                <?php
                echo $about_project_text2;
                ?>
            </p>
            <p class="text-justify">
                <?php
                echo $about_project_text3;
                ?>
            </p>
            <p class="text-justify">
                <?php
                echo $about_project_text4;
                ?>
            </p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <h3>
                <?php
                echo $vision_title;
                ?>
            </h3>
            <p>
                <?php
                echo $vision_text;
                ?>
            </p>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <h3>
                <?php
                echo $mission_title;
                ?>
            </h3>
            <p>
                <?php
               echo $mission_text;
                ?>
            </p>
        </div>
    </div>
    <?php $this->load->view('partial/page_footer'); ?>
</div>
<?php
$this->load->view('partial/footer');
?>
