<?php

namespace App\Http\Controllers;

//use App\Models\Category;
use App\Models\Post;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
//    function __construct(){
//        $this->middleware('permission:post-list|post-create|post-edit|post-delete')->only(['index','show']);
//        $this->middleware('permission:post-create')->only(['create','store']);
//        $this->middleware('permission:post-edit')->only(['edit','update']);
//        $this->middleware('permission:post-delete')->only(['destroy']);
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->search){
            $posts = Post::where('title', 'like', '%' . $request->search . '%')
                ->orWhere('body', 'like', '%' . $request->search . '%')
                ->orWhereHas('user', function ($query) use ($request) {
                    $query->where('name', 'like', '%' . $request->search . '%');
                })
                ->latest()->paginate(4);
        }
//        elseif($request->category){
//            $posts = Category::where('name', $request->category)->firstOrFail()->posts()->paginate(3)->withQueryString();
//        }
        else{
            $posts = Post::latest()->paginate(5);
        }

//        $posts = Post::all();
//        $categories = Category::all();

        return view('pages.Dashboard.blog.index', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 5);

//        return view('blog.index', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 5)();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $categories = Category::all();
        return view('pages.Dashboard.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        Post::create(request()->all());

//storing must follow this convention (model lowered class name)-trixFields
//        Post::create([
//            'title' => 'required',
//            'post-trixFields' => request('post-trixFields'),
//        ]);

        $request->validate([
            'title' => 'required',
//            'image' => 'required | image',
            'body' => 'required',
//            'category_id' => 'required'
        ]);

        $title = $request->input('title');
//        $category_id = $request->input('category_id');

        if (Post::latest()->first() != null) {
            $postId = Post::latest()->first()->id + 1;
        } else {
            $postId = 1;
        }

        $slug = Str::slug($title, '-') . '-' . $postId;
        $user_id = auth()->user()->id;  // get the user id
        $body = $request->input('body');

        // file upload
//        $imagePath = 'storage/' . $request->file('image')->store('public/assets/soal');
        $imagePath = $request->file('image')->store('public/assets/blog');

        $post = new Post();
        $post->title = $title;
        $post->slug = $slug;
        $post->imagePath = $imagePath;
        $post->body = $body;
//        $post->category_id = $category_id;
        $post->user_id = $user_id;
        $post->save();

        toast()->success('Blog created successfully', 'Success');
        return redirect()->route('admin.artikel.index')->with('success', 'Post created successfully');
    }

    /**P
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('pages.Dashboard.blog.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        if (auth()->user()->id !== $post->user_id) {
//            return redirect()->route('admin.artikel.index')->with('error', 'You are not authorized to edit this post');
//        }

        $post = Post::findOrFail($id);

        return view('pages.Dashboard.blog.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
//            'imagePath' => 'required | image',
            'body' => 'required',
        ]);

        $title = $request->input('title');

        $slug = Str::slug($title, ) . '-' . $post->id+1;
        $user_id = auth()->user()->id;  // get the user id
        $body = $request->input('body');

       // delete old imagePath from storage
        if (isset($post->imagePath)) {
            $data = explode('storage/', $post->imagePath);
            if (File::exists(storage_path('app/public/assets/blog/' . $data[1]))) {
                File::delete(storage_path('app/public/assets/blog/' . $data[1]));
            }else{
                File::delete(storage_path('app/public/assets/blog/' . $data[1]));
            }
        }

        // store imagePath to storage
        if(isset($request->imagePath)) {
            $imagePath = $request->file('imagePath')->store('public/assets/blog');
        }else{
            $imagePath = $post->imagePath;
        }

        $post->title = $title;
        $post->slug = $slug;
        $post->body = $body;
        $post->user_id = $user_id;
        $post->imagePath = $imagePath;
//        dd($post);
        $post->save();

        toast()->success('Blog updated successfully', 'Success');
        return redirect()->route('admin.artikel.index')->with('success', 'Post updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        if (auth()->user()->id !== $post->user_id) {
//            return redirect()->route('blog.index')->with('error', 'You are not authorized to delete this post');
//        }

        $post = Post::findOrFail($id);

        if ($post->imagePath) {
            Storage::delete($post->imagePath);
        }
        Post::destroy($post->id);

//        $post->delete();

        toast()->success('Blog deleted successfully', 'Success');
        return redirect()->route('admin.artikel.index')->with('success', 'Post deleted successfully');
    }
}
