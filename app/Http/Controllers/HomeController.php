<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function _construct()
    {
        //  Testing gitlab runner
        //  Testing gitlab runner 2
    }


    /**
     * Serves the homepage
     *
     * @return View
     */
    public function index(): View
    {
        //  Prepare the testimonials for display
        $testimonials = config('content.testimonials');

        foreach ($testimonials as $i => &$testimonial)
        {
            //  Set the previous and next item indexes. Used by the JS to correctly move to the next or previous item
            $thisItem = $i + 1;

            if($thisItem - 1 <= 0)
            {
                $testimonial['previous'] = count($testimonials);
                $testimonial['next'] = $thisItem + 1;
            }
            elseif($thisItem + 1 > count($testimonials))
            {
                $testimonial['previous'] = $thisItem - 1;
                $testimonial['next'] = 1;
            }
            else
            {
                $testimonial['previous'] = $thisItem - 1;
                $testimonial['next'] = $thisItem + 1;
            }
        }

        return view('pages.home', ['testimonials' => $testimonials]);
    }
}

