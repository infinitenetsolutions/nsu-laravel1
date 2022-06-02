<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index($name)
    {
        $data = DB::table('pages')->where('page_type', 'student')->where('title', $name)->get();
        $quick_link = DB::table('pages')->where('page_type', 'student')->get();
        $quick_link1 = DB::table('pdf')->where('type', 'studentpdf')->get();

        return view('student', ['data' => $data[0], 'quicks' => $quick_link,'url'=>$this->url(), 'quicks1'=>$quick_link1]);
    }

    function alumni(){
        $data = DB::table('pages')->where('page_type', 'student')->get();
        $alumni = DB::table('alumni')->where('is_deleted', '1')->paginate(6);
        $quick_link = DB::table('pages')->where('page_type', 'student')->get();
        $quick_link1 = DB::table('pdf')->where('type', 'studentpdf')->get();
        return view('alumni', ['data' => $data[0], 'quicks' => $quick_link,'url'=>$this->url(), 'quicks1'=>$quick_link1,'alumni'=>$alumni]);
    }
}
