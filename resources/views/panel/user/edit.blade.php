@extends('layouts.master')
@section('title','Users')
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
                                    Success Created data
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
                                        <input type="email" value="{{ $users->email }}" class="form-control" name="email" required aria-required="true">
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{$users->name}}" name="name" required aria-required="true">
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" name="password" required class="form-control" aria-required="true">
                                        <label class="form-label">New Password</label>
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