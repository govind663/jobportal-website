<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts'] = Post::orderBy('id','desc')->paginate(3);

        return view('Frontend.post-job', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Frontend.post-job');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image3' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        $input = $request->all();

        if ($image = $request->file('image3')) {
            $destinationPath = 'image3/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image3'] = "$profileImage";
        }

        Post::create($input);
        return redirect()->route('/post-jobs')
                        ->with('success','Post has been created successfully.');
    }



}
