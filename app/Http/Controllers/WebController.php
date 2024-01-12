<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Blog;
use Illuminate\Http\Request;
use Validator;
use DatTables;

class WebController extends Controller
{
    public function indexs(Request $request)
    {
        return view('web.index');
        if ($request->ajax()){
            $data = Blog::get();
        }
    }

}
