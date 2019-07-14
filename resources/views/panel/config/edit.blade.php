@extends('layouts.master')
@section('title','Config')
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
                                            <input type="text" value="{{$config->company_name}}" class="form-control" name="name" required aria-required="true">
                                            <label class="form-label">Company Name</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{$config->slogan}}" name="slogan" required aria-required="true">
                                            <label class="form-label">Slogan</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{$config->slogan_description}}" name="slogan_description" required aria-required="true">
                                            <label class="form-label">Slogan Description</label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{$config->why_choose_us}}" name="why_choose_us" required aria-required="true">
                                            <label class="form-label">Why choose Us</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea name="about" class="form-control">{{$config->about}}</textarea>
                                            <label class="form-label">About</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{$config->meta_author}}" name="author" required aria-required="true">
                                            <label class="form-label">Meta Author</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="description" value="{{$config->meta_description}}" required aria-required="true">
                                            <label class="form-label">Meta Description</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{$config->meta_keyword}}" name="keyword" required aria-required="true">
                                            <label class="form-label">Meta Keywords</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{$config->address}}" name="address" required aria-required="true">
                                            <label class="form-label">Address</label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" class="form-control" value="{{$config->email}}" name="email" required aria-required="true">
                                            <label class="form-label">Email</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{$config->fax}}" name="fax" required aria-required="true">
                                            <label class="form-label">Fax</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{$config->phone}}" name="phone" required aria-required="true">
                                            <label class="form-label">Phone</label>
                                        </div>
                                    </div>


                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{$config->fb}}" name="fb" required aria-required="true">
                                            <label class="form-label">Url Facebook</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{$config->ig}}" name="ig" required aria-required="true">
                                            <label class="form-label">Url Instagram</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tweet" required value="{{$config->tweet}}" aria-required="true">
                                            <label class="form-label">Url Tweeter</label>
                                        </div>
                                    </div>
<!-- 
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="maps" value="{{$config->maps}}" required aria-required="true">
                                            <label class="form-label">Embed Maps</label>
                                        </div>
                                    </div> -->

                                    <!-- <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="captcha" value="{{$config->captcha}}" required aria-required="true">
                                            <label class="form-label">Captcha Sitekey</label>
                                        </div>
                                    </div> -->

                                    <div class="form-group form-float">
                                        <div class="form-line">Logo
                                            <img src="{{ asset('images/'.$config->logo) }}" style="width:40%;" alt="">
                                            <input type="file" class="form-control" name="logo" required aria-required="true">
                                            <!-- <label class="form-label">Url Facebook</label> -->
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">Banner 1
                                            <img src="{{ asset('images/'.$config->banner_1) }}" alt="" style="width:40%;">
                                            <input type="file" class="form-control" name="banner_1" required aria-required="true" style="width:40%;">
                                            <!-- <label class="form-label">Url Facebook</label> -->
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                        <div class="form-line">Banner 2
                                            <img src="{{ asset('images/'.$config->banner_2) }}" alt="" style="width:40%;">
                                            <input type="file" class="form-control" name="banner_2" required aria-required="true">
                                            <!-- <label class="form-label">Url Facebook</label> -->
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