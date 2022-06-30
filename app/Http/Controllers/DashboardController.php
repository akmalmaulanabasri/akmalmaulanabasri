<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.home');
    }

    public function showcase()
    {
        $data = Project::all();
        return view('dashboard.showcase' , compact('data'));
    }

    public function tambah(){
        return view('dashboard.tambah-project');
    }

    public function simpan(Request $request)
    {

       $validatedData = $request->validate([
            'judul' => 'required',
            'gambar' => 'image|file|max:2048',
            'link' => 'required',
            'repo' => 'required',
            'featured' => 'required',
        ]);
        
        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }
        
        Project::create($validatedData);
        return redirect()->route('showcase-project');
    }
    
    public function edit($id)
    {
        $data = Project::find($id);
        return view('dashboard.edit-project' , compact('data'));
    }
    
    public function editProject(Request $request)
    {

        $id = $request->id;
        $validatedData = $request->validate([
            'judul' => 'required',
            'gambar' => 'image|file|max:2048',
            'link' => 'required',
            'repo' => 'required',
            'featured' => 'required',
        ]);
        
        if(isset($request->hapusGambar) && $request->hapusGambar == 'on'){
            $validatedData['gambar'] = null;
        }

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }

        Project::where('id', $id)->update($validatedData);
        return redirect()->route('showcase-project');
    }

    public function delete($id)
    {
        Project::destroy($id);
        return redirect()->route('showcase-project');
    }

    public function user(){
        $user = User::all()->sortBy('id');
        return view('dashboard.daftar-user', compact('user'));
    }
}
