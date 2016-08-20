<?php include (dirname(__FILE__).'\header.php');

$bank_acc_no_attr = array(
                  'name'        => 'bank_acc_no',
                  'id'          => 'bank_acc_no',
                  'class'       =>  'form-control',
                  'placeholder' => '',
                  'value' => ''.$user_details2['account_no'].''
                  );
$bank_profile_name_attr = array(
                  'name'        => 'bank_profile_name',
                  'id'          => 'bank_profile_name',
                  'class'       =>  'form-control',
                  'placeholder' => '',
                  'value' => ''.$user_details2['account_holder_name'].''
                  );
$bank_ifsc_code_attr = array(
                        'name'        => 'bank_ifsc_code',
                        'id'          => 'bank_ifsc_code',
                        'class'       =>  'form-control',
                        'placeholder' => '',
                        'value' => ''.$user_details2['bank_ifsc'].''
                        );
$pan_no_attr = array(
                              'name'        => 'pan_no',
                              'id'          => 'pan_no',
                              'class'       =>  'form-control',
                              'placeholder' => '',
                              'value' => ''.$user_details2['pancard_no'].''
                              );


?>
<?php echo('
<div class="container form1" >

        <div class="panel panel-default col-md-12 " style="padding:0;  box-shadow: 5px 5px 5px #888888;border:0px solid white; border-radius:0; margin-top:70px;">
            <div class="panel-heading heading" style="text-align: center; background: #8700ff; border-radius:0; color: white; font-size:1.2em;">ACCOUNT DETAILS</div>
            <div class="panel-body ">
				<div class="col-md-6">
				 <h4> PERSONAL DETAILS</h4>
				<ul>
						<li> USER ID : '.$user_details2['user_id'].'</li>
    				<li> USER NAME : '.$user_details1['username'].'</li>
    				<li> EMAIL : '.$user_details1['email'].'</li>
    				<li> PHONE No. : '.$user_details2['phone'].'</li>
    				<li> FACEBOOK ID :'.$user_details2['fb_id'].'</li>
    				<li> FACEBOOK PAGES :'.$user_details2['fb_pages'].'</li>

				</ul>
				</div>
				<div class="col-md-6">
				    <h4> BANK DETAILS</h4>
  				  <ul>
   						<li> BANK ACCOUNT NO : '.$user_details2['account_no'].'</li>
      				<li> BANK PROFILE NAME : '.$user_details2['account_holder_name'].'</li>
          		<li> BANK IFSC CODE : '.$user_details2['bank_ifsc'].'</li>
              <li> PAN CARD NO. : '.$user_details2['pancard_no'].'</li>

  				  </ul>
				</div>
            </div>
            ');
            $hidden = array('user_id' => ''.$user_details2['user_id'].'');
            ?>
            <h3> Add/Edit Details </h3>
            <div class="panel-body ">
              <?php echo form_open(base_url().'edit_details/set_details','', $hidden); ?>

              <div class="form-group">
                  <label for="link">BANK ACCOUNT NO</label>
                  <?php  echo form_input($bank_acc_no_attr);?>
              </div>
              <div class="form-group">
                  <label for="link">BANK PROFILE NAME</label>
                  <?php  echo form_input($bank_profile_name_attr);?>
              </div>
              <div class="form-group">
                  <label for="link">BANK IFSC CODE</label>
                  <?php  echo form_input($bank_ifsc_code_attr);?>
              </div>
              <div class="form-group">
                  <label for="link">PAN CARD NO</label>
                  <?php  echo form_input($pan_no_attr);?>
              </div>



              <?php echo form_submit('mysubmit', 'SAVE DETAILS','class="btn btn-default"'); ?>

            </div>

        </div>
    </div>



<?php include (dirname(__FILE__).'\footer.php');
?>
