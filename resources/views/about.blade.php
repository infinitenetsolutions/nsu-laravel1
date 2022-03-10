<x-layout1>
    @slot('body')

<style>
    .box-hover-effect .effect-wrapper {
    position: relative;
    overflow: hidden;
    margin: 0;
    width: 100%;
}
.box-hover-effect:hover .effect-wrapper .thumb {
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    -o-transform: scale(1.05);
    transform: scale(1.05);
}
.about-video:hover .thumb {
    -webkit-transform: scale(1) !important;
    -ms-transform: scale(1) !important;
    -o-transform: scale(1) !important;
    transform: scale(1) !important;
}
.box-hover-effect .effect-wrapper .thumb {
    position: relative;
    overflow: hidden;
    backface-visibility: hidden;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    -webkit-transition: all 0.4s ease;
    -o-transition: all 0.4s ease;
    transition: all 0.4s ease;
}
.effect-wrapper:hover .video-button {
    background-color: rgba(239, 88, 97, 0.9);
}
.effect-wrapper:hover .video-button {
    width: 65px;
    height: 65px;
    box-shadow: 1px 1px 20px rgb(0 0 0 / 30%);
}

.effect-wrapper .video-button {
    z-index: 11;
    position: absolute;
    top: 50%;
    left: 50%;
    background: rgba(255, 255, 255, 0.8);
    width: 60px;
    height: 60px;
    border-radius: 100%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    box-shadow: 0 10px 30px rgb(0 0 0 / 30%);
    -webkit-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.effect-wrapper:hover .video-button:before {
    border-left: 10px solid #fff;
}
.effect-wrapper .video-button:before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    display: block;
    width: 0;
    height: 0;
    border-top: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-left: 10px solid #666;
    -webkit-transform: translate(-15%, -50%);
    transform: translate(-15%, -50%);
    -webkit-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.effect-wrapper .hover-link {
    bottom: 0;
    display: block;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    background: none !important;
    color: transparent !important;
    z-index: 11;
}
</style>

    <section class="inner-page">
        <div class="inner-hadding">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index-2.html">Home</a>
                    <a href="about-university.html">About NSU</a>
                    Who We Are
                </div>

                <h1>Who We Are</h1>
            </div>
        </div>
        <section class="academia-sec1">
            
            <div class="academia-sec1-main">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                            <!-- <span><img src="images/academia-img1.jpg" class="img-fluid"></span> -->


                            <div class="effect-wrapper">
                                <div class="thumb">
                                    <img class="img-fullwidth" src="images/academia-img1.jpg" alt="project">
                                </div>
                                <div class="video-button"></div>
                                <a class="hover-link" data-lightbox-gallery="youtube-video" href="https://www.youtube.com/embed/phWNqyfCgzI" title="Youtube Video">Youtube
                                    Video</a>
                            </div>



                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                            <ul class="row">
                                <p class="col-12 col-md-12 col-lg-12 col-xl-12">The University today is proud of its infrastructure and services provided to both the student and staff. The Central Library facilitates, the teachers, the Research scholars and the students of the University for acquiring and researching on various educational subjects, which are immensely supported by the books and journals available to them. The books and journals available in the library are authored by both Indian and International authors. The University has fiber-optic network in the campus connecting different departments with one another.

                                    The campus now spreads over 25 acres of lush green hilly terrain, pollution free environment, and the buildings in the campus blend attractively with the beautiful natural surroundings.</p>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="academia-sec2">
            <div class="container">
                <h2><span>ACADEMIC ENVIRONMENT</span></h2>

                {{-- <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 pro-ac">
                      
                        <p>The reputed faculty recruited from all across the country are dynamic and updated with the current academic curriculum as well as the industry requirements which help the students not only to acquire academic but industry specific knowledge.

                            Besides Academics, Personality Development and Communication skills is a great focus area at NSU because a great percentage of success in life depends on a person's confidence and personality. To help students in personal grooming, special sessions are held on business etiquette, negotiation skills and effective communication. Special classes are held on leadership, teamwork and analytical skills.
                            
                            Apart from these, Practical, industry-oriented teaching, seminars on contemporary issues are becoming the regular and integral part of our courses.
                            
                            With such an excellence grooming the students of University are able to secure good jobs for themselves.</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 pro-ac2">
                        <h3>Internal Evaluation System</h3>
                        <p>The scheme of examinations & evaluation is one of the most important components of judging
                            the academic performance and development of the students. Therefore, in Amity, the students
                            are assessed at regular intervals. 30% weightage is given to continuous/internal assessment
                            in a semester wherein 3-4 evaluation components with weightages are defined. It covers Class
                            Test, Viva, Quiz, Case Discussion / Presentation / Analysis, Home Assignment, Project,
                            Seminar, Term Paper, Attendance etc.</p>
                    </div>
                </div> --}}
            </div>
        </section>
        <div class="container">
            <section class="academia-sec3">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <span><img src="images/academia-img2.jpg" class="img-fluid"></span>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 academia-sec3-right">
                        {{-- <h3>Grade System</h3> --}}
                        <p>The reputed faculty recruited from all across the country are dynamic and updated with the current academic curriculum as well as the industry requirements which help the students not only to acquire academic but industry specific knowledge.

                            Besides Academics, Personality Development and Communication skills is a great focus area at NSU because a great percentage of success in life depends on a person's confidence and personality. To help students in personal grooming, special sessions are held on business etiquette, negotiation skills and effective communication. Special classes are held on leadership, teamwork and analytical skills.

                            Apart from these, Practical, industry-oriented teaching, seminars on contemporary issues are becoming the regular and integral part of our courses.

                            With such an excellence grooming the students of University are able to secure good jobs for themselves.
                    </div>
                </div>
            </section>
        </div>
        {{-- <section class="academia-sec2 top-minus">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 pro-ac">
                        <h3>100% Attendance</h3>
                        <p>Every student in Amity University is required to achieve 100% attendance in all the Lectures,
                            Tutorials and Practicals and Seminars arranged for the respective course during the
                            semester. However, a relaxation up to a maximum of 25% is granted in case of contingencies.
                            A minimum of 75% attendance is required to appear in the examinations. 100% attendance
                            criteria ensure academic excellence, disciplinary approach and growth of the student.</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 pro-ac2">
                        <h3>Curricular Updation</h3>
                        <p>The detailed course curriculum of all the programmes in Amity University is reviewed at
                            regular intervals as per the industry requirements. For this, many points are considered
                            such as feedback reports on the placements, employability of the passed out students, latest
                            developments in the technology, statutory compliances of various bodies etc. The course
                            syllabus is first examined and evaluated by an expert committee which is then reviewed by
                            Board of Studies of the institution for recommendations to Academic Council for approval.
                        </p>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="academia-sec4">
            <div class="container">
                <div class="academia-sec4">
                    <h3>Modes of Learning</h3>
                    <ul class="row">
                        <li class="col-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="colm-ac-sec4">
                                <h4>Full-time</h4>
                                <p>Full day classes</p>
                            </div>
                        </li>
                        <li class="col-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="colm-ac-sec4">
                                <h4>Part-time</h4>
                                <p>Weekend or hourly classes everyday</p>
                            </div>
                        </li>
                        <li class="col-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="colm-ac-sec4">
                                <h4>Online</h4>
                                <p>e-Study Programme accessible through internet from anywhere, anytime</p>
                            </div>
                        </li>
                        <li class="col-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="colm-ac-sec4">
                                <h4>Distance Learning</h4>
                                <ol>
                                    <li>Correspondence (purely self-study)</li>

                                </ol>
                            </div>
                        </li>
                        <li class="col-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="colm-ac-sec4">
                                <h4>Evening Mode</h4>
                                <p>Classes between 3-7 p.m.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        {{-- <section class="academia-sec5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="academia-sec5-left pt-5">
                            <h3>Personalized Attention</h3>
                            <p>The unique Mentor-Mentee Concept at Amity ensures a constant interaction between the
                                faculty and the students. A faculty member is assigned to a group of 5-6 students to
                                counsel them on their academic and personal concerns. Their experience will help you
                                gain the confidence and skills you need to be a corporate success.</p>
                            <p>At Amity, you will never feel away from home. If you encounter any problem during your
                                tenure concerns about course work or personal / emotional problems, our USA and NIMHANS
                                trained counselors will be there for you, as your confidantes and true friends. The
                                Amity counselling services have been set up where expert counsellors provide counselling
                                to help students overcome their professional and personal problems.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 pt-5 pl-lg-5">
                        <span><img src="images/academia-img3.jpg" class="img-fluid padAdjust"></span>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="academia-sec6">
            <div class="container">
                <div class="row">
                    <div class="col-12 padAdjust">

                        {{-- <p>Amity University Campus is Ragging Free Campus. Number of Anti ragging measures in place to
                            ensure strict compliance.</p> --}}
                        <div class="row career no-gutters">
                            <div class="col-md-12">
                                <div class="ac-sec5-download">
                                    <h3 style="margin-top:26px;">For more details please visit UGC Website</h3>
                                    <br /><br />
                                    <a href="pdf/Noida_Anti_Ragging_2021-22.pdf" target="_blank"><span>UGC</span></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="academia-sec7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="academia-sec7-left">
                            <h4>The great thing at Amity is that while studying for your Degree Programme, you can also
                                study various certificate and Diploma Programmes in many areas like management, media,
                                art appreciation, photography etc.</h4>
                            <h5>Namit Kumar</h5>
                            <p>Integrated M.Tech. student at Amity University selected to MIT, USA.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <span><img src="images/academia-img4.jpg"></span>
                    </div>
                </div>
            </div>
        </section> --}}
    </section>
    @endslot
</x-layout1>