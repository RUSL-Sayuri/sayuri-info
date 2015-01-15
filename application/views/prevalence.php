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
				<div class="col-md-4 column col-md-offset-1">
                                    <img alt="prevalence" width="350px" height="300px" src="<?php echo base_url('assests/images/info-portal/prevalence_1.jpg'); ?>" />
				</div>
				<div class="col-md-5 column">
					<p align="justify">
						<?php echo $text_1; ?>
					</p>
					<p align="justify">
						<?php echo $text_2; ?>
					</p>
					<p align="justify">
						<?php echo $text_3; ?>
					</p>
                                        
				</div>
			</div>
                    <div class="row clearfix">
                        <br>
				<div class="col-md-9 column col-md-offset-1">
					<p align="justify">
						<?php echo $text_4; ?>
					</p>
					<p align="justify">
						<?php echo $text_5; ?>
					</p>
					<p align="justify">
						<?php echo $text_6; ?>
					</p>
                                        <p align="justify">
						<?php echo $text_7; ?>
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


	
