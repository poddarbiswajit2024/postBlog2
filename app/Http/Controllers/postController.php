<?php

namespace App\Http\Controllers;

use App\Models\post;
use Auth;
use Illuminate\Http\Request;
use Log;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post = Post::latest()->paginate(20);
        return view('post', ['posts' => $post]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('createpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Log::info("store");

        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required|max:500',
        ]);
        $post = new Post();
        $post->user_id = Auth::User()->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return ("hey");
        $post = Post3::find($id);

        return response()->json([
            'data' => $post22,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $post = post::find($request->post_id);
        $post->user_id = Auth::User()->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        dd($request->all());
        $cliente = Client::find($id);
        $cliente->delete(); //delete the client
        return "inside destroy";
    }
}
