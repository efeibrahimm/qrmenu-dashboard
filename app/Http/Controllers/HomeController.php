<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Referans;
use App\Models\ReferansCategory;
use App\Models\ReferansLogo;
use App\Models\Services;
use App\Models\Slider;
use App\Models\Tarihce;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        // $hizmetler = Services::orderBy('order','ASC')->limit(3)->get();
        // $blog = Blog::orderBy('created_at','DESC')->limit(10)->get();
        // $referanslarCategory = ReferansCategory::orderBy('title','ASC')->with('referanslar')->get();
        // $referanslar = Referans::orderBy('order','ASC')->limit(10)->get();
        // $referanslogo = ReferansLogo::orderBy('created_at','DESC')->get();
        // $tarihce = Tarihce::orderBy('year','ASC')->get();
        // $team = Team::limit(4)->get();
        // $slider = Slider::orderBy('sira','ASC')->get();

        // $data = [

        //     "services"=> $hizmetler,
        //     "blog"=> $blog,
        //     "referanslar"=> $referanslar,
        //     "referanslogo"=> $referanslogo,
        //     "referanslarCategory"=> $referanslarCategory,
        //     "tarihce"=> $tarihce,
        //     "team"=> $team,
        //     "slider"=> $slider,
        // ];
        return view('general.home');
    }
}
