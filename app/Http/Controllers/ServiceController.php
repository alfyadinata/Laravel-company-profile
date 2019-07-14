<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Service;

class ServiceController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Service::orderBy('id','DESC')->get();
        return view('panel.service.data',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service;
        $service->title = $request->get('title');
        $service->description = $request->get('description');
        $service->status = $request->get('status');
        $service->icon = $request->get('icon');
        // dd($service);
        $service->save();
        return redirect()->back()->with('success','success created data');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('panel.service.edit',compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->title = $request->get('title');
        $service->description = $request->get('description');
        $service->status = $request->get('status');
        $service->icon = $request->get('icon');
        $service->save();
        return redirect('panel/service')->with('edit','success edit data'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->back()->with('destroy','success deleted data');
    }
}
