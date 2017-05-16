<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Tag;
use App\Category;
use Session;
use Purifier;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // variable dari semua model mahasiswa
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        // passing variable ke view
        return view('dashboard.posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('dashboard.posts.create')->withCategories($categories)->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi data
        $this->validate($request, array(
                'title'         => 'required|max:255',
                //'slug'          => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'category_id'   => 'required|integer',
                'content'          => 'required'

            ));

        // store in the database
        $post = new Post;
        $post->title = $request->title;
        $post->slug = str_slug($post->title);
        //$post->slug = $request->slug;
        $post->category_id = $request->category_id;
        $post->content = Purifier::clean($request->content);

        if ($request->hasFile('featured_img')) {
          $image = $request->file('featured_img');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->resize(800, 400)->save($location);
          $post->image = $filename;
        }

        $post->save();

        $post->tags()->sync($request->tags, false);

        // flash messages
        $request->session()->flash('status', 'Data berhasil disimpan!');

        // redirect ke halaman
        return redirect()->route('admin.post.index', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('dashboard.posts.show', compact('post'));
    }

    public function showSlug($slug)
    {
        //fetch from the DB based on slug
        $post = Post::where('slug', '=',  $slug)->first();
        return view('dashboard.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the database and save as a var
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $cats = array();
        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }

        $tags = Tag::all();
        $tags2 = array();
        foreach ($tags as $tag) {
            $tags2[$tag->id] = $tag->name;
        }
        // return the view and pass in the var we previously created
        return view('dashboard.posts.edit')->withPost($post)->withCategories($cats)->withTags($tags2);
        //return view('dashboard.posts.edit', compact('post','cats','tags2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // Validate the data
        $post = Post::findOrFail($id);

        if ($request->input('slug') == $post->slug) {
            $this->validate($request, array(
                'title' => 'required|max:255',
                'category_id' => 'required|integer',
                'content'  => 'required'
            ));
        } else {
        $this->validate($request, array(
                'title' => 'required|max:255',
                'slug'  => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'category_id' => 'required|integer',
                'content'  => 'required'
            ));
        }

        // Save the data to the database
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->content = Purifier::clean($request->input('content'));

        $post->save();

        if (isset($request->tags)) {
            $post->tags()->sync($request->tags);
        } else {
            $post->tags()->sync(array());
        }

        // set flash data with success message
        //Session::flash('success', 'This post was successfully saved.');
        // redirect with flash data to posts.show
        return redirect()->route('admin.post.index', $post->id)->with('status','Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->tags()->detach();
        $post->delete();
        //Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('admin.post.index')->with('status','Data berhasil dihapus.');
    }
}
