<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\CategoryDetails;
use App\Models\ServicesCategory;
use App\Models\Videos;
use Illuminate\Http\Request;

class HizmetlerCategories extends Controller
{
    public function allmenu()
    {

        $popup = Videos::where('visible', 1)->where('type','popup')->first() ;
        $banner =  Videos::where('visible', 1)->where('type','banner')->first();

        $data = [
            'categories' => ServicesCategory::with(['category_details' => function ($query) {
                $query->orderBy('language', 'ASC');
            },'subcategories','subcategories.category_details'=> function($query){
                $query->orderBy('language', 'ASC');
            },'subcategories.items' => function ($query) {
                $query->where('status', 1)->orderBy('order', 'ASC');
            }, 'subcategories.items.services_details' => function ($query) {
                $query->orderBy('language', 'ASC');
            },])->where('parent_id',null)
                ->orderBy('order', 'ASC')
                ->get(),
            'popup_video' => $popup->url ?? '',
            'banner_video' => $banner->url ?? '',
        ];

        return $data;
    }
    public function index()
    {
        $data = ServicesCategory::with('category_details')->orderBy('created_at', 'DESC')->get();
        return view('dashboard.hizmetler.category.index', ['data' => $data]);
    }
    public function edit($id)
    {
        $data = ServicesCategory::with('category_details')->find($id);
        $allCategories = ServicesCategory::with('category_details')->get();
        return view('dashboard.hizmetler.category.add', ['data' => $data, 'allCategory' => $allCategories]);
    }
    public function add()
    {
        $allCategories = ServicesCategory::with('category_details')->where('parent_id', null)->get();
        return view('dashboard.hizmetler.category.add', ['allCategory' => $allCategories]);
    }
    public function store(Request $request)
    {
        if ($request->id) {
            $item = ServicesCategory::find($request->id);
        } else {
            $item = new ServicesCategory();
        }

        $item->parent_id = $request->parent_id;
        $item->order = $request->order;
        // $item->slug = Str::slug($request->title);
        $item->save();
        $this->saveDetails($item->id, $request);
        return redirect(' hizmetler/kategori')->with('success', 'Kayıt Başarıyla Eklendi.');
    }
    public function saveDetails($id, $obj)
    {
        $tr = new CategoryDetails();
        $en = new CategoryDetails();
        $ar = new CategoryDetails();
        if ($obj->tr_id) {
            $tr = CategoryDetails::find($obj->tr_id);
        }
        if ($obj->ar_id) {
            $ar = CategoryDetails::find($obj->ar_id);
        }
        if ($obj->en_id) {
            $en = CategoryDetails::find($obj->en_id);
        }
        $en->language = 'en';
        $en->category_id = $id;
        $en->title = $obj->en_title ?? '';
        $en->save();
        $tr->language = 'tr';
        $tr->category_id = $id;
        $tr->title = $obj->tr_title ?? '';
        $tr->save();
        $ar->language = 'ar';
        $ar->category_id = $id;
        $ar->title = $obj->ar_title ?? '';
        $ar->save();

    }
    public function del($id)
    {
        $data = ServicesCategory::destroy($id);
        return redirect(' hizmetler/kategori')->with('success', 'Kayıt Başarıyla Silindi.');
    }
}
