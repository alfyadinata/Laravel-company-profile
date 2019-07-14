<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimoni;

class TestiController extends Controller
{

    public function create()
    {
        $testi = Testimoni::orderBy('id','DESC')->get();
        return view('panel.testi.data',compact('testi'));
    }

    public function store(Request $request)
    {
        $testi = new Testimoni;

        $testi->name = $request->name;
        $testi->description = $request->description;
        $testi->avatar = $request->avatar;
        $testi->status = $request->status;
        $testi->jobs = $request->jobs;
        $testi->save();
        return redirect()->back()->with('success','success created data');
    }

    public function edit($id)
    {
        $testi = Testimoni::findOrFail($id);
        return view('panel.testi.edit',compact('testi'));
    }

    public function update(Request $request, $id)
    {
        $testi = Testimoni::find($id);
        $testi->name = $request->name;
        $testi->description = $request->description;
        $testi->avatar = $request->avatar;
        $testi->status = $request->status;
        $testi->jobs = $request->jobs;
        $testi->save();
        return redirect()->back()->with('edit','success updated data');
    }

    public function destroy($id)
    {
        $testi = Testimoni::find($id);
        $testi->delete();
        return redirect()->back()->with('destroy','success deleted data');
    }
}
