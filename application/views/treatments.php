<?php
$this->load->view('partial/header');

?>

<div class="container">
    <div class="row clearfix">
        <div class="column col-md-12">
        <?php
        $this->load->view('partial/page_header');
        $this->load->view('partial/page_navigation');
        
        ?>
        </div>
        <div class="row clearfix">
		<div class="col-md-12 column">
			<p>
			<?php
                        echo $text_1;
                        ?>	
                        </p>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-6 column">
			<h3>
				h3. Lorem ipsum dolor sit amet.
			</h3>
			<p>
				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
			</p>
		</div>
		<div class="col-md-6 column">
			<img alt="140x140" src="http://lorempixel.com/140/140/" />
		</div>
	</div>
        
    </div>
    
     <?php $this->load->view('partial/page_footer'); ?>
</div>
<?php
$this->load->view('partial/footer');
?>

