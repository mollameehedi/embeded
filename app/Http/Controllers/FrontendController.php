<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Book;
use App\Models\Category;
use App\Models\Logo;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {

        $books = QueryBuilder::for(Book::class)
            ->allowedFilters(['name'])
            ->allowedSorts('name')
            ->get();
        return view('frontend.index', [
            'banners' => Banner::latest()->get(),
            'categories' => Category::all(),
            'books' => Book::latest()->get(),
            'logo' => Logo::find(1)
        ]);
    }

    function bookfilter()
    {


        $books = QueryBuilder::for(Book::class)
            ->allowedFilters(['name'])
            ->allowedSorts('name')
            ->get();

        if (request()->ajax()) {
            return response()->json([
                'previewSearch' => view('frontend.includes.previewSearch')->with('books', $books)->render()
            ]);
        } else {
            return view('frontend.search', [
                'banners' => Banner::latest()->get(),
                'categories' => Category::all(),
                'books' => $books,
                'logo' => Logo::find(1)
            ]);
        }
    }
}
