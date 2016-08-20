<?php include (dirname(__FILE__).'\header.php');
?>
<?php echo('

<div class="container form1" >

        <div class="panel panel-default col-md-12   " style="padding:0; box-shadow: 5px 5px 5px #888888;border:0px solid white; border-radius:0; margin-top:70px;">
            <div class="panel-heading heading" style="text-align: center; background: #8700ff; border-radius:0; color: white; font-size:1.2em;">WEEKLY INCOME</div>
            <div class="panel-body">
                <div class="col-md-3 " style="height:100px; text-align:center; margin-top:20px;padding-top:25px;background:#9C27B0; border-radius:10px; font-size:20px; color:white; border:2px #4A148C solid;">Balance: ₹ '.$earning['amount'].'</div>
                <div class="col-md-3 col-md-offset-1" style="height:100px; text-align:center; margin-top:20px;;padding-top:25px;background:#E91E63; border-radius:10px; font-size:20px; color:white; border:2px #880E4F solid;">Clicks '.$earning['sessions'].' </div>
                <div class="col-md-3 col-md-offset-1" style="height:100px; text-align:center;margin-top:20px; padding-top:25px;background:#F44336; border-radius:10px; font-size:20px; color:white; border:2px #B71C1C solid;">RPM 130  </div>
            </div>
        </div>
    </div>

');?>



<?php include (dirname(__FILE__).'\footer.php');
?>
