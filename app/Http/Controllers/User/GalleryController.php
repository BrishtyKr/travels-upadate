<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gallery;
class GalleryController extends Controller
{
    public function index()
    {
        $gallerys = Gallery::orderBy('id','desc')->get();
        return view('gallery',compact('gallerys'));
    }
}
