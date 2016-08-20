<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
		'placeholder'=>'Username',
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'placeholder'=>'Email',
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'placeholder'=>'Password',
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'placeholder'=>'Confirm Password',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
include (dirname(__FILE__).'\header.php');
?>
    <?php echo ('<div class="panel panel-default col-md-5 col-sm-5 col-xs-10 col-xs-offset-1 col-sm-offset-3 col-md-offset-3" style="padding:0; box-shadow: 5px 5px 5px #888888;border:0px solid white; border-radius:0; margin-top:70px;">
            <div class="panel-heading heading" style="text-align: center; background: #34383C; border-radius:0; color: white; font-size:1.2em;">REGISTER</div>
            <div class="panel-body">');?>
    <?php echo form_open($this->uri->uri_string()); ?>
            <?php if ($use_username) { ?>
                <?php echo('<div class="input-group" >
					  '. form_input($username,'','class="form-control"').'
					  <div class="input-group-addon" style="border-radius:0; background:white;"><span class="glyphicon glyphicon-user"></span></div>
</div> <div style="color:red;">');?>
                    <?php echo form_error($username['name']); ?>
                        <?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?>
                            <?php echo ('</div>'); }?>
                                <?php echo('<div class="input-group" style="padding-top:10px;">
					  '. form_input($email,'','class="form-control"').'
					  <div class="input-group-addon" style="border-radius:0; background:white;"><span class="glyphicon glyphicon-user"></span></div>

					</div> <div style="color:red;">');?>
                                    <?php echo form_error($email['name']); ?>
                                        <?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
                                            <?php echo ('</div>')?>
                                                <?php echo('<div class="input-group" style="padding-top:10px;">
					  '. form_password($password,'','class="form-control"').'
					  <div class="input-group-addon" style="border-radius:0; background:white;"><span class="glyphicon glyphicon-lock"></span></div>

					</div> <div style="color:red;">');?>
                                                    <?php echo form_error($password['name']); ?>
                                                        <?php echo ('</div>')?>
                                                            <?php echo('<div class="input-group"style="padding-top:10px;" >
					  '. form_password($confirm_password,'','class="form-control"').'
					  <div class="input-group-addon" style="border-radius:0; background:white;"><span class="glyphicon glyphicon-lock"></span></div>

					</div> <div style="color:red;">');?>
                                                                <?php echo form_error($confirm_password['name']); ?>
                                                                    <?php echo ('</div>')?>
                                                                        <?php echo ('
                                    <div class="input-group" style="padding-top:10px;">
                                        <input required type="text" class="form-control"name="fb_id"  style="border-radius:0;" placeholder="FB page link" aria-describedby="basic-addon1">
                                        <div class="input-group-addon" style="border-radius:0; background:white;"><i style="font-size:20px;" class="fa fa-facebook" aria-hidden="true"></i></div>

                                    </div>
                                    <div class="input-group" style="padding-top:10px;">
                                        <input required type="text" class="form-control" name="fb_pages" style="border-radius:0;" placeholder="Your FB id Link" aria-describedby="basic-addon1">
                                        <div class="input-group-addon" style="border-radius:0; background:white;"><i style="font-size:20px;" class="fa fa-facebook" aria-hidden="true"></i></div>

                                    </div>
                                    <div class="input-group" style="padding-top:10px;">
                                        <input required type="text" class="form-control" name="phone"style="border-radius:0;" placeholder="Your Phone No." aria-describedby="basic-addon1">
                                        <div class="input-group-addon" style="border-radius:0; background:white;"><span class="glyphicon glyphicon-earphone"></span></div>

                                    </div>');?>
                                                                            <?php echo form_submit('register', 'SIGN UP','class="btn btn-primary col-xs-12 login_btn"'); ?>
                                                                                <?php echo form_close(); ?>
                                                                                    <?php echo('
					<a class="col-md-12" style="float:left; text-decoration: none; color:black; padding-top:10px;" href="'.base_url().'auth/login">Already have an account?</a>
            </div>
        </div>');?>
                                                                                        <?php
include (dirname(__FILE__).'\footer.php');
?>
