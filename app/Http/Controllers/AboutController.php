<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function _construct()
    {

    }


    /**
     * Serves the contact form, upon GET request to the contact page
     *
     * @return View
     */
    public function index(): View
    {
        return view('pages.about');
    }
}

