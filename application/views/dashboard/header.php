<?php echo ('<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Viral Whoop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="'.base_url().'resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="'.base_url().'resources/css/bootstrap-theme.min.css" >
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="'.base_url().'resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="'.base_url().'resources/css/form.css">
    <link rel="stylesheet" href="'.base_url().'resources/css/dashboard.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="'.base_url().'resources/js/bootstrap.min.js"></script>

  </head>
  <body>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="'.base_url().'" style="padding:0;">
				<img src="'.base_url().'resources/assets/images/logo.jpg"/></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">

                <ul class="nav navbar-nav navbar-left">
                    <li ><a href="'.base_url().'dashboard/income" >Income</a></li>
                    <li><a href="'.base_url().'dashboard/posts" >Posts</a></li>
                    <li><a href="'.base_url().'dashboard/details" >Account Details</a></li>
                    <li><a href="'.base_url().'dashboard/payments" >Payments</a></li>');?>
                    <?php
                    if ($user_details2['admin']==1){

                    echo('
                    <li class="dropdown " >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="background:white;">
                                <li><a href="'.base_url().'admin/users">Users</a></li>
                                <li><a href="'.base_url().'admin/due_payments">Due-Payments</a></li>
                                <li><a href="'.base_url().'admin/add_posts">Add posts</a></li>
                            </ul>
                        </li> ');}?> <?php echo('
                         </ul>
      				<ul class="nav navbar-nav navbar-right">
              <li class="dropdown " >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$username.' <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="background:white;">
                            <li><a href="'.base_url().'dashboard/details">Account Details</a></li>
                            <li><a href="'.base_url().'dashboard/income">Income</a></li>
                            <li><a href="'.base_url().'auth/change_password">Change Password</a></li>
                            <li><a href="'.base_url().'auth/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>');?>
