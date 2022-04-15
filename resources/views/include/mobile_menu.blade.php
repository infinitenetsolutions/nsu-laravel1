<ul class="navbar-nav ml-auto">
    <li class="nav-item hidden-xs"><a class="nav-link" href="admission-procedure-domestic.html">
            Admissions</a>
        <ul class="dropdown-menu">

            <li><a href="{{ route('course_list') }}">Online Admission</a></li>

            <?php $admissions = DB::table('pages')
                ->where('page_type', 'admission')
                ->get();
            ?>
            @foreach ($admissions as $admission)
                <li><a href="{{ route('admission', $admission->title) }}"> {{ $admission->sub_title }}</a></li>
            @endforeach
            <li><a href="{{ route('course_list') }}">Admission Enquiry</a></li>

            <li><a href="{{ route('career') }}">Career Test</a></li>
            <li><a href="https://neevfinance.hagnosoft.com/webform">Education Loan</a></li>
        </ul>
    </li>

    <li class="nav-item"><a class="nav-link" href="#">About NSU
            <span class="span_icon"></span></a>
        <?php $abouts = DB::table('pages')
            ->where('is_deleted', '1')
            ->where('page_type', 'about')
            ->limit(9)
            ->get();
        ?>
        <ul class="dropdown-menu">
            @foreach ($abouts as $about)
                <li><a href="{{ route('about', $about->title) }}">
                        {{ $about->sub_title }}</a></li>
            @endforeach

            <?php $facultyes = DB::table('faculty_tbl')
                ->where('is_deleted', '1')
                ->distinct()
                ->get(['type']);
            ?>
            @foreach ($facultyes as $faculty)
                <li><a href="{{ route('faculty', $faculty->type) }}">Meet
                        our {{ $faculty->type }}</a></li>
            @endforeach
            <?php $studentpdfs = DB::table('pdf')
                ->where('type', 'aboutpdf')
                ->where('is_deleted', '1')
                ->get();
            ?>
            <li><a href="{{ route('govbody') }}"> The Governing Body</a></li>
            @foreach ($studentpdfs as $studentpdf)
                @if (url_check($home_url . 'pdf/' . $studentpdf->images))
                    <li><a target="_blank" href="{{ $home_url . 'pdf/' . $studentpdf->images }}">
                            {{ $studentpdf->title }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </li>


    <li class="nav-item"><a href="#" class="nav-link">Programs
            <span class="span_icon"></span></a>

        <?php $programs = DB::table('course_tbl')
            ->select('program')
            ->where('is_deleted', '1')
            ->groupBy('program')
            ->orderBy(DB::raw('count(id) '), 'DESC')
            ->get(); ?>

        <ul class="dropdown-menu">
            @foreach ($programs as $program)
                <li> <a class="color-orange text-capitalize"
                        href="{{ route('program', strtolower(str_replace(' ', '-', $program->program))) }}"><b>
                            <?php echo $program->program; ?>
                        </b></a> </li>
            @endforeach
        </ul>
    </li>

    <li class="nav-item"><a href="#" class="nav-link">Infrastructure
            <span class="span_icon"></span></a>
        <?php $infrastructures = DB::table('pages')
            ->where('page_type', 'infrastructure')
            ->where('is_deleted', '1')
            ->get();
        ?>
        <ul class="dropdown-menu">
            @foreach ($infrastructures as $infrastructure)
                <li><a href="{{ route('infrastructure', $infrastructure->title) }}">
                        {{ $infrastructure->sub_title }}</a></li>
            @endforeach
        </ul>
    </li>


    <li class="nav-item"><a href="#" class="nav-link">Placement
            <span class="span_icon"></span></a>
        <?php $infrastructures = DB::table('pages')
            ->where('page_type', 'placement')
            ->where('is_deleted', '1')
            ->limit(9)
            ->get();
        ?>
        <ul class="dropdown-menu">
            @foreach ($infrastructures as $infrastructure)
                <li><a href="{{ route('placement', $infrastructure->title) }}">
                        {{ $infrastructure->sub_title }}</a></li>
            @endforeach


            <li> <a href="{{ route('appointment') }}"> Appointment Letter</a></li>
            <li><a href="{{ route('requiters') }}"> Our Requiters </a></li>
            <li><a href="{{ route('placement-contact') }}"> Placement Contact </a></li>
        </ul>
    </li>



    <li class="nav-item"><a href="#" class="nav-link">Student
            <span class="span_icon"></span></a>
        <?php $infrastructures = DB::table('pages')
            ->where('page_type', 'student')
            ->where('is_deleted', '1')
            ->get();
        ?>
        <ul class="dropdown-menu">
            @foreach ($infrastructures as $infrastructure)
                <li><a href="{{ route('student', $infrastructure->title) }}">
                        {{ $infrastructure->sub_title }}</a></li>
            @endforeach
            <?php $studentpdfs = DB::table('pdf')
                ->where('type', 'studentpdf')
                ->where('is_deleted', '1')
                ->get();
            ?>

            @foreach ($studentpdfs as $studentpdf)
                @if (url_check($home_url . 'pdf/' . $studentpdf->images))
                    <li> <a target="_blank" href="{{ $home_url . 'pdf/' . $studentpdf->images }}">

                            {{ $studentpdf->title }}
                        </a></li>
                @endif
            @endforeach

        </ul>
    </li>


    <li class="nav-item hidden-xs"><a class="nav-link" href="#">
            Gallery</a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('image-gallery') }}">University Gallery</a></li>
            <li><a href="{{ route('media-gallery') }}">Media Gallery</a></li>

        </ul>
    </li>

    <li class="nav-item hidden-xs"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
            aria-expanded="false">Education Loan</a>
        <ul class="dropdown-menu">
            <li><a href="https://propelld.com/signin">Propelld</a></li>
            <li><a href="https://neevfinance.hagnosoft.com/webform">neevfinance</a></li>

        </ul>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>

    <li class="nav-item"><a class="nav-link apply_btn" href="https://nsucms.in/prospectus/public/">Apply
            Online</a>
    </li>

<br>
    <ul class="address" style="padding: 5px 0px 0px 15px;">
        <li class="nsu_map"><i class="fas fa-map"></i> #1. Pokhari,Near Bhilai Pahadi, Jamshedpur,Jharkhand
        </li>
        <li class="nsu_map"><i class="fas fa-map"></i> #2. Shatabdi Tower, 4th Floor, Sakchi, Jamshedpur,
            Jharkhand </li>
        <li class="text-white"><i class="fa fa-phone "></i> 0657-223-3022, 9386-817-857

        </li>
        <li class="text-white"><i class="fas fa-envelope"></i> info@nsuniv.ac.in
        </li>


        <li class="nav-item"><a class="nav-link apply_btn" href="https://nsucms.in/prospectus/public/">Vision 2k22
            </a>
        </li>



    </ul>




</ul>
<style>
    /*style*/

    ul.address .nsu_map {
        margin-bottom: 8px !important;
        color: #e3ae21;
        padding: 0px 5px !important;
    }

    .slimScrollDiv {
        overflow: scroll !important;
    }

</style>
