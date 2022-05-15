@extends('layouts.dashboardApp')
@section('addetional_css')
<link href="{{ asset('dashboardAsset') }}/assets/css/ecommerce/addedit_categories.css" rel="stylesheet" type="text/css">
@endsection
@section('title')
    Update Logo | Dashboard
@endsection
@section('dashboardContent')
<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Update Logo</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="#">Logo</a></li>
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
                                <h4>Update Logo</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area add-category">
                        <div class="row">
                            <div class="mx-xl-auto col-xl-10 col-md-12">
                                <div class="card card-default">
                                    <div class="card-heading"><h2 class="card-title"><span>Logo</span></h2></div>
                                    <div class="card-body">
                                        <div class="card-body">
                                            @if (session('update_logo'))
                                                <div class="alert alert-success">
                                                    {{ session('update_logo') }}
                                                </div>
                                            @endif
                                            @if (session('logo'))
                                                <div class="alert alert-danger">
                                                    {{ session('logo') }}
                                                </div>
                                            @endif
                                                 <form class="form-horizontal" action={{ route('update.logo.post', $logo->id) }} method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Logo</label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" name="logo" type="file">
                                                        </div>
                                                    </div>
                                                    <img style="width: 50px; margin-left:35%; margin-top: 20px;" src="{{ asset('uploads/logo') }}/{{ $logo->logo }}" alt="{{ $logo->logo }}">
                                                </div>
                                                <div class="align-center"> 
                                                    <input value="Submit" class="btn mt-5 mb-4" type="submit">
                                                    <a href="{{ route('home') }}" class="btn mt-5 mb-4 bg-danger border-danger" > Cancel</a>
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