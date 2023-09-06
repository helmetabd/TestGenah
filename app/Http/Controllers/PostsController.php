<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.index', [
            'posts' => Posts::latest()->filter(request(['published', 'search']))->paginate(10)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'gender' => 'required|in:male,female',
            'is_publish' => 'required|boolean',
            'description' => 'required'
        ]);

        Posts::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');;
    }

    public function create() {
        return view('pages.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $posts)
    {
        return view('pages.show', [
            'posts' => $posts       
        ]);
    }

    public function edit(Posts $posts) {
        return view('pages.edit', ['posts' => $posts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posts $posts)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'gender' => 'required|in:male,female',
            'is_publish' => 'required|boolean',
            'description' => 'required'
        ]);

        $posts->update($formFields);

        return back()->with('message', 'Listing updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $posts)
    {
        $posts->delete();
        return redirect('/')->with('message', 'Listing deleted successfully!');
    }
}

