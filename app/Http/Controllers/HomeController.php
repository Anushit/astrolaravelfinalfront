<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Banners;
use App\Models\GeneralSettings;
use App\Models\Cms;
use App\Models\SideImage;
use App\Models\Services;
use App\Models\Astrologer;
use App\Models\SaveInquiery;

class HomeController extends Controller
{
    public function show(Request $request){
        
        
        $banners = Banners::where([['status','0']])->get();
        $general_settings = GeneralSettings::where([['setting_type',1],['status',0]])->get();
        $social_settings = GeneralSettings::where([['setting_type',3],['status',0]])->get();
        //echo"<pre>";print_r($social_settings);die;
        $cms = Cms::where([['status','0']])->get();
        $services= Services::where([['status','0']])->offset(0)->limit(6)->get();
        $astrologers = Astrologer::where([['status',0]])->offset(0)->limit(4)->get();
        $side_image = SideImage::where([['status','0']])->get();
        //dd($side_image);
        //echo"<pre>";print_r($general_settings);die;
       
        return view('Frontend.home',compact('banners','general_settings','cms','side_image','services','astrologers','social_settings'));
    }

    public function about(){

        
        $general_settings = GeneralSettings::where([['setting_type',1],['status',0]])->get();
         $social_settings = GeneralSettings::where([['setting_type',3],['status',0]])->get();
        $cms = Cms::where([['status','0']])->get();
        //echo"<pre>";print_r($cms);die;
        $side_image = SideImage::where([['status','0']])->get();
        return view('Frontend.about',compact('general_settings','cms','side_image','social_settings'));
    }

    public function astrologer (Request $request){
        
        $search = $request->input('search');
        $general_settings = GeneralSettings::where([['setting_type',1],['status',0]])->get();
        $social_settings = GeneralSettings::where([['setting_type',3],['status',0]])->get();
        $astrologers = Astrologer::where([['status',0],['title', 'LIKE', "%{$search}%"]])->get();
       
        //dd($astrologers);
        return view('Frontend.astrologer',compact('general_settings','astrologers','social_settings'));
    }

    public function services (Request $request){

        $search = $request->input('search');

        $general_settings = GeneralSettings::where([['setting_type',1],['status',0]])->get();
        $social_settings = GeneralSettings::where([['setting_type',3],['status',0]])->get();
        $services= Services::where([['status','0'],['name', 'LIKE', "%{$search}%"]])->get();
        //dd($services);
        return view('Frontend.services',compact('general_settings','services','social_settings'));
    }

    public function showcontact (){
        
        $general_settings = GeneralSettings::where([['setting_type',1],['status',0]])->get();
        $social_settings = GeneralSettings::where([['setting_type',3],['status',0]])->get();
        //echo "<pre>";print_r($general_settings);die;
        return view('Frontend.contact',compact('general_settings','social_settings'));
    }


        public function store(Request $request){

            //dd("hello");
            $validatedData = $request->validate([
                'name'         => 'required|unique:saveinquiery,name',
                'email'       => 'required|unique:saveinquiery,email',
                'mobile'         => 'required|max:10',
                'subject'         => 'required|',
                'message'         => 'required|',
            ],[
                "name.required" => "Name is required",
                "email.required" => "Email is required",
                "email.unique" => "email is already exist",
                "mobile.required" => "mobile is required",
                "subject.required" => "subject is required",
                "message.required" => "message is required",   
            ]);
            $data = new SaveInquiery();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->mobile = $request->mobile;
            $data->subject = $request->subject;
            $data->message = $request->message;
            //dd($data);
            $data->save();
            //dd($data);
            //toastr()->success('Banner added successfully.');
            return back()->with("success", "Successfully Save Your Contact Inquiery!");
        } 

    public function details($id){

    $general_settings = GeneralSettings::where([['setting_type',1],['status',0]])->get(); 
    $social_settings = GeneralSettings::where([['setting_type',3],['status',0]])->get();   
    $data = Astrologer::find($id);
    //dd($data);
    return view('Frontend.astrodetail',compact('data','id','general_settings','social_settings'));
    }

}
