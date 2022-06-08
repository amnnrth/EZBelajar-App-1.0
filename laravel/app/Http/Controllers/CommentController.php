<?php

namespace App\Http\Controllers;

use App\Models\Belajar;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function __construct()
    {
        auth();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeArtikel(Request $request)
    {

        $request->validate([
            'comment' => 'required',
        ]);

        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->user()->associate($request->user());
        $post = Post::find($request->get('post_id'));
//        $post = Post::find($request->input('post_id'));
//        $post = Post::find($request->get('id', 'post_id'));
        dd($post);
        $post->comments()->save($comment);

//        $belajar = Belajar::find($request->get('belajar_id'));
//        $belajar->comments()->save($comment);

        return back();
    }

    public function storeBelajar(Request $request)
    {

        $request->validate([
            'comment' => 'required',
        ]);

        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->user()->associate($request->user());
//        $post = Belajar::find($request->get('belajar_id'));
        $post = Belajar::find($request->get('belajar_id'));
//        dd($post);
        $post->comments()->save($comment);

//        $comment = new Comment;
//        $comment->comment = $request->comment;
//        $comment->user()->associate($request->user());
//        $post = Belajar::find($request->get('belajar_id'));
////        dd($comment);
//        $post->comments()->save($comment);
//        $post = Post::find($request->get('belajar_id'));
//        $belajar = Belajar::find($request->get('belajar_id'));
//        $belajar->comments()->save($comment);

//        dd($belajar);

        return back();
    }

    public function replyStore(Request $request)
    {

//        $request->validate([
//            'comment' => 'required',
//        ]);

        $reply = new Comment();
        $reply->comment = $request->get('comment');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');

//        dd($reply);

//        $post = Post::find($request->get('id'));
        $post = Post::find($request->get('post_id'));

//        dd($post);
        $post->comments()->save($reply);

//        $belalajar = Belajar::find($request->get('id'));
//        $belalajar->comments()->save($reply);

        return back();

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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
