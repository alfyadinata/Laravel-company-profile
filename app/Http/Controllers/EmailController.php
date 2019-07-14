<?php

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $email = new Email;
        $email->name = $request->get('name');
        $email->email = $request->get('email');
        $email->message = $request->get('message');
        $email->subject = $request->get('subject');
        $email->save();
        return redirect()->back()->with('send','success');
    }

    public function index()
    {
        $email = Email::orderBy('id','DESC')->get();
        return view('panel.email.data',compact('email'));
    }

    public function destroy($id)
    {
        $email = Email::find($id);
        $email->delete();
        return redirect()->back()->with('destroy','succes deleted data');
    }
}
