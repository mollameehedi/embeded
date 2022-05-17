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
            <h3>Privacy Policy</h3>
            <div class="crumbs">
                <ul id="breadcrumbs" class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="flaticon-home-fill"></i></a></li>
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="active"><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="row margin-bottom-120">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Privacy Policy <a href="{{ route('privacy-policy.show', 'edit') }}" class="btn btn-primary text-right" style="float: right;">Edit</a></h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate corporis dolores, obcaecati reprehenderit illo laudantium? Velit deleniti sunt distinctio ducimus molestiae ut, vel adipisci iure dignissimos temporibus recusandae suscipit numquam nobis quasi quae similique, consequatur, aperiam ea sit possimus id dicta error tempora officia. Quia, doloremque pariatur facere molestias porro explicabo corrupti eum eveniet sint veritatis vitae reiciendis vel nam autem dicta placeat voluptatum reprehenderit error? Rerum, amet quae quia sed modi numquam aspernatur dolore tempora aut voluptatem delectus, ipsa, dolorum iusto tempore. Tempora aliquam magnam at corrupti dolores repellendus recusandae praesentium vero labore a accusantium, reprehenderit adipisci, deserunt quod quasi quidem consequuntur! Vero odit atque itaque, neque incidunt dolore aut ea quo eaque, cum totam reiciendis, eos iure veritatis!
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection


