<x-layout1>
    @slot('body')

    <style>
        .course_text_box:before,
        .course_text_box:after {
            width: auto;
        }

        .programe_tabbing .nav-tabs li {
            box-shadow: 3px 3px 4px 0px #e3ae21;
            border-left: 2px solid #e3ae21;
            border-right: 2px solid #e3ae21;
            border-top: 2px solid #e3ae21;
            padding-top: 10px;
        }

        .programe_tabbing .nav-tabs li span {
            font-size: 13px;
            font-weight: 600;
            color: #555555 !important;
        }

        .programe_tabbing .nav-tabs li {
            padding-left: 0px;
        }

        .programe_tabbing .nav-tabs li:first-child {
            padding-left: 0px;
        }

        .programe_tabbing .nav-tabs li {
            width: 12%;
        }

        .programe_tabbing .nav-tabs li.active span {
            padding-bottom: 10px;
        }

        .course_info {
            margin: 20px 0 0;
        }

        .programe_tabbing {
            width: 70%;
        }

        .programe_tabbing .nav-tabs li {
            width: 15%;
        }

        .programe_tabbing .responsive-tabs-container {
            padding-top: 20px;
        }

        .aside-section ul li {
            color: #fff;
            font-weight: 600;
            font-size: 14px;
        }

        .aside-bullet li:before {
            top: 5px;
            position: absolute;
            font-family: "Font Awesome 5 Free";
            content: "\f101";
            display: inline-block;
            padding-right: 3px;
            vertical-align: middle;
            font-weight: 900;
        }

        .aside-bullet li {
            padding: 5px 20px;
        }

        .aside-section-headings::after,
        .aside-section-headings::before {
            background: linear-gradient(90deg, rgba(255, 82, 65, 1) 0%, rgba(199, 0, 19, 1) 100%) !important;
            border-radius: 8px;
            bottom: 1px;
            content: "";
            height: 2px;
            left: 0;
            position: absolute;
            width: 64px;
        }

        .aside-section-headings {
            position: relative;
        }

        .bg-xs-brown_white {
            background: #6c695d;
        }

        .bg-xs-dark_gray {
            background: #e3b121;
        }
    </style>
    <section class="inner-page">
        <div class="inner-hadding">
            <div class="container">
                <div class="top-menu-sec" style="display:none">
                    <h4>Browse Course</h4>
                    <ul>
                        <li class="active"><a href="program-detail2.html">Under Graduate</a></li>
                        <li><a href="#">Post Graduate</a></li>
                        <li><a href="#">Other Couser</a></li>
                    </ul>
                </div>
                <h2 class="pb-1">B.Sc. (Hons) - Agriculture</h2>
            </div>
        </div>

        <section class="inner_section course_pages programmes_detail">
            <!-- <div class="container">
                <div class="program_menu">
                    <h3>Program Code <span>101191</span></h3>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <div class="row">

                            <div class="col-lg-6">

                            </div>
                        </div>
                    </div>
                </div>

            </div> -->
            <div class="container-fluid course_info">
                <div class="container">


                    <div class="row course_text_box">

                        <div class="col-lg-4 bg-xs-dark_gray">
                            <p><strong>Course Fee</strong>
                                PCB / PCM / Agriculture ...<span id="ctl00_ContentPlaceHolder1_divonepop"><a data-toggle="modal" data-target="#IET22" href="javascript:void(0);"><i class="lnr lnr-plus-circle" aria-hidden="true"></i></a></span></p>
                        </div>

                        <div class="col-lg-4 bg-xs-brown_white">
                            <p><strong>Course Offered</strong>
                                4 Years</p>
                        </div>

                        <div class="col-lg-4 bg-xs-dark_gray">
                            <p><strong id="ctl00_ContentPlaceHolder1_pselection">Apply Online</strong>


                                For the time being Selection Process is ...<span id="ctl00_ContentPlaceHolder1_divsecpop"><a data-toggle="modal" data-target="#sel" href="javascript:void(0);"><i class="lnr lnr-plus-circle" aria-hidden="true"></i></a></span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>



            <!-- <div class="container">
			<div class="row">
				
					<div class="col-md-12 bg_offwhite feebox">
						<ul>
						 <li class="row"><span class="col-md-8"><strong>Program Fee</strong></span>
						 <span class="col-md-4">(Rs. in Lacs)</span></li>
                         <li id="ctl00_ContentPlaceHolder1_trnonspon" class="row"><span class="col-md-8">1st Year Non Sponsored Semester</span>
                          <span class="col-md-4">0.50</span></li>
                        <li id="ctl00_ContentPlaceHolder1_trspon" class="row"><span class="col-md-8">1st Year Sponsored Semester Fee</span>
                            <span class="col-md-4">
                                0.75</span></li>
                        
                        
						</ul>
					</div>
			</div>
		</div> -->
            <!-- <div class="course_applybtn ">
                <a id="ctl00_ContentPlaceHolder1_linkbtnapply" class="btn btn-white" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$linkbtnapply','')"><span>Apply Now</span></a>
            </div> -->

            <section class="container">
                <section class="row">

                    <section id="ctl00_ContentPlaceHolder1_CourseStuct" class="programe_tabbing">
                        <div class="container-fluid">

                            <!-- <h2 class="">Course Structure</h2> -->
                            <div class="responsive-tabs-container accordion-xs accordion-sm">
                                <ul class="nav nav-tabs responsive-tabs">


                                    <li id="ctl00_ContentPlaceHolder1_fyear" class="active"><a href="#recognitions1"><span>Course Fee</span></a></li>
                                    <li id="ctl00_ContentPlaceHolder1_syear"><a href="#recognitions2"><span>2nd Year</span></a></li>
                                    <li id="ctl00_ContentPlaceHolder1_tyear"><a href="#recognitions3"><span>3rd Year</span></a></li>
                                    <li id="ctl00_ContentPlaceHolder1_foyear"><a href="#recognitions4"><span>4th Year</span></a></li>


                                </ul>
                                <div class="tab-content">
                                    <h4 id="ctl00_ContentPlaceHolder1_headyear1" class="collapsible_heading open">1st Year <span class="lnr lnr-chevron-down"></span></h4>
                                    <a href="#recognitions1" class="accordion-link first"><span>1st Year</span></a>
                                    <div class="tab-pane active selected" id="recognitions1">
                                        <div class="row">
                                            <div id="ctl00_ContentPlaceHolder1_devsem1" class="col-md-12">
                                                <h3>Semester 1</h3>

                                                <ul class="bullet_list">

                                                    <li>
                                                        Elements of Agronomy and Agricultural Meteorology [Core Courses]</li>


                                                    <li>
                                                        Fundamentals of Agribusiness Management [Core Courses]</li>


                                                    <li>
                                                        Introductory Agriculture [Core Courses]</li>


                                                    <li>
                                                        Basic Biotechnology [Allied Courses]</li>


                                                    <li>
                                                        Environmental Studies [Allied Courses]</li>


                                                    <li>
                                                        Introduction to Biology [Allied Courses]</li>


                                                    <li>
                                                        Mathematics For Life Sciences-I [Allied Courses]</li>


                                                    <li>
                                                        Communication Skills - I [Communication Skills]</li>


                                                    <li>
                                                        Foreign Business Language</li>


                                                    <li>
                                                        Open Elective Courses</li>


                                                    <li>
                                                        Outdoor Activity Based Courses</li>


                                                </ul>
                                            </div>


                                        </div>
                                    </div>
                                    <h4 id="ctl00_ContentPlaceHolder1_headyear2" class="collapsible_heading">2nd Year <span class="lnr lnr-chevron-down"></span></h4>
                                    <a href="#recognitions2" class="accordion-link"><span>2nd Year</span></a>
                                    <div class="tab-pane" id="recognitions2">
                                        <div class="row">
                                            <div id="ctl00_ContentPlaceHolder1_devsem3" class="col-md-12">
                                                <h3>Semester 3</h3>

                                                <ul class="bullet_list">

                                                    <li>
                                                        Seminar [Non Teaching Credit Courses]</li>

                                                    <li>
                                                        Field Crop Production - I [Core Courses]</li>

                                                    <li>
                                                        Fundamentals of Soil Microbiology [Core Courses]</li>

                                                    <li>
                                                        Introductory Entomology [Core Courses]</li>

                                                    <li>
                                                        Soil Fertility Management [Core Courses]</li>

                                                    <li>
                                                        Principles of Food Processing [Allied Courses]</li>

                                                    <li>
                                                        Production Technology of Fruit Crops [Allied Courses]</li>

                                                    <li>
                                                        Individual Excellence &amp; Social Dynamics [Behavioural Science]</li>

                                                    <li>
                                                        Foreign Business Language</li>

                                                    <li>
                                                        Open Elective Courses</li>

                                                    <li>
                                                        Outdoor Activity Based Courses</li>

                                                </ul>
                                            </div>



                                        </div>
                                    </div>
                                    <h4 id="ctl00_ContentPlaceHolder1_headyear3" class="collapsible_heading">3rd Year <span class="lnr lnr-chevron-down"></span></h4>
                                    <a href="#recognitions3" class="accordion-link"><span>3rd Year</span></a>
                                    <div class="tab-pane" id="recognitions3">
                                        <div class="row">
                                            <div id="ctl00_ContentPlaceHolder1_devsem5" class="col-md-12">
                                                <h3>Semester 5</h3>

                                                <ul class="bullet_list">

                                                    <li>
                                                        Agro Forestry Systems [Specialisation Elective Courses]</li>

                                                    <li>
                                                        Infestation Control and Storage of Food Grains [Specialisation Elective Courses]</li>

                                                    <li>
                                                        Natural Resources Management [Specialisation Elective Courses]</li>

                                                    <li>
                                                        Summer Internship [Non Teaching Credit Courses]</li>

                                                    <li>
                                                        Crop Improvement Principles and Practices [Core Courses]</li>

                                                    <li>
                                                        Integrated Farming System and Sustainable Agriculture [Core Courses]</li>

                                                    <li>
                                                        Integrated Pest Management [Core Courses]</li>

                                                    <li>
                                                        Post Harvest Technology and Value Addition [Core Courses]</li>

                                                    <li>
                                                        Production Economics and Farm Management [Core Courses]</li>

                                                    <li>
                                                        Professional Ethics and Social Responsibility [Professional Ethics]</li>

                                                    <li>
                                                        Foreign Business Language</li>

                                                    <li>
                                                        Open Elective Courses</li>

                                                    <li>
                                                        Outdoor Activity Based Courses</li>

                                                </ul>
                                            </div>


                                        </div>
                                    </div>
                                    <h4 id="ctl00_ContentPlaceHolder1_headyear4" class="collapsible_heading">4th Year <span class="lnr lnr-chevron-down"></span></h4>
                                    <a href="#recognitions4" class="accordion-link last"><span>4th Year</span></a>
                                    <div class="tab-pane" id="recognitions4">
                                        <div class="row">
                                            <div id="ctl00_ContentPlaceHolder1_devsem7" class="col-md-12">
                                                <h3>Semester 7</h3>

                                                <ul class="bullet_list">

                                                    <li>
                                                        In-House Practical Training [Non Teaching Credit Courses]</li>

                                                    <li>
                                                        Precision Farming [Employability &amp; Skill Enhancement Courses]</li>

                                                    <li>
                                                        Crop Modeling [Core Courses]</li>

                                                    <li>
                                                        Food Retail and Supply Chain Management [Core Courses]</li>

                                                    <li>
                                                        Irrigation Systems [Core Courses]</li>

                                                    <li>
                                                        Mechanization of Small Farms [Core Courses]</li>

                                                    <li>
                                                        Research Methodology [Core Courses]</li>

                                                    <li>
                                                        Warehousing Management [Core Courses]</li>

                                                    <li>
                                                        Professional Ethics and Social Responsibility [Professional Ethics]</li>

                                                    <li>
                                                        Foreign Business Language</li>

                                                    <li>
                                                        Open Elective Courses</li>

                                                    <li>
                                                        Outdoor Activity Based Courses</li>

                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="tab-pane" id="recognitions5">
                                        <div class="row">


                                        </div>
                                    </div>





                                </div>
                            </div>


                        </div>
                    </section>

                    <section style="width:30%" class="aside-section">
                        <div class="bg-xs-dark_gray m-3 p-3">
                            <h3 class="text-center text-white">ALL COURSES</h3>
                            <!-- <div class="aside-section-headings"></div> -->

                            <ul class="bullet_list aside-bullet">

                                <li>
                                    Course 1</li>
                                <li>
                                    course 2</li>

                            </ul>
                        </div>
                    </section>



                </section>

            </section>

            <div class="reco_box">

                <div class="modal fade" id="IET22" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <div class="modal-header2">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="pl-5 pt-4">Eligibility</h4>
                            </div>

                            <div class="modal-body text eleg">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-2">
                                        <p></p>
                                        <p>Course Fee</p>
                                        <p>Aggregate percentage will be calculated on the basis of marks scored in English and three academic subjects (excluding second language, Physical Education, Fine Arts, Performing Arts or any other Vocational /Non-Written subjects).<strong> Student should have passed all the subjects of class XII from a recognized board.</strong></p>
                                        <p>&nbsp;</p>

                                        <p></p>

                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>




            <div class="reco_box">

                <div class="modal fade" id="sel" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <div class="modal-header2">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <h4 class="pl-5 pt-4">Apply Online</h4>
                            </div>

                            <div class="modal-body text eleg">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-2">
                                        <p>For the time being Selection Process is based on video responses to the questions posted through the VIDEO LINK available on Admission Microsite.
                                        </p>

                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </section>

        @endslot
</x-layout1>