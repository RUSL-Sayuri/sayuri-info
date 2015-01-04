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
            <p>
                <?php echo $text_1; ?>
            </p>
        </div>
    </div>
    <?php $this->load->view('partial/page_footer'); ?>
</div>
<?php
$this->load->view('partial/footer');
?>
