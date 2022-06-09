<?php

namespace App\Http\Controllers;

//use App\Models\Category;
use App\Models\Post;
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
    public function show(Post $post)
//    public function show(Post $post)
    {
//        $category = $post->category;
//P
//        $relatedPosts = Post::where('category_id', $category->id)->latest()->take(3)->get();
//        return view('blog.show', compact('post', 'category', 'relatedPosts'));
//        $post = Post::fi

//        Post::all();

        return view('pages.Dashboard.blog.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
//        if (auth()->user()->id !== $post->user_id) {
//            return redirect()->route('admin.artikel.index')->with('error', 'You are not authorized to edit this post');
//        }

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
        if (auth()->user()->id !== $post->user_id) {
            return redirect()->route('blog.index')->with('error', 'You are not authorized to edit this post');
        }

        $request->validate([
            'title' => 'required',
            'image' => 'required | image',
            'body' => 'required'
        ]);

        $title = $request->input('title');

        $postId = $post->id;
        $slug = Str::slug($title, '-') . '-' . $postId;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
//        if (auth()->user()->id !== $post->user_id) {
//            return redirect()->route('blog.index')->with('error', 'You are not authorized to delete this post');
//        }

        if ($post->imagePath) {
            Storage::delete($post->imagePath);
        }
        Post::destroy($post->id);

//        $post->delete();
        return redirect()->route('admin.artikel.index')->with('success', 'Post deleted successfully');
    }
}
