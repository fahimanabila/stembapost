<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="shortcut icon" href="<?php echo base_url('assets/logo.png') ?>" />
		<title>Pusat Info | STEMBA</title>
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
		<meta name="author" content="Codrops" />
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/normalize.css') ?>" /> -->
		<!-- <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-4.0.0/dist/css/bootstrap.min.css') ?>" />  -->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/linearicons.css') ?>" /> -->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/magnific-popup.css') ?>" /> -->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/main.css') ?>" /> -->
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/nice-select.css') ?>" /> -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/demo.css') ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/component.css') ?>" />

			<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> -->
	  		<link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
	  		<!-- <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
			  <!-- Font Awesome -->
			  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>bower_components/font-awesome/css/font-awesome.min.css">
			  <!-- Ionicons -->
			  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>bower_components/Ionicons/css/ionicons.min.css">
			  <!-- Theme style -->
			  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-2.4.0-rc/') ?>dist/css/AdminLTE.min.css">	


	</head>
	<body>
		<nav class="navbar navbar-default" style="position: fixed; z-index: 999">
			<ul id="gn-menu" class="gn-menu-main" style="box-shadow: 5px 5px 5px #bcbcbc;">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
                  <form method="post" action="<?php echo base_url('Search')?>">
									<input title="Masukkan Keyword" placeholder="Search" type="search" name="parameter" class="gn-search">
                  </form>
									<a class="gn-icon gn-icon-search" href="<?php echo base_url('Search');?>"><span>Search</span></a>
								</li>
								<li><a class="gn-icon gn-icon-earth" href="<?php echo base_url('Contact');?>">Contacts</a></li>
								<li><a class="gn-icon gn-icon-pictures" href="<?php echo base_url('Address');?>">Find Address</a></li>
								<li><a class="gn-icon gn-icon-article" href="<?php echo base_url('New');?>">New Broadcast</a>
								</li>
								<li><a class="gn-icon gn-icon-archive" href="<?php echo base_url('Trash');?>">Trash</a></li>
								<li><a class="gn-icon gn-icon-cog" href="<?php echo base_url('Setup');?>">Setup</a></li>
								<li><a class="gn-icon gn-icon-help" href="<?php echo base_url('About');?>">About</a></li>
							</ul>
						</div>
					</nav>
				</li>
				<li><a href="<?php echo base_url('Home');?>">Stembapost</a></li>
				<li><a class="codrops-icon codrops-icon-prev" href="<?php echo base_url('New');?>"><span>New Broadcast</span></a></li>
				<li><a class="codrops-icon codrops-icon-drop" data-target="#mdlAccount" data-toggle="modal"><span>Logout</span></a></li>
			</ul>
		</nav>
	
	    </div>
		<div style="color: white;background-color: lightblue">				
			<h1>ini body</h1>
		</div>
	    <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js')?>"></script>
	    <script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
		<script src="<?php echo base_url('assets/bootstrap-4.0.0/js/dist/carousel.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/classie.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/gnmenu.js') ?>"></script>
		<script src="<?php echo base_url('assets/bootstrap-4.0.0/js/dist/carousel.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/modernizr.custom.js') ?>"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>


<div class="modal fade mdlAccount"  id="mdlAccount" tabindex="1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width:600px;" role="document">
        <div class="modal-content">
            <div class="modal-header" style="width: 100%;" >
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body" style="width: 100%;padding-bottom: 0px;">
        	<div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black text-left" style="height:200px;background: url(<?php echo base_url('assets/img/bg.jpg')?>) center center;">
              <h3 class="widget-user-username"><?php echo $arrai['nama']?></h3>
              <h5 class="widget-user-desc">
              <?php if ($status[0]['user_details_id'] == '1000') {?>
              Super User</h5>
              <?php }else if ($status[0]['user_details_id'] == '100'){?>
              Admin</h5>
              <?php }else if ($status[0]['user_details_id'] == '10'){?>
              User</h5>
              <?php } ?>
            </div>
            <div class="widget-user-image">
              <?php if ($status[0]['user_details_id'] == '1000') {?>
              <img class="img-circle" src="<?php echo base_url('assets/img/superuser.jpg')?>" style="margin-top: 80px;" alt="User Avatar">
              <?php }else if ($status[0]['user_details_id'] == '100'){?>
              <img class="img-circle" src="<?php echo base_url('assets/img/admin.jpg')?>" style="margin-top: 80px;" alt="User Avatar">
              <?php }else if ($status[0]['user_details_id'] == '10'){?>
              <img class="img-circle" src="<?php echo base_url('assets/img/user.jpg')?>" style="margin-top: 80px;" alt="User Avatar">
              <?php } ?>
            </div>
            <!-- <div class="box-footer"> -->
              <div class="row" style="margin-top: 40px;">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $count[0]['id']?> Times</h5>
                    <span class="description-text">LOGGED ID</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $contacts[0]['id']?> Numbers</h5>
                    <span class="description-text">CONTACTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $msg[0]['id']?> Sent</h5>
                    <span class="description-text">MESSAGES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
                   
                      <div class="modal-footer">
                        <div class="col-md-6 pull-right">
                      	<a href="<?php echo base_url('Attachment')?>">
                          <button class="btn btn-primary btn-sm" style="width: 120px;"><i class="fa fa-paperclip"></i> ATTACHMENT </button> 
                      	</a>
                        <a href="<?php echo base_url('logout')?>">
                          <button class="btn btn-danger btn-sm" style="width: 100px;"><i class="fa fa-sign-out"></i> LOGOUT </button> 
                      	</a>
                        </div>
                      </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

	</body>
</html>