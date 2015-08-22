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
        <h3>
            <?php echo $title_1; ?>
        </h3>
        <div class="col-sm-12 col-md-4 col-lg-4 column">
            <h3>
                <?php echo $title_2; ?>
            </h3>
            <?php
            foreach ($newspapers->result() as $article) {
                ?>
                <div class="row" style="margin-bottom: 15px">
<!--                    <div class="col-md-6 column">
                        <img class="img-responsive img-rounded" src="<?php// echo base_url('admin/assests/img/article') . "/". $article->id . "." . $article->preview ?>" />
                    </div>-->
                    <div class="col-md-12 column">
                        <h4>
                            <?php echo $article->title; ?>
                        </h4>
                        <p>
                        <smal><?php echo $article->description; ?></smal>
                        </p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 column">
            <h3>
                <?php echo $title_3; ?>
            </h3>
            <?php
            foreach ($webArticles->result() as $article) {
                ?>
                <div class="row" style="margin-bottom: 15px">
<!--                    <div class="col-md-6 column">
                        <img class="img-responsive img-rounded" src="<?php //echo base_url('admin/assests/img/article') . "/". $article->id . "." . $article->preview ?>" />
                    </div>-->
                    <div class="col-md-12 column">
                        <h4>
                            <?php echo $article->title; ?>
                        </h4>
                        <p>
                        <smal><?php echo $article->description; ?></smal>
                        </p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 column">
            <h3>
                <?php echo $title_4; ?>
            </h3>
            <?php
            foreach ($researchPapers->result() as $article) {
                ?>
                <div class="row" style="margin-bottom: 15px">
<!--                    <div class="col-md-6 column">
                        <img class="img-responsive img-rounded" src="<?php //echo base_url('admin/assests/img/article') . "/". $article->id . "." . $article->preview ?>" />
                    </div>-->
                    <div class="col-md-12 column">
                        <h4>
                            <?php echo $article->title; ?>
                        </h4>
                        <p>
                        <smal><?php echo $article->description; ?></smal>
                        </p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <?php $this->load->view('partial/page_footer'); ?>
</div>
<?php
$this->load->view('partial/footer');
?>





