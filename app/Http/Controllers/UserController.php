<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function create()
    {
        $users = User::where('isAdmin',NULL)->orderBy('name','ASC')->get();
        return view('panel.user.data',compact('users'));
    }

    public function store(Request $request)
    {
        $user = new User;
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|',
            'name' => 'required|string'
        ]);
        $user->create([
            'email' => $request->get('email'),
            'name' => $request->get('name'),
            'password' => bcrypt($request->get('password')),
        ]);
            // $user->save();
            return redirect()->back()->with('success','success created data');
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('panel.user.edit',compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);

            $users->update([
                'email' => $request->get('email'),
                'name' => $request->get('name'),
                'password' => bcrypt($request->get('password')),
            ]);
        // dd($users);
            $users->save();
        return redirect('panel/users')->with('edit','success updated data');

    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('destroy','success deleted data');
    }

    public function editAcc()
    {
        $user = User::where('id',auth()->user()->id)->first();
        return view('panel.account.edit',compact('user'));
    }
    public function accountUpdate()
    {
        $user = User::where('id',auth()->user()->id)->first();
        $password = $request->password == null ? $user->password : bcrypt($request->get('password'));
        $user->update([
            'email' => $request->get('email'),
            'name' => $request->get('name'),
            'password' => bcrypt($request->get('password')),
        ]);
        return redirect('panel/account')->with('edit','success updated data');
    }
}
