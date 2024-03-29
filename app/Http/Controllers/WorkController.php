<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class WorkController extends Controller
{
    public function _construct()
    {
    }

    /**
     * Serves the work page
     */
    public function index(): View
    {
        return view('pages.work');
    }
}
