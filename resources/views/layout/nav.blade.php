<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="/">
					<img src="{{asset('assets/images/42spiritlogo2.png')}}" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
				<li class="{{ Request::is('/') ? 'active' : '' }}">
					<a href="{{ url('/') }}">Home</a>
				</li>
				<li class="{{ Request::is('technologies') ? 'active' : '' }}">
					<a href="{{ url('technologies') }}">Technologies</a>
				</li>
				<li class="{{ Request::is('whyus?') ? 'active' : '' }}">
					<a href="{{ url('whyus') }}">Why Us? </a>
				</li>
				<li class="{{ Request::is('about') ? 'active' : '' }}">
					<a href="{{ url('about') }}">About Us</a>
				</li>
				<li class="{{ Request::is('contact') ? 'active' : '' }}">
						<a href="{{ url('contact') }}">Contact</a>
				</li>
				<li class="active"><a href="/apply-now">Apply Now</a></li>

				<!-- <li class="{{ Request::is('JoinNow') ? 'active' : '' }}">
					<a href="{{ url('JoinNow') }}">Join Now</a>
				</li> -->
					<!-- <li class="active"><a href="/">Home</a></li>
					<li><a href="/about">About</a></li> 
					<li><a href="/courses">Courses</a></li>
					<li><a href="/price">Price</a></li>
					<li><a href="/videos">Videos</a></li>-->
					<!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-right">Right Sidebar</a></li>
							<li><a href="#">Dummy Link1</a></li>
							<li><a href="#">Dummy Link2</a></li>
							<li><a href="#">Dummy Link3</a></li>
						</ul>
					</li> -->
				
					<!-- <li><a href="contact.html">Contact</a></li> -->

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->