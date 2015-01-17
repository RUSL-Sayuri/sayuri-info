<?php
if (!isset($language))
    $language = $this->input->cookie('lang');
$this->lang->load('page_navigation', $language);
?>
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo $this->lang->line('navbar_home'); ?></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->lang->line('navbar_about_autism'); ?><strong class="caret"></strong></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo base_url('index.php/what_is_autism'); ?>"><?php echo $this->lang->line('navbar_what_is_autism'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/diagnosis'); ?>"><?php echo $this->lang->line('navbar_diagnosis'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/symptoms'); ?>"><?php echo $this->lang->line('navbar_symptoms'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/treatments'); ?>"><?php echo $this->lang->line('navbar_treatments'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/prevalence'); ?>"><?php echo $this->lang->line('navbar_prevalence'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/asperger_syndrome'); ?>"><?php echo $this->lang->line('navbar_asperger_syndrome'); ?></a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->lang->line('navbar_resources'); ?><strong class="caret"></strong></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo base_url('index.php/useful_site_links'); ?>"><?php echo $this->lang->line('navbar_useful_links'); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php echo $this->lang->line('navbar_learning_kits'); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/article_archive'); ?>"><?php echo $this->lang->line('article_archive'); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php echo $this->lang->line('navbar_sucess_stories'); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php echo $this->lang->line('navbar_centers_in_srilanka'); ?></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><?php echo $this->lang->line('navbar_app_center'); ?></a>
            </li>
            <li>
                <a href="#"><?php echo $this->lang->line('navbar_join_us'); ?></a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/about_us'); ?>"><?php echo $this->lang->line('navbar_about_us'); ?></a>
            </li>
        </ul>
        <form class="navbar-form navbar-left pull-right" role="search">
            <div class="form-group">
                <input type="text" class="form-control" />
            </div> <button type="submit" class="btn btn-default btn-sm"><?php echo $this->lang->line('navbar_search'); ?></button>
        </form>
    </div>
</nav>