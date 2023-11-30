<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Models\ServicesDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HizmetlerDetayController extends Controller
{
    public function index($id)
    {
        $service = Services::find($id);
        $data = ServicesDetail::where('service_id',$id)->get();
        return view('dashboard.hizmetler.detay.index', ['data' => $data,'service_id'=> $id,'service'=>$service]);
    }
    public function edit($service_id,$id)
    {
        $service = Services::find($service_id);
        $data = ServicesDetail::find($id);
        return view('dashboard.hizmetler.detay.add', ['data' => $data,'service_id'=> $service_id,'service'=>$service]);
    }
    public function add($service_id)
    {
        $service = Services::find($service_id);
        return view('dashboard.hizmetler.detay.add',['service_id'=> $service_id,'service'=>$service]);
    }
    public function store(Request $request)
    {
        if ($request->id) {
            $item = ServicesDetail::find($request->id);
        } else {
            $item = new ServicesDetail();
        }

        $item->service_id = $request->service_id;
        $item->title = $request->title;
        $item->keywords = $request->keywords;
        $item->position = $request->position;
        $item->content = $request->content;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $item->image =  $imageName;
        }
        $item->save();
        return redirect(' hizmetler/detay/'.$item->service_id)->with('success', 'Kayıt Başarıyla Güncellendi.');
    }
    public function del($id)
    {
        $service_id = ServicesDetail::find($id);
        $data = ServicesDetail::destroy($id);
        return redirect(' hizmetler/detay/'.$service_id->service_id)->with('success', 'Kayıt Başarıyla Silindi.');
    }
}
