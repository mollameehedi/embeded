@extends('layouts.dashboardApp')

@section('title')
Privacy Policy | Dashboard
@endsection

@section('privacy')
    active
@endsection

@section('dashboardContent')
<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Privacy Policy Edit</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('privacy-policy.index') }}">Privacy Policy</a></li>
                        <li class="active"><a >Edit Privacy Policy </a> </li>
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
                                <h4>Edit Privacy Policy</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area add-category">
                        <div class="row">
                            <div class="mx-xl-auto col-xl-10 col-md-12">
                                <div class="card card-default">
                                    <div class="card-heading"><h2 class="card-title"><span>General Information</span></h2></div>
                                    <div class="card-body">
                                        <div class="card-body">
                                            @if (session('add_book'))
                                                <div class="alert alert-success">
                                                    {{ session('add_book') }}
                                                </div>
                                            @endif
                                            @if ($errors->all())
                                             <div class="alert alert-danger">
                                                 @foreach ($errors->all() as $error)
                                                     <li>{{ $error }}</li>
                                                 @endforeach
                                             </div>
                                              @endif
                                                 <form class="form-horizontal" action={{ route('book.store') }} method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-md-4">Privacy Policy</label>
                                                        <div class="col-md-8">
                                                            <textarea name="Privacy_Policy" rows="4" class="form-control text-editor" ></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="align-center"> 
                                                    <input value="Submit" class="btn mt-5 mb-4" type="submit">
                                                    <a href="{{ route('privacy-policy.index') }}" class="btn mt-5 mb-4 bg-danger border-danger" > Cancel</a>
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
@section('footerScript')
    <script>
        
        // editor
        if($('.text-editor').length > 0) {

        $('.text-editor').summernote({
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen']],
            ]
        });

        }
    </script>
@endsection