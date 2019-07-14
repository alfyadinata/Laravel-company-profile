<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Blog;
use App\Category;
class BlogController extends Controller
{

    public function create()
    {
        $category = Category::all();
        $blogs = Blog::all();
        // dd($blogs);
                    return view('panel.blog.data',compact('blogs','category'));
    }

    public function store(Request $request)
    {
        Blog::create([
            'title' => request('title'),
            'description' => request('description'),
            'category_id' => request('category_id'),
            'images' => $request->file('images')->store('blogs'),
            'url' => str_slug(request('title')),
            'status' => request('status'),
        ]);
        // $blog = new Blog;
        // $post = $blog->categories()->create([
        //     'title' => request('title'),
        //     'description' => request('description'),
        //     'category_id' => request('category_id'),
        //     'images' => $request->file('images'),
        //     'url' => str_slug(request('title')),
        //     'status' => request('status'),
        // ]);
        // dd($post);
        return redirect()->back()->with('success','success created data');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $category = Category::all();
        return view('panel.blog.edit',compact('blog','category'));
    }


    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $foto = $request->file('images');

        $blog->title = $request->get('title');
        $blog->description = $request->get('description');
        $blog->category_id = $request->get('category_id');
        $blog->status = $request->get('status');
        // $blog->images = $request->file('images')->store('blogs');
        $blog->url = str_slug($request->get('title'));

        if(count($foto)){
            unlink(public_path('images/'.$blog->images));
            $blog->images = $request->file('images')->store('blogs');  
        }
        
        $blog->save();
        return redirect('panel/blog')->with('edit','success updated data');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        if(count($blog)){
            unlink(public_path('images/'.$blog->images));
        }else{
            return redirect()->back();
        }
        $blog->delete();
        return redirect()->back()->with('destroy','success deleted data');

    }
}
