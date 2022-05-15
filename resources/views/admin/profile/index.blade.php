@extends('layouts.dashboardApp')
@section('addetional_css')
<link href="{{ asset('dashboardAsset') }}/assets/css/ecommerce/addedit_categories.css" rel="stylesheet" type="text/css">
@endsection
@section('title')
    Update Profile | Dashboard
@endsection
@section('dashboardContent')
<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Update Admin Profile</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><i class="flaticon-home-fill"></i></li>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="">Update Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">                                
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Update Admin Profile</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area add-category">
                        <div class="row">
                            <div class="mx-xl-auto col-xl-12 col-md-12">
                            @if (session('updatename'))
                            <div class="alert alert-success">
                                {{ session('updatename') }}
                            </div>
                            @endif
                            @if (session('update_photo'))
                            <div class="alert alert-success">
                                {{ session('update_photo') }}
                            </div>
                            @endif
                            @if (session('same_pass'))
                                <div class="alert alert-danger">
                                    {{ session('same_pass') }}
                                </div>
                            @endif
                            @if (session('chang_pass'))
                                <div class="alert alert-success">
                                    {{ session('chang_pass') }}
                                </div>
                            @endif
                            @if (session('not_match'))
                                <div class="alert alert-danger">
                                    {{ session('not_match') }}
                                </div>
                            @endif
                            </div>
                            <div class="mx-xl-auto col-xl-6 col-md-12">
                                
                                <div class="card card-default">
                                    <div class="card-heading"><h2 class="card-title"><span>Admin Name</span></h2></div>
                                    <div class="card-body">
                                        <div class="card-body">
                                            @if ($errors->all())
                                             <div class="alert alert-danger">
                                                 @foreach ($errors->all() as $error)
                                                     <li>{{ $error }}</li>
                                                 @endforeach
                                             </div>
                                              @endif
                                                 <form class="form-horizontal" action={{ route('update.admin.name') }} method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Admin Name</label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" name="name" type="text" value="{{ Auth::user()->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="align-center"> 
                                                    <input value="Submit" class="btn mt-5 mb-4" type="submit">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-xl-auto col-xl-6 col-md-12">
                                <div class="card card-default">
                                    <div class="card-heading"><h2 class="card-title"><span>Admin Photo</span></h2></div>
                                    <div class="card-body">
                                        <div class="card-body">
                                            @if ($errors->all())
                                             <div class="alert alert-danger">
                                                 @foreach ($errors->all() as $error)
                                                     <li>{{ $error }}</li>
                                                 @endforeach
                                             </div>
                                              @endif
                                                 <form class="form-horizontal" action={{ route('update.admin.photo') }} method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Admin Photo</label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" name="photo" type="file">
                                                        </div>
                                                        <img style="width: 50px; margin-left: 20%;" src="{{ asset('uploads/profile') }}/{{ Auth::user()->photo }}" alt="{{ Auth::user()->photo }}">
                                                    </div>
                                                </div>
                                                <div class="align-center"> 
                                                    <input value="Submit" class="btn mb-4" type="submit">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mx-xl-auto col-xl-12 col-md-12">
                                <div class="card card-default">
                                    <div class="card-heading"><h2 class="card-title"><span>Admin Password</span></h2></div>
                                    <div class="card-body">
                                        <div class="card-body">
                                                 <form class="form-horizontal" action={{ route('update.admin.password') }} method="POST">
                                                @csrf
                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Admin Password</label>
                                                        
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Enter Old Password</label>
                                                            <input type="password" class="form-control" name="old_password" placeholder="Enter Old Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Enter New Password</label>
                                                            <input type="password" class="form-control" name="password" placeholder="Enter New Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Retype Password</label>
                                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Retype Password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="align-center"> 
                                                    <input value="Submit" class="btn mb-4" type="submit">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



