<?php include (dirname(__FILE__).'\header.php');
?>
<?php echo('
<div class="container form1">

        <div class="panel panel-default col-md-12   " style="padding:0; box-shadow: 5px 5px 5px #888888;border:0px solid white; border-radius:0; margin-top:70px;">
            <div class="panel-heading heading" style="text-align: center; background: #8700ff; border-radius:0; color: white; font-size:1.2em;">Users</div>
            <div class="panel-body ">
                <div style="width:100%">
                    <div class="col-md-6">
                        <a href="#" style="padding-left:10px; padding-right:10px; color:black; border-radius:5px; border:1px pink solid;"> All</a>
                        <a href="#" style="padding-left:10px; padding-right:10px; color:blue; border-radius:5px; border:1px pink solid;"> Pending</a>
                        <a href="#" style="padding-left:10px; padding-right:10px; color:green; border-radius:5px; border:1px pink solid;"> Approved</a>
                        <a href="#" style="padding-left:10px; padding-right:10px; color:red; border-radius:5px; border:1px pink solid;"> Rejected</a>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Username/User-Id/Email">
                            <span class="input-group-btn"><button class="btn btn-default" type="button">Go!</button>              </span>
                        </div>
                        <!-- /input-group -->
                    </div>
                </div>.
                <div class=" table-responsive" style="padding-top:20px;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>User id</th>
                                <th>User name</th>
                                <th>FB id</th>
                                <th>fb page</th>
                                <th>Email ID</th>
                                <th>Phone no</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>');
                        $i=0;
                        while($i<sizeof($pendingusers)){
                            $i=$i+1;
                          echo('
                            <tr>
                                <td>'.$pendingusers[$i-1]['user_id'].'</td>
                                <td>'.$pendingusers[$i-1]['username'].'</td>
                                <td><a target=" _blank" href="'.$pendingusers[$i-1]['fb_id'].'">'.$pendingusers[$i-1]['fb_id'].'</a></td>
                                <td><a target=" _blank" href="'.$pendingusers[$i-1]['fb_pages'].'">'.$pendingusers[$i-1]['fb_pages'].'</a></td>
                                <td>'.$pendingusers[$i-1]['email'].'</td>
                                <td>'.$pendingusers[$i-1]['phone'].'</td>
                                <td>Status: '.$pendingusers[$i-1]['status'].'');
                                if ($pendingusers[$i-1]['status']=="pending"){
                                  echo('
                                    <button type="button" class="btn btn-success">Approve</button>
                                    <button type="button" class="btn btn-danger">Reject</button>');}
                                    elseif($pendingusers[$i-1]['status']=="approved")
                                    {
                                      echo('
                                        <button type="button" class="btn btn-danger">Reject</button>');
                                  }
                                  else{
                                    echo('
                                      <button type="button" class="btn btn-success">Approve</button>');
                                }
                                echo('
                                </td>
                            </tr>');
                          }

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
