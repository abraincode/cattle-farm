<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

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
        $posts = Post::all();
        // passing variable ke view
        return view('post.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
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
                'nim'            => 'required|numeric',
                'nama'           => 'required|max:255',
                'alamat'         => 'required',
                'telepon'        => 'required|numeric',
                'jenis_kelamin'  => 'required',
                'agama'          => 'required',

            ));

        // simpan ke database request tertentu
        /*
        $post = new Mahasiswa;
        $post->nim = $request->nim;
        $post->nama = $request->nama;
        $post->alamat = $request->alamat;
        $post->telepon = $request->telepon;
        $post->jenis_kelamin = $request->jenis_kelamin;
        $post->agama = $request->agama;
        $post->save();
        */

        // simpan ke database semua request
        \App\Post::create($request->all());

        // flash messages
        $request->session()->flash('status', 'Data berhasil disimpan!');

        // redirect ke halaman
        return redirect()->route('post.index');
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
        return view('post.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit-helper', compact('blog'));
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
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('post.index')->with('status','Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id)->delete();
        return redirect()->route('post.index')->with('status','Data berhasil dihapus.');
    }
}
