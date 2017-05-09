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
        $blogs = Blog::all();
        // passing variable ke view
        return view('blog.index')->withBlogs($blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
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
        $blog = new Mahasiswa;
        $blog->nim = $request->nim;
        $blog->nama = $request->nama;
        $blog->alamat = $request->alamat;
        $blog->telepon = $request->telepon;
        $blog->jenis_kelamin = $request->jenis_kelamin;
        $blog->agama = $request->agama;
        $blog->save();
        */

        // simpan ke database semua request
        \App\Blog::create($request->all());

        // flash messages
        $request->session()->flash('status', 'Data berhasil disimpan!');

        // redirect ke halaman
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit-helper', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());
        return redirect()->route('blog.index')->with('status','Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id)->delete();
        return redirect()->route('blog.index')->with('status','Data berhasil dihapus.');
    }
}
