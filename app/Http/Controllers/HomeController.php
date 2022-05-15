<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Updateimage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard', [
            'users' => User::latest()->get(),
        ]);
    }
    public function updateadmin()
    {
        return view('admin.profile.index');
    }
    public function updateadminphoto(Request $request)
    {
        if ($request->hasFile('photo')) {
            if (Auth::user()->photo != 'default.png') {
                $old_photo_location = 'public/uploads/profile/' . Auth::user()->photo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('photo');
            $new_file_name = Auth::id() . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/profile/' . $new_file_name;
            Image::make($uploaded_photo)->resize(300, 300)->save(base_path($new_file_location));
            User::find(Auth::id())->update([
                'photo' => $new_file_name,
            ]);
            return back()->with('update_photo', 'Your Profile Photo Updated Successfully:)');
        } else {
            return back('photo', 'Please select a photo first :(');
        }
    }

    public function updateadminname(Request $request)
    {
        User::find(Auth::id())->update([
            'name' => $request->name,
        ]);
        return back()->with('updatename', 'Name Updated Successfully :)');
    }



    public function updateadminpassword(Request $request)
    {
        if (Hash::check($request->old_password, Auth::user()->password)) {
            if ($request->old_password == $request->password) {
                return back()->with('same_pass', 'your new password is same like your current password!');
            } else {
                User::find(Auth::id())->update([
                    'password' => Hash::make($request->password)
                ]);
                return back()->with('chang_pass', 'your Password Updated Successfully!');
            }
        } else {
            return back()->with('not_match', 'Your Password is not match!');
        }
    }
    public function updatelogo()
    {
        return view('admin.logo.index', [
            'logo' => Logo::find(1),
        ]);
    }
    public function updatelogopost(Request $request, $id)
    {
        if ($request->hasFile('logo')) {
            if (Logo::find($id)->logo != 'default.png') {
                $old_photo_location = 'public/uploads/logo/' . Logo::find($id)->logo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('logo');
            $new_file_name = $id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/logo/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Logo::find($id)->update([
                'logo' => $new_file_name,
            ]);
            return back()->with('update_logo', 'Your Logo Updated Successfully:)');
        } else {
            return back('logo', 'Please select a logo first :(');
        }
    }

    public function userdelete($id)
    {
        User::find($id)->delete();
        return back()->with('DeleteMess', 'User Deleted Successful!');
    }
}
