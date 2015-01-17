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
        <div class="col-md-2 column">
        </div>
        <div class="col-md-6 column">
            <form role="form">
                <h3><?php echo $common_label_1; ?></h3>
                <div class="form-group">
                    <label for="first_name"><?php echo $common_label_2; ?></label><input type="text" class="form-control" id="first_name" />
                </div>
                <div class="form-group">
                    <label for="last_name"><?php echo $common_label_3; ?></label><input type="text" class="form-control" id="last_name" />
                </div>
                <h3><?php echo $common_label_4; ?></h3>
                <div class="form-group">
                    <label for="line_1"><?php echo $common_label_5; ?></label><input type="text" class="form-control" id="line_1" />
                </div>
                <div class="form-group">
                    <label for="line_2"><?php echo $common_label_6; ?></label><input type="text" class="form-control" id="line_2" />
                </div>
                <div class="form-group">
                    <label for="city"><?php echo $common_label_7; ?></label><input type="text" class="form-control" id="city" />
                </div>
                <div class="form-group">
                    <label for="zip_code"><?php echo $common_label_8; ?></label><input type="text" class="form-control" id="zip_code" />
                </div>
                <div class="form-group">
                    <label for="country"><?php echo $common_label_9; ?></label><select class="form-control" id="country">
                        <option value="sri_lanka">Sri Lanka</option>
                        <option value="india">India</option>
                        <option value="nepal">Nepal</option>
                        <option value="united_kingdom">United Kingdom</option>
                        <option value="usa">USA</option>
                    </select>
                </div>
                <h3><?php echo $common_label_10; ?></h3>
                <div class="form-group">
                    <label for="mobile_no"><?php echo $common_label_11; ?></label><input type="text" class="form-control" id="mobile_no" />
                </div>
                <div class="form-group">
                    <label for="fixed_line_no">F<?php echo $common_label_12; ?></label><input type="text" class="form-control" id="fixed_line_no" />
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"><?php echo $common_label_13; ?></label><input type="email" class="form-control" id="exampleInputEmail1" /><br><br>
                </div>

                <div class="form-group">
                    <label for="inputPassword1"><?php echo $common_label_14; ?></label><input type="password" class="form-control" id="exampleInputPassword1" />
                </div>
                <div class="form-group">
                    <label for="confirmInputPassword1"><?php echo $common_label_15; ?></label><input type="password" class="form-control" id="exampleInputPassword1" />
                </div>



                <div class="form-group">
                    <label for="child_name"><?php echo $family_member_label_1; ?></label><input type="text" class="form-control" id="child_name" />
                </div>
                <div class="form-group">
                    <label for="child_birthday"><?php echo $family_member_label_2; ?></label><input type="text" class="form-control" id="child_birthday" />
                </div>
                <div class="form-group">
                    <label for="child_birthday"><?php echo $family_member_label_3; ?></label><input type="text" class="form-control" id="child_birthday" />
                </div>

                <button type="submit" class="btn btn-sm btn-primary active">Submit</button>

            </form> 
        </div>
        <div class="col-md-4 column">
        </div>
    </div>
</div>

<?php
$this->load->view('partial/footer');
?>