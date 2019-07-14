<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Portfolio;
use App\Testimoni;
use App\Service;
use App\Category;
use App\Email;
use App\User;
use App\Visitor;

class DashboardController extends Controller
{
    public function index()
    {
        $blog = Blog::count();
        $portfolio = Portfolio::all()->count();
        $testi = Testimoni::count();
        $service = Service::count();
        $category = Category::count();
        $message = Email::count();
        $user = User::count();
        $visitor = Visitor::count();

        $today = Visitor::where('date','=',date('d'))->where('month',date('m'))->where('year',date('Y'))->count();
        $month  = Visitor::where('month',date('m'))->where('year',date('Y'))->count();
        $year = Visitor::where('year',date('Y'))->count();

        return view('panel.dashboard.index', compact('blog','portfolio','testi',
                            'service','category','message','user','visitor','today',
                            'month','year'));
    }
}
