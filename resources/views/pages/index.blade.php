@extends('layout.master')
@section('content')
<body>
	<!-- Fixed navbar -->
 	<!-- Header -->
	<header id="head">
		<div class="container">
             <div class="heading-text">							
							<h1 class="animated flipInY delay1">Start Your Practical Learning Here !!</h1>
							<p>India's First Innovative Learning Center.</p>
						</div>
            
					<div class="fluid_container">                       
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        <div data-thumb="{{asset('assets/images/slides/thumbs/img1.jpg')}}" data-src="assets/images/slides/img1.jpg">
                            <h2>We develop.</h2>
                        </div> 
                        <div data-thumb="{{asset('assets/images/slides/thumbs/img2.jpg')}}" data-src="assets/images/slides/img2.jpg">
                        </div>
                        <div data-thumb="{{asset('assets/images/slides/thumbs/img3.jpg')}}" data-src="assets/images/slides/img3.jpg">
                        </div> 
                        <div data-thumb="{{asset('assets/images/slides/thumbs/img4.jpg')}}" data-src="assets/images/slides/img4.jpg">
                        </div> 
                        <div data-thumb="{{asset('assets/images/slides/thumbs/img5.jpg')}}" data-src="assets/images/slides/img5.jpg">
                        </div>
                    </div><!-- #camera_wrap_3 -->
                </div><!-- .fluid_container -->
		</div>
	</header>
	<!-- /Header -->

  <div class="container">
    <div class="row">
					<div class="col-md-3">
						<div class="grey-box-icon">
							<div class="icon-box-top grey-box-icon-pos">
								<img src="{{asset('assets/images/1.png')}}" alt="" />
							</div><!--icon box top -->
							<h4>Bootcamp Session</h4>
							<p>All the candidates going through Bootcamp sessions on various technologies and explaning the process of learning.</p>
     						<!-- <p><a href="#"><em>Read More</em></a></p> -->
						</div><!--grey box -->
					</div><!--/span3-->
					<div class="col-md-3">
						<div class="grey-box-icon">
							<div class="icon-box-top grey-box-icon-pos">
								<img src="{{asset('assets/images/2.png')}}" alt="" />
							</div><!--icon box top -->
							<h4>Individual Specific Analysis</h4>
							<p>Each individual is enriched in the direction of their natural talents by going through 
                                thorough analysis of each individual.
                            </p>
     						<!-- <p><a href="#"><em>Read More</em></a></p> -->
						</div><!--grey box -->
					</div><!--/span3-->
					<div class="col-md-3">
						<div class="grey-box-icon">
							<div class="icon-box-top grey-box-icon-pos">
								<img src="{{asset('assets/images/3.png')}}" alt="" />
							</div><!--icon box top -->
							<h4>Self Learning</h4>
							<p>Focusing on Self Learning and giving the exposure for real time training and working in Startup
                                Environment.</p>
     						<!-- <p><a href="#"><em>Read More</em></a></p> -->
						</div><!--grey box -->
					</div><!--/span3-->
					<div class="col-md-3">
						<div class="grey-box-icon">
							<div class="icon-box-top grey-box-icon-pos">
								<img src="{{asset('assets/images/4.png')}}" alt="" />
							</div><!--icon box top -->
							<h4>Jobs & Entreprenuership</h4>
							<p>Focus on candidates complete skill development for Job and Entreprenuership.</p>
     						<!-- <p><a href="#"><em>Read More →</em></a></p> -->
						</div><!--grey box -->
					</div><!--/span3-->
				</div>
    </div>
   
<!---Testimonials ---->
<section class="container">
    <div class="container">
  <div class="row">
    <div class='col-md-offset-2 col-md-8 text-center'>
    <h2>Student Testimonials</h2>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-offset-2 col-md-8'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
        
          <!-- Quote 1 -->
          <div class="item active">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="http://www.reactiongifs.com/r/overbite.gif" style="width: 100px;height:100px;">
                  <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
                </div>
                <div class="col-sm-9">
                  <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
        </div>
        
        <!-- Carousel Buttons Next/Prev -->
        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
      </div>                          
    </div>
  </div>
</div>
</section>
<!--- /Testimonials-->
	
      <section class="container">
      <div class="row">
      	<div class="col-md-8"><div class="title-box clearfix "><h2 class="title-box_primary">About Us</h2></div> 
        <p><span>We are bunch of passioante team who thinks that current education is obselte and it needs a serious reform.</span></p>
        <p>The current education system is completly obselte and it does not give any value to the students.</p>
        <p>We focus on students to get an education where they can start gainig SKILL to get a JOB or nuture them to get into ENTREPRENUERSHIP.</p>
        <a href="/about" title="read more" class="btn-inline " target="_self">read more</a> </div>
              
          
          <div class="col-md-4"><div class="title-box clearfix "><h2 class="title-box_primary">Up Coming Batches</h2></div> 
            <div class="list styled custom-list">
            <ul>
            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">May Batch</a></li>
            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">June Batch</a></li>
            <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">July Batch</a></li>
            <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">August Batch</a></li>
            <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">September Batch</a></li>            
            </ul>
            </div>
         </div>
      </div>
      </section>
      
@endsection

         
