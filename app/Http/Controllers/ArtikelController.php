<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
// use Illuminate\Support\Str;

class ArtikelController extends Controller
{

    public function articles(){
        $articles = Artikel::all();
        return view('articles', compact('articles'));
    }

    public function articlesDetail($slug){
        $article = Artikel::where('slug', $slug)->first();
        if(!$article){
            abort(404);
        }
        return view('articles-detail', ['article' => $article]);
    }

    public function artikel(){
        $artikel = Artikel::all();
        return view('dashboard.artikel', compact('artikel'));
    }

    public function tambahArtikel (){
        return view('dashboard.tambah-artikel');
    }

    public function tambahArtikelBaru(Request $request)
    {
        // @dd($request->all());

        $validatedData = $request->validate([
            'judul' => 'required',
            'gambar' => 'image|file|max:2048',
            'penulis' => 'required',
            'kategori' => 'required',
            'artikel' => 'required',
        ]);

        $validatedData['slug'] = strtolower(str_replace(' ', '-', $request->judul));
        
        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }
        
        Artikel::create($validatedData);
        return redirect()->route('artikel');
    }

    public function editArtikel($id)
    {
        $artikel = Artikel::find($id);
        return view('dashboard.edit-artikel', compact('artikel'));
    }

    public function edit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'gambar' => 'image|file|max:2048',
            'penulis' => 'required',
            'kategori' => 'required',
            'artikel' => 'required',
        ]);
        
        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }
        
        Artikel::whereId($id)->update($validatedData);
        return redirect()->route('artikel');
    }

    public function delete($id)
    {
        Artikel::destroy($id);
        return redirect()->route('artikel');
    }
}
