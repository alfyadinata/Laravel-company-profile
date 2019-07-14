<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
class PortfolioController extends Controller
{

    public function create()
    {
        $portfolio = Portfolio::orderBy('id','DESC')->get();
        return view('panel.portfolio.data',compact('portfolio'));
    }

    public function store(Request $request)
    {
        $portfolio = new Portfolio;
        $request->validate([
            'images' => 'required|file|max:15000',
        ]);
        $portfolio->title = $request->get('title');
        $portfolio->category = $request->get('category');
        $portfolio->status = $request->get('status');
        $portfolio->images = $request->file('images')->store('portfolio');
        // dd($portfolio);
        $portfolio->save();
        return redirect()->back()->with('success','success created data');
        
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('panel.portfolio.edit',compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::find($id);
        $foto = $request->file('images');
        if($foto != null){
            unlink(public_path('images/'.$portfolio->images));
            $portfolio->images = $request->file('images')->store('portfolio');

        }
        $portfolio->title = $request->get('title');
        $portfolio->status = $request->get('status');
        $portfolio->category = $request->get('category');
        // dd($portfolio);
        $portfolio->save();
        return redirect('panel/portfolio')->with('edit','success updated data');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        if($portfolio != null){
            unlink(public_path('images/'.$portfolio->images));
        }else{
            return redirect()->back();
        }
        $portfolio->delete();
        return redirect()->back()->with('warn','success deleted data');
    }
}
