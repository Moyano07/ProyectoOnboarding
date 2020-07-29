<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;

class GuestController extends Controller
{
public function index(){
    $publications = Publication::all();
    return view('welcome',compact('publications'));
}
}
