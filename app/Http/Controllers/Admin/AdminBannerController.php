<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AdminBannerModel;

class AdminBannerController extends Controller
{
    public function bannerList(){
        $data['banners']  =  AdminBannerModel::get();
        return view('admin.banner.banner-list', $data);
    }
    public function bannerAdd(){
        $data  =  array();
        return view('admin.banner.banner-form', $data);
    }
    public function store(Request $request){
        $validated_request = request()->validate([
            'desktop_image' => 'mimes:jpeg,jpg,png|required',
            'mobile_image' => 'mimes:jpeg,jpg,png|required',
        ]);

        
        // Handle image uploads
        // The desktop image is stored in the desktop_image column
        if($request->hasFile('desktop_image')) {
            $file = $request->file('desktop_image');
            $desktop_imagename = $file->getClientOriginalName();
            
            // Attempt to move the file and check for success
            if (!$file->move(public_path().'/assets/images/banner', $desktop_imagename)) {
                return redirect()->back()->withErrors(['desktop_image' => 'Failed to upload desktop image.']);
            }
        }else{
            $desktop_imagename = '';
        }
        
        if($request->hasFile('mobile_image')) {
            $file = $request->file('mobile_image');
            $mobile_imagename = $file->getClientOriginalName();
            
            // Attempt to move the file and check for success
            if (!$file->move(public_path().'/assets/images/banner', $mobile_imagename)) {
                return redirect()->back()->withErrors(['mobile_image' => 'Failed to upload mobile image.']);
            }
        }else{
            $mobile_imagename = '';
        }
        
        $title= !empty(request()->input('title'))?request()->input('title'):'';
        $short_title=  !empty(request()->input('short_title'))?request()->input('short_title'):'';
        $url= !empty(request()->input('url'))?request()->input('url'):'';

        $saveData=  AdminBannerModel::insert([
            // 'profile_pic'=>$validator['profile_pic'],
            'desktop_image'=>$desktop_imagename,
            'mobile_image'=>$mobile_imagename,
            'title'=>$title,
            'short_title'=>$short_title,
            'url'=>$url,
            'created_at' => date('Y-m-d H:i:s'),
        ]);


        return redirect()->route('admin.banner.list')->with('success_msg', 'Product Added successfully');
    }
    public function bannerEdit(Request $request){
        $data['product_data']  =  AdminBannerModel::where('id',request()->input('id'))->first();
        $data['action']  ='update';
        return view('admin.banner.banner-form', $data);
    }
    public function update(Request $request){
        // $validated_request = request()->validate([
        //     'desktop_image' => 'mimes:jpeg,jpg,png|required',
        // ]);

        
        // echo public_path().'/assets/images/banner';exit;
        $updates = [];
        if($request->hasFile('desktop_image')) {
            $file = $request->file('desktop_image');
            $imagename = $file->getClientOriginalName();
            
            // Attempt to move the file and check for success
            if (!$file->move(public_path().'/assets/images/banner', $imagename)) {
                return redirect()->back()->withErrors(['desktop_image' => 'Failed to upload desktop image.']);
            }
            $updates['desktop_image'] = $imagename;
        }
        
        if($request->hasFile('mobile_image')) {
            $file = $request->file('mobile_image');
            $mobile_imagename = $file->getClientOriginalName();
            
            // Attempt to move the file and check for success
            if (!$file->move(public_path().'/assets/images/banner', $mobile_imagename)) {
                return redirect()->back()->withErrors(['mobile_image' => 'Failed to upload mobile image.']);
            }
            $updates['mobile_image'] = $mobile_imagename;
        }
        
        // Only update image fields if new files were uploaded
        if (!empty($updates)) {
            AdminBannerModel::where('id',request()->input('product_id'))->update($updates);
        }
        
        $title= !empty(request()->input('title'))?request()->input('title'):'';
        $short_title=  !empty(request()->input('short_title'))?request()->input('short_title'):'';
        $url= !empty(request()->input('url'))?request()->input('url'):'';

        $saveData=  AdminBannerModel::where('id',request()->input('product_id'))->update([
            // 'profile_pic'=>$validator['profile_pic'],
            // 'image_name'=>$imagename,
            'title'=>$title,
            'short_title'=>$short_title,
            'url'=>$url,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);


        return redirect()->route('admin.banner.list')->with('success_msg', 'Product Added successfully');
    }
    public  function delete()
    {
        $id = request()->input('product_id', 0);
        $product = AdminBannerModel::where('id', $id)->delete();
        // $product->status = 2;
        // $product->updated_at = date('Y-m-d H:i:s');
        // $product->updated_by = Auth::user()->id;
        // $product->save();

        http_response_code(200);
        exit;
    }
}
