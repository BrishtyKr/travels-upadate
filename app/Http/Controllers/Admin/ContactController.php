<?php

namespace App\Http\Controllers\Admin;
use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ConatctController extends Controller
{
    public function index()
    {
        $cars = Contact::all();
        return view('admin.contact.index',compact('messages'));
    }


      
  
    
}
