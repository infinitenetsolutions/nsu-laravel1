<style>
        .menu_nav ul li a:before {
                font-family: "Font Awesome 5 Free";
                content: "\f518";
                display: inline-block;
                padding-right: 3px;
                vertical-align: middle;
                font-weight: 900;
                color: #fff;
        }
</style>

<!-- modal -->
<div class="row no-gutters stalwarts_box2">
        <div class="col-md-12 col-md-12 col-lg-12 col-xl-12">


                <div class="reco_box">
                        <div class="modal fade show" id="IET11" role="dialog" style="display: none; padding-right: 17px;z-index: 9999999;">
                                <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                                <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        <h3>Addmission Online / Offline </h3>
                                                </div>

                                                <div class="modal-body text">
                                                        <div class="row">
                                                                <div class="col-md-6">
                                                                        <h4>Steps for Offline Admission</h4>
                                                                        <ul class="bullet_list pt-2 pl-5 pr-5">
                                                                                <li class="pb-3">More than one payment is rendered for the same application number.</li>

                                                                        </ul>


                                                                </div>
                                                                <div class="col-md-6">
                                                                        <h4>Steps for Online Admission</h4>
                                                                        <ul class="bullet_list pt-2 pl-5 pr-5">
                                                                                <li class="pb-3">More than one payment is rendered for the same application number.</li>

                                                                        </ul>


                                                                </div>


                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>


                <!--<div style='display:none'>
    <div id='inline_content' class="test-content">
     <div class="test-content-main2">
    <h3>Application Form Fee Refund Policy </h3> 
      <h4>In most cases, the application fee is nonrefundable. However, exceptions may be made based on the following circumstances:</h4>
     
      <ul class="bullet_list">
      <li>More than one payment is rendered for the same application number.</li>
      <li>A candidate paid the fee online but did not get the application form due to connection failure and the university is not able provide softcopy of the application form.</li>
       </ul>
       <p class="pt-4"><strong>Note:</strong> For online payments, it is important for candidates to note the transaction number for future reference and request for any type of Refund, for whatsoever reason, will be at the sole discretion of the University.</p>
       
        </div>
    </div>
    </div>-->


        </div>
        <div class="col-md-12 col-md-12 col-lg-12 col-xl-12">

                <div class="reco_box">

                        <div class="modal fade" id="IET" role="dialog" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                                <div id="ctl00_ContentPlaceHolder1_UpdatePanel2">

                                                        <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                <h3>Online Form - Report a problem </h3>
                                                        </div>

                                                        <div class="modal-body text">
                                                                <div class="row">
                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                                                <div class="form_box">
                                                                                        <div class="form-group">
                                                                                                <input name="ctl00$ContentPlaceHolder1$Mob" type="text" maxlength="12" id="ctl00_ContentPlaceHolder1_Mob" class="form-control" placeholder="Mobile">
                                                                                                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator1" style="color:Red;display:none;">Required</span>
                                                                                                <span id="ctl00_ContentPlaceHolder1_RegularExpressionValidator1" style="color:Red;display:none;">Only numeric</span>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                                <input name="ctl00$ContentPlaceHolder1$Email" type="text" id="ctl00_ContentPlaceHolder1_Email" class="form-control" placeholder="Email">
                                                                                                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator3" style="color:Red;display:none;">Required</span>
                                                                                                <span id="ctl00_ContentPlaceHolder1_revEmailID" style="color:Red;display:none;">Enter valid email.</span>
                                                                                        </div>
                                                                                        <div class="form-group">


                                                                                                <input name="ctl00$ContentPlaceHolder1$captcha" type="text" maxlength="20" id="ctl00_ContentPlaceHolder1_captcha" class="form-control" placeholder="Captcha">
                                                                                                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator4" style="color:Red;display:none;">Required</span>

                                                                                        </div>
                                                                                        <div class="form-group"> <img src="Handler.ashx" id="imgCaptchanew"> <a href="javascript:void(0)" onclick="javascript:RefreshCaptchanew();">
                                                                                                        <img src="/images/refresh.png" alt=""></a> </div>
                                                                                </div>

                                                                        </div>
                                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                                                                <div class="form_box">
                                                                                        <div class="form-group">
                                                                                                <textarea name="ctl00$ContentPlaceHolder1$Prob_details" rows="3" cols="20" id="ctl00_ContentPlaceHolder1_Prob_details" class="form-control" placeholder="Problem" onkeyup="CheckLimit(this,250,'lblCountLimit');"></textarea>
                                                                                                <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator2" style="color:Red;display:none;">Required</span>

                                                                                        </div>
                                                                                        <p>characters remaining!<br>
                                                                                                You have <span id="ctl00_ContentPlaceHolder1_lblCountLimit">250</span> characters remaining!</p>

                                                                                        <div class="form-group"> </div>
                                                                                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnsubmit" value="submit" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnsubmit&quot;, &quot;&quot;, true, &quot;down&quot;, &quot;&quot;, false, false))" id="ctl00_ContentPlaceHolder1_btnsubmit">

                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>
<!-- //modal -->
<!-- Top Level Navigation -->
<div class="top_menubar">
        <ul class="container">
                <li class="admission_links"><a href="javascript:void(0);">Admissions <span class="lnr lnr-chevron-down"></span></a>
                        <div class="top_megamenu admission_box">
                                <div class="container admission_menu">

                                        <a class="close_btn2" href="javascript:void(0);"></a>
                                        <div class="row">
                                                <div class="mega_menu_left col-lg-3">
                                                        <span class="mega_menu_brand">

                                                                <a href="index-2.html" class="site-logo"><img src="images/logo-Netaji.png" alt="Netaji University" /></a>
                                                        </span>
                                                        <ul class="mega_menu_nav_admission">
                                                                <li><a data-toggle="modal" data-target="#IET11" href="javascript:void(0);">How To Apply</a></li>

                                                                <li><a href="career">Career Test</a></li>
                                                                <!-- <li><a href="admissions-scholarship.html">Netaji Scholarship</a></li> -->

                                                                <li><a href="">Education Loan</a></li>

                                                                <li><a href="faq">FAQs</a></li>
                                                                <!--	<li><a href="pdf/FAQs_Selection_Process_Noida_Campus.pdf" target="_blank">FAQs - New Selection Process (Noida Campus)</a></li>-->
                                                                <!-- <li><a href="<? ?>" target="_blank">Admission Prospectus
                                            Noida - 2021</a></li> -->
                                                                <!--  <li><a href="pdf/admission_prospectus_2020.pdf" target="_blank">Admission Prospectus 2020 </a></li>-->


                                                                <!--	<li><a href="student-section.aspx">Downloads</a></li>
					<li><a href="javascript:void(0);" >Recent Updates</a></li>-->
                                                        </ul>
                                                        <!--<a class="apply_btn" href="http://www.Netaji.edu/apply-now.aspx" target="_blank">Apply Now 2019</a>-->

                                                </div>
                                                <div class="mega_menu col-lg-9">
                                                        <div class="last_date">
                                                                <div class="row">
                                                                        <div class="col-lg-6 side_border">
                                                                                <h5>Campus Helpline Numbers</h5>
                                                                                <div class="last_date2">
                                                                                        <ul>
                                                                                                <li>
                                                                                                        <h6>Address</h6>
                                                                                                        <span>Pokhari,Near Bhilai Pahadi, Jamshedpur,Jharkhand</span>
                                                                                                </li>
                                                                                                <li>
                                                                                                        <h6>Jamshedpur City Office</h6>
                                                                                                        <span>Shatabdi Tower, 4th Floor, Sakchi, Jamshedpur, Jharkhand</span>
                                                                                                </li>
                                                                                                <li>
                                                                                                        <h6>Email</h6>
                                                                                                        <span>info@nsuniv.ac.in</span>
                                                                                                </li>
                                                                                                <li>
                                                                                                        <h6>Phone</h6>
                                                                                                        <span>0657-223-3022, 9386-817-857</span>
                                                                                                </li>
                                                                                        </ul>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-lg-6 apply_at">

                                                                                <h4>Route Map For NSU </h4>
                                                                                <div class="last_date2 last_date22">
                                                                                        <div class="col-12 col-sm-4 colfull">
                                                                                                <a href="pdf/route-map.pdf" target="_blank">
                                                                                                        <img src="images/route-map.jpg" class="map-route" style="min-width: 100%!important;"></a>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </li>

                <!-- <li class="universe_links"><a href="javascript:void(0);">Netaji Universe <span class="lnr lnr-chevron-down"></span></a>
                        <div class="top_megamenu universe_box">
                                <div class="container menu_items">
                                        <a class="close_btn2" href="javascript:void(0);"></a>
                                        <div class="row">
                                                <div class="mega_menu_left col-lg-3">
                                                        <span class="mega_menu_brand">
                                                                <a href="index-2.html" class="site-logo"><img src="images/logo-Netaji.png" alt="Netaji University" /></a>
                                                        </span>
                                                </div>
                                                <div class="mega_menu col-lg-9">



                                                        <div class="row tab-panel active">
                                                                <div class="col">
                                                                        <ul class="mega_menu_nav">
                                                                                <li><b>Higher Education</b></li>
                                                                                <li><strong>India</strong></li>
                                                                                <li><a href="index.html">Netaji University Noida</a></li>
                                                                                <li><a target="_blank" href="http://Netaji.edu/lucknow">Netaji University
                                                                                                Lucknow</a></li>
                                                                                <li><a target="_blank" href="http://Netaji.edu/jaipur">Netaji University
                                                                                                Jaipur</a></li>
                                                                                <li><a target="_blank" href="http://Netaji.edu/gurgaon">Netaji University
                                                                                                Gurgaon</a></li>
                                                                                <li><a target="_blank" href="http://Netaji.edu/Gwalior">Netaji University
                                                                                                Gwalior</a></li>
                                                                                <li><a target="_blank" href="http://Netaji.edu/mumbai">Netaji University
                                                                                                Mumbai</a></li>
                                                                                <li><a target="_blank" href="http://Netaji.edu/greaternoida/">Netaji Greater
                                                                                                Noida</a></li>
                                                                                <li><a target="_blank" href="http://Netaji.edu/raipur/">Netaji University
                                                                                                Raipur</a></li>
                                                                                <li><a target="_blank" href="http://Netaji.edu/kolkata/">Netaji University
                                                                                                Kolkata</a></li>
                                                                                <li><a target="_blank" href="http://Netaji.edu/ranchi/">Netaji University
                                                                                                Ranchi</a></li>
                                                                                <li><a target="_blank" href="http://Netaji.edu/patna/">Netaji University
                                                                                                Patna</a></li>
                                                                                <li><a target="_blank" href="http://Netaji.edu/mohali/">Netaji University
                                                                                                Mohali</a></li>
                                                                        </ul>
                                                                        <ul class="mega_menu_nav mt-4">
                                                                                <li><strong>Global</strong></li>

                                                                                <li><a target="_blank" href="https://www.Netajiuniversity.uk/">Netaji
                                                                                                University [in] London</a></li>
                                                                                <li><a target="_blank" href="http://www.Netajiuniversity.ae/">Netaji
                                                                                                University Dubai </a></li>
                                                                                <li><a>Netaji New York</a> </li>
                                                                                <li><a>Netaji Seattle</a> </li>
                                                                                <li><a>Netaji San Francisco</a> </li>
                                                                                <li><a target="_blank" href="http://www.Netajisingapore.sg/">Netaji
                                                                                                Singapore</a></li>
                                                                                <li><a target="_blank" href="http://www.Netaji.za.com/">Netaji South
                                                                                                Africa</a></li>
                                                                                <li><a target="_blank" href="https://Netajiabudhabi.com/">Netaji Abu Dhabi</a>
                                                                                </li>
                                                                                <li><a target="_blank" href="http://Netaji.edu/mauritius/">Netaji
                                                                                                Mauritius</a></li>
                                                                                <li><a>Netaji China</a></li>
                                                                                <li><a target="_blank" href="https://www.Netajischool.nl/">Netaji Amsterdam
                                                                                        </a></li>
                                                                                <li><a>Netaji Romania </a></li>
                                                                                <li><a target="_blank" href="http://www.Netaji.uz/">Netaji Tashkent </a></li>
                                                                        </ul>

                                                                       

                                                                </div>
                                                                <div class="col">
                                                                        <ul class="mega_menu_nav">
                                                                                <li><b>Schools</b></li>
                                                                                <li><a href="ais/aiss/index.html" target="_blank"><strong>Netaji
                                                                                                        International
                                                                                                        Schools</strong></a></li>
                                                                                <li><a href="ais/aiss/index.html" target="_blank">Saket</a></li>
                                                                                <li><a href="ais/aised/index.html" target="_blank">East Delhi</a></li>
                                                                                <li><a href="ais/aisn/index.html" target="_blank">Noida</a></li>
                                                                                <li><a href="ais/aisg/index.html" target="_blank">Power Grid, Gurgaon</a>
                                                                                </li>
                                                                                <li><a href="ais/aisg2/index.html" target="_blank">Sector 46, Gurgaon</a>
                                                                                </li>
                                                                                <li><a href="ais/aisv/index.html" target="_blank">Sector 6, Vasundhara</a>
                                                                                </li>
                                                                                <li><a href="ais/aisv1/index.html" target="_blank">Sector 1, Vasundhara</a>
                                                                                </li>
                                                                                <li><a href="ais/aispv/index.html" target="_blank">Pushp Vihar</a></li>
                                                                                <li><a href="ais/aislucknow/index.html" target="_blank">Lucknow</a></li>
                                                                                <li><a href="https://Netaji.edu/ais/mohali/" target="_blank">Mohali</a></li>
                                                                                <li><a href="https://Netaji.edu/ais/navimumbai/" target="_blank">Navi Mumbai
                                                                                        </a></li>

                                                                                <li class="pt-4"><a href="http://www.Netajiglobalschool.com/" target="_blank"><strong>Netaji Global
                                                                                                        School</strong></a></li>
                                                                                <li><a href="http://www.Netajiglobalschool.com/gurgaon/index.aspx" target="_blank">Gurgaon</a></li>
                                                                                <li><a href="http://www.Netajiglobalschool.com/noida" target="_blank">Noida</a></li>
                                                                        </ul>
                                                                        <ul class="mega_menu_nav mt-5">
                                                                                <li><b>Preschool</b></li>
                                                                                <li><a target="_blank" href="javascript:void(0)"><strong>Amiown</strong></a>
                                                                                </li>
                                                                                <li><a href="http://www.amiown.com/" target="_blank">Noida</a></li>
                                                                                <li><a href="http://www.amiown.com/" target="_blank">Gurgaon</a></li>
                                                                                <li><a href="http://www.amiown.com/" target="_blank">Vasundhara</a></li>
                                                                                <li><a href="http://www.amiown.com/" target="_blank">Pushp Vihar</a></li>
                                                                        </ul>
                                                                </div>

                                                                <div class="col">
                                                                        <ul class="mega_menu_nav">
                                                                                <li><b>Online & Distance Learning</b></li>
                                                                                <li><a href="https://Netajionline.com/" target="_blank">Netaji University
                                                                                                Online</a></li>
                                                                                <li><a href="http://addoe.Netaji.edu/" target="_blank">Netaji Distance
                                                                                                Learning</a></li>
                                                                                <li><a href="https://Netajifutureacademy.com/" target="_blank">Netaji Future
                                                                                                Academy</a></li>
                                                                        </ul>
                                                                        <ul class="mega_menu_nav mt-5">
                                                                                <li><b>Publication</b></li>
                                                                                <li><a href="http://Netajiuniversitypress.com/" target="_blank">Netaji
                                                                                                University Press</a></li>
                                                                                <li><a href="http://Netaji.edu/ADMAA/publications.aspx" target="_blank">Netaji
                                                                                                Directorate
                                                                                                of Management & Allied Areas(ADMAA)</a></li>
                                                                        </ul>
                                                                        <ul class="mega_menu_nav mt-5">
                                                                                <li><b>Competitive Exams</b></li>
                                                                                <li><a href="aice/index.html" target="_blank">Netaji Institute for
                                                                                                Competitive
                                                                                                Examinations</a></li>
                                                                        </ul>
                                                                </div>
                                                                <div class="col">
                                                                        <ul class="mega_menu_nav">
                                                                                <li><b>Beyond Education</b></li>
                                                                                <li><a target="_blank" href="http://Netaji.edu/aii/">Netaji Innovation
                                                                                                Incubator</a></li>
                                                                                <li><a target="_blank" href="https://Netaji.edu/ditt/">Directorate of
                                                                                                Innovation and Technology Transfer</a></li>
                                                                                <li><a target="_blank" href="https://Netaji.edu/astif/">Netaji Science,
                                                                                                Technology & Innovation Foundation</a></li>
                                                                                <li><a target="_blank" href="ssb/index.html">Netaji SSB Academy</a></li>
                                                                                <li><a target="_blank" href="acc/index.html">Netaji Cadet Corps</a></li>
                                                                                <li><a target="_blank" href="aimc/index.html">Netaji Indian Military
                                                                                                College</a></li>
                                                                                <li><a target="_blank" href="mtc/index.html">Military Training Camp</a></li>
                                                                                <li><a target="_blank" href="http://www.Netajiedumedia.com/">Netaji
                                                                                                Edumedia</a></li>
                                                                                <li><a target="_blank" href="https://Netajifinishingschool.com/">Netaji
                                                                                                Finishing School</a></li>
                                                                                <li><a target="_blank" href="http://Netaji.edu/summerschool/">Netaji
                                                                                                University Summer School</a></li>
                                                                        </ul>
                                                                </div>
                                                        </div>

                                                </div>
                                        </div>

                                </div>
                        </div>
                </li> -->
                <li class="career_btn"><a href="career">Careers</a></li>
                <li class="career_btn"><a href="upgrade">Upgrad Campus</a></li>



                <li><a href="news">News</a></li>
                <!-- <li><a href="http://alumni.Netaji.edu/" target="_blank">Alumni</a></li> -->
                <!-- <li><a href="contact_us.html">Contact</a></li> -->
                <!-- <li><a href="pdf/AIBHAS_IMPORTANT_NOTICE_2018.pdf" target="_blank">Important Notice</a></li> -->
                <li><a href="" target="_blank">Student Login</a></li>
                <li></li>
                <!-- <li><a class="right_bar_search" href="javascript:void(0);"><i class="fa fa-search"></i></a> -->
                </li>
        </ul>
</div>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">

                <div class="logo">
                        <a href="index.php"><img src="images/logo.png" alt="Netaji unuiversity" /></a>
                        <span style="
    position: absolute;
    font-size: 20px;
    top: 25px;
    line-height: 3px;
    font-weight: 800;
    color: #e3b121;
">Netaji Subhas <br><span style="
    font-size: 26px;
">University</span></span>
                </div>

                <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse main-menu" id="navbarResponsive">


                        <ul class="navbar-nav ml-auto">

                                <li class="nav-item"><a class="nav-link" href="about-university.aspx">About Amity <span class="span_icon"></span></a>
                                        <div class="mega_menu pt-5 hidden-xs">

                                                <div class="row no-gutters  ">
                                                        <div class="col-md-4 pr-2">
                                                                <div class="row no-gutters menu_col4 ">
                                                                        <div class="right_mega_menu">
                                                                                <ul>
                                                                                        <li><a href="leadership.aspx">Who We Are</a></li>
                                                                                        <li><a href="testimonials.aspx">Mission & Vision</a></li>
                                                                                        <li><a href="beyond-academics.aspx">Chancellor's Message</a></li>
                                                                                        <li><a href="about-quality.aspx">Vice Chancellor's Message</a></li>
                                                                                        <li><a href="about-technologically-ahead.aspx">Registrar's Message</a></li>
                                                                                        <li><a href="placement.aspx">Dean tudent Walfare</a></li>
                                                                                        <li><a href="student-life.aspx">Proctor</a></li>
                                                                                        <li><a href="about-stalwarts.aspx">Head Of Admission</a></li>

                                                                                </ul>
                                                                        </div>


                                                                </div>

                                                        </div>


                                                        <div class="col-md-4 pr-2">
                                                                <div class="row no-gutters menu_col4 ">
                                                                        <div class="right_mega_menu">
                                                                                <ul>
                                                                                        <li><a href="leadership.aspx">The Governing Body</a></li>
                                                                                        <li><a href="testimonials.aspx">Profile of Faculty Members</a></li>
                                                                                        <li><a href="beyond-academics.aspx">Teaching & Learning Resourse</a></li>
                                                                                        <li><a href="about-quality.aspx">Nirf</a></li>
                                                                                        <li><a href="about-technologically-ahead.aspx">NSS</a></li>
                                                                                </ul>
                                                                        </div>


                                                                </div>

                                                        </div>
                                                </div>
                                        </div>
                                </li>




                                <li class="nav-item"><a class="nav-link" href="course-list6f7e.html?fd=all">Courses <span class="span_icon"></span></a>
                                        <div class="mega_menu programsList pt-3 hidden-xs">

                                                <div class="row no-gutters pl-5 paddAdjust">
                                                        <div class="col-md-12 pr-2">
                                                                <div class="row no-gutters menu_col4 pl-5 ml-3">
                                                                        <div class="col-md-9">
                                                                                <!-- <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item pr-3"><a class="nav-link font-18 active"
                                                        href="#Graduate" role="tab" data-toggle="tab">Graduate
                                                        Programs</a> </li>
                                                <li class="nav-item pr-3"><a class="nav-link font-18"
                                                        href="#Post_Graduate" role="tab" data-toggle="tab">
                                                        Post Graduate Programs</a> </li>
                                                <li class="nav-item"><a class="nav-link font-18"
                                                        href="course-list20e7.html?fd=All">
                                                        Find a program</a> </li>
                                            </ul> -->
                                                                                <div class="tab-content">
                                                                                        <div role="tabpanel" class="tab-pane active" id="Graduate">
                                                                                                <p class="pt-4">
                                                                                                        <strong>Regular Courses</strong>
                                                                                                </p>
                                                                                                <div class="menu_nav nsu-courses">
                                                                                                        <ul>

                                                                                                                <li><a href='course-list1643.html?fd=Actuarial%20Science&amp;Programs=Graduate'>
                                                                                                                                Actuarial Science</a></li>

                                                                                                                <li><a href='course-list438b.html?fd=Aeronautical%20-%20Automobile&amp;Programs=Graduate'>
                                                                                                                                Aeronautical & Automobile</a></li>

                                                                                                                <li><a href='course-listaa33.html?fd=Aerospace&amp;Programs=Graduate'>
                                                                                                                                Aerospace</a></li>

                                                                                                                <li><a href='course-list6930.html?fd=Agriculture&amp;Programs=Graduate'>
                                                                                                                                Agriculture</a></li>

                                                                                                                <li><a href='course-list569e.html?fd=Animation&amp;Programs=Graduate'>
                                                                                                                                Animation</a></li>

                                                                                                                <li><a href='course-listd722.html?fd=Anthropology&amp;Programs=Graduate'>
                                                                                                                                Anthropology</a></li>

                                                                                                                <li><a href='course-list2d77.html?fd=Applied%20Sciences&amp;Programs=Graduate'>
                                                                                                                                Applied Sciences</a></li>

                                                                                                                <li><a href='course-list5410.html?fd=Architecture&amp;Programs=Graduate'>
                                                                                                                                Architecture</a></li>

                                                                                                                <li><a href='course-list8788.html?fd=Avionics&amp;Programs=Graduate'>
                                                                                                                                Avionics</a></li>

                                                                                                                <li><a href='course-liste3e2.html?fd=Banking%20-%20Finance&amp;Programs=Graduate'>
                                                                                                                                Banking & Finance</a></li>

                                                                                                                <li><a href='course-list85f7.html?fd=Biotech&amp;Programs=Graduate'>
                                                                                                                                Biotech</a></li>

                                                                                                                <li><a href='course-listc3ae.html?fd=Commerce&amp;Programs=Graduate'>
                                                                                                                                Commerce</a></li>

                                                                                                                <li><a href='course-list120e.html?fd=Communication&amp;Programs=Graduate'>
                                                                                                                                Communication</a></li>

                                                                                                                <li><a href='course-list91e3.html?fd=Computer%20Science/%20IT&amp;Programs=Graduate'>
                                                                                                                                Computer Science/ IT</a></li>

                                                                                                                <li><a href='course-list9a02.html?fd=Construction%20and%20Real%20Estate%20Management&amp;Programs=Graduate'>
                                                                                                                                Construction and Real Estate Management</a></li>

                                                                                                                <li><a href='course-list1870.html?fd=Data%20Sciences%20-%20Business%20Analytics&amp;Programs=Graduate'>
                                                                                                                                Data Sciences & Business Analytics</a></li>

                                                                                                                <li><a href='course-list0fdf.html?fd=Defence%20-%20Strategic%20Studies%20&amp;Programs=Graduate'>
                                                                                                                                Defence & Strategic Studies </a></li>

                                                                                                                <li><a href='course-listba6e.html?fd=Defence%20Technology&amp;Programs=Graduate'>
                                                                                                                                Defence Technology</a></li>

                                                                                                                <li><a href='course-list4265.html?fd=Design&amp;Programs=Graduate'>
                                                                                                                                Design</a></li>

                                                                                                                <li><a href='course-list8947.html?fd=Earth%20-%20Environmental%20Sciences&amp;Programs=Graduate'>
                                                                                                                                Earth & Environmental Sciences</a></li>

                                                                                                                <li><a href='course-list3dc3.html?fd=Economics&amp;Programs=Graduate'>
                                                                                                                                Economics</a></li>

                                                                                                                <li><a href='course-list19c7.html?fd=Education&amp;Programs=Graduate'>
                                                                                                                                Education</a></li>

                                                                                                                <li><a href='course-list1f2d.html?fd=Engineering&amp;Programs=Graduate'>
                                                                                                                                Engineering</a></li>

                                                                                                                <li><a href='course-liste521.html?fd=English%20literature&amp;Programs=Graduate'>
                                                                                                                                English literature</a></li>

                                                                                                                <li><a href='course-listad72.html?fd=Environment&amp;Programs=Graduate'>
                                                                                                                                Environment</a></li>

                                                                                                                <li><a href='course-list35d0.html?fd=Fashion&amp;Programs=Graduate'>
                                                                                                                                Fashion</a></li>

                                                                                                                <li><a href='course-list965b.html?fd=Film%20-%20Drama&amp;Programs=Graduate'>
                                                                                                                                Film & Drama</a></li>

                                                                                                                <li><a href='course-listf38d.html?fd=Finance&amp;Programs=Graduate'>
                                                                                                                                Finance</a></li>

                                                                                                                <li><a href='course-list7d83.html?fd=Fine%20Arts&amp;Programs=Graduate'>
                                                                                                                                Fine Arts</a></li>

                                                                                                                <li><a href='course-listbb54.html?fd=Food%20Technology&amp;Programs=Graduate'>
                                                                                                                                Food Technology</a></li>

                                                                                                                <li><a href='course-list1fb7.html?fd=Foreign%20Languages&amp;Programs=Graduate'>
                                                                                                                                Foreign Languages</a></li>

                                                                                                                <li><a href='course-list4003.html?fd=Forensic%20Sciences&amp;Programs=Graduate'>
                                                                                                                                Forensic Sciences</a></li>

                                                                                                                <li><a href='course-listedc1.html?fd=Forestry%20-%20Wildlife%20Sciences&amp;Programs=Graduate'>
                                                                                                                                Forestry & Wildlife Sciences</a></li>

                                                                                                                <li><a href='course-list8e16.html?fd=Geo%20Informatics%20-%20Remote%20Sensing&amp;Programs=Graduate'>
                                                                                                                                Geo Informatics & Remote Sensing</a></li>

                                                                                                                <li><a href='course-list26b7.html?fd=Health%20-%20Allied%20Sciences&amp;Programs=Graduate'>
                                                                                                                                Health & Allied Sciences</a></li>

                                                                                                                <li><a href='course-list7792.html?fd=Health%20-%20Medical%20Sciences&amp;Programs=Graduate'>
                                                                                                                                Health & Medical Sciences</a></li>

                                                                                                                <li><a href='course-list086b.html?fd=Health%20Sciences&amp;Programs=Graduate'>
                                                                                                                                Health Sciences</a></li>

                                                                                                                <li><a href='course-listf77e.html?fd=Hospital%20Administration&amp;Programs=Graduate'>
                                                                                                                                Hospital Administration</a></li>

                                                                                                                <li><a href='course-list4c5c.html?fd=Hotel%20Management%20Hospitality&amp;Programs=Graduate'>
                                                                                                                                Hotel Management Hospitality</a></li>

                                                                                                                <li><a href='course-list39b4.html?fd=Insurance&amp;Programs=Graduate'>
                                                                                                                                Insurance</a></li>

                                                                                                                <li><a href='course-listca11.html?fd=Insurance%20and%20Banking&amp;Programs=Graduate'>
                                                                                                                                Insurance and Banking</a></li>

                                                                                                                <li><a href='course-listb0fd.html?fd=Interior%20Design&amp;Programs=Graduate'>
                                                                                                                                Interior Design</a></li>

                                                                                                                <li><a href='course-listdc75.html?fd=International%20Relations&amp;Programs=Graduate'>
                                                                                                                                International Relations</a></li>

                                                                                                                <li><a href='course-list3d30.html?fd=Journalism&amp;Programs=Graduate'>
                                                                                                                                Journalism</a></li>

                                                                                                                <li><a href='course-listb25a.html?fd=Journalism%20-%20Mass%20Communication&amp;Programs=Graduate'>
                                                                                                                                Journalism & Mass Communication</a></li>

                                                                                                                <li><a href='course-list5d69.html?fd=Language&amp;Programs=Graduate'>
                                                                                                                                Language</a></li>

                                                                                                                <li><a href='course-listea4e.html?fd=Law&amp;Programs=Graduate'>
                                                                                                                                Law</a></li>

                                                                                                                <li><a href='course-list99fc.html?fd=Liberal%20Arts&amp;Programs=Graduate'>
                                                                                                                                Liberal Arts</a></li>

                                                                                                                <li><a href='course-list9d7b.html?fd=Management&amp;Programs=Graduate'>
                                                                                                                                Management</a></li>

                                                                                                                <li><a href='course-listada1.html?fd=Marine%20Science&amp;Programs=Graduate'>
                                                                                                                                Marine Science</a></li>

                                                                                                                <li><a href='course-listc417.html?fd=Mass%20Communication&amp;Programs=Graduate'>
                                                                                                                                Mass Communication</a></li>

                                                                                                                <li><a href='course-list56b4.html?fd=Medical&amp;Programs=Graduate'>
                                                                                                                                Medical</a></li>

                                                                                                                <li><a href='course-list84b7.html?fd=Microbial%20Sciences&amp;Programs=Graduate'>
                                                                                                                                Microbial Sciences</a></li>

                                                                                                                <li><a href='course-listaf94.html?fd=Molecular%20Medicine%20-%20Stem%20Cell%20Research%20and%20Cancer%20Biology&amp;Programs=Graduate'>
                                                                                                                                Molecular Medicine & Stem Cell Research and Cancer
                                                                                                                                Biology</a></li>

                                                                                                                <li><a href='course-listfbf4.html?fd=Nanotechnology&amp;Programs=Graduate'>
                                                                                                                                Nanotechnology</a></li>

                                                                                                                <li><a href='course-list7422.html?fd=Neuropsychology%20-%20Neurosciences&amp;Programs=Graduate'>
                                                                                                                                Neuropsychology & Neurosciences</a></li>

                                                                                                                <li><a href='course-list7043.html?fd=Nuclear%20Science%20-%20Technology&amp;Programs=Graduate'>
                                                                                                                                Nuclear Science & Technology</a></li>

                                                                                                                <li><a href='course-list2290.html?fd=Nursing&amp;Programs=Graduate'>
                                                                                                                                Nursing</a></li>

                                                                                                                <li><a href='course-list0d7c.html?fd=Occupational%20Therapy&amp;Programs=Graduate'>
                                                                                                                                Occupational Therapy</a></li>

                                                                                                                <li><a href='course-list6a2d.html?fd=Optometry%20-%20Vision%20Sciences&amp;Programs=Graduate'>
                                                                                                                                Optometry & Vision Sciences</a></li>

                                                                                                                <li><a href='course-listb99b.html?fd=Organic%20Agriculture&amp;Programs=Graduate'>
                                                                                                                                Organic Agriculture</a></li>

                                                                                                                <li><a href='course-list2008.html?fd=Performing%20Arts&amp;Programs=Graduate'>
                                                                                                                                Performing Arts</a></li>

                                                                                                                <li><a href='course-listcc1a.html?fd=Pharmacy&amp;Programs=Graduate'>
                                                                                                                                Pharmacy</a></li>

                                                                                                                <li><a href='course-list99c9.html?fd=Physical%20Education&amp;Programs=Graduate'>
                                                                                                                                Physical Education</a></li>

                                                                                                                <li><a href='course-listb323.html?fd=Physiology&amp;Programs=Graduate'>
                                                                                                                                Physiology</a></li>

                                                                                                                <li><a href='course-list0340.html?fd=Physiotherapy&amp;Programs=Graduate'>
                                                                                                                                Physiotherapy</a></li>

                                                                                                                <li><a href='course-listb7c0.html?fd=Planning&amp;Programs=Graduate'>
                                                                                                                                Planning</a></li>

                                                                                                                <li><a href='course-list78ef.html?fd=Psychology%20-%20Behavioural%20Science&amp;Programs=Graduate'>
                                                                                                                                Psychology & Behavioural Science</a></li>

                                                                                                                <li><a href='course-list0e10.html?fd=Public%20Policy&amp;Programs=Graduate'>
                                                                                                                                Public Policy</a></li>

                                                                                                                <li><a href='course-list045f.html?fd=Real%20Estate%20And%20Urban%20Infrastructure&amp;Programs=Graduate'>
                                                                                                                                Real Estate And Urban Infrastructure</a></li>

                                                                                                                <li><a href='course-list9be5.html?fd=Sanskrit%20Studies&amp;Programs=Graduate'>
                                                                                                                                Sanskrit Studies</a></li>

                                                                                                                <li><a href='course-list57aa.html?fd=Skill%20Development&amp;Programs=Graduate'>
                                                                                                                                Skill Development</a></li>

                                                                                                                <li><a href='course-listd432.html?fd=Social%20Science&amp;Programs=Graduate'>
                                                                                                                                Social Science</a></li>

                                                                                                                <li><a href='course-listda74.html?fd=Social%20Work&amp;Programs=Graduate'>
                                                                                                                                Social Work</a></li>

                                                                                                                <li><a href='course-listbfd2.html?fd=Solar%20-%20Alternate%20energy&amp;Programs=Graduate'>
                                                                                                                                Solar & Alternate energy</a></li>

                                                                                                                <li><a href='course-list454b.html?fd=Space%20Sciences&amp;Programs=Graduate'>
                                                                                                                                Space Sciences</a></li>

                                                                                                                <li><a href='course-listaef6.html?fd=Special%20Education&amp;Programs=Graduate'>
                                                                                                                                Special Education</a></li>

                                                                                                                <li><a href='course-listb720.html?fd=Telecom&amp;Programs=Graduate'>
                                                                                                                                Telecom</a></li>

                                                                                                                <li><a href='course-lista9ff.html?fd=Travel%20-%20Tourism&amp;Programs=Graduate'>
                                                                                                                                Travel & Tourism</a></li>

                                                                                                                <li><a href='course-list46f4.html?fd=Virology%20-%20Immunology&amp;Programs=Graduate'>
                                                                                                                                Virology & Immunology</a></li>

                                                                                                                <li><a href='course-list49c5.html?fd=Wildlife%20Sciences&amp;Programs=Graduate'>
                                                                                                                                Wildlife Sciences</a></li>

                                                                                                                <li><a href='course-list26c4.html?fd=Yoga%20Therapy&amp;Programs=Graduate'>
                                                                                                                                Yoga Therapy</a></li>

                                                                                                        </ul>
                                                                                                </div>
                                                                                        </div>
                                                                                        <div role="tabpanel" class="tab-pane fade" id="Post_Graduate">
                                                                                                <p class="pt-4">
                                                                                                        <strong>Regular Courses</strong>
                                                                                                </p>
                                                                                                <div class="menu_nav">
                                                                                                        <ul>

                                                                                                                <li><a href='course-list283d.html?fd=Actuarial%20Science&amp;Programs=Post%20Graduate'>
                                                                                                                                Actuarial Science</a></li>

                                                                                                                <li><a href='course-listd6d0.html?fd=Advertising%20-%20PR&amp;Programs=Post%20Graduate'>
                                                                                                                                Advertising & PR</a></li>

                                                                                                                <li><a href='course-list6917.html?fd=Aeronautical%20-%20Automobile&amp;Programs=Post%20Graduate'>
                                                                                                                                Aeronautical & Automobile</a></li>

                                                                                                                <li><a href='course-listb38f.html?fd=Aerospace&amp;Programs=Post%20Graduate'>
                                                                                                                                Aerospace</a></li>

                                                                                                                <li><a href='course-list531f.html?fd=Agriculture&amp;Programs=Post%20Graduate'>
                                                                                                                                Agriculture</a></li>

                                                                                                                <li><a href='course-list2f9e.html?fd=Anthropology&amp;Programs=Post%20Graduate'>
                                                                                                                                Anthropology</a></li>

                                                                                                                <li><a href='course-list95d6.html?fd=Applied%20Sciences&amp;Programs=Post%20Graduate'>
                                                                                                                                Applied Sciences</a></li>

                                                                                                                <li><a href='course-list06ec.html?fd=Architecture&amp;Programs=Post%20Graduate'>
                                                                                                                                Architecture</a></li>

                                                                                                                <li><a href='course-list3e01.html?fd=Avionics&amp;Programs=Post%20Graduate'>
                                                                                                                                Avionics</a></li>

                                                                                                                <li><a href='course-list86c2.html?fd=Banking%20-%20Finance&amp;Programs=Post%20Graduate'>
                                                                                                                                Banking & Finance</a></li>

                                                                                                                <li><a href='course-list06af.html?fd=Biotech&amp;Programs=Post%20Graduate'>
                                                                                                                                Biotech</a></li>

                                                                                                                <li><a href='course-list6abb.html?fd=Click%20Chemistry%20%20Research%20-%20Studies&amp;Programs=Post%20Graduate'>
                                                                                                                                Click Chemistry Research & Studies</a></li>

                                                                                                                <li><a href='course-listbb88.html?fd=Commerce&amp;Programs=Post%20Graduate'>
                                                                                                                                Commerce</a></li>

                                                                                                                <li><a href='course-list040d.html?fd=Communication&amp;Programs=Post%20Graduate'>
                                                                                                                                Communication</a></li>

                                                                                                                <li><a href='course-list363f.html?fd=Computer%20Science/%20IT&amp;Programs=Post%20Graduate'>
                                                                                                                                Computer Science/ IT</a></li>

                                                                                                                <li><a href='course-list91c7.html?fd=Construction%20and%20Real%20Estate%20Management&amp;Programs=Post%20Graduate'>
                                                                                                                                Construction and Real Estate Management</a></li>

                                                                                                                <li><a href='course-listed6a.html?fd=Data%20Sciences%20-%20Business%20Analytics&amp;Programs=Post%20Graduate'>
                                                                                                                                Data Sciences & Business Analytics</a></li>

                                                                                                                <li><a href='course-list5b32.html?fd=Defence%20-%20Strategic%20Studies%20&amp;Programs=Post%20Graduate'>
                                                                                                                                Defence & Strategic Studies </a></li>

                                                                                                                <li><a href='course-listd397.html?fd=Defence%20Technology&amp;Programs=Post%20Graduate'>
                                                                                                                                Defence Technology</a></li>

                                                                                                                <li><a href='course-listb4bf.html?fd=Design&amp;Programs=Post%20Graduate'>
                                                                                                                                Design</a></li>

                                                                                                                <li><a href='course-listd633.html?fd=Earth%20-%20Environmental%20Sciences&amp;Programs=Post%20Graduate'>
                                                                                                                                Earth & Environmental Sciences</a></li>

                                                                                                                <li><a href='course-list3a4b.html?fd=Economics&amp;Programs=Post%20Graduate'>
                                                                                                                                Economics</a></li>

                                                                                                                <li><a href='course-list7f62.html?fd=Education&amp;Programs=Post%20Graduate'>
                                                                                                                                Education</a></li>

                                                                                                                <li><a href='course-list6a29.html?fd=Engineering&amp;Programs=Post%20Graduate'>
                                                                                                                                Engineering</a></li>

                                                                                                                <li><a href='course-listbf84.html?fd=English%20literature&amp;Programs=Post%20Graduate'>
                                                                                                                                English literature</a></li>

                                                                                                                <li><a href='course-listbf0b.html?fd=Environment&amp;Programs=Post%20Graduate'>
                                                                                                                                Environment</a></li>

                                                                                                                <li><a href='course-lista30e.html?fd=Fashion&amp;Programs=Post%20Graduate'>
                                                                                                                                Fashion</a></li>

                                                                                                                <li><a href='course-list65d1.html?fd=Film%20-%20Drama&amp;Programs=Post%20Graduate'>
                                                                                                                                Film & Drama</a></li>

                                                                                                                <li><a href='course-list5925.html?fd=Finance&amp;Programs=Post%20Graduate'>
                                                                                                                                Finance</a></li>

                                                                                                                <li><a href='course-list068e.html?fd=Fine%20Arts&amp;Programs=Post%20Graduate'>
                                                                                                                                Fine Arts</a></li>

                                                                                                                <li><a href='course-list8c3a.html?fd=Food%20Technology&amp;Programs=Post%20Graduate'>
                                                                                                                                Food Technology</a></li>

                                                                                                                <li><a href='course-list5ac7.html?fd=Foreign%20Languages&amp;Programs=Post%20Graduate'>
                                                                                                                                Foreign Languages</a></li>

                                                                                                                <li><a href='course-list80a5.html?fd=Forensic%20Sciences&amp;Programs=Post%20Graduate'>
                                                                                                                                Forensic Sciences</a></li>

                                                                                                                <li><a href='course-list946b.html?fd=Forestry%20-%20Wildlife%20Sciences&amp;Programs=Post%20Graduate'>
                                                                                                                                Forestry & Wildlife Sciences</a></li>

                                                                                                                <li><a href='course-listafe5.html?fd=Geo%20Informatics%20-%20Remote%20Sensing&amp;Programs=Post%20Graduate'>
                                                                                                                                Geo Informatics & Remote Sensing</a></li>

                                                                                                                <li><a href='course-listbcec.html?fd=Health%20-%20Allied%20Sciences&amp;Programs=Post%20Graduate'>
                                                                                                                                Health & Allied Sciences</a></li>

                                                                                                                <li><a href='course-list46ae.html?fd=Health%20-%20Medical%20Sciences&amp;Programs=Post%20Graduate'>
                                                                                                                                Health & Medical Sciences</a></li>

                                                                                                                <li><a href='course-list9fa8.html?fd=Health%20Sciences&amp;Programs=Post%20Graduate'>
                                                                                                                                Health Sciences</a></li>

                                                                                                                <li><a href='course-listdc35.html?fd=Horticulture&amp;Programs=Post%20Graduate'>
                                                                                                                                Horticulture</a></li>

                                                                                                                <li><a href='course-listd06c.html?fd=Hospital%20Administration&amp;Programs=Post%20Graduate'>
                                                                                                                                Hospital Administration</a></li>

                                                                                                                <li><a href='course-list836c.html?fd=Hospital%20Management%20-%20Administration&amp;Programs=Post%20Graduate'>
                                                                                                                                Hospital Management & Administration</a></li>

                                                                                                                <li><a href='course-list78d2.html?fd=Hotel%20Management%20Hospitality&amp;Programs=Post%20Graduate'>
                                                                                                                                Hotel Management Hospitality</a></li>

                                                                                                                <li><a href='course-liste6e5.html?fd=Insurance%20and%20Banking&amp;Programs=Post%20Graduate'>
                                                                                                                                Insurance and Banking</a></li>

                                                                                                                <li><a href='course-list779a.html?fd=Interior%20Design&amp;Programs=Post%20Graduate'>
                                                                                                                                Interior Design</a></li>

                                                                                                                <li><a href='course-listf1da.html?fd=International%20Relations&amp;Programs=Post%20Graduate'>
                                                                                                                                International Relations</a></li>

                                                                                                                <li><a href='course-listaf24.html?fd=Journalism&amp;Programs=Post%20Graduate'>
                                                                                                                                Journalism</a></li>

                                                                                                                <li><a href='course-list2fcb.html?fd=Journalism%20-%20Mass%20Communication&amp;Programs=Post%20Graduate'>
                                                                                                                                Journalism & Mass Communication</a></li>

                                                                                                                <li><a href='course-list8cdd.html?fd=Language&amp;Programs=Post%20Graduate'>
                                                                                                                                Language</a></li>

                                                                                                                <li><a href='course-list6a85.html?fd=Law&amp;Programs=Post%20Graduate'>
                                                                                                                                Law</a></li>

                                                                                                                <li><a href='course-list6f6a.html?fd=Liberal%20Arts&amp;Programs=Post%20Graduate'>
                                                                                                                                Liberal Arts</a></li>

                                                                                                                <li><a href='course-list79a9.html?fd=Logistic%20-%20Supply%20Chain%20Management&amp;Programs=Post%20Graduate'>
                                                                                                                                Logistic & Supply Chain Management</a></li>

                                                                                                                <li><a href='course-list624f.html?fd=Logistics&amp;Programs=Post%20Graduate'>
                                                                                                                                Logistics</a></li>

                                                                                                                <li><a href='course-list4eb8.html?fd=Management&amp;Programs=Post%20Graduate'>
                                                                                                                                Management</a></li>

                                                                                                                <li><a href='course-list349b.html?fd=Marine%20Science&amp;Programs=Post%20Graduate'>
                                                                                                                                Marine Science</a></li>

                                                                                                                <li><a href='course-list8128.html?fd=Mass%20Communication&amp;Programs=Post%20Graduate'>
                                                                                                                                Mass Communication</a></li>

                                                                                                                <li><a href='course-listc5b9.html?fd=Materials%20-%20Devices&amp;Programs=Post%20Graduate'>
                                                                                                                                Materials & Devices</a></li>

                                                                                                                <li><a href='course-liste9e3.html?fd=Medical&amp;Programs=Post%20Graduate'>
                                                                                                                                Medical</a></li>

                                                                                                                <li><a href='course-listd50a.html?fd=Microbial%20Sciences&amp;Programs=Post%20Graduate'>
                                                                                                                                Microbial Sciences</a></li>

                                                                                                                <li><a href='course-list1248.html?fd=Molecular%20Medicine%20-%20Stem%20Cell%20Research%20and%20Cancer%20Biology&amp;Programs=Post%20Graduate'>
                                                                                                                                Molecular Medicine & Stem Cell Research and Cancer
                                                                                                                                Biology</a></li>

                                                                                                                <li><a href='course-list201f.html?fd=Nanomedicine&amp;Programs=Post%20Graduate'>
                                                                                                                                Nanomedicine</a></li>

                                                                                                                <li><a href='course-list952c.html?fd=Nanotechnology&amp;Programs=Post%20Graduate'>
                                                                                                                                Nanotechnology</a></li>

                                                                                                                <li><a href='course-list2c1e.html?fd=Natural%20Resources%20-%20Sustainable%20Development&amp;Programs=Post%20Graduate'>
                                                                                                                                Natural Resources & Sustainable Development</a></li>

                                                                                                                <li><a href='course-list9ae0.html?fd=Neuropsychology%20-%20Neurosciences&amp;Programs=Post%20Graduate'>
                                                                                                                                Neuropsychology & Neurosciences</a></li>

                                                                                                                <li><a href='course-list4d5f.html?fd=NGO%20Management%20/%20Development%20Studies&amp;Programs=Post%20Graduate'>
                                                                                                                                NGO Management / Development Studies</a></li>

                                                                                                                <li><a href='course-list5e60.html?fd=Nuclear%20Science%20-%20Technology&amp;Programs=Post%20Graduate'>
                                                                                                                                Nuclear Science & Technology</a></li>

                                                                                                                <li><a href='course-list0045.html?fd=Nursing&amp;Programs=Post%20Graduate'>
                                                                                                                                Nursing</a></li>

                                                                                                                <li><a href='course-list951b.html?fd=Occupational%20Therapy&amp;Programs=Post%20Graduate'>
                                                                                                                                Occupational Therapy</a></li>

                                                                                                                <li><a href='course-listfc32.html?fd=Optometry%20-%20Vision%20Sciences&amp;Programs=Post%20Graduate'>
                                                                                                                                Optometry & Vision Sciences</a></li>

                                                                                                                <li><a href='course-list78c1.html?fd=Organic%20Agriculture&amp;Programs=Post%20Graduate'>
                                                                                                                                Organic Agriculture</a></li>

                                                                                                                <li><a href='course-list00b6.html?fd=Pharmacy&amp;Programs=Post%20Graduate'>
                                                                                                                                Pharmacy</a></li>

                                                                                                                <li><a href='course-list110a.html?fd=Physical%20Education&amp;Programs=Post%20Graduate'>
                                                                                                                                Physical Education</a></li>

                                                                                                                <li><a href='course-list4785.html?fd=Physiology&amp;Programs=Post%20Graduate'>
                                                                                                                                Physiology</a></li>

                                                                                                                <li><a href='course-listde8f.html?fd=Physiotherapy&amp;Programs=Post%20Graduate'>
                                                                                                                                Physiotherapy</a></li>

                                                                                                                <li><a href='course-listd486.html?fd=Post%20Harvest%20Technology&amp;Programs=Post%20Graduate'>
                                                                                                                                Post Harvest Technology</a></li>

                                                                                                                <li><a href='course-listc00d.html?fd=Psychology%20-%20Behavioural%20Science&amp;Programs=Post%20Graduate'>
                                                                                                                                Psychology & Behavioural Science</a></li>

                                                                                                                <li><a href='course-listd39e.html?fd=Public%20Health&amp;Programs=Post%20Graduate'>
                                                                                                                                Public Health</a></li>

                                                                                                                <li><a href='course-list72e2.html?fd=Public%20Policy&amp;Programs=Post%20Graduate'>
                                                                                                                                Public Policy</a></li>

                                                                                                                <li><a href='course-list997d.html?fd=Real%20Estate%20And%20Urban%20Infrastructure&amp;Programs=Post%20Graduate'>
                                                                                                                                Real Estate And Urban Infrastructure</a></li>

                                                                                                                <li><a href='course-listdbb4.html?fd=Sanskrit%20Studies&amp;Programs=Post%20Graduate'>
                                                                                                                                Sanskrit Studies</a></li>

                                                                                                                <li><a href='course-listaf7b.html?fd=Social%20Science&amp;Programs=Post%20Graduate'>
                                                                                                                                Social Science</a></li>

                                                                                                                <li><a href='course-listc838.html?fd=Social%20Work&amp;Programs=Post%20Graduate'>
                                                                                                                                Social Work</a></li>

                                                                                                                <li><a href='course-list99d8.html?fd=Solar%20-%20Alternate%20energy&amp;Programs=Post%20Graduate'>
                                                                                                                                Solar & Alternate energy</a></li>

                                                                                                                <li><a href='course-list76f4.html?fd=Space%20Sciences&amp;Programs=Post%20Graduate'>
                                                                                                                                Space Sciences</a></li>

                                                                                                                <li><a href='course-listdcc7.html?fd=Special%20Education&amp;Programs=Post%20Graduate'>
                                                                                                                                Special Education</a></li>

                                                                                                                <li><a href='course-listb861.html?fd=Sustainable%20Development&amp;Programs=Post%20Graduate'>
                                                                                                                                Sustainable Development</a></li>

                                                                                                                <li><a href='course-listbc5c.html?fd=Telecom&amp;Programs=Post%20Graduate'>
                                                                                                                                Telecom</a></li>

                                                                                                                <li><a href='course-list75e6.html?fd=Travel%20-%20Tourism&amp;Programs=Post%20Graduate'>
                                                                                                                                Travel & Tourism</a></li>

                                                                                                                <li><a href='course-listd81f.html?fd=Urban%20Management&amp;Programs=Post%20Graduate'>
                                                                                                                                Urban Management</a></li>

                                                                                                                <li><a href='course-list2b30.html?fd=Virology%20-%20Immunology&amp;Programs=Post%20Graduate'>
                                                                                                                                Virology & Immunology</a></li>

                                                                                                                <li><a href='course-listfd2d.html?fd=Wildlife%20Sciences&amp;Programs=Post%20Graduate'>
                                                                                                                                Wildlife Sciences</a></li>

                                                                                                                <li><a href='course-list4288.html?fd=Yoga%20Therapy&amp;Programs=Post%20Graduate'>
                                                                                                                                Yoga Therapy</a></li>

                                                                                                        </ul>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-3 pr-3">
                                                                                <div class="right_mega_menu">
                                                                                        <ul class="menu_top">
                                                                                                <li><a href="phd/index.html" target="_blank">Ph.D Admission</a></li>
                                                                                                <li><a href="international/index.html" target="_blank">International
                                                                                                                Courses</a></li>
                                                                                                <li><a href="Evening-Courses4b69.html?fd=all&amp;coursesType=evening&amp;programType=Graduate">Evening
                                                                                                                Courses</a></li>
                                                                                                <li><a href="http://Netajifinishingschool.com/" target="_blank">Netaji
                                                                                                                Finishing School</a></li>
                                                                                                <li><a href="http://Netaji.edu/summerschool/" target="_blank">Summer
                                                                                                                School</a></li>
                                                                                                <li><a href="https://Netajionline.com/" target="_blank">Online &amp;
                                                                                                                Distance Learning Courses</a></li>
                                                                                                <li><a href="Lateral/index.html" target="_blank">Lateral Entry</a>
                                                                                                </li>
                                                                                                <li><a href="ase/index.html" target="_blank">CBSE JEE Aspirants</a>
                                                                                                </li>
                                                                                                <li><a href="3Continent/index.html" target="_blank">3 Continent
                                                                                                                Programs</a></li>

                                                                                        </ul>
                                                                                </div>
                                                                        </div>



                                                                </div>
                                                        </div>
                                                </div>


                                        </div>

                                </li>

                                <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Infrastructure <span class="span_icon"></span></a>
                                        <div class="mega_menu pt-5 hidden-xs">

                                                <div class="row no-gutters  ">
                                                        <div class="col-md-12 pr-2">
                                                                <div class="row no-gutters menu_col4 infr-menu">
                                                                        <div class="col-md-3 section">
                                                                                <a href="about-university.aspx"> <img src="images/menu_amity.jpg" class="img-fluid">
                                                                                        <div class="menu_boxx">
                                                                                                Library
                                                                                        </div>
                                                                                </a>
                                                                        </div>

                                                                        <div class="col-md-3 section">
                                                                                <a href="about-recognition.aspx"> <img src="images/menu_amity2.jpg" class="img-fluid">
                                                                                        <div class="menu_boxx">
                                                                                                IT Infrastructure
                                                                                        </div>
                                                                                </a>
                                                                        </div>

                                                                        <div class="col-md-3 section">
                                                                                <a href="about-academia.aspx"> <img src="images/menu_amity3.jpg" class="img-fluid">
                                                                                        <div class="menu_boxx">
                                                                                                Classroom
                                                                                        </div>
                                                                                </a>
                                                                        </div>

                                                                        <!-- <div class="w-100 pt-2">&nbsp;</div> -->

                                                                        <div class="col-md-3 section">
                                                                                <a href="about-faculty.aspx"> <img src="images/menu_amity4.jpg" class="img-fluid">
                                                                                        <div class="menu_boxx">
                                                                                                Laboratory
                                                                                        </div>
                                                                                </a>
                                                                        </div>

                                                                        <div class="col-md-3 section">
                                                                                <a href="about-ranked-no1.aspx"> <img src="images/menu_amity5.jpg" class="img-fluid">
                                                                                        <div class="menu_boxx">
                                                                                                Auditorium
                                                                                        </div>
                                                                                </a>
                                                                        </div>

                                                                        <div class="col-md-3 section">
                                                                                <a href="global-exposure.aspx"> <img src="images/menu_amity6.jpg" class="img-fluid">
                                                                                        <div class="menu_boxx">
                                                                                                Canteen
                                                                                        </div>
                                                                                </a>
                                                                        </div>

                                                                        <div class="col-md-3 section">
                                                                                <a href="global-exposure.aspx"> <img src="images/menu_amity6.jpg" class="img-fluid">
                                                                                        <div class="menu_boxx">
                                                                                                Transport
                                                                                        </div>
                                                                                </a>
                                                                        </div>

                                                                        <div class="col-md-3 section">
                                                                                <a href="global-exposure.aspx"> <img src="images/menu_amity6.jpg" class="img-fluid">
                                                                                        <div class="menu_boxx">
                                                                                                Sports
                                                                                        </div>
                                                                                </a>
                                                                        </div>






                                                                </div>

                                                        </div>

                                                        <!-- <div class="col-md-3 pr-3">
                                                                <div class="right_mega_menu">
                                                                        <ul>
                                                                                <li><a href="leadership.aspx">Leadership</a></li>
                                                                                <li><a href="testimonials.aspx">Testimonials</a></li>
                                                                                <li><a href="beyond-academics.aspx">Beyond Academics</a></li>
                                                                                <li><a href="about-quality.aspx">Quality</a></li>
                                                                                <li><a href="about-technologically-ahead.aspx">Technologically Ahead</a></li>
                                                                                <li><a href="placement.aspx">Top Placement</a></li>
                                                                                <li><a href="student-life.aspx">Student Life</a></li>
                                                                                <li><a href="about-stalwarts.aspx">Words From Stalwarts</a></li>
                                                                                <li><a href="about-industry.aspx">Industry Interaction</a></li>
                                                                                <li><a href="social-initiatives.aspx">Social Initiatives</a></li>
                                                                                <li><a href="amity-linkedin-partnership.aspx">Amity Linkedin Partnership</a></li>
                                                                        </ul>
                                                                </div>

                                                        </div> -->

                                                </div>
                                        </div>


                                </li>
                                <!-- <li class="nav-item"><a class="nav-link" href="infra-study.html">Infrastructure</a>
                    </li> -->
                                <li class="nav-item hidden-xs"><a class="nav-link" href="admission-procedure-domestic.html">Admissions</a>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="about-university.aspx">Placement <span class="span_icon"></span></a>
                                        <div class="mega_menu pt-5 hidden-xs">

                                                <div class="row no-gutters  ">
                                                        <div class="col-md-12 pr-2">
                                                                <div class="row no-gutters menu_col4 ">
                                                                        <div class="col-md-4">
                                                                                <a href="about-university.aspx"> <img src="images/menu_amity.jpg" class="img-fluid">
                                                                                        <div class="menu_boxx">
                                                                                                Placements
                                                                                        </div>
                                                                                </a>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                                <a href="about-recognition.aspx"> <img src="images/menu_amity2.jpg" class="img-fluid">
                                                                                        <div class="menu_boxx">
                                                                                                Appointment Letter
                                                                                        </div>
                                                                                </a>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                                <a href="about-academia.aspx"> <img src="images/menu_amity3.jpg" class="img-fluid">
                                                                                        <div class="menu_boxx">
                                                                                                Our Esteemed Recuters
                                                                                        </div>
                                                                                </a>
                                                                        </div>

                                                                </div>

                                                        </div>



                                                </div>
                                        </div>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="about-university.aspx">Student <span class="span_icon"></span></a>
                                        <div class="mega_menu pt-5 hidden-xs">

                                                <div class="row no-gutters  ">
                                                        <div class="col-md-12 pr-2">
                                                                <div class="row no-gutters menu_col4 ">
                                                                        <div class="col-md-4">
                                                                                <a href="about-university.aspx"> <img src="images/menu_amity.jpg" class="img-fluid">
                                                                                        <div class="menu_boxx">
                                                                                                Anti Ragging Cells
                                                                                        </div>
                                                                                </a>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                                <a href="about-recognition.aspx"> <img src="images/menu_amity2.jpg" class="img-fluid">
                                                                                        <div class="menu_boxx">
                                                                                                Anti Discriminatory Cell
                                                                                        </div>
                                                                                </a>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                                <a href="about-academia.aspx"> <img src="images/menu_amity3.jpg" class="img-fluid">
                                                                                        <div class="menu_boxx">
                                                                                                Academic Calendar
                                                                                        </div>
                                                                                </a>
                                                                        </div>

                                                                </div>

                                                        </div>



                                                </div>
                                        </div>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="about-university.aspx">Gallery <span class="span_icon"></span></a>
                                        <div class="mega_menu pt-5 hidden-xs">

                                                <div class="row no-gutters  ">
                                                        <div class="col-md-12 pr-2">
                                                                <div class="row no-gutters menu_col4 ">
                                                                        <div class="col-md-4">
                                                                                <a href="about-university.aspx"> <img src="images/menu_amity.jpg" class="img-fluid">
                                                                                        <div class="menu_boxx">
                                                                                                University Gallery
                                                                                        </div>
                                                                                </a>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                                <a href="about-recognition.aspx"> <img src="images/menu_amity2.jpg" class="img-fluid">
                                                                                        <div class="menu_boxx">
                                                                                                Media Gallery
                                                                                        </div>
                                                                                </a>
                                                                        </div>



                                                                </div>

                                                        </div>


                                                </div>
                                        </div>
                                </li>

                                <li class="nav-item"><a class="nav-link apply_btn" href="apply-now5034.html?1=1">Apply Now 2022</a>
                                </li>
                        </ul>
                </div>
                <!-- mobile menu -->
                <div class="mobile_nav">
                        <a href="javascript:void(0);" class="mobile_nav_icon"></a>
                        <div class="collapse navbar-collapse main-menu" id="navbarResponsive2">
                                <ul class="navbar-nav ml-auto">
                                        <li class="nav-item hidden-xs"><a class="nav-link" href="admission-procedure-domestic.html">
                                                        Admissions</a>
                                                <ul class="dropdown-menu">
                                                        <li><a href="">How to Apply</a></li>
                                                        <li><a href="">Career Test</a></li>
                                                        <li><a href="education-loan.html">Education Loan</a></li>
                                                        <li><a href="faqs.html">FAQs</a></li>
                                                </ul>
                                        </li>

                                        <li class="nav-item"><a class="nav-link" href="about-university.html">About Netaji <span class="span_icon"></span></a>
                                                <ul class="dropdown-menu">
                                                        <li><a href="">Who We Are</a></li>
                                                        <li><a href="">Mission & Vission</a></li>
                                                        <li><a href="">Chancellor's Message</a></li>
                                                        <li><a href="">Vice Chancellor's Message</a></li>


                                                        <li><a href="about-ranked-no1.html">Registrar's Message</a></li>
                                                        <li><a href="global-exposure.html">Dean Student Welfare</a></li>
                                                        <li><a href="leadership.html">Proctor</a></li>

                                                        <li><a href="beyond-academics.html">Head Of Admission</a></li>
                                                        <li><a href="about-quality.html">The Governing Body</a></li>
                                                        <li><a href="about-technologically-ahead.html">Profile Of Faculty Members</a></li>
                                                        <li><a href="placement.html">Teaching & Learning Resourse</a></li>
                                                        <li><a href="placement.html">NIRF</a></li>
                                                        <li><a href="placement.html">NSS</a></li>

                                                </ul>
                                        </li>
                                        <li class="nav-item"><a href="course-list6f7e.html?fd=all" class="nav-link">Programs
                                                        <span class="span_icon"></span></a>
                                                <ul class="dropdown-menu">
                                                        <li><a href="course-list6f7e.html?fd=all">All Programs</a></li>
                                                        <li><a href="phd/index.html" target="_blank">Ph.D Admission</a></li>
                                                        <li><a href="international/index.html" target="_blank">International Courses</a></li>
                                                        <li><a href="Evening-Courses4b69.html?fd=all&amp;coursesType=evening&amp;programType=Graduate">Evening
                                                                        Courses</a></li>
                                                        <li><a href="http://Netajifinishingschool.com/" target="_blank">Netaji Finishing
                                                                        School</a></li>
                                                        <li><a href="http://Netaji.edu/summerschool/" target="_blank">Summer School</a></li>
                                                        <li><a href="https://Netajionline.com/" target="_blank">Distance &amp; Online Courses</a>
                                                        </li>
                                                        <li><a href="Lateral/index.html" target="_blank">Lateral Entry</a></li>
                                                        <li><a href="ase/index.html" target="_blank">CBSE JEE Aspirants</a></li>
                                                        <li><a href="3Continent/index.html" target="_blank">3 Continent Programs</a></li>
                                                </ul>
                                        </li>



                                        <li class="nav-item hidden-xs"><a class="nav-link" href="admission-procedure-domestic.html">
                                                        Infrastructure</a>
                                                <ul class="dropdown-menu">
                                                        <li><a href="">Library</a></li>
                                                        <li><a href="">IT Infrustructure</a></li>
                                                        <li><a href="education-loan.html">Classroom</a></li>
                                                        <li><a href="faqs.html">Laboratory</a></li>
                                                        <li><a href="faqs.html">Auditorium</a></li>
                                                        <li><a href="faqs.html">Canteen</a></li>
                                                        <li><a href="faqs.html">Transport</a></li>
                                                        <li><a href="faqs.html">Sports</a></li>
                                                </ul>
                                        </li>

                                        <li class="nav-item hidden-xs"><a class="nav-link" href="admission-procedure-domestic.html">
                                                        Placement</a>
                                                <ul class="dropdown-menu">
                                                        <li><a href="">Placements</a></li>
                                                        <li><a href="">Appointment Letter</a></li>
                                                        <li><a href="education-loan.html">Our Esteemed Recuters</a></li>

                                                </ul>
                                        </li>

                                        <li class="nav-item hidden-xs"><a class="nav-link" href="admission-procedure-domestic.html">
                                                        Student</a>
                                                <ul class="dropdown-menu">
                                                        <li><a href="">Anti Ragging Cells</a></li>
                                                        <li><a href="">Anti Discriminatory Cell</a></li>
                                                        <li><a href="education-loan.html">Academic Calendar</a></li>

                                                </ul>
                                        </li>

                                        <li class="nav-item hidden-xs"><a class="nav-link" href="admission-procedure-domestic.html">
                                                        Gallery</a>
                                                <ul class="dropdown-menu">
                                                        <li><a href="">University Gallery</a></li>
                                                        <li><a href="">Media Gallery</a></li>

                                                </ul>
                                        </li>

                                        </li>

                                        <li class="nav-item"><a class="nav-link" href="contact_us.html">Contact</a></li>

                                        <li class="nav-item"><a class="nav-link apply_btn" href="apply-now.html">Apply Online</a></li>
                                </ul>
                        </div>

                </div>



        </div>
</nav>