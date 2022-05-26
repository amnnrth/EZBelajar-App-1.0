<?php

namespace App\Http\Controllers;

use App\Models\BankSoal;
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

        if (request('search'))
        {
            $posts = Belajar::where('title', 'LIKE', '%' . request('search') . '%')
                ->with([
                    'user:id,name',
                    'comments.user:id,name',
                    'comments.replies.user:id,name',
                    'comments.replies.replies.user:id,name',
                    'comments.replies.replies.replies.user:id,name'])
                ->get();
        }

        return view('pages.Landing.video.belajar',compact('posts'));
    }

    public function detailBelajar($title)
    {
        $post = Belajar::where('title',$title)->first();
        return view('pages.Landing.video.detail-belajar',compact('post'));
    }

    public function banksoal()
    {
        $posts = BankSoal::latest()->get();

        if (request('search'))
        {
            $posts = BankSoal::where('title', 'LIKE', '%' . request('search') . '%')
                ->get();
        }

        return view('pages.Landing.banksoal.bank-soal',compact('posts'));
    }

    public function detailBanksoal($title)
    {
        $post = BankSoal::where('title',$title)->first();
        return view('pages.Landing.banksoal.detail-bank-soal',compact('post'));
    }

    public function tentangkami()
    {
        return view('pages.Landing.tentang-kami');
    }

    public function artikel()
    {
        $posts = Post::latest()->get();

        if (request('search')){
            $posts = Post::where('title', 'like', '%' . request('search') . '%')
                ->with([
                    'user:id,name',
                    'comments.user:id,name',
                    'comments.replies.user:id,name',
                    'comments.replies.replies.user:id,name',
                    'comments.replies.replies.replies.user:id,name'])
                ->orWhere('body', 'like', '%' . request('search') . '%')
                ->latest()->paginate(3);
        }

        return view('pages.Landing.artikel.artikel',compact('posts'));
    }

    public function detailartikel($slug)
    {
        $post = Post::where('slug',$slug)->first();
        return view('pages.Landing.artikel.detail-artikel',compact('post'));
    }

    public function test(){
//        return view('components.modal.reset-password');
    }
}
