<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{

    
    public function topProject(){
        $project = Project::all();
        $project = $project->where('featured', 1);
        return $project;
    }

    public function KataBijak(){
        // get data from api
        $data = file_get_contents('https://api.akuari.my.id/randomtext/katabijak');
        $data = json_decode($data, true);
        $data = $data['hasil'];
        return $data;
    }

    public function index(){
        return view('home', ['project' => static::topProject()]);
    }

    public function projects(){
        $project = Project::all();
        return view('projects', ['project' => $project]);
    }

    public function articles(){
        return view('articles');
    }

    public function articlesDetail($id){
        return view('articles-detail', ['id' => $id]);
    }

    public function about(){
        return view('about', ['kataBijak' => static::KataBijak()]);
    }

}
