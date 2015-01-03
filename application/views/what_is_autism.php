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
				<?php
                                echo $title;
                                ?>
			</h3>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-3 column">
			<img alt="140x140" src="http://lorempixel.com/140/140/" />
		</div>
		<div class="col-md-9 column">
			
			<p>
				<?php
                                echo $text_1;
                                ?>
			</p>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<p>
				<?php
                                echo $text_2;
                                ?>
				
			</p>
			<p>
				<?php
                                echo $text_3;
                                ?>
				
			</p>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-9 column">
			<ul>
				<li>
					<?php
                                echo $ol_1_li_1;
                                        ?>
				</li>
				<li>
					<?php
                                echo $ol_1_li_2;
                                        ?>
				</li>
				<li>
					<?php
                                echo $ol_1_li_3;
                                        ?>
				</li>
				<li>
					<?php
                                echo $ol_1_li_4;
                                        ?>
				</li>
				
			</ul>
		</div>
		<div class="col-md-3 column">
			<img alt="140x140" src="http://lorempixel.com/140/140/" />
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			
			<p>
				<?php
                                echo $text_4;
                                ?>
			</p>
			<p>
				<?php
                                echo $text_5;
                                ?>
			</p>
			<h3>
				<?php
                                echo $title_2;
                                ?>
			</h3>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-3 column">
			<img alt="140x140" src="http://lorempixel.com/140/140/" />
		</div>
		<div class="col-md-9 column">
			
			<p>
				<?php
                                echo $text_6;
                                ?>
			</p>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
		</div>
	</div>
</div>