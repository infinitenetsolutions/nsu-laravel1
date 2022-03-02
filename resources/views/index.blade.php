<x-layout>

    @slot('body')
    @include('include.slider')

    <!-- Study Section -->
    <section class="home-sec1 mydiv">
        <div class="container">
            <div class="top-home-sec1 row">

                <div class="col-12 col-md-12">
                    <h2>
                        Study at Amity</h2>
                </div>

                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                    <p class="wow fadeInUp">Amity sets the benchmarks of the global education with a system that
                        matches
                        the best of practices, theories, resources and standards all over the world</p>

                </div>
                <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                    <ul>
                        <li>
                            <h3 class="wow fadeInDown">9</h3>
                            <span class="wow fadeInUp">Universities</span>
                        </li>
                        <li>
                            <h3 class="wow fadeInDown">150+</h3>
                            <span class="wow fadeInUp">Institution & Centers</span>
                        </li>
                        <li>
                            <h3 class="wow fadeInDown">300+</h3>
                            <span class="wow fadeInUp">Programmes</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-home-sec1">
                <ul class="nav nav-tabs responsive-tabs">
                    <li class="active"><a href="#undergraduate-programmes"> Undergraduate Programmes</a></li>
                    <li><a href="#postgraduate-programmes"> Postgraduate Programmes</a></li>
                </ul>
                <div class="tab-content">
                    <h4 class="collapsible_heading open">Undergraduate Programmes <span class="lnr lnr-chevron-down"></span></h4>
                    <div class="tab-pane active" id="undergraduate-programmes">
                        <div class="tab-home-content row">
                            <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                                <h3> Find A Course</h3>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9 col-xl-9">
                                <div class="search-bar">

                                    <input name="txtsearch" type="text" id="txtsearch" placeholder="Enter Course Name" AutoComplete="off" />

                                    <div class="submit-btn">
                                        <input type="submit" name="lnkG" value="Button" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;lnkG&quot;, &quot;&quot;, true, &quot;submitsubsg&quot;, &quot;&quot;, false, false))" id="lnkG" class="submit_btn" />
                                        <span id="RequiredFieldValidator11" style="color:Red;display:none;"></span>
                                        <input type="hidden" name="ValidatorCalloutExtender13_ClientState" id="ValidatorCalloutExtender13_ClientState" />

                                    </div>
                                    <ul id='courselist' class="wordWheel listMain" style="display:none">
                                    </ul>

                                </div>


                            </div>

                            <p align="center" class="home_search_btn"> <a href="programe-list6f7e.html?fd=all">Search
                                    by
                                    Level</a> &nbsp;&nbsp; | &nbsp;&nbsp;
                                <a href="programe-list6f7e.html?fd=all">A to Z</a> &nbsp;&nbsp; | &nbsp;&nbsp;
                                <a href="programe-list6f7e.html?fd=all">Search by Discipline</a>
                            </p>



                        </div>
                    </div>

                    <h4 class="collapsible_heading">Postgraduate Programmes <span class="lnr lnr-chevron-down"></span>
                    </h4>
                    <div class="tab-pane" id="postgraduate-programmes">
                        <div class="tab-home-content row">
                            <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                                <h3> Find A Course</h3>
                            </div>
                            <div class="col-12 col-md-9 col-lg-9 col-xl-9">
                                <div class="search-bar">
                                    <input name="txtsearchpg" type="text" id="txtsearchpg" placeholder="Enter Course Name" AutoComplete="off" />

                                    <div class="submit-btn"><input type="submit" name="btnpg" value="Button" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnpg&quot;, &quot;&quot;, true, &quot;submitsubspg&quot;, &quot;&quot;, false, false))" id="btnpg" class="submit_btn" />

                                        <span id="reqpg" style="color:Red;display:none;"></span>
                                        <input type="hidden" name="ValidatorCalloutExtender1_ClientState" id="ValidatorCalloutExtender1_ClientState" />

                                    </div>
                                    <ul id='postcourselist' class="wordWheel listMain" style="display:none">
                                    </ul>
                                </div>



                            </div>

                            <p align="center" class="home_search_btn"> <a href="programe-list6f7e.html?fd=all">Search
                                    by
                                    Level</a> &nbsp;&nbsp; | &nbsp;&nbsp;
                                <a href="programe-list6f7e.html?fd=all">A to Z</a> &nbsp;&nbsp; | &nbsp;&nbsp;
                                <a href="programe-list6f7e.html?fd=all">Search by Discipline</a>
                            </p>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <section class="home-sec2 mydiv">
        <div class="container-fluid">

            <div class="row slider-wrapper">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="false">
                    <div class="carousel-inner" role="listbox">


                        <div id="figurebanner1_repfigurebanner_ctl00_divfigure" class="carousel-item active">
                            <img class="img-fluid" src="backoffice/uploads/HomeBanner/1fblg_noida-cam-img.jpg" alt="1fblg_noida-cam-img.jpg">
                            <div class="banner_text"></div>
                        </div>

                        <div id="figurebanner1_repfigurebanner_ctl01_divfigure" class="carousel-item">
                            <img class="img-fluid" src="backoffice/uploads/HomeBanner/2fblg_lucknow.jpg" alt="2fblg_lucknow.jpg">
                            <div class="banner_text"></div>
                        </div>

                        <div id="figurebanner1_repfigurebanner_ctl02_divfigure" class="carousel-item">
                            <img class="img-fluid" src="backoffice/uploads/HomeBanner/3fblg_jaipur.jpg" alt="3fblg_jaipur.jpg">
                            <div class="banner_text"></div>
                        </div>

                        <div id="figurebanner1_repfigurebanner_ctl03_divfigure" class="carousel-item">
                            <img class="img-fluid" src="backoffice/uploads/HomeBanner/4fblg_gurgaon.jpg" alt="4fblg_gurgaon.jpg">
                            <div class="banner_text"></div>
                        </div>

                        <div id="figurebanner1_repfigurebanner_ctl04_divfigure" class="carousel-item">
                            <img class="img-fluid" src="backoffice/uploads/HomeBanner/5fblg_gwalior.jpg" alt="5fblg_gwalior.jpg">
                            <div class="banner_text"></div>
                        </div>

                        <div id="figurebanner1_repfigurebanner_ctl05_divfigure" class="carousel-item">
                            <img class="img-fluid" src="backoffice/uploads/HomeBanner/6fblg_mumbai.jpg" alt="6fblg_mumbai.jpg">
                            <div class="banner_text">Mumbai Campus</div>
                        </div>

                        <div id="figurebanner1_repfigurebanner_ctl06_divfigure" class="carousel-item">
                            <img class="img-fluid" src="backoffice/uploads/HomeBanner/7fblg_grnoida.jpg" alt="7fblg_grnoida.jpg">
                            <div class="banner_text">Greater Noida Campus : 21 Acres</div>
                        </div>

                        <div id="figurebanner1_repfigurebanner_ctl07_divfigure" class="carousel-item">
                            <img class="img-fluid" src="backoffice/uploads/HomeBanner/8fblg_raipur.jpg" alt="8fblg_raipur.jpg">
                            <div class="banner_text"></div>
                        </div>

                        <div id="figurebanner1_repfigurebanner_ctl08_divfigure" class="carousel-item">
                            <img class="img-fluid" src="backoffice/uploads/HomeBanner/10fblg_ranchi.jpg" alt="10fblg_ranchi.jpg">
                            <div class="banner_text"></div>
                        </div>

                        <div id="figurebanner1_repfigurebanner_ctl09_divfigure" class="carousel-item">
                            <img class="img-fluid" src="backoffice/uploads/HomeBanner/11fblg_patna.jpg" alt="11fblg_patna.jpg">
                            <div class="banner_text"></div>
                        </div>

                        <div id="figurebanner1_repfigurebanner_ctl10_divfigure" class="carousel-item">
                            <img class="img-fluid" src="backoffice/uploads/HomeBanner/12fblg_9fblg_kolkata.jpg" alt="12fblg_9fblg_kolkata.jpg">
                            <div class="banner_text"></div>
                        </div>


                        <div class="secon_banner_campus">
                            Campuses</div>
                        <ul class="carousel-indicators clearfix">

                            <li id="figurebanner1_RepBannerImg_ctl00_liinner" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"><a href="#">
                                    Noida</a></li>

                            <li id="figurebanner1_RepBannerImg_ctl01_liinner" data-target="#carouselExampleIndicators" data-slide-to="1"><a href="#">
                                    Lucknow</a></li>

                            <li id="figurebanner1_RepBannerImg_ctl02_liinner" data-target="#carouselExampleIndicators" data-slide-to="2"><a href="#">
                                    Jaipur</a></li>

                            <li id="figurebanner1_RepBannerImg_ctl03_liinner" data-target="#carouselExampleIndicators" data-slide-to="3"><a href="#">
                                    Gurgaon</a></li>

                            <li id="figurebanner1_RepBannerImg_ctl04_liinner" data-target="#carouselExampleIndicators" data-slide-to="4"><a href="#">
                                    Gwalior</a></li>

                            <li id="figurebanner1_RepBannerImg_ctl05_liinner" data-target="#carouselExampleIndicators" data-slide-to="5"><a href="#">
                                    Mumbai</a></li>

                            <li id="figurebanner1_RepBannerImg_ctl06_liinner" data-target="#carouselExampleIndicators" data-slide-to="6"><a href="#">
                                    Greater Noida</a></li>

                            <li id="figurebanner1_RepBannerImg_ctl07_liinner" data-target="#carouselExampleIndicators" data-slide-to="7"><a href="#">
                                    Raipur</a></li>

                            <li id="figurebanner1_RepBannerImg_ctl08_liinner" data-target="#carouselExampleIndicators" data-slide-to="8"><a href="#">
                                    Ranchi</a></li>

                            <li id="figurebanner1_RepBannerImg_ctl09_liinner" data-target="#carouselExampleIndicators" data-slide-to="9"><a href="#">
                                    Patna</a></li>

                            <li id="figurebanner1_RepBannerImg_ctl10_liinner" data-target="#carouselExampleIndicators" data-slide-to="10"><a href="#">
                                    Kolkata</a></li>


                        </ul>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true">
                        </span><span class="sr-only">Next</span> </a>
                </div>
                <div class="home_slider_text">
                    <div class="why_box">
                        <div class="home-why-amity">
                            <div class="why-amity-left">


                                <h2 class="wow fadeInDown">
                                    WHY AMITY</h2>
                                <h3 class="wow fadeInUp">
                                    Grooming leaders who are not only thorough professionals but also good human beings
                                    with values.</h3>
                                <div class="text_why-main">
                                    <div class="text_why">
                                        <h4 class="wow fadeInDown">
                                            This is why we are<br>
                                            consistently ranked</h4>
                                        <div class="text_why2 wow fadeInUp">
                                            no.1</div>
                                    </div>
                                </div>

                                <a href="about-university.html" class="wow fadeInUp"><span>Read More About
                                        Amity</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="why_box2">
                        <div class="owl-carousel owl-carousel1 owl-theme">
                            <div class="item">
                                <ul>
                                    <li>
                                        <h3>
                                            27 Years'
                                        </h3>
                                        <p>
                                            of Education Experience</p>
                                    </li>
                                    <li>
                                        <h3>
                                            24 Years'
                                        </h3>
                                        <p>
                                            of Management Education Experience</p>
                                    </li>
                                    <li>
                                        <h3>
                                            150,000
                                        </h3>
                                        <p>
                                            Students</p>
                                    </li>
                                    <li>
                                        <h3>
                                            6000
                                        </h3>
                                        <p>
                                            Faculties</p>
                                    </li>
                                    <li>
                                        <h3>
                                            15000</h3>
                                        <p>
                                            paper published</p>
                                    </li>
                                    <li>
                                        <h3>
                                            5000
                                        </h3>
                                        <p>
                                            Books Authored</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li>
                                        <h3>
                                            1200
                                        </h3>
                                        <p>
                                            acres of Campuses</p>
                                    </li>
                                    <li>
                                        <h3>
                                            9
                                        </h3>
                                        <p>
                                            Universities</p>
                                    </li>
                                    <li>
                                        <h3>
                                            14
                                        </h3>
                                        <p>
                                            International / overseas Campuses across
                                        </p>
                                    </li>
                                    <li>
                                        <h3>
                                            13
                                        </h3>
                                        <p>
                                            B.Schools in India</p>
                                    </li>
                                    <li>
                                        <h3>
                                            26
                                        </h3>
                                        <p>
                                            Schools &amp; Pre-Schools</p>
                                    </li>
                                    <li>
                                        <h3>
                                            300+
                                        </h3>
                                        <p>
                                            Programmes</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li>
                                        <h3>
                                            150+
                                        </h3>
                                        <p>
                                            Institution & Centers
                                        </p>
                                    </li>
                                    <li>
                                        <h3>
                                            25,000
                                        </h3>
                                        <p>
                                            Students on Scholarship</p>
                                    </li>
                                    <li>
                                        <h3>
                                            27,000
                                        </h3>
                                        <p>
                                            On-Campus Placement in Last year
                                        </p>
                                    </li>
                                    <li>
                                        <h3>
                                            1100
                                        </h3>
                                        <p>
                                            Patents by Faculty</p>
                                    </li>
                                    <li>
                                        <h3>
                                            2500
                                        </h3>
                                        <p>
                                            Case Studies
                                        </p>
                                    </li>
                                    <li>
                                        <h3>
                                            300
                                        </h3>
                                        <p>
                                            Government Funded Research Projects</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li>
                                        <h3>
                                            150
                                        </h3>
                                        <p>
                                            Global universities as Research partner
                                        </p>
                                    </li>
                                    <li>
                                        <h3>
                                            150+
                                        </h3>
                                        <p>
                                            Institution & Centers
                                        </p>
                                    </li>
                                    <li>
                                        <h3>
                                            300+
                                        </h3>
                                        <p>
                                            Labs in various disciplines.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-ranking-amity wow fadeInUp">
                    <div class="home-ranking-colm2">
                        <div class="owl-carousel owl-carousel2 owl-theme">
                            <div class="item">
                                <ul>
                                    <li><span>
                                            <img src="images/rank-in-profit-logo.png"></span></li>
                                    <li><span>
                                            <img src="images/top-placement-logo.png"></span></li>
                                    <li><span>
                                            <img src="images/given-scholar-logo.png"></span></li>
                                    <li><span>
                                            <img src="images/international-universities-logo.png"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--end Why Amity Section -->
    <!-- Student life Section -->
    <section class="home-sec3 mydiv">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="wow fadeInDown">Student <span>Life</span></h2>
                    <div class="student-home">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-4 pro">
                                <span><img src="images/home-stu-life-img1.png"></span>
                                <div class="stu-btn"><a href="infra-study.html">Study</a></div>
                            </div>

                            <div class="col-12 col-md-5 pro1">
                                <div class="stu-span1">
                                    <span><img src="images/home-stu-life-img2.png"></span>
                                    <div class="stu-btn"><a href="infra-auditorium.html">Learn</a></div>
                                </div>

                                <div class="stu-span">
                                    <span><img src="images/home-stu-life-img4.png"></span>
                                    <div class="stu-btn"><a href="hostel.html">Hostel</a></div>
                                </div>

                                <div class="stu-span2">
                                    <span><img src="images/home-stu-life-img5.jpg"></span>
                                    <div class="stu-btn"><a href="infra-play-sangathan.html">Play</a></div>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 pro2">
                                <div class="stu-span3">
                                    <span><img src="images/home-stu-life-img3.png"></span>
                                    <div class="stu-btn"><a href="infra-more-others.html">More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!--end Student life Section -->
    <!-- Research Spotlight Section -->
    <section class="home-sec4 mydiv">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="home-sec4-colm1">
                        <h2 class="wow fadeInDown">RESEARCH <span>SPOTLIGHT</span></h2>
                        <h3 class="wow fadeInUp"><b>1260</b> management case-studies covering domains like Strategy,
                            Marketing, Economics & Finance and others, bought across <b>99</b> countries.</h3>
                        <ul>
                            <li class="wow fadeInUp"><a href="research.html">International Research</a></li>
                            <li class="wow fadeInUp"><a href="research.html">Indian Research</a></li>
                            <li class="wow fadeInUp"><a href="research.html">Patent</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="home-sec4-colm2">
                        <ul>
                            <li class="wow fadeInDown">
                                <h3>15000</h3>
                                <p>Research Publications</p>
                            </li>
                            <li class="wow fadeInDown">
                                <h3>500</h3>
                                <p>Books in diverse area</p>
                            </li>
                            <li class="wow fadeInDown">
                                <h3>300</h3>
                                <p>Govt. Funded Research Projects </p>
                            </li>
                            <li class="wow fadeInDown">
                                <h3>100+</h3>
                                <p>Patents Filed by Brilliant Students </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="home-sec4-colm3">
                        <div class="owl-carousel owl-carousel4 owl-theme">
                            <div class="item">
                                <ul>
                                    <li class="wow fadeInDown"><span><img src="images/research.jpg"></span>
                                        <h4>Resonance Raman and Electronic...</h4>
                                    </li>
                                    <li class="wow fadeInUp"><span><img src="images/research2.jpg"></span>
                                        <h4>Hydrogen peroxide vapor sensor...</h4>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li class="wow fadeInDown"><span><img src="images/research3.jpg"></span>
                                        <h4>Resonance Raman and Electronic...</h4>
                                    </li>
                                    <li class="wow fadeInUp"><span><img src="images/research4.jpg"></span>
                                        <h4>Hydrogen peroxide vapor sensor...</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <abbr class="all-research-btn"><a href="research.html">View All Research <img src="images/arrow-icon.png"></a></abbr>
                </div>
            </div>
        </div>
    </section>
    <section class="home-sec5 mydiv">
        <div class="container">

            <h2 class="wow fadeInDown">
                Student <span>Work</span></h2>
            <abbr class="all-research-btn2 wow fadeInDown">
                <a href="studentworkf27c.html?student=student">View All
                    <img src="images/arrow-icon.png" class="view_arrow_img"></a></abbr>
            <div class="home-sec5-content">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-5 col-xl-5 pro3 wow fadeInLeft">




                        <div class="home-sec5-colm">
                            <span>
                                <img src="backoffice/Uploads/Event/1_student-achiv-img1.jpg" id="homestudentwork1_rptrUpper_ctl00_imgevent" /></span>
                            <h4>
                                The team from Amity School of Engineering and Technology named as &ldquo;MACH-
                                RELOADED&rdquo; registered for SUPRA SAE INDIA 2012 Formula-1 Type Race Car Event in
                                October, 2011 and in February
                            </h4>
                        </div>

                    </div>
                    <div class="col-12 col-md-8 col-lg-7 col-xl-7 pro4">
                        <div class="row">



                            <div id="homestudentwork1_rptrlower_ctl00_divstudent" class="col-12 col-md-6 col-lg-6 col-xl-6 pro3 wow fadeInDown">
                                <div id="homestudentwork1_rptrlower_ctl00_divcolumn" class="home-sec5-colm1">
                                    <span>
                                        <img src="backoffice/Uploads/Event/2_student2.jpg" id="homestudentwork1_rptrlower_ctl00_imgevent" /></span>
                                    <h4>
                                        Design and Fabrication of Pneumatic Car Bumper
                                    </h4>
                                </div>
                            </div>



                            <div id="homestudentwork1_rptrlower_ctl01_divstudent" class="col-12 col-md-6 col-lg-6 col-xl-6 pro4 wow fadeInDown">
                                <div id="homestudentwork1_rptrlower_ctl01_divcolumn" class="home-sec5-colm2">
                                    <span>
                                        <img src="backoffice/Uploads/Event/4_student1.jpg" id="homestudentwork1_rptrlower_ctl01_imgevent" /></span>
                                    <h4>
                                        Auto. Air Inflation System In Tyre With Pressure
                                    </h4>
                                </div>
                            </div>



                            <div id="homestudentwork1_rptrlower_ctl02_divstudent" class="col-12 col-md-6 col-lg-6 col-xl-6 pro3 margin-10 wow fadeInUp">
                                <div id="homestudentwork1_rptrlower_ctl02_divcolumn" class="home-sec5-colm1">
                                    <span>
                                        <img src="backoffice/Uploads/Event/3_home-student-achiv-img5.jpg" id="homestudentwork1_rptrlower_ctl02_imgevent" /></span>
                                    <h4>
                                        Flight time optimization of Quadcopter Using Solar Power Energy Source
                                    </h4>
                                </div>
                            </div>



                            <div id="homestudentwork1_rptrlower_ctl03_divstudent" class="col-12 col-md-6 col-lg-6 col-xl-6 pro4 margin-10 wow fadeInUp">
                                <div id="homestudentwork1_rptrlower_ctl03_divcolumn" class="home-sec5-colm2">
                                    <span>
                                        <img src="backoffice/Uploads/Event/5_home-student-achiv-img2.jpg" id="homestudentwork1_rptrlower_ctl03_imgevent" /></span>
                                    <h4>
                                        ANIDERS - Animal Intrusion Detection and Repellent System
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section class="home-sec6 mydiv">
        <div class="container">

            <ul class="nav nav-tabs responsive-tabs">
                <!--  <li class="active"><a href="#news"> News</a></li>-->
                <li class="active"><a href="#events">Events</a></li>
                <li><a href="#media-coverage">Media Coverage</a></li>
            </ul>
            <abbr class="all-achiv-btn">
                <a href="event-listc0ce.html?Events=Events">View More
                    <img src="images/arrow-icon.png"></a></abbr>
            <div class="tab-content myTabContent">
                <h4 class="collapsible_heading open">Events <span class="lnr lnr-chevron-down"></span></h4>
                <div class="tab-pane active" id="events">
                    <ul class="row">


                        <input type="hidden" name="homeevent1$rptEvents$ctl00$hfImage" id="homeevent1_rptEvents_ctl00_hfImage" value="11721_266366667_2189123801241716_5079797983458635981_n.html" />
                        <input type="hidden" name="homeevent1$rptEvents$ctl00$hfEventId" id="homeevent1_rptEvents_ctl00_hfEventId" value="11721" />
                        <li id="homeevent1_rptEvents_ctl00_divwithoutimg" class="col-12 col-md-4 col-lg-4 col-xl-4">


                            <a href="event-detail-normal2d6a.html?ot=1&amp;Event=11721&amp;Events=Events">
                                <div class="happening-colm-color" style="background-color:#;">
                                    <div class="happ-content">
                                        <span>Events</span>
                                        <h3>Role of NSS Volunteers in Nation Building</h3>
                                    </div>
                                </div>
                            </a>
                        </li>




                        <input type="hidden" name="homeevent1$rptEvents$ctl01$hfImage" id="homeevent1_rptEvents_ctl01_hfImage" value="11662_260444849_2171101663043930_4054563017674972022_n.html" />
                        <input type="hidden" name="homeevent1$rptEvents$ctl01$hfEventId" id="homeevent1_rptEvents_ctl01_hfEventId" value="11662" />
                        <li id="homeevent1_rptEvents_ctl01_divwithoutimg" class="col-12 col-md-4 col-lg-4 col-xl-4">


                            <a href="event-detail-normal65b9.html?ot=1&amp;Event=11662&amp;Events=Events">
                                <div class="happening-colm-color" style="background-color:#;">
                                    <div class="happ-content">
                                        <span>Events</span>
                                        <h3>IIC Calender Activity "Pitching Event for Ideas Scouted & linkage with
                                            Innovation Ambassadors for ...</p>
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </li>




                        <input type="hidden" name="homeevent1$rptEvents$ctl02$hfImage" id="homeevent1_rptEvents_ctl02_hfImage" value="11661_258824051_2170199136467516_2262287588459188356_n.html" />
                        <input type="hidden" name="homeevent1$rptEvents$ctl02$hfEventId" id="homeevent1_rptEvents_ctl02_hfEventId" value="11661" />
                        <li id="homeevent1_rptEvents_ctl02_divwithoutimg" class="col-12 col-md-4 col-lg-4 col-xl-4">


                            <a href="event-detail-normaldf37.html?ot=1&amp;Event=11661&amp;Events=Events">
                                <div class="happening-colm-color" style="background-color:#;">
                                    <div class="happ-content">
                                        <span>Events</span>
                                        <h3>Innovations and Research with Machine Learning</h3>
                                    </div>
                                </div>
                            </a>
                        </li>




                        <input type="hidden" name="homeevent1$rptEvents$ctl03$hfImage" id="homeevent1_rptEvents_ctl03_hfImage" value="11665_261447098_2176883079132455_5114143528537815031_n.html" />
                        <input type="hidden" name="homeevent1$rptEvents$ctl03$hfEventId" id="homeevent1_rptEvents_ctl03_hfEventId" value="11665" />
                        <li id="homeevent1_rptEvents_ctl03_divwithoutimg" class="col-12 col-md-4 col-lg-4 col-xl-4">


                            <a href="event-detail-normalc31d.html?ot=1&amp;Event=11665&amp;Events=Events">
                                <div class="happening-colm-color" style="background-color:#;">
                                    <div class="happ-content">
                                        <span>Events</span>
                                        <h3>Round Table Discussion on Hand Hygiene organised at #AmityUniversityRaipur
                                            in collaboration with ...</p>
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </li>




                        <input type="hidden" name="homeevent1$rptEvents$ctl04$hfImage" id="homeevent1_rptEvents_ctl04_hfImage" value="11660_258170700_2164588150361948_7154654576420297306_n.html" />
                        <input type="hidden" name="homeevent1$rptEvents$ctl04$hfEventId" id="homeevent1_rptEvents_ctl04_hfEventId" value="11660" />
                        <li id="homeevent1_rptEvents_ctl04_divwithoutimg" class="col-12 col-md-4 col-lg-4 col-xl-4">


                            <a href="event-detail-normala7f9.html?ot=1&amp;Event=11660&amp;Events=Events">
                                <div class="happening-colm-color" style="background-color:#;">
                                    <div class="happ-content">
                                        <span>Events</span>
                                        <h3>Visit to Sparsh ek Koshish welfare foundation </h3>
                                    </div>
                                </div>
                            </a>
                        </li>




                        <input type="hidden" name="homeevent1$rptEvents$ctl05$hfImage" id="homeevent1_rptEvents_ctl05_hfImage" value="11654_248411158_2149272175226879_4975506977447386671_n.html" />
                        <input type="hidden" name="homeevent1$rptEvents$ctl05$hfEventId" id="homeevent1_rptEvents_ctl05_hfEventId" value="11654" />
                        <li id="homeevent1_rptEvents_ctl05_divwithoutimg" class="col-12 col-md-4 col-lg-4 col-xl-4">


                            <a href="event-detail-normal433b.html?ot=1&amp;Event=11654&amp;Events=Events">
                                <div class="happening-colm-color" style="background-color:#;">
                                    <div class="happ-content">
                                        <span>Events</span>
                                        <h3>General Health Check-Up</h3>
                                    </div>
                                </div>
                            </a>
                        </li>




                    </ul>
                </div>
                <h4 class="collapsible_heading">Media Coverage <span class="lnr lnr-chevron-down"></span></h4>
                <div class="tab-pane" id="media-coverage">
                    <ul class="row">

                        <li class="col-12 col-md-4 col-lg-4 col-xl-4"><a href="media-coverage42b9.html?Media=Media">
                                <div id="homeevent1_repmedia_ctl00_divtop" class="happening-colm-color" style="background-color: #df9427;">
                                    <div class="happ-content">
                                        <ol>
                                            <li>
                                                11 Feb 2022 </li>
                                            <li>
                                                Financial Express</li>
                                        </ol>
                                        <h3>
                                            Are you ready to ride out a financial crisis?- Article by Faculty of ABS
                                        </h3>
                                    </div>
                                </div>
                            </a></li>

                        <li class="col-12 col-md-4 col-lg-4 col-xl-4"><a href="media-coverage42b9.html?Media=Media">
                                <div id="homeevent1_repmedia_ctl01_divtop" class="happening-colm-color" style="background-color: #9f1f30;">
                                    <div class="happ-content">
                                        <ol>
                                            <li>
                                                04 Feb 2022 </li>
                                            <li>
                                                Amar Ujala</li>
                                        </ol>
                                        <h3>
                                            Amity Celebrates World Wetland Day</h3>
                                    </div>
                                </div>
                            </a></li>

                        <li class="col-12 col-md-4 col-lg-4 col-xl-4"><a href="media-coverage42b9.html?Media=Media">
                                <div id="homeevent1_repmedia_ctl02_divtop" class="happening-colm-color" style="background-color: #006690;">
                                    <div class="happ-content">
                                        <ol>
                                            <li>
                                                04 Feb 2022 </li>
                                            <li>
                                                Dainik Jagran</li>
                                        </ol>
                                        <h3>
                                            Amity Celebrates World Wetland Day</h3>
                                    </div>
                                </div>
                            </a></li>

                        <li class="col-12 col-md-4 col-lg-4 col-xl-4"><a href="media-coverage42b9.html?Media=Media">
                                <div id="homeevent1_repmedia_ctl03_divtop" class="happening-colm-color" style="background-color: #006690;">
                                    <div class="happ-content">
                                        <ol>
                                            <li>
                                                04 Feb 2022 </li>
                                            <li>
                                                Telegraph</li>
                                        </ol>
                                        <h3>
                                            Amity University Online joins hands with TCS iON for industry ready courses
                                        </h3>
                                    </div>
                                </div>
                            </a></li>

                        <li class="col-12 col-md-4 col-lg-4 col-xl-4"><a href="media-coverage42b9.html?Media=Media">
                                <div id="homeevent1_repmedia_ctl04_divtop" class="happening-colm-color">
                                    <div class="happ-content">
                                        <ol>
                                            <li>
                                                02 Feb 2022 </li>
                                            <li>
                                                Telegraph</li>
                                        </ol>
                                        <h3>
                                            Amity University Online joins hands with TCS iON for industry ready courses
                                        </h3>
                                    </div>
                                </div>
                            </a></li>

                        <li class="col-12 col-md-4 col-lg-4 col-xl-4"><a href="media-coverage42b9.html?Media=Media">
                                <div id="homeevent1_repmedia_ctl05_divtop" class="happening-colm-color" style="background-color: #df9427;">
                                    <div class="happ-content">
                                        <ol>
                                            <li>
                                                02 Feb 2022 </li>
                                            <li>
                                                Shiksha News</li>
                                        </ol>
                                        <h3>
                                            Amity University Online joins hands with TCS iON for industry ready courses
                                        </h3>
                                    </div>
                                </div>
                            </a></li>

                    </ul>
                </div>
            </div>


            &nbsp;



        </div>


    </section>
    <!--end Media Work -->
    <!-- Testimonials Section -->
    <section class="testimonials_section wow fadeInUp mydiv">
        <div class="container-fluid">

            <ul class="nav nav-tabs responsive-tabs">
                <li class="active"><a href=".html">Students</a></li>
                <li><a href="-2.html">Parents</a></li>
                <li><a href="-3.html">Alumni</a></li>
            </ul>
            <div class="tab-content">
                <h4 class="collapsible_heading open">Students <span class="lnr lnr-chevron-down"></span></h4>
                <div class="tab-pane active students">
                    <div class="owl-carousel owl-carousel6 owl-theme">

                        <div class="item">
                            <a href="testimonials.html">
                                <div class="testimonials-content row">
                                    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                        <span>
                                            <img src='backoffice/Uploads/testimonials/111aarohi-agarwal.jpg' width="358" height="334" alt="Ms. Aarohi Agarwal" /></span>
                                    </div>
                                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                                        <h3>
                                            "Life in Amity has been a breathtaking experience. As a hosteller, I would
                                            say it is actually a ...</h3>
                                        <h4>
                                            Ms. Aarohi Agarwal</h4>
                                        <p>BFA with specialization in Painting<br />
                                            Batch: 2010-14</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="testimonials.html">
                                <div class="testimonials-content row">
                                    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                        <span>
                                            <img src='backoffice/Uploads/testimonials/444nandika-mehrotra.jpg' width="358" height="334" alt="Ms. Nandika Mehrotra" /></span>
                                    </div>
                                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                                        <h3>
                                            Amity has been a completely enriching experience. I have acquired lot of
                                            confidence through ...</h3>
                                        <h4>
                                            Ms. Nandika Mehrotra</h4>
                                        <p>BSc.- Fashion Design<br />
                                            Batch: 2011-14</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <h4 class="collapsible_heading">Parents <span class="lnr lnr-chevron-down"></span></h4>
                <div class="tab-pane parents">
                    <div class="owl-carousel owl-carousel7 owl-theme">

                        <div class="item">
                            <a href="parents-testimonials.html">
                                <div class="testimonials-content row">
                                    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                        <span>
                                            <img src='backoffice/Uploads/testimonials/1414pradeep-kumar-prt.jpg' width="358" height="334" alt="" /></span>
                                    </div>
                                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                                        <h3>
                                            Both of our children chose to attend Amity University, NOIDA over other
                                            universities. As parents initially we ... </h3>
                                        <h4>
                                            Mr. Pradeep Kumar</h4>
                                        <p>Parent of Natasha Kumar<br />
                                            B.Tech. Biotechnology (2008-2012)</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="parents-testimonials.html">
                                <div class="testimonials-content row">
                                    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                        <span>
                                            <img src='backoffice/Uploads/testimonials/151515gangopadhyay.jpg' width="358" height="334" alt="" /></span>
                                    </div>
                                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                                        <h3>
                                            Amity University with its impressive infrastructure, qualified ... </h3>
                                        <h4>
                                            Group Captain Partho Gangopadhyay VSM</h4>
                                        <p>Parent of Soutik Gangoli <br />
                                            B.Tech(Biotechnology)-2013-2017</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <h4 class="collapsible_heading">Alumni <span class="lnr lnr-chevron-down"></span></h4>
                <div class="tab-pane alumni">
                    <div class="owl-carousel owl-carousel8 owl-theme">

                        <div class="item">
                            <a href="alumni-testimonials.html">
                                <div class="testimonials-content row">
                                    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                        <span>
                                            <img src='backoffice/Uploads/testimonials/1717natasha-testi.jpg' width="358" height="334" alt="" /></span>
                                    </div>
                                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                                        <h3>
                                            The 'Amity Experience' has been unique and enriching...</h3>
                                        <h4>
                                            Natasha Kumar</h4>
                                        <p>
                                        <p>B.Tech. Biotechnology (2008-2012)<br />
                                            Current Profession/ Employer- Pursuing Ph.D in Biomedical Engineering at
                                            Nanyang Technological University, Singapore</p>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="alumni-testimonials.html">
                                <div class="testimonials-content row">
                                    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                        <span>
                                            <img src='backoffice/Uploads/testimonials/191919Timg_alumni-testimonial-b.jpg' width="358" height="334" alt="" /></span>
                                    </div>
                                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                                        <h3>
                                            Two years at Amity Business School were undoubtedly one of the best years of
                                            my life...</h3>
                                        <h4>
                                            Ashim Das Mathur</h4>
                                        <p>
                                        <p>Head of Marketing,<br />
                                            Dolby Laboratories, India</p>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="item">
                            <a href="alumni-testimonials.html">
                                <div class="testimonials-content row">
                                    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                                        <span>
                                            <img src='backoffice/Uploads/testimonials/160DSC_0105.png' width="358" height="334" alt="" /></span>
                                    </div>
                                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                                        <h3>
                                            My alma mater Amity University has played a very important role in helping
                                            me in gaining attitude to Succeed and becoming an IAS officer.
                                        </h3>
                                        <h4>
                                            Mr. Prashant Nagar</h4>
                                        <p>
                                        <p>B.Tech. (Mechanical &amp; Automation Engineering) (2010-2014)</p>
                                        <p>Selected in UPSC - 2018</p>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section>
    <!--end Testimonials Section -->
    <!-- Footer -->

    @include('include.search')

    @include('include.subscribe')
    @include('include.open')
    @endslot

</x-layout>