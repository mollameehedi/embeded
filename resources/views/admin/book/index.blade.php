@extends('layouts.dashboardApp')
@section('title')
    Book List | Dashboard
@endsection
@section('dashboardContent')
<div id="content" class="main-content">
<div class="container">
    <div class="page-header">
        <div class="page-title">
            <h3>Books</h3>
            <div class="crumbs">
                <ul id="breadcrumbs" class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="flaticon-home-fill"></i></a></li>
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="active"><a href="#">Books</a></li>
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
                            <h4>Book List  <a href="{{ route('book.create') }}" class="btn btn-primary text-right" style="float: right;">add book</a></h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    @if (session('delete_book'))
                    <div class="alert alert-danger">
                        {{ session('delete_book') }}
                    </div>
                @endif
                    <div class="table-responsive mb-4">
                        <table id="ecommerce-category-list" class="table  table-bordered">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Category Name</th>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Thumbnail</th>
                                    <th>Created At</th>
                                    <th class="align-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($books as $book)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $book->category->name }}</td>
                                    <td>{{ $book->name }}</td>
                                    <td>{{ $book->link }}</td>
                                    <td>
                                        <img style="width: 50px; margin-left: 35%;" src="{{ asset('uploads/book') }}/{{ $book->thumbnail }}" alt="{{ $book->thumbnail }}">
                                    </td>
                                    <td>{{ $book->created_at->diffForHumans() }}</td>
                                   
                                    <td class="align-center">
                                        <ul class="table-controls">
                                            <li>
                                                <a href="{{ route('book.show', $book->id) }}" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="flaticon-edit"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <form action="{{ route('book.destroy', $book->id) }}" method="POST">
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
