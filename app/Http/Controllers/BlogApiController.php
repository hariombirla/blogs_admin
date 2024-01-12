<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Validator;
use DatTables;

class BlogApiController extends Controller
{
    public function index(Request $request)
    {
        $data = Blog::where(['id'=> $request->id])->get();
        return $data;
    }
    public function allblogs(Request $request)
    {
        $data = Blog::get();
        return $data;
    }

    public function user(Request $request)
    {
        $data = User::where(['id'=> $request->id])->get();
        return $data;
    }

    public function category(Request $request)
    {
        $data = Category::where(['id'=> $request->id])->get();
        return $data;
    }

}
