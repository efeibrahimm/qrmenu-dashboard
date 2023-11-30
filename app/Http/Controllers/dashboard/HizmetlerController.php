<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Models\ServicesCategory;
use App\Models\ServicesDetail;
use App\Models\Videos;
use Illuminate\Http\Request;

class HizmetlerController extends Controller
{
    public function index()
    {
        // $data = Services::with('services_details')->get();

        $data =  ServicesCategory::with('category_details','items','items.services_details')->orderBy('order', 'ASC')->get();
        return view('dashboard.hizmetler.index', ['data' => $data]);
    }
    public function edit($id)
    {
        $categories = ServicesCategory::orderBy('title', 'ASC')->get();
        $data = Services::with('services_details')->find($id);

        return view('dashboard.hizmetler.add', ['data' => $data, 'categories' => $categories]);
    }
    public function subcategories($id)
    {
        $categories = ServicesCategory::with('category_details')->orderBy('title', 'ASC')->where('parent_id',$id)->get();
        return ['categories' => $categories];
    }
    public function add()
    {
        $categories = ServicesCategory::orderBy('title', 'ASC')->get();

        return view('dashboard.hizmetler.add', ['categories' => $categories]);
    }
    public function store(Request $request)
    {
        if ($request->id) {
            $item = Services::find($request->id);
        } else {
            $item = new Services();
        }

        $item->category_id = $request->category_id;
        $item->price = $request->price;
        $item->status = $request->status ? 1 : 0;
        $item->order = $request->order;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $item->image = $imageName;
        }
        $item->save();
        $this->saveDetails($item->id, $request);
        return redirect(' hizmetler')->with('success', 'Updated Successfuly');
    }

    public function addVideo(Request $request){
            $item = Videos::find($request->id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $item->url = $imageName;
        }

        $item->save();
        return redirect(' videos')->with('success', 'Updated Successfuly');
    }

    public function saveDetails($id, $obj)
    {
        $tr = new ServicesDetail();
        $en = new ServicesDetail();
        $ar = new ServicesDetail();
        if ($obj->tr_id) {
            $tr = ServicesDetail::find($obj->tr_id);
        }
        if ($obj->ar_id) {
            $ar = ServicesDetail::find($obj->ar_id);
        }
        if ($obj->en_id) {
            $en = ServicesDetail::find($obj->en_id);
        }
        $en->language = 'en';
        $en->service_id = $id;
        $en->title = $obj->en_title ?? '';
        $en->summary = $obj->en_summary ?? '';
        $en->content = $obj->en_content ?? '';
        $en->save();
       
        $ar->language = 'ar';
        $ar->service_id = $id;

        $ar->title = $obj->ar_title ?? '';
        $ar->summary = $obj->ar_summary ?? '';
        $ar->content = $obj->ar_content ?? '';
        $ar->save();
 

        $tr->language = 'tr';
        $tr->service_id = $id;
        $tr->title = $obj->tr_title ?? '';
        $tr->summary = $obj->tr_summary ?? '';
        $tr->content = $obj->tr_content ?? '';
        $tr->save();

    }
    public function del($id)
    {
        $data = Services::destroy($id);
        return redirect(' hizmetler')->with('success', 'Deleted Successfuly');
    }

}
