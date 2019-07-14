<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Config;

class ConfigController extends Controller
{
    public function index()
    {
        $config = Config::first();
        return view('panel.config.edit',compact('config','conf'));
    }

    public function update(Request $request)
    {
        $config = Config::first();
        // dd($request->all());
        $foto1 = $request->file('logo');
        $foto2 = $request->file('banner_1');
        $foto3 = $request->file('banner_2');
        if($foto1 != null){
            unlink(public_path('images/'.$config->logo));
            $config->logo = $request->file('logo')->store('config');  
        }elseif ($foto2 != null) {
            unlink(public_path('images/'.$config->banner_1));
            $config->banner_1 = $request->file('banner_1')->store('config');
        }elseif ($foto3 != null) {
            unlink(public_path('images/'.$config->banner_2));
            $config->banner_2 = $request->file('banner_2')->store('config');
        }
        $config->update([ 
            'company_name' => $request->get('name'),
            'meta_author' => $request->get('author'),
            'slogan' => $request->get('slogan'),
            'slogan_description' => $request->get('slogan_description'),
            'why_choose_us' => $request->get('why_choose_us'),
            'meta_description' => $request->get('description'),
            'about' => $request->get('about'),
            'meta_keyword' => $request->get('keyword'),
            'address' => $request->get('address'),
            // 'logo' => $request->file('logo')->store('config'),
            // 'banner_1' => $request->file('banner_1')->store('config'),
            // 'banner_2' => $request->file('banner_2')->store('config'), 
            'fb' => $request->get('fb'),
            'ig' => $request->get('ig'),
            'tweet' => $request->get('tweet'),
            'fax' => $request->get('fax'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'maps' => $request->get('maps'),
            'captcha' => $request->get('captcha'),
        ]);
        // dd($config);
        return redirect('panel/config')->with('edit','success updated data');
    }

}
