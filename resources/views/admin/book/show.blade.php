@extends('layouts.dashboardApp')
@section('addetional_css')
<link href="{{ asset('dashboardAsset') }}/assets/css/ecommerce/addedit_categories.css" rel="stylesheet" type="text/css">
@endsection
@section('title')
    Update Book | Dashboard
@endsection
@section('dashboardContent')
<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Update Book</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('book.index') }}">book</a></li>
                        <li class="active"><a >{{ $info->name }}</a> </li>
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
                                <h4>Update book </h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area add-category">
                        <div class="row">
                            <div class="mx-xl-auto col-xl-10 col-md-12">
                                <div class="card card-default">
                                    <div class="card-heading"><h2 class="card-title"><span>Manage General Information</span></h2></div>
                                    <div class="card-body">
                                        <div class="card-body">
                                            @if (session('update_book'))
                                                <div class="alert alert-success">
                                                    {{ session('update_book') }}
                                                </div>
                                            @endif
                                            @if ($errors->all())
                                             <div class="alert alert-danger">
                                                 @foreach ($errors->all() as $error)
                                                     <li>{{ $error }}</li>
                                                 @endforeach
                                             </div>
                                              @endif
                                            <form class="form-horizontal" action={{ route('book.update',$info->id) }} method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Category :</label>
                                                        <div class="col-md-8">
                                                            
                    <div class="form-group">
                        <label for="category_id">{{ __('Select Category') }} *</label>
                        <select name="category_id" id="category_id"  class="form-control" >
                            @foreach(DB::table('categories')->get() as $cat)
                            <option value="{{ $cat->id }}" {{ $cat->id == $info->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Name</label>
                                                        <div class="col-md-8">
                                                            <input class="form-control" name="name" type="text" value="{{ $info->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Link</label>
                                                        <div class="col-md-8">
                                                            <textarea name="link" rows="4" class="form-control" >{{ $info->link }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Thumbnail</label>
                                                        <div class="col-md-8">
                                                            <input type="file" name="thumbnail" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <img style="width: 50px; margin-left: 35%; " src="{{ asset('uploads/book') }}/{{ $info->thumbnail }}" alt="{{ $info->thumbnail }}">
                                                <div class="align-center"> 
                                                    <input value="Change" class="btn mt-5 mb-4" type="submit">
                                                    <a href="{{ route('book.index') }}" class="btn mt-5 mb-4 bg-danger border-danger" type="submit"> Cancel</a>
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