<?php

namespace App\Http\Controllers;
use App\Link;
use Illuminate\Http\Request;

class LinksController extends Controller
{


    public function index(){
        $links = Link::orderBy('id', 'desc')->get();

        return view('laravel-links')->with('links', $links);
    }

    public function showLinksForm(){
        return view('link-toevoegen');
    }
    public function handleLinksForm(Request $request){
          $request->validate([
            'title' => 'required|confirmed|min:8',
            'description' => 'required',
            'url' => 'required|active_url'

        ]);
    }
}
