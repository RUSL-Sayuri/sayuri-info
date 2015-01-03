<div class="row clearfix">
    <div class="col-md-12 column">
        <div class="row clearfix">
            <div class="col-md-2 column">
                <img class="img-responsive" alt="140x140" src="<?php echo base_url('assests/images/Sayuri_Logo_400_400.png'); ?>" />
            </div>
            <div class="col-md-6 column">
                <div class="page-header">
                    <h1>
                        <?php
                        $language = $this->input->cookie('lang');
                        $this->lang->load('header', $language);
                        echo $this->lang->line('header_page_title');
                        ?>
                        <small></small>
                    </h1>
                </div>
            </div>
            <div class="col-md-4 column">
                <div class="btn-group btn-group-xs pull-right">
                    <a href="<?php echo base_url('index.php/home/en'); ?>" class="btn btn-default">English</a> 
                    <a href="<?php echo base_url('index.php/home/si'); ?>" class="btn btn-default" >Sinhala</a> 
                    <a href="<?php echo base_url('index.php/home/ta'); ?>" class="btn btn-default" >Tamil</a> 

                </div>
                <br><br><br><br><br><br>
                <a href="#" class="btn btn-link pull-right">Sign In</a>
            </div>
        </div>
    </div>
</div>
