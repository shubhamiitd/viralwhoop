<?php include (dirname(__FILE__).'\header.php');
$category = array(
                  'bollywood'  => 'Bollywood',
                  'sports'    => 'Sports',
                  'technology'   => 'Technology',
                  'relationship' => 'Relationship',
                  'humour' => 'Humour',
                  'fashion' => 'Fashion',
                  'relationship' => 'Relationship',
                  'others' => 'Others'
                );
$link_attr = array(
                  'name'        => 'post_link',
                  'id'          => 'post_link',
                  'class'       =>  'form-control',
                  'placeholder' => 'Enter post link'
                  );
$wpid_attr = array(
                  'name'        => 'wpid',
                  'id'          => 'wpid',
                  'class'       =>  'form-control',
                  'placeholder' => 'Wordpress Post ID'
                    );

$cat_attr=' class="form-control" ';?>
<div class="container form1" >

        <div class="panel panel-default col-md-12 " style="padding:0;  box-shadow: 5px 5px 5px #888888;border:0px solid white; border-radius:0; margin-top:70px;">
            <div class="panel-heading heading" style="text-align: center; background: #8700ff; border-radius:0; color: white; font-size:1.2em;">ADD POST</div>
            <div class="panel-body">
            <?php echo form_open(base_url().'add_posts/add_post'); ?>
		        <div class="form-group">
                <label for="title">Category</label>
                <?php echo form_dropdown('category', $category, '',$cat_attr); ?>
            </div>
            <div class="form-group">
                <label for="link">Post link</label>
                <?php  echo form_input($link_attr);?>
            </div>
            <div class="form-group">
                <label for="link">Wordpress post ID</label>
                <?php  echo form_input($wpid_attr);?>
            </div>


            <?php echo form_submit('mysubmit', 'Add Post','class="btn btn-default"'); ?>

            </div>
        </div>
    </div>
    <?php include (dirname(__FILE__).'\footer.php');
    ?>
