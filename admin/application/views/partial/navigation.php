<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
        <span> <!-- User image size is adjusted inside CSS, it should stay as it --> 

            <a href="#" >

                <span>
                    <?php echo $this->session->userdata('username'); ?>
                </span>

            </a> 

        </span>
    </div>

    <nav>
        <ul>
            <li class="active">
                <a href="<?= base_url('index.php') ?>/user" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
            </li>
            <li >
                <a href="<?= base_url('index.php') ?>/article" title="Articles"><i class="fa fa-lg fa-fw fa-paperclip"></i> <span class="menu-item-parent">Article</span></a>
            </li>
            <li >
                <a href="<?= base_url('index.php') ?>/emails" title="Emails"><i class="fa fa-lg fa-fw fa-envelope"></i> <span class="menu-item-parent">Emails</span></a>
            </li>

        </ul>
    </nav>
    <span class="minifyme"> <i class="fa fa-arrow-circle-left hit"></i> </span>

</aside>