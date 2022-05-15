@extends('layouts.dashboardApp')
@section('title')
    Banner List | Dashboard
@endsection
@section('dashboardContent')
<div id="content" class="main-content">
<div class="container">
    <div class="page-header">
        <div class="page-title">
            <h3>Banners</h3>
            <div class="crumbs">
                <ul id="breadcrumbs" class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="flaticon-home-fill"></i></a></li>
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="active"><a href="#">Banners</a></li>
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
                            <h4>Banner List  <a href="{{ route('banner.create') }}" class="btn btn-primary text-right" style="float: right;">add banner</a></h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    @if (session('delete_banner'))
                    <div class="alert alert-danger">
                        {{ session('delete_banner') }}
                    </div>
                @endif
                    <div class="table-responsive mb-4">
                        <table id="ecommerce-category-list" class="table  table-bordered">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Heading</th>
                                    <th>Price</th>
                                    <th>Publisher</th>
                                    <th>Banner</th>
                                    <th>Created At</th>
                                    <th class="align-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($banners as $banner)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $banner->heading }}</td>
                                    <td>{{ $banner->price }}</td>
                                    <td>{{ $banner->publisher }}</td>
                                    <td>
                                        <img style="width: 50px; " src="{{ asset('uploads/banner') }}/{{ $banner->banner }}" alt="{{ $banner->banner }}">
                                    </td>
                                    <td>{{ $banner->created_at->diffForHumans() }}</td>
                                   
                                    <td class="align-center">
                                        <ul class="table-controls">
                                            <li>
                                                <a href="{{ route('banner.show', $banner->id) }}" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="flaticon-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <form action="{{ route('banner.destroy', $banner->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                      <button type="submit" class="bg-white border-0" title="Delete"><i class="flaticon-delete-5"></i></button>
                                                  </form>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                @empty
                                    
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('footerScript')
<script src="{{ asset('dashboardAsset') }}/plugins/table/datatable/datatables.js"></script>
<script>
    $('#ecommerce-category-list').DataTable({
        "lengthMenu": [ 5, 10, 20, 50, 100 ],
        "language": { "paginate": { "previous": "<i class='flaticon-arrow-left-1'></i>", "next": "<i class='flaticon-arrow-right'></i>" },
            "info": "Showing page _PAGE_ of _PAGES_"
        },
        drawCallback: function( settings ) { $('[data-toggle="tooltip"]').tooltip(); }
    });
</script>
@endsection
