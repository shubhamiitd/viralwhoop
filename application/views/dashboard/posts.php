<?php include (dirname(__FILE__).'\header.php');
?>

<div class="container form1" >

       <div class="panel panel-default col-md-12 " style="padding:0;  box-shadow: 5px 5px 5px #888888;border:0px solid white; border-radius:0; margin-top:70px;">
           <div class="panel-heading heading" style="text-align: center; background: #8700ff; border-radius:0; color: white; font-size:1.2em;">POSTS</div>
           <div class="panel-body ">

     <div style="padding-bottom:50px;">
      <!-- <ul class="nav nav-pills">
         <li role="presentation" class="active"><button class="btn all" >ALL</button></li>
         <li role="presentation"><button class="btn bollywood" >BOLLYWOOD</button></li>
         <li role="presentation"><button class="btn sports" >SPORTS</button></li>
         <li role="presentation"><button class="btn entertainment">ENTERTAINMENT </button></li>
         <li role="presentation"><button class="btn technology" >TECHNOLOGY</button></li>
         <li role="presentation"><button class="btn humour" >HUMUOR</button></li>
         <li role="presentation"><button class="btn fashion" >FASHION</button></li>
         <li role="presentation"><button class="btn relationship" >RELATIONSHIP</button></li>
         <li role="presentation"><button  class="btn others" >OTHERS</button></li>

       </ul>-->
     </div>


     <div id="">
     <?php
     $stack=array();
     
     $i=0;
     while($i<sizeof($posts)){
     echo('
       <div  class="col-md-3 col-sm-6" style="padding-top:50px; border:1px black solid;">
         <img src="'.$posts[$i]['image-link'].'" width="200px" />
         <a href="'.$posts[$i]['post-link'].'" target="_blank">
              <p class="postpara">'.$posts[$i]['title'].'</p>
          </a>
         <button class="btn btn-success"  onClick="sharinglink('.$posts[$i]['post_id'].','.$user_id.');" data-toggle="modal" data-target="#myModal">Get sharing link</button>
       </div>');
       $i=$i+1;
     }?>
       </div>
       <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Copy this URL</h4>
        </div>
        <div class="modal-body">
          <p id="postlink">Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" onClick="copy()" >Copy to clipboard</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

           </div>
       </div>
   </div>

<script type="text/javascript">
  function sharinglink(pid,uid){

        $("#postlink").text("http://bakfeed.com/archives/"+pid+"?uid="+uid);

    jQuery.ajax({
  type: "POST", // HTTP method POST or GET
  url: "http://localhost/viralwhoop.com/get_posts/addtoearning", //Where to make Ajax calls
  dataType:"text", // Data type, HTML, json etc.
  data : {postid:pid, userid:uid},
  success:function(response){

  },

  });
  }

   function copy(){
        var text =document.getElementById("postlink");
         var range = document.createRange();
         range.selectNode(text);
         window.getSelection().addRange(range);
         document.execCommand("copy");
         alert("Link copied");
       };


       </script>



<?php include (dirname(__FILE__).'\footer.php');
?>
