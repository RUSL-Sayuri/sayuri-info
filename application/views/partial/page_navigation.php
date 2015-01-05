<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="<?php echo base_url(); ?>">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Autism<strong class="caret"></strong></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo base_url('index.php/what_is_autism'); ?>">What is Autism?</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/diagnosis'); ?>">Diagnosis</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/symptoms'); ?>">Symptoms</a>
                    </li>
                    <li>
                        <a href="#">Learn the Signs</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/treatments'); ?>">Treatments</a>
                    </li>
                    <li>
                        <a href="#">Prevalence</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/asperger_syndrome'); ?>">Asperger Syndrome</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources<strong class="caret"></strong></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">Useful Site Links</a>
                    </li>
                    <li>
                        <a href="#">Learning Kits</a>
                    </li>
                    <li>
                        <a href="#">Article Archive</a>
                    </li>
                    <li>
                        <a href="#">Success Stories</a>
                    </li>
                    <li>
                        <a href="#">Autism Centers in Sri Lanka</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">App Center</a>
            </li>
            <li>
                <a href="#">Join Us</a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/about_us'); ?>">About Us</a>
            </li>
        </ul>
        <form class="navbar-form navbar-left pull-right" role="search">
            <div class="form-group">
                <input type="text" class="form-control" />
            </div> <button type="submit" class="btn btn-default btn-sm">Search</button>
        </form>
    </div>
</nav>