<?php

namespace App\Http\Controllers;

use App\Models\Belajar;
use Illuminate\Http\Request;

class BelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:belajar-list|belajar-create|belajar-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:belajar-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:belajar-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:belajar-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $belajars = Belajar::latest()->paginate(5);
        return view('belajar.index', compact('belajars'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belajar.create');
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
            'title' => 'required',
            'cover' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'link' => 'required',
        ]);

        $path = $request->file('cover')->store('public/assets/cover-images');
        $post = new Belajar();
        $post->title = $request->title;
        $post->cover = $path;
        $post->link = $request->link;
        $post->save();

//        $request->validate([
//            'title' => 'required',
//            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'link' => 'required',
//        ]);
//
//        $input = $request->all();
//
//        if ($cover = $request->file('cover')) {
//            $destinationPath = 'assets/cover-image';
//            $coverImage = date('YmdHis') . "." . $cover->getClientOriginalExtension();
//            $cover->move($destinationPath, $coverImage);
//            $input['cover'] = "$coverImage";
//        }
//
//        Belajar::create($input);


        return redirect()->route('belajar.index')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Belajar $belajar)
    {
        return view('belajar.show', compact('belajar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Belajar $belajar)
    {
        return view('belajar.edit', compact('belajar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Belajar $belajar)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required',
        ]);

        $paths = $request->file('cover')->store('public/assets/cover-images'.$belajar->cover);

        if (File::exists($paths)) {
            File::delete($paths);
        }

        $post = Belajar::find($belajar->id);
        $post->title = $request->title;
        if($request->hasFile('cover')){
//            if(File::exists($paths)) {
//                File::delete($paths);
//            }
            $request->validate([
                'cover' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            $path = $request->file('cover')->store('public/assets/cover-images');
            $post->cover = $path;
        }
        $post->link = $request->link;
        $post->save();

//        $request->validate([
//            'title' => 'required',
//            'link' => 'required',
//        ]);
//
//        $input = $request->all();
//
////        $coverImage = 'assets/cover-image/'.$belajar->cover;
////
////        if(File::exists($coverImage)){
////            File::delete($coverImage);
////        }else{
////            File::delete('assets/cover-image/'.$belajar->cover);
////        }
//
//        if ($cover = $request->file('cover')) {
//            $destinationPath = 'assets/cover-image';
//            $coverImage = date('YmdHis') . "." . $cover->getClientOriginalExtension();
//            $cover->move($destinationPath, $coverImage);
//            $input['cover'] = "$coverImage";
//        }else{
//            unset($input['cover']);
//        }
//
//        $belajar->update($input);

        return redirect()->route('belajar.index')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Belajar $belajar)
    {
//
////        $belajar = Belajar::find($belajar->id);
//        $belajar = new Belajar();
//        $belajar->find($belajar->id)->delete();
        $belajar->delete();

        return redirect()->route('belajar.index')->with('success', 'Berhasil menghapus data');
    }
}