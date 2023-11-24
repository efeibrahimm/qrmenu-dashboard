<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        // $data = Services::with('services_details')->get();

        $data = Videos::get();
        return view('dashboard.videos.index', ['data' => $data]);
    }
    public function edit($id)
    {
        $data = Videos::get();

        return view('dashboard.videos.add', ['data' => $data]);
    }
    public function add()
    {
        return view('dashboard.videos.add');
    }

    public function store(Request $request)
    {

        ini_set('post_max_size', '1024M');
        ini_set('upload_max_filesize', '1024M');
        $item = Videos::find($request->id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $item->url = $imageName;
        }

        $item->save();
        return redirect('/admin/videos')->with('success', 'Updated Successfuly');
    }

    public function del($id)
    {
        $data = Videos::destroy($id);
        return redirect('/admin/videos')->with('success', 'Deleted Successfuly');
    }
}
