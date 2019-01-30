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

    }
    public function handleLinksForm(Request$request){

    }
}
