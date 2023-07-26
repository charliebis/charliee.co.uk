<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class WorkController extends Controller
{
    public function _construct()
    {

    }


    /**
     * Serves the work page
     *
     * @return View
     */
    public function index(): View
    {
        return view('pages.work');
    }
}

