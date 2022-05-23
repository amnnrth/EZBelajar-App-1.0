<?php

namespace App\Http\Controllers;

use App\Models\Belajar;
use App\Models\User;
use Illuminate\Http\Request;

use File;

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
//    public function index()
//    {
//        $belajars = Belajar::latest()->paginate(5);
//
//        // search
//        if (\request('search')){
//            $belajars = Belajar::where('title', 'like', '%' . request('search') . '%')
////            ->orWhere('description', 'like', '%' . \request('search') . '%')
////            ->orWhere('price', 'like', '%' . \request('search') . '%')
////            ->orWhere('stock', 'like', '%' . \request('search') . '%')
////            ->orWhere('created_at', 'like', '%' . \request('search') . '%')
////            ->orWhere('updated_at', 'like', '%' . \request('search') . '%')
//            ->paginate(5);
//        }
//
//        $users = User::all();
//        return view('pages.Dashboard.belajar.index', compact('belajars'))->with('i', (request()->input('page', 1) - 1) * 5);
//    }

    public function index(Request $request)
    {
        if ($request->filled('search')){
            $belajars = Belajar::where('title', 'like', '%' . $request->search . '%')
                ->orWhereHas('user', function ($query) use ($request) {
                    $query->where('name', 'like', '%' . $request->search . '%');
                })
//                ->orWhere('description', 'like', '%' . $request->search . '%')
//                ->orWhere('price', 'like', '%' . $request->search . '%')
//                ->orWhere('stock', 'like', '%' . $request->search . '%')
//                ->orWhere('created_at', 'like', '%' . $request->search . '%')
//                ->orWhere('updated_at', 'like', '%' . $request->search . '%')
                ->paginate(5);
        }else{
            $belajars = Belajar::orderBy('id','DESC')->paginate(5);
        }

        return view('pages.Dashboard.belajar.index',compact('belajars'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.belajar.create');
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

        $user_id = auth()->user()->id;  // get the user id

        $path = $request->file('cover')->store('public/assets/cover-images');
        $post = new Belajar();
        $post->title = $request->title;
        $post->cover = $path;
        $post->link = $request->link;
        $post->user_id = $user_id;
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


        return redirect()->route('admin.belajar.index')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Belajar $belajar)
    {
        return view('pages.dashboard.belajar.show', compact('belajar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Belajar $belajar)
    {
        return view('pages.dashboard.belajar.edit', compact('belajar'));
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
        $user_id = auth()->user()->id;  // get the user id
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
        $post->user_id = $user_id;
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

        return redirect()->route('admin.belajar.index')->with('success', 'Berhasil mengubah data');
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

        return redirect()->route('pages.Dashboard.belajar.index')->with('success', 'Berhasil menghapus data');
    }

    public function find(Request $request)
    {
        $search = $request->get('search');
        $data = Belajar::where('title', 'LIKE', '%'.$search.'%')->paginate(10);
        return view('pages.dashboard.belajar.index', compact('data'));
    }
}
