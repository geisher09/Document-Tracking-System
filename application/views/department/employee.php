<!doctype html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?><?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/linearicons/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/chartist/css/chartist-custom.css">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/demo.css">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">


  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js');?>"></script>
  <script src="<?php echo base_url('assets/vendor/chartist/js/chartist.min.jss');?>"></script>
  <script src="<?php echo base_url('assets/scripts/klorofil-common.js');?>"></script>
</head>
<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <a href="index.html" style="font-family: 'Josefin Slab'; font-size: 27px; color: #34495E; ">
        <img src="<?php echo base_url('assets/images/logo2.png');?>" alt="DTS Logo" class="img-responsive logo2">
        Document Tracking System </a>
      </div>
      <div class="container-fluid">
        <div class="navbar-btn">
          <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                <i class="lnr lnr-alarm"></i>
                <span class="badge bg-danger"><?php echo count($inb);?></span>
              </a>
              <ul class="dropdown-menu notifications">
                <li><a href="<?php echo site_url('Home/docu'); ?>" class="notification-item"><span class="dot bg-danger"></span>You have <?php echo count($inb);?> file(s) on hold in your inbox!</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-link"></i> <span>Quicklinks</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <ul class="dropdown-menu">
                <?php foreach ($pro as $prof){ ?>
                <li><a data-toggle="modal" id="<?php echo $prof['employee_id']; ?>" onclick="send(this.id)"><i class="glyphicon glyphicon-share"></i> Compose</a></li>
                <?php } ?>
                <li><a href="<?php echo site_url('Home/docu'); ?>"><i class="glyphicon glyphicon-inbox"></i> Inbox</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <?php foreach ($pro as $prof){ ?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url($prof['image']); ?>" class="img-circle" alt="Avatar"> <span><?php echo $prof['username'];?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
              <?php } ?>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('Home/profile'); ?>"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                <li><a href="<?php echo site_url('Home/edit'); ?>"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                <li><a href="<?php echo site_url('Home'); ?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
              </ul>
            </li>
            <!-- <li>
              <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">
            <li><a href="<?php echo site_url('Home/home'); ?>" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            <li><a href="<?php echo site_url('Home/docu'); ?>" class=""><i class="lnr lnr-envelope"></i><span>My Documents<span class="badge bg-danger"><?php echo count($inb);?></span></span></a></li>
            <li><a href="<?php echo site_url('Home/offices'); ?>" class="active"><i class="lnr lnr-apartment"></i><span>Offices and </span><i class="lnr lnr-users"></i><span>Employees</span></a></li>
            <li><a href="<?php echo site_url('Home/contacts'); ?>" class=""><i class="lnr lnr-phone"></i> <span>Contacts</span></a></li>
            <li><a href="<?php echo site_url('Home/profile'); ?>" class=""><i class="lnr lnr-user"></i> <span>Profile</span></a></li>
            <li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- END LEFT SIDEBAR -->
<div class="main">
      <!-- MAIN CONTENT -->   
  <p class="title" style="float:left;margin-top:-30px;margin-left:-570px;;margin-bottom:-30px;">Offices</p>
<div class="container-fluid body">

<!--body-->
    <div class="container-fluid red">
      <h2 style="color: #7FB3D5;">Employees</h2><br /><br />
            <table class="table table-list-search table-hover table-responsive ">
          <thead>
            <tr>
              <th>EMPLOYEE ID</th>
              <th>NAME</th>
              <th>POSITION</th>
              <th>SEX</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($employees as $e){ ?>
            <tr>
              <td><?php echo $e['employee_id']; ?></td>
              <td><?php echo $e['lname'].', '.$e['fname'].' '.$e['mname'];?></td>
              <td><?php echo $e['position']; ?></td>    
              <td><?php echo $e['sex']; ?></td>

            </tr>
            <?php } ?>
          </tbody>
        </table>
        
        <a href="<?php echo site_url('Home/dept/'.$office); ?>" class="btn btn-primary btn-md">
          <!-- matic na sa office of VP of research and extensions muna to -->
          <span class="lnr lnr-pointer-left"></span>Back
        </a>
    </div>
</div>

</div>


    
    <div class="clearfix"></div>
      <footer>
      <div class="container-fluid">
        <p class="copyright">&copy; 2017 <a href="<?php echo site_url('Home/home'); ?>" target="_blank">Document Tracking System</a>. All Rights Reserved.</p>
      </div>
      </footer>
  </div>
  <!-- END WRAPPER -->
  <!-- Javascript -->

  </div>
</div>

<script>
$(document).ready(function() {
  $('.dropdown-toggle').dropdown(); 
  $('.collapsed').collapse();
});

function send(id){
      $.ajax({
              type: 'POST',
               data:{id: id},
                success: function(data) {
                  var obj = JSON.stringify(data);
                  console.log(id);

                  $('#empid').val(id);
                  $('#send_details').modal('show');

                }
            });
    }

</script>


<!-- modal of details about the document-->
  <div id="send_details" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
  <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #34495E; color:#ffffff;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h3 class="modal-title text-center">Add Document</h3>
        </div>
        <div class="modal-body">

      <?php echo form_open_multipart('home/save',['class'=>'form-horizontal']); ?>
      <div class="row">
          <input type="hidden" id="empid" name="empid"/>
      </div>
      <div class="row">
        <div class=" col-md-10">
          <label for="">Title:</label>
          <?php echo form_input(['name'=>'document_title','class'=>'form-control','placeholder'=>'Title', 'value'=>set_value('document_title')]); ?>
        </div>

          <div class="col-lg-10">
            <?php echo form_error('document_title'); ?>
            </div>
      </div>
      <br/>
      <div class="row">
        <div class=" col-md-10">
          <label for="">Description:</label>
          <?php echo form_textarea(['name'=>'document_desc','rows'=>'1','class'=>'form-control','placeholder'=>'Description', 'value'=>set_value('document_desc')]); ?>
        </div>

          <div class="col-lg-10">
            <?php echo form_error('document_desc'); ?>
            </div>
      </div>
      <br/>

      <div class="row">
        <div class="col-sm-8">
              <label for="">Send to:</label>
            <select name="employee" class="form-control">
              <?php foreach ($emp as $empoy){ ?>
                  <option value="<?php echo $empoy->employee_id; ?>"><?php echo $empoy->lname.','.$empoy->fname.'  '.$empoy->mname; ?></option>
              <?php } ?>
            </select>
        </div>
      </div>

      <div class="row">   
      <br/>
      <div class=" col-md-10">
          <label for="">Attach File:</label>
            <?php echo form_upload(['name'=>'file', 'accept'=>'document/*']); ?>
          </div>

          <div class="col-lg-10">
            <?php echo form_error('file'); ?>
            </div>
      </div><br/>
      <div>
        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>Send</button>
        <button type="reset" class="btn btn-default"><i class="fa fa-refresh" aria-hidden="true"></i>Reset</button>
      </div>
      <?php echo form_close();?>
        </div>
      </div>

    </div>
  </div>