<?php
$this->load->view("partial/header");
$this->load->helper(array('htmlgenerator', 'form'));
?>
</head>
<body class="">
<!-- possible classes: minified, fixed-ribbon, fixed-header, fixed-width-->

<!-- HEADER -->
<?php $this->load->view('partial/page_header'); ?>
<!-- END HEADER -->

<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<?php $this->load->view('partial/navigation'); ?>
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

        <span class="ribbon-button-alignment"> <span id="refresh" class="btn btn-ribbon" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true"><i class="fa fa-refresh"></i></span> </span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>Emails</li><li>Compose</li>
        </ol>

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-edit fa-fw "></i>
                    Emails
                </h1>
            </div>

        </div>



        <!-- widget grid -->
        <section id="widget-grid" class="">


            <div class="row">

                <!-- NEW COL START -->
                <article class="col-sm-12 col-md-12 col-lg-12">



                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget" id="wid-id-1" data-widget-deletebutton="false" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">

                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Compose New Email</h2>

                        </header>

                        <!-- widget div-->
                        <div>

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body no-padding">
                                <?php
                                if (validation_errors() != '') {
                                    ?>
                                    <label class="alert alert-danger">
                                        <?php
                                        echo validation_errors();
                                        ?>
                                    </label>
                                <?php
                                }
                                if (isset($error)) {
                                    ?>
                                    <label class="alert alert-danger">
                                        <?php
                                        echo $error;
                                        ?>
                                    </label>
                                <?php
                                }

                                if (isset($success)) {
                                    ?>
                                    <label class="alert alert-success">
                                        <?php
                                        echo $success;
                                        ?>
                                    </label>
                                <?php
                                }
                                ?>

                                <form class="smart-form" role="form" action="<?php echo site_url('/emails/send'); ?>" method="POST" enctype="multipart/form-data">

                                    <fieldset>
                                        <section>
                                            <label class="label">Subject</label>
                                            <label class="input">
                                                <input name="subject" type="text">
                                            </label>
                                        </section>

                                        <section>
                                            <label class="label">Body</label>
                                            <label class="textarea textarea-resizable">
                                                <textarea rows="5" class="custom-scroll" name="body" id="body"></textarea>
                                            </label>

                                        </section>


                                    </fieldset>

                                    <footer>
                                        <button type="submit" class="btn btn-primary">
                                            Submit
                                        </button>
                                        <button type="button" class="btn btn-default" onclick="window.history.back();">
                                            Back
                                        </button>
                                    </footer>
                                </form>

                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>




                </article>


            </div>


        </section>



    </div>

    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->


<?php
$this->load->view("partial/footer");
?>


<script type="text/javascript" src="<?php echo base_url('assests/js/plugin/nicEdit/nicEdit.js'); ?>"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(function () {
        new nicEditor().panelInstance('body');
    });
</script>


<script>
    $(document).ready(function () {

        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        pageSetUp();
        /*
         * PAGE RELATED SCRIPTS
         */


    });</script>

<!-- Your GOOGLE ANALYTICS CODE Below -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
    _gaq.push(['_trackPageview']);
    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>

</body>

</html>