<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpgradeCampusController extends Controller
{
    public function index()
    {
        return view('upgrade');
    }

    public function CourseCMA()
    {
        return view('coursecma');
    }
}
