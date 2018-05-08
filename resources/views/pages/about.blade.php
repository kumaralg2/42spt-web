@extends('layout.master')
@section('content')
<body>
   
 	<header id="head" class="secondary">
            <div class="container">
                    <h1>About Us</h1>
                    <p>In Pursuit of Next Education System!!</p>
                </div>
    </header>


    <!-- container -->
    <section class="container">
        <div class="row">
            <!-- main content -->
            <section class="col-sm-8 maincontent">
                <h3>About Us</h3>
                <p>
                    <img src="{{asset('assets/images/about.jpg')}}" alt="" class="img-rounded pull-right" width="300">
                    <p><span>We are bunch of passioante team who thinks that current education is obselte and it needs a serious reform.</span></p>
                    <p>The current education system is completly obselte and it does not give any value to the students.</p>
                    <p>We focus on students to get an education where they can start gainig SKILL to get a JOB or nuture them to get into ENTREPRENUERSHIP.</p>                </p>
                <p>Education is not just memorizing information(old info), have some degrees, get a job and we are done with it.Education should be a lifelong process, and one should never stop learning. Our Education system only tests the memorization capacity of a human being and nothing else. </p>
                <p>It uses the same mold principal for everyone and if you are not fit that mold then you are branded as a dumb student. Everyone has the same brain and everyone is a genius. With our education, we have made everyone to spend their 22-25 Yrs of time in something, which they may not like and most of the times they end up doing something else !!.</p>
                <p> The current education system was created during the Industrial Revolution and it was designed to create workers who can just follow the orders of their superiors and do a job without using their brains(creativity). Our Education system will never cope up with the constantly changing world.</p>
                <!-- <h3>Our Timeline</h3>
                <strong>2017</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
                <strong>2013</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
                <strong>2012</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
                <strong>2011</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p> -->
            </section>
            <!-- /main -->

            <!-- Sidebar -->
            <aside class="col-sm-4 sidebar sidebar-right">

                <div class="panel">
                    <h4>Related Articles</h4>
                    <ul class="list-unstyled list-spaces">
                        <li><a href="http://www.vedainformatics.com/veranda/modern-education-made-people-literate-not-educated/">Modern Education has made the people literate but not educated </a><br>
                            <span class="small text-muted">We have been noticing a rapid rise in the graph of literacy rate, but it is a fact that corruption, terrorism and crimes have also increased with the same rate or probably higher. .</span></li>
                        <li><a href="http://hackeducation.com/2015/04/25/factory-model">Factory Model Education System</a><br>
                            <span class="small text-muted">What do I mean when I talk about transformational productivity reforms that can also boost student outcomes? </span></li>
                        <li><a href="https://www.youtube.com/watch?v=eYHQcXVp4F4">Noam Chomsky - On Being Truly Educated</a><br>
                            <!-- <span class="small text-muted">Eveniet, consequuntur eius repellendus eos aliquid molestiae ea</span></li> -->
                        <li><a href="http://www.skilldevelopment.gov.in/assets/images/Skill%20India/policy%20booklet-%20Final.pdf">Skill Development Report:</a><br>
                            <!-- <span class="small text-muted">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span></li> -->
                        <li><a href="https://www.weforum.org/about/the-fourth-industrial-revolution-by-klaus-schwab">World Economic Forum Report:</a><br>
                            <!-- <span class="small text-muted">Voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia.</span></li> -->
                    </ul>
                </div>

            </aside>
            <!-- /Sidebar -->

        </div>
    </section>
    <!-- /container -->
    <section class="team-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Our Team</h3>
                    <p>In a Mission to Change the Dynamics of how Real Education is Delivered to Students.</p>
                    <br />
                </div>
            </div>
            <div class="row">

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="assets/images/photo-1.png" alt="" height="450" width="350">
                        </div>
                        <!-- Member Details -->
                        <h4>Kiran Kumar.A</h4>
                        <!-- Designation -->
                        <span class="pos">Founder/CEO</span>
                        <span class="pos">Full Stack Developer, 9+Yrs IT</span>
                        <!-- <div class="team-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member pDark">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="assets/images/photo-2.png" alt="" height="350" width="250">
                        </div>
                        <!-- Member Details -->
                        <h4>Srikanth.E</h4>
                        <!-- Designation -->
                        <span class="pos">Co-Founder</span>
                        <span class="pos">Tech Geek & Founder @OmegaPay</span>

                        <!-- <div class="team-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member pDark">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="assets/images/photo-3.png" alt="">
                        </div>
                        <!-- Member Details -->
                        <h4>Prithvi</h4>
                        <!-- Designation -->
                        <span class="pos">Co-Founder</span>
                        <span class="pos">Auto Geek & Founder @AeroTruck</span>
<!--                         
                        <div class="team-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member pDark">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="assets/images/photo-4.png" alt="">
                        </div>
                        <!-- Member Details -->
                        <h4>Venkat.T</h4>
                        <!-- Designation -->
                        <span class="pos">Data Scientist | Ph.D(Computer Science)</span>
                        <span class="pos">@WalMart(USA)</span>
                        
                        <div class="team-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-6">
                <!-- Team Member -->
                <div class="team-member">
                    <!-- Image Hover Block -->
                    <div class="member-img">
                        <!-- Image  -->
                        <img class="img-responsive" src="assets/images/photo-5.jpg" alt="">
                    </div>
                    <!-- Member Details -->
                    <h4>Ramesh.N</h4>
                    <!-- Designation -->
                    <span class="pos">Adivisor</span>                    
                    <span class="pos">Project Manager @ADP(25+Yrs IT) </span>
                    <!-- <div class="team-socials">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-github"></i></a>
                    </div> -->
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <!-- Team Member -->
                <div class="team-member pDark">
                    <!-- Image Hover Block -->
                    <div class="member-img">
                        <!-- Image  -->
                        <img class="img-responsive" src="assets/images/photo-6.png" alt="">
                    </div>
                    <!-- Member Details -->
                    <h4>Raju</h4>
                    <!-- Designation -->
                    <span class="pos">Advisor</span>
                    <span class="pos">35+Yrs Teaching & Business Mangament</span>
                    
                    <!-- <div class="team-socials">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-github"></i></a>
                    </div> -->
                </div>
            </div>
           
            </div>
        </div>
    </section>
@endsection