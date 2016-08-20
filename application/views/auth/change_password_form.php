<?php
$old_password = array(
'name'	=> 'old_password',
'id'	=> 'old_password',
'value' => set_value('old_password'),
'placeholder' =>'Old Password',
'size' 	=> 30,
);
$new_password = array(
'name'	=> 'new_password',
'id'	=> 'new_password',
'placeholder' =>'New Password',
'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
'size'	=> 30,
);
$confirm_new_password = array(
'name'	=> 'confirm_new_password',
'id'	=> 'confirm_new_password',
'placeholder' =>'Confirm New Password',
'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
'size' 	=> 30,
);include (dirname(__FILE__).'\header.php');
?>
<?php echo ('<div class="panel panel-default col-md-5 col-sm-5 col-xs-10 col-xs-offset-1 col-sm-offset-3 col-md-offset-3" style="padding:0; box-shadow: 5px 5px 5px #888888;border:0px solid white; border-radius:0; margin-top:70px;">
<div class="panel-heading heading" style="text-align: center; background: #34383C; border-radius:0; color: white; font-size:1.2em;">CHANGE PASSOWORD</div>
<div class="panel-body">');?>
<?php echo form_open($this->uri->uri_string()); ?>
<?php echo('<div class="input-group" >
'. form_password($old_password,'','class="form-control"').'
<div class="input-group-addon" style="border-radius:0; background:white;"><span class="glyphicon glyphicon-user"></span></div>
</div> <div style="color:red;">');?>
<?php echo form_error($old_password['name']); ?>
<?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:''; ?>
<?php echo ('</div>'); ?>
<?php echo('<div class="input-group" style="padding-top:10px;" >
'. form_password($new_password,'','class="form-control"').'
<div class="input-group-addon" style="border-radius:0; background:white;"><span class="glyphicon glyphicon-lock"></span></div>
</div> <div style="color:red;">');?>
<?php echo form_error($new_password['name']); ?>
<?php echo isset($errors[$new_password['name']])?$errors[$new_password['name']]:''; ?>
<?php echo ('</div>'); ?>
<?php echo('<div class="input-group" style="padding-top:10px;">
'. form_password($confirm_new_password,'','class="form-control"').'
<div class="input-group-addon" style="border-radius:0; background:white;"><span class="glyphicon glyphicon-lock"></span></div>
</div> <div style="color:red;">');?>
<?php echo form_error($confirm_new_password['name']); ?>
<?php echo isset($errors[$confirm_new_password['name']])?$errors[$confirm_new_password['name']]:''; ?>
<?php echo ('</div>'); ?>
<?php echo form_submit('change', 'CHANGE PASSWORD','class="btn btn-primary col-xs-12 login_btn"'); ?>
<?php echo form_close(); ?>
<?php echo('
</div>
</div>');
?>
<?php include (dirname(__FILE__).'\footer.php'); ?>
