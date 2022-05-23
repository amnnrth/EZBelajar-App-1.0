<?php

namespace App\Http\Controllers;

use App\Models\Belajar;
use App\Models\Post;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Belajar::get()->take(1);

        return view('pages.landing.index', compact('posts'));
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
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
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

    // Custom

    public function belajar()
    {

        $posts = Belajar::all();
        return view('pages.Landing.video.belajar',compact('posts'));
    }

    public function detailBelajar($title)
    {
        $post = Belajar::where('title',$title)->first();
        return view('pages.Landing.video.detail-belajar',compact('post'));
    }

    public function banksoal()
    {
        return view('pages.Landing.banksoal.bank-soal');
    }

    public function detailBanksoal()
    {
        return view('pages.Landing.banksoal.detail-bank-soal');
    }

    public function tentangkami()
    {
        return view('pages.Landing.tentang-kami');
    }

    public function artikel(Request $request)
    {

//        if ($request->has('search')) {
//            $search = $request->get('search');
//            $post = Post::where('title', 'LIKE', '%' . $search . '%')->paginate(5);
//        } else {
//            $post = Post::paginate(5);
//        }

        if($request->search){
            $posts = Post::where('title', 'like', '%' . $request->search . '%')
                ->orWhere('body', 'like', '%' . $request->search . '%')
                ->latest()->paginate(4);
        }

        $posts = Post::latest()->get();

        return view('pages.Landing.artikel.artikel',compact('posts'));
    }

    public function detailartikel($slug)
    {
        $post = Post::where('slug',$slug)->first();
        return view('pages.Landing.artikel.detail-artikel',compact('post'));
    }
}
