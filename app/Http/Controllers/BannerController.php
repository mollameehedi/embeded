<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.banner.index', [
            'banners' => Banner::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner_id = Banner::insertGetId($request->except('_token', 'banner') + [
            'created_at' => Carbon::now(),
        ]);
        
        if ($request->hasFile('banner')) {
            $uploaded_photo = $request->file('banner');
            $new_file_name = $banner_id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/banner/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Banner::find($banner_id)->update([
                'banner' => $new_file_name,
            ]);
        }
        return back()->with('add_banner', 'Banner added successfully :)');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.banner.show', [
            'info' => Banner::find($id)
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
        
        Banner::find($id)->update($request->except('_token', 'banner'));
        if ($request->hasFile('banner')) {
            if (Banner::find($id)->banner != 'default.jpg') {
                $old_photo_location = 'public/uploads/banner/' . Banner::find($id)->banner;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('banner');
            $new_file_name = $id. "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/banner/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Banner::find($id)->update([
                'banner' => $new_file_name,
            ]);
        }
        return back()->with('update_banner', 'Banner updated successfully:)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Banner::find($id)->banner != 'default.jpg') {
            $old_photo_location = 'public/uploads/banner/' . Banner::find($id)->banner;
            unlink(base_path($old_photo_location));
        }
        Banner::find($id)->delete();
        return back()->with('delete_banner', 'Banner deleted successfully :)');
    }
}
