<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.news.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:4000',
            'description' => 'required',
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->slug = Str::slug($request->title);
        $news['image'] = $request->file('image')->store('news_image','public');
        $news->description = $request->description;

        $news->save();

        Alert::success('Sukses','Berita Berhasil dibuat');
        return redirect()->route('news.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = news::findorfail($id);
        return view('admin.pages.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:jpg,jpeg,png|max:4000',
            'description' => 'required',
        ]);

        $news = News::findorFail($id);
        $news->title = $request->title;
        $news->slug = Str::slug($request->title);
        $news->description = $request->description;

        if ($request->hasFile('image')) {
            // Jika ada, simpan gambar baru
            $data['image'] = $request->file('image')->store('agenda_image', 'public');
        }

        $news->save();

        Alert::success('Sukses', 'Berita Berhasil diubah');
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::findorfail($id);
        $news->delete();
        
        Alert::success('Sukses', 'Berita Berhasil dihapus');
        return redirect()->route('news.index');
    }
}
