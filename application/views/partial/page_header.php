<div class="row clearfix">
    <div class="col-md-12 column">
        <div class="row clearfix">
            <div class="col-md-2 column">
                <img class="img-responsive" alt="140x140" src="<?php echo base_url('assests/images/Sayuri_Logo_400_400.png'); ?>" />
            </div>
            <div class="col-md-8 column">
                <div class="page-header">
                    <h1 class="text-center">
                        <?php
                        if (!isset($language))
                            $language = $this->input->cookie('lang');
                        $this->lang->load('header', $language);
                        echo $this->lang->line('header_page_title');
                        ?>
                        <br>
                        <small>
                            <?php echo $this->lang->line('header_page_subtitle'); ?>
                        </small>
                    </h1>
                </div>
            </div>
            <div class="col-md-2 column">
                <div class="btn-group btn-group-xs pull-right">
                    <a href="<?php echo base_url('index.php/home/en'); ?>" class="btn btn-default">English</a> 
                    <a href="<?php echo base_url('index.php/home/si'); ?>" class="btn btn-default" >සිංහල</a> 
                    <a href="<?php echo base_url('index.php/home/ta'); ?>" class="btn btn-default" >தமிழ்</a> 
                </div>
                <br><br><br><br><br><br>
                <a href="#" data-toggle="modal" data-target="#Sign_in" style="cursor:pointer" class="btn btn-default pull-right">Sign In</a>
            </div>
        </div>
    </div>
</div>
