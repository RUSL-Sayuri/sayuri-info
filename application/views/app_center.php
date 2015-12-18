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
        <div class="row well">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?= base_url('assests/images/app_center/app1.png') ?>" alt="Application 1"
                             class="img-responsive"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?= base_url('downloads/application1.apk') ?>" target="_blank"
                           class="btn btn-lg btn-info pull-right">Download <span
                                class="glyphicon glyphicon-download"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Application Name</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ad, asperiores? Adipisci
                            aspernatur excepturi fugiat, ipsam laborum mollitia nostrum reprehenderit tempora! Aliquam
                            beatae ea maxime nulla omnis placeat quasi, sed.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row well">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?= base_url('assests/images/app_center/app1.png') ?>" alt="Application 1"
                             class="img-responsive"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?= base_url('downloads/application1.apk') ?>" target="_blank"
                           class="btn btn-lg btn-info pull-right">Download <span
                                class="glyphicon glyphicon-download"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Application Name</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ad, asperiores? Adipisci
                            aspernatur excepturi fugiat, ipsam laborum mollitia nostrum reprehenderit tempora! Aliquam
                            beatae ea maxime nulla omnis placeat quasi, sed.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row well">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?= base_url('assests/images/app_center/app1.png') ?>" alt="Application 1"
                             class="img-responsive"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?= base_url('downloads/application1.apk') ?>" target="_blank"
                           class="btn btn-lg btn-info pull-right">Download <span
                                class="glyphicon glyphicon-download"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Application Name</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, ad, asperiores? Adipisci
                            aspernatur excepturi fugiat, ipsam laborum mollitia nostrum reprehenderit tempora! Aliquam
                            beatae ea maxime nulla omnis placeat quasi, sed.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('partial/page_footer'); ?>
    </div>
<?php
$this->load->view('partial/footer');
?>