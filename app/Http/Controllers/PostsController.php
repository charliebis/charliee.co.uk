<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $id): Response
    {
        //
        return \response('Hello, world. The number is: ' . $id, 200)->header('Content-Type', 'text/html');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
        return \response('I am the create() method', 200)->header('Content-Type', 'text/html');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
        return \response('This is the show method: ' . $id, 200)->header('Content-Type', 'text/html');


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }


    public function contact(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $people = ['Jim', 'Bob', 'Mike'];

        return view('contact', compact('people'));
    }

    public function showPost(string $id, string $name, string $extra): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        /*return view('post')
                ->with('id',  $id);*/

        return view('post', compact('id', 'name', 'extra'));
    }
}
