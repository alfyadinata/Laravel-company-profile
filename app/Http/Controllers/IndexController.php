<?php

namespace App\Http\Controllers;

use App\Config;
use App\Portfolio;
use App\Service;
use App\Testimoni;
use App\Blog;
use App\helpers\Visitor;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        // helpers untuk statistic visitor ++
        Visitor::Create();
    }

    public function index()
    {
        $config = Config::first();
        $portfolio = Portfolio::where('status','show')->orderBy('id','DESC')->take(12)->get();
        $service = Service::where('status','show')->orderBy('id','DESC')->take(6)->get();
        $testi = Testimoni::where('status','show')->orderBy('id','DESC')->take(6)->get();
        $blog = Blog::where('status','show')->orderBy('id','DESC')->take(3)->get();
        return view('index',compact('config','portfolio','service','testi','blog'));
        // dd($config);
    }

    public function show($url)
    {
        $config = \App\Config::first();
        $blogs = Blog::where('url','=',$url)->firstOrFail();
        $blog = Blog::where('status','show')->orderBy('title','DESC')->take(5)->get();
        return view('blog-detail',compact('blogs','config','blog'));
    }

    public function blog()
    {
        $config = \App\Config::first();
        $blog = Blog::where('status','show')->orderBy('id','DESC')->paginate(6);

        return view('blog',compact('blog','config'));
    }
}
