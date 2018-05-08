<footer id="footer">
		<div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Focused Technologies
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                Full Stack Development 
              </a>
            </li>
            <li><a href="#">
               Machine Learning
              </a>
            </li>
            <li><a href="#">
                AI/Data Science
              </a>
            </li>
            <li><a href="#">
               AR/VR
              </a>
            </li>
            <li><a href="#">
               Digital Marketing
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6"> 
            	<div class="footerwidget"> 
                         <h4>Contact</h4> 
                      <i class="fa fa-envelope-o"></i>  contact@42spirit.com<br>
                      <i class="fa fa-phone"></i>  +91-8639-142-119<br><br>
                     
                </div><!-- end widget --> 
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
      <!-- <p>Our Office Address:</p> -->
      <div class="contact-info"> 
          <h5>Bangalore:</h5>
         <i class="fa fa-map-marker"></i> 4th Floor, Salarpuria Tower -1, No. 22, Industrial Layout Landmark: Forum Mall,Karnataka 560095 <br>
      </div> 
       
      </div>
    </div>
    
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
      <div class="contact-info"> 
         <h5>Hyderabad:</h5>
         <i class="fa fa-map-marker"></i> Plot no. 44, Kavuri Hills, Phase 1,Behind Hotel Jubilee Ridge, Hyderabad, Telangana 500033  <br>
      </div>
        <!-- <h4>
          Browse by Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                All Courses
              </a>
            </li>
            <li> <a href="#">
                All Instructors
              </a>
            </li>
            <li><a href="#">
                All Members
              </a>
            </li>
            <li>
              <a href="#">
                All Groups
              </a>
            </li>
          </ul>
        </div> -->
      </div>
    </div>
    
  </div>
</div>
			<div class="social text-center">
				<a href="https://www.facebook.com/42Spirit-481413968928533/"><i class="fa fa-facebook"></i></a>
				<a href=""><i class="fa fa-instagram"></i></a>
				<a href=""><i class="fa fa-linkedin"></i></a>
        
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="/index">Home</a> | 
								<a href="/about">About</a> |
								<a href="/courses">Courses</a> |
								<a href="/whyus">Price</a> |
								<a href="/contact">Contact</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2016. <a href="http://42spirit.com/" rel="develop">42Spirit.com</a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="{{asset('assets/js/modernizr-latest.js')}}"></script> 
	<script type='text/javascript' src='{{asset('assets/js/jquery.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('assets/js/fancybox/jquery.fancybox.pack.js')}}'></script>
    
    <script type='text/javascript' src='{{asset('assets/js/jquery.mobile.customized.min.js')}}'></script>
    <script type='text/javascript' src='{{asset('assets/js/jquery.easing.1.3.js')}}'></script> 
    <script type='text/javascript' src='{{asset('assets/js/camera.min.js')}}'></script> 
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script> 
	<script src="{{asset('assets/js/custom.js')}}"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: '{{asset('assets/images/')}}'
			});

    });
    $(document).ready(function() {
    //Set the carousel options
    $('#quote-carousel').carousel({
      pause: true,
      interval: 4000,
    });
  });
      
	</script>
    
</body>
</html>
