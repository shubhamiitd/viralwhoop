<?php
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'placeholder'=>'Email or Username',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
include (dirname(__FILE__).'\header.php');
?>
<?php echo ('<div class="panel panel-default col-md-5 col-sm-5 col-xs-10 col-xs-offset-1 col-sm-offset-3 col-md-offset-3" style="padding:0; box-shadow: 5px 5px 5px #888888;border:0px solid white; border-radius:0; margin-top:70px;">
            <div class="panel-heading heading" style="text-align: center; background: #34383C; border-radius:0; color: white; font-size:1.2em;">SEND LINK AGAIN</div>
            <div class="panel-body">');?>
<?php echo form_open($this->uri->uri_string()); ?>
<?php echo('<div class="input-group" >
					  '. form_input($email,'','class="form-control"').'
					  <div class="input-group-addon" style="border-radius:0; background:white;"><span class="glyphicon glyphicon-user"></span></div>

					</div> <div style="color:red;">');?>
					<?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?><?php echo('</div>');?>
<?php echo form_submit('send', 'SEND','class="btn btn-primary col-xs-12 login_btn"'); ?>
<?php echo form_close(); ?>
<?php echo('</div>
        </div>');?>
<?php
include (dirname(__FILE__).'\footer.php');
?>
