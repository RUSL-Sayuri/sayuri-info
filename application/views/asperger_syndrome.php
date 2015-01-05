<?php
$this->load->view('partial/header');
?>

<div class="container">
    <div class="row clearfix">
        <div class ="col-md-12 column">
             <?php $this->load->view('partial/page_header'); ?>
            <?php $this->load->view('partial/page_navigation'); ?>
        </div>
        
        <div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				 <?php echo $title_1; ?>
			</h3>

		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-4 column col-md-offset-1">
			<img alt="Asperger child" width="300px" class="img-rounded" src="<?php echo base_url('assests/images/info-portal/asperger_syndrome_1.jpg'); ?>" />
		</div>
		<div class="col-md-5 column">
                        <p align="justify">
				 <?php echo $text_1; ?>
			</p>
			<p align="justify">
				<?php echo $text_2; ?>
			</p>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-9 column col-md-offset-1">
                    <br>
			<ul align="justify">
                            <li class="text-justify">
					<?php echo $ul_1_li_1; ?>
				</li>
                               
				<li  class="text-justify">
					<?php echo $ul_1_li_2; ?>
				</li>
				<li  class="text-justify">
					<?php echo $ul_1_li_3; ?>
				</li>
				<li  class="text-justify">
					<?php echo $ul_1_li_4; ?>
				</li>
				<li  class="text-justify">
					<?php echo $ul_1_li_5; ?>
				</li>
				<li  class="text-justify">
					<?php echo $ul_1_li_6; ?>
				</li>
				<li  class="text-justify">
					<?php echo $ul_1_li_7; ?>
				</li>
				<li  class="text-justify">
					<?php echo $ul_1_li_8; ?>
				</li>
                                
                                <li  class="text-justify">
					<?php echo $ul_1_li_9; ?>
				</li>
                               
				<li  class="text-justify">
					<?php echo $ul_1_li_10; ?>
				</li>
				<li  class="text-justify">
					<?php echo $ul_1_li_11; ?>
				</li>
				<li  class="text-justify">
					<?php echo $ul_1_li_12; ?>
				</li>
				<li  class="text-justify">
					<?php echo $ul_1_li_13; ?>
				</li>
				<li  class="text-justify">
					<?php echo $ul_1_li_14; ?>
				</li>
				<li  class="text-justify">
					<?php echo $ul_1_li_15; ?>
				</li>
				<li  class="text-justify">
					<?php echo $ul_1_li_16; ?>
				</li>
                                <li  class="text-justify">
					<?php echo $ul_1_li_17; ?>
				</li>
                                <li  class="text-justify">
					<?php echo $ul_1_li_18; ?>
				</li>
                                <li  class="text-justify">
					<?php echo $ul_1_li_19; ?>
				</li>
			</ul>
			<p>
				<?php echo $text_3;?>
			</p>
			<p>
				<?php echo $text_4;?>
			</p>
		</div>
	</div>
    </div>
    
    <?php $this->load->view('partial/page_footer'); ?>
</div>
<?php
$this->load->view('partial/footer');
?>
