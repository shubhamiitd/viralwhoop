<?php include (dirname(__FILE__).'\header.php');
?>
<?php echo('
<div class="container form1" >

        <div class="panel panel-default col-md-12   " style="padding:0; box-shadow: 5px 5px 5px #888888;border:0px solid white; border-radius:0; margin-top:70px;">
            <div class="panel-heading heading" style="text-align: center; background: #8700ff; border-radius:0; color: white; font-size:1.2em;">Due Payments</div>
            <div class="panel-body ">
				<div style="width:100%">
					<button type="button" class="btn btn-success">Export CSV</button>
          <div class="col-lg-6">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Username/User-Id/Email">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Go!</button>
                </span>
              </div><!-- /input-group -->
            </div>
				</div>
				<div class=" table-responsive" style="padding-top:20px;">
					<table class="table table-bordered">
						<thead >
							<tr>

								<th>USER ID</th>
								<th>USERNAME</th>
								<th>Bank IFSC</th>
								<th>ACCOUNT NO</th>
								<th>AOOCUNT HOLDER NAME</th>
								<th>PAN CARD HOLDER</th>
								<th>AMOUNT(Rs.)</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1.</td>
								<td>Username</td>
								<td>iifc</td>
								<td>bank_acc_no</td>
								<td>acc_holdr_name</td>
								<td>Yes/No</td>
								<td>12321</td>

							</tr>

						</tbody>
					</table>
				</div>
            </div>
        </div>
    </div>


'); ?>
<?php include (dirname(__FILE__).'\footer.php');
?>
