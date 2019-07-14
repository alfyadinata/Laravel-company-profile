@extends('layouts.master')
@section('title','Blogs')
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
                                Blogs
                            </h2>
                            @if (session()->has('success'))
                                <div class="alert bg-green alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    Success Created data
                                </div>
                            @endif
                            @if (session()->has('error'))
                                <div class="alert bg-red alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    failed Created data
                                </div>
                            @endif
                            @if (session()->has('destroy'))
                                <div class="alert bg-red alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    Success Deleted Data
                                </div>
                            @endif
                            @if (session()->has('edit'))
                                <div class="alert bg-blue alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    success Updated data
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
                                <li role="presentation" class="active"><a href="#home" data-toggle="tab">Data</a></li>
                                <li role="presentation"><a href="#profile" data-toggle="tab">+Create</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <div  class="table-responsive" id="home_animation_2">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                <th style="width:20%;">URL</th>
                                                    <th>Images</th>
                                                    <th style="width:20%;">Title</th>
                                                    <th>Category</th>
                                                    <th style="width:15%;">Status</th>
                                                    <th style="width:20%;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
    <!-- foreach -->                        @foreach($blogs as $data)
                                                <tr>
                                                <td>{{$data->url}}</td>
                                                    <td><img style="width:70%;" src="{{ asset('images/'.$data->images)}}" alt="load {{ $data->title }}"></td>
                                                    <td>{{ $data->title }}</td>
                                                    <td>
                                                            {{ $data->category->category }}
                                                    </td>
                                                    <td>{{ $data->status }}</td>
                                                    <td>
                                                        <button type="submit" form="del-{{$data->id}}" class="btn btn-danger waves-effect"><i class="fas fa-trash-alt"></i></button>
                                                        <!-- <button type="submit" class="btn btn-warn waves-effect" data-toggle="modal" data-target="#modal-{{$data->id}}"><i class="fas fa-eye"></i></button> -->
                                                        <a href="{{ url('panel/blog/edit/'.$data->id) }}" class="btn btn-info waves-effect"><i class="fas fa-pencil-alt"></i></a>
                                                        <form action="{{ url('panel/blog/delete/'.$data->id) }}" id="del-{{$data->id}}" method="POST">
                                                                {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                        </form>
                                                        <!-- <div class="modal fade" id="modal-{{$data->id}}" tabindex="-1" role="dialog">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="defaultModalLabel">
                                                                            {{ $data->title }}
                                                                        </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                         <center>           
                                                                            <img src="{{ asset('images/'.$data->images) }}" alt="{{ $data->title }}" style="width:80%;">
                                                                        </center>
                                                                        <br>
                                                                        <b>Category :</b> {{ $data->category }}<br>
                                                                        <b>Status :</b> {{ $data->status }} 
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-link waves-effect" disabled>Created at  {{$data->created_at->diffForHumans()}}</button>
                                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </td>
                                                </tr>
                                                @endforeach
    <!-- endforeach -->     
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                    
        <!-- form -->
                           <form method="POST" action="" enctype="multipart/form-data" novalidate="novalidate">
                           {{csrf_field()}}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="title" required aria-required="true">
                                        <label class="form-label">Title</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">Description
                                        <textarea name="description" id="ckeditor"class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                            <label>-- Category --</label>
                                            <select name="category_id" class="form-control show-tick">
                                            @foreach($category as $tag)
                                                <option value="{{$tag->id}}">{{$tag->category}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>-- Status --</label>
                                        <select name="status" class="form-control show-tick">
                                            <!-- <option value="" ></option> -->
                                            <option value="show">Show</option>
                                            <option value="hide">Hide</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">Images
                                        <input type="file" name="images" class="form-control" required class="form-control" aria-required="true">
                                    </div>
                                    <!-- <a href="" about_blank="">Find Icon Here</a> -->
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