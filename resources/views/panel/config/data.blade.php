@extends('layouts.master')
@section('title','Config')
@section('company')
    @foreach($config as $set)
        {{ $set->company_name }}
    @endforeach
@endsection
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
                                Config Web
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
                                    success Edited data
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
                                <!-- <li role="presentation"><a href="#profile" data-toggle="tab">+Create</a></li> -->
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <div  class="table-responsive" id="home_animation_2">
                                        <table class="table table-bordered table-striped table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>Company Name</th>
                                                    <th>Address</th>
                                                    <th>E-mail</th>
                                                    <th>Phone</th>
                                                    <th>Fax</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <!-- foreach -->
                                            @foreach($config as $data)
                                                <tr>
                                                    <td>{{$data->company_name}}</td>
                                                    <td>{{$data->address}}</td>
                                                    <td>{{$data->email}}</td>
                                                    <td>{{$data->phone}}</td>
                                                    <td>{{$data->fax}}</td>
                                                    <td>
                                                        <button type="submit" class="btn btn-warn waves-effect" data-toggle="modal" data-target="#modal-{{$data->id}}"><i class="fas fa-eye"></i></button>
                                                        <a href="{{ url('panel/config/edit/'.$data->id) }}" class="btn btn-info waves-effect"><i class="fas fa-pencil-alt"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <!-- endforeach -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- <div role="tabpanel" class="tab-pane fade" id="profile"> -->
                                    
        <!-- form -->
                           <!-- <form method="POST" action="" enctype="multipart/form-data" novalidate="novalidate">
                           {{csrf_field()}}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required aria-required="true">
                                        <label class="form-label">Company Name</label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="author" required aria-required="true">
                                        <label class="form-label">Meta Author</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="description" required aria-required="true">
                                        <label class="form-label">Meta Description</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="keyword" required aria-required="true">
                                        <label class="form-label">Meta Keywords</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="address" required aria-required="true">
                                        <label class="form-label">Address</label>
                                    </div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required aria-required="true">
                                        <label class="form-label">Com</label>
                                    </div>
                                </div>

                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>

                            </form> -->
      
        <!-- form -->
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Tabs With Custom Animations -->
        </div>
    </section>
@endsection