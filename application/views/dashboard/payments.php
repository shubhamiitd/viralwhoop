<?php include (dirname(__FILE__).'\header.php');
?>
<?php echo('
<div class="container form1" >

        <div class="panel panel-default col-md-12   " style="padding:0; box-shadow: 5px 5px 5px #888888;border:0px solid white; border-radius:0; margin-top:70px;">
            <div class="panel-heading heading" style="text-align: center; background: #8700ff; border-radius:0; color: white; font-size:1.2em;">EARLIER PAYMENTS</div>
            <div class="panel-body ">
				<div class=" table-responsive">


              ');?>
            <?php
            if (sizeof($user_earlier_payments)>1)
            {
              echo('<table class="table table-bordered">
    						<thead >
    							<tr>

    								<th>Serial no.</th>
    								<th>Amount (₹)</th>
    								<th>Date of Payment</th>
    							</tr>
    						</thead>
    						<tbody>');
                $i=0;
                while($i<sizeof($user_earlier_payments))
                {
                  $i=$i+1;
                        echo('<tr>
              								<td>'.$i.'</td>
                  								<td>'.$user_earlier_payments[$i-1]['amount'].'</td>
                  								<td>'.$user_earlier_payments[$i-1]['date'].'</td>
              							  </tr>');

                }
            }
            else{
              echo('We have not made any payments yet');
            }?>
            <?php

              echo('
						</tbody>
					</table>
				</div>
            </div>
        </div>
    </div>

'); ?>
<?php include (dirname(__FILE__).'\footer.php');
?>
