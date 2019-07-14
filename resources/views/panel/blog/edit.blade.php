@extends('layouts.master')
@section('title','Blog')
@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>TABS</h2>
            </div>

            
            <!-- Tabs With Custom Animations -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit
                            </h2>
                            @if (session()->has('message'))
                                <div class="alert bg-blue alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    Success Edited data
                                </div>
                            @endif
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">{{ date('d F Y') }}</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#home" data-toggle="tab">Edit</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
<br>        <!-- form -->
                           <form method="POST" action="" enctype="multipart/form-data" novalidate="novalidate">
                           {{csrf_field()}}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="title" value="{{$blog->title}}" required aria-required="true">
                                        <label class="form-label">Title</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">Description
                                        <textarea name="description" id="ckeditor" class="form-control">{{$blog->description}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                       <label>-- Category --</label>
                                            <select name="category_id" class="form-control show-tick">
                                            @foreach($category as $tag)
                                                <option
                                                    value="{{$tag->id}}"
                                                    @if($tag->id === $blog->category_id)
                                                        selected
                                                    @endif
                                                    >
                                                        {{$tag->category}}
                                                 </option>
                                           @endforeach
                                            </select>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>-- Status --</label>
                                        <select name="status" class="form-control show-tick">
                                            <!-- <option value="" ></option> -->
                                            @if($blog->status == "show")
                                            <option value="show">
                                                show
                                            </option>
                                            <option value="hide">hide</option>
                                            @else
                                            <option value="hide">hide</option>
                                            <option value="show">show</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                <img src="{{asset('images/'.$blog->images)}}" alt="{{$blog->title}}" style="width:40%;">
                                    <div class="form-line">
                                        <input type="file" name="images" class="form-control" required class="form-control" aria-required="true">
                                    </div>

                                </div>

                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>

                            </form>
      
        <!-- form -->


                                </div>
                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Tabs With Custom Animations -->
        </div>
    </section>
@endsection