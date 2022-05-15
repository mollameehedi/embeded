<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Book;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.book.index', [
            'books' => Book::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.book.create', [
            'categories' => Category::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book_id = Book::insertGetId($request->except('_token', 'thumbnail') + [
            'created_at' => Carbon::now(),
        ]);
        if ($request->hasFile('thumbnail')) {
            $uploaded_photo = $request->file('thumbnail');
            $new_file_name = $book_id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/book/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Book::find($book_id)->update([
                'thumbnail' => $new_file_name,
            ]);
        }
        return back()->with('add_book', 'Book added successfully:)');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.book.show', [
            'info' => Book::find($id),
            'categories' => Category::latest()->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Book::find($id)->update($request->except('_token', 'thumbnail'));
        if ($request->hasFile('thumbnail')) {
            if (Book::find($id)->thumbnail != 'default.jpg') {
                $old_photo_location = 'public/uploads/book/' . Book::find($id)->thumbnail;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('thumbnail');
            $new_file_name = $id. "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/book/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Book::find($id)->update([
                'thumbnail' => $new_file_name,
            ]);
        }
        return back()->with('update_book', 'Book updated successfully:)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Book::find($id)->thumbnail != 'default.jpg') {
            $old_photo_location = 'public/uploads/book/' . Book::find($id)->thumbnail;
            unlink(base_path($old_photo_location));
        }
        Book::find($id)->delete();
        return back()->with('delete_book', 'Book deleted successfully :)');
        
    }
}
