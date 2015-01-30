<!-- Modal Sign In -->
<div class="modal fade" id="Sign_in" tabindex="-1" role="dialog" aria-labelledby="Sign_in_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="Sign_in_label"><?php echo $this->lang->line('header_sign_in'); ?></h4>
            </div>
            <div class="modal-body">
                <form role="form" method="POST">
                    <div class="form-group">
                        <label>Username :</label>
                        <input class="form-control" type="text" name="username" id="username"/>
                    </div>
                    <div class="form-group">
                        <label>Password :</label>
                        <input class="form-control" type="password" name="password" id="username"/>
                        <br>
                        <input class="btn btn-default" type="submit"/>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Model End Sign In-->
<div class="row clearfix">
    <div class="col-md-12 column well well-sm">
        <p class="text-center text-muted"> Sayuri &copy; 2014  &Tab;&Tab;&Tab;<a href="#">Site Map</a></p>
    </div>
</div>