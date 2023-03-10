<input type="hidden" id="alertUsed" value="<?php echo $arrai['nama']?>">
<script type="text/javascript">
$(document).ready(function () {
  var user = $('#alertUsed').val();

  Swal.fire({
  title: 'Welcome '+user+' !',
  // text: 'Please login into whatsApp web before sending some messages',
   html:
    '<h5>Make sure you have logged into <br/> WhatsApp Web Official StembaPost <br/> before sending some messages <br/>' +
    '<u><a target="_blank" href="https://web.whatsapp.com">WhatsApp Link</a></u><br/> ' +
    'Thank You!</h5>',
  imageUrl: baseurl+'assets/pict/whatsapp.png',
  // imageWidth: 270, 
  // imageHeight: 180,
  imageAlt: 'Custom image',
})
})
</script>

	<!-- <div style="background-color: white"> -->
			  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">
			      <div class="item active">
			        <img src="<?php echo base_url('assets/pict/pict.jpg')?>" alt="Los Angeles" style="width:100%;">
			      </div>

			      <div class="item">
			        <img src="<?php echo base_url('assets/pict/pict1.jpg')?>" alt="Chicago" style="width:100%;">
			      </div>
			    
			      <div class="item">
			        <img src="<?php echo base_url('assets/pict/pict2.jpg')?>" alt="New york" style="width:100%;">
			      </div>

			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>
			  </div>
			</div>

<div class="col-md-12" style="background-color:white;">
        <div class="col-md-3 col-xs-6" style="margin-top:15px;">
          <div class="small-box bg-aqua" style="background-color: #A9A9A9 !important">
            <div class="inner">
              <h3><?= $all[0]['contact']?></h3>

              <p>All Contacts</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url('Contact')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-md-3 col-xs-6" style="margin-top:15px;">
          <div class="small-box bg-green" style="background-color: #808080 !important">
            <div class="inner">
              <h3><?= $res[0]['contact']?></h3>

              <p>Numbers Active</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url('Address')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-md-3 col-xs-6" style="margin-top:15px;">
          <div class="small-box bg-yellow" style="background-color: #696969 !important">
            <div class="inner">
              <h3><?= $sent[0]['sent']?></h3>

              <p>Sent Messages</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#history" class="small-box-footer smoothscroll">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-md-3 col-xs-6" style="margin-top:15px;">
          <div class="small-box bg-red" style="background-color: #778899 !important">
            <div class="inner">
              <h3><?= $del[0]['del']?></h3>

              <p>Deleted Messages</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url('Trash')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        
              <!-- USERS LIST -->
           
              <!--/.box -->
            </div>
        </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
        </div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>

    <script type="text/javascript">
      $('.smoothscroll').on('click', function (e) {
    
    e.preventDefault();

    var target = this.hash,
      $target = $(target);

      $('html, body').stop().animate({
        'scrollTop': $target.offset().top
      }, 800, 'swing', function () {
        window.location.hash = target;
      });

    });  
    </script>

