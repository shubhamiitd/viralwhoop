
<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'placeholder'=>'Email or Username',
	'size'	=> 30,
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'placeholder'=>'Password',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
include (dirname(__FILE__).'\header.php');
?>
<?php echo ('<div class="panel panel-default col-md-5 col-sm-5 col-xs-10 col-xs-offset-1 col-sm-offset-3 col-md-offset-3" style="padding:0; box-shadow: 5px 5px 5px #888888;border:0px solid white; border-radius:0; margin-top:70px;">
            <div class="panel-heading heading" style="text-align: center; background: #34383C; border-radius:0; color: white; font-size:1.2em;">LOGIN</div>
            <div class="panel-body">');?>
<?php echo form_open($this->uri->uri_string()); ?>
<?php echo('<div class="input-group" >
					  '. form_input($login,'','class="form-control"').'
					  <div class="input-group-addon" style="border-radius:0; background:white;"><span class="glyphicon glyphicon-user"></span></div>

					</div> <div style="color:red;">');?>
					<?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
					<?php echo('</div><div class="input-group"  style="padding-top:10px;">
										  '. form_password($password,'','class="form-control"').'
										  <div class="input-group-addon" style="border-radius:0; background:white;"><span class="glyphicon glyphicon-lock"></span></div>

										</div> <div style="color:red;">');?>
<?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
										<?php echo('</div><div class="input-group"  style="padding-top:10px;">

																							'.form_checkbox($remember).
																							form_label('Remember me', $remember['id'],'class="remember"').'
															</div>');?>

<?php echo form_submit('submit', 'SIGN IN','class="btn btn-primary col-xs-12 login_btn"'); ?>
<?php echo form_close(); ?>
<?php echo('<a class="col-md-12"style="float:left; text-decoration: none; color:black; padding-top:10px;" href="'.base_url().'auth/forgot_password">Forgot Password?</a>
					<a class="col-md-12" style="float:left; text-decoration: none; color:black; padding-top:10px;" href="'.base_url().'auth/register">Create Account</a>
            </div>
        </div>');?>
<?php
include (dirname(__FILE__).'\footer.php');
?>
