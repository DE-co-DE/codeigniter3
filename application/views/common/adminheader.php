<!DOCTYPE html>
<html>
<head>
  <title></title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/admin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/script.js"></script>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/dashboard.css" rel="stylesheet">
  </head>
 <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?php echo base_url(); ?>">Company Name</a>
    
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?php echo base_url(); ?>logout">Logout </a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        

        <main role="main" class="col-md-12 ">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mt-5 pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 text-uppercase"><?php echo @$title==''?'Dashboard':'ADD '.@$title?></h1>
            <div class="btn-toolbar mb-2 mb-md-0">
           <?php if(@$title==''){ ?>
              <a class="btn btn-sm btn-outline-secondary " href="<?php echo base_url() ?>addBook">
                <span class="fa fa-plus"></span>
               Add New Book </a>
               <?php } else { ?>
   <a class="btn btn-sm btn-outline-secondary " href="<?php echo base_url() ?>Dashboard">
                <span class="fa fa-arrow-left"></span>
              Back to Dashboard</a>
           <?php  } ?>  
              
            </div>
        
<form class="example" action="/action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
          </div>

        
          
        
