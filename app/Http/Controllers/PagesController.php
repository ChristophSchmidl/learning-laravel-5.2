<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $name = "Christoph Schmidl";

        return view('pages.about', compact('name'));
    }

    public function contact()
    {
        return view('pages.contact');
    }


}
