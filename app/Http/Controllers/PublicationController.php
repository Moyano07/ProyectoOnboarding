<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $publications = Publication::all();
        return view('publication.list',compact('publications'));
    }

    public function create()
    {
        return view('publication.create');
    }


    public function store(Request $request)
    {
        //dd($request->all());
        $dataValidated = $request->validate([
            'title' => 'required|max:255|unique:publications',
            'content' => 'required| min:7'
        ]);

        $publication = new Publication();

        $publication->title = $dataValidated['title'];
        $publication->content = $dataValidated['content'];
        $publication->user_id= auth()->id();
        $publication->save();

        $status = 'Tu publicacion ha sido creada con existo';

        return back()->with(compact('status'));
    }
}
