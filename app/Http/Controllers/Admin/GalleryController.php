<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Http\Controllers\Controller;
Use Image;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class GalleryController extends Controller
{


    public function index()
    {
        $data = Gallery::orderby('id','DESC')->get();
        return view('admin.gallery.index',compact('data'));
    }
    
    public function store(Request $request)
    {
        $data = new Gallery();
        $data->caption = $request->caption;
        $data->category_id = $request->category_id;

        // intervention
        if ($request->image != 'null') {
            $originalImage= $request->file('image');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath = public_path().'/images/thumbnail/';
            $originalPath = public_path().'/images/';
            $time = time();
            $thumbnailImage->save($originalPath.$time.$originalImage->getClientOriginalName());
            $thumbnailImage->resize(150,150);
            $thumbnailImage->save($thumbnailPath.$time.$originalImage->getClientOriginalName());
            $data->image= $time.$originalImage->getClientOriginalName();
        }
        // end
        $data->status= "0";
        $data->created_by= Auth::user()->id;
        if ($data->save()) {
            $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data Created Successfully.</b></div>";
            return response()->json(['status'=> 300,'message'=>$message]);
        } else {
            return response()->json(['status'=> 303,'message'=>'Server Error!!']);
        }
    }

    public function edit($id)
    {
        $where = [
            'id'=>$id
        ];
        $info = Gallery::where($where)->get()->first();
        return response()->json($info);
    }

    public function update(Request $request, $id)
    {
        $data = Gallery::find($id);

        if($request->image != 'null'){
            $oldimg = Gallery::where('id','=', $id)->first();
            if ($oldimg->image == '') {
            }else{
                $image_path = public_path('images').'/'.$data->image;
                unlink($image_path);
                $thumbnail_path = public_path('images/thumbnail').'/'.$data->image;
                unlink($thumbnail_path);
            }
            $originalImage= $request->file('image');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath = public_path().'/images/thumbnail/';
            $originalPath = public_path().'/images/';
            $time = time();
            $thumbnailImage->save($originalPath.$time.$originalImage->getClientOriginalName());
            $thumbnailImage->resize(150,150);
            $thumbnailImage->save($thumbnailPath.$time.$originalImage->getClientOriginalName());
            $data->image= $time.$originalImage->getClientOriginalName();
        }

            $data->caption = $request->caption;
            $data->status = "1";

        if ($data->save()) {
            $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data Updated Successfully.</b></div>";
            return response()->json(['status'=> 300,'message'=>$message]);
        }else{
            return response()->json(['status'=> 303,'message'=>'Server Error!!']);
        }
    }

    public function delete($id)
    {

        $data = Gallery::where('id','=', $id)->first();
        if ($data->image != '') {
            $image_path = public_path('images').'/'.$data->image;
            unlink($image_path);
        }

        if(Gallery::destroy($id)){
            return response()->json(['success'=>true,'message'=>'Listing Deleted']);
        }
        else{
            return response()->json(['success'=>false,'message'=>'Update Failed']);
        }
    }









    public function category()
    {
        $data = GalleryCategory::orderby('id','DESC')->get();
        return view('admin.gallery.category',compact('data'));
    }
    
    public function categorystore(Request $request)
    {
        $data = new GalleryCategory();
        $data->name= $request->name;

        // intervention
        if ($request->image != 'null') {
            $originalImage= $request->file('image');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath = public_path().'/images/thumbnail/';
            $originalPath = public_path().'/images/';
            $time = time();
            $thumbnailImage->save($originalPath.$time.$originalImage->getClientOriginalName());
            $thumbnailImage->resize(150,150);
            $thumbnailImage->save($thumbnailPath.$time.$originalImage->getClientOriginalName());
            $data->image= $time.$originalImage->getClientOriginalName();
        }
        // end

        $data->slug= $request->slug;
        $data->status= "0";
        $data->created_by= Auth::user()->id;
        if ($data->save()) {
            $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data Created Successfully.</b></div>";
            return response()->json(['status'=> 300,'message'=>$message]);
        } else {
            return response()->json(['status'=> 303,'message'=>'Server Error!!']);
        }
    }

    public function categoryedit($id)
    {
        $where = [
            'id'=>$id
        ];
        $info = GalleryCategory::where($where)->get()->first();
        return response()->json($info);
    }

    public function categoryupdate(Request $request, $id)
    {
        $data = GalleryCategory::find($id);

        if($request->image != 'null'){

            $oldimg = GalleryCategory::where('id','=', $id)->first();
            if ($oldimg->image == '') {
                
            }else{
                $image_path = public_path('images').'/'.$data->image;
                unlink($image_path);
                $thumbnail_path = public_path('images/thumbnail').'/'.$data->image;
                unlink($thumbnail_path);
            }
            $originalImage= $request->file('image');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath = public_path().'/images/thumbnail/';
            $originalPath = public_path().'/images/';
            $time = time();
            $thumbnailImage->save($originalPath.$time.$originalImage->getClientOriginalName());
            $thumbnailImage->resize(150,150);
            $thumbnailImage->save($thumbnailPath.$time.$originalImage->getClientOriginalName());
            $data->image= $time.$originalImage->getClientOriginalName();
        }
            $data->name = $request->name;
            $data->slug = $request->slug;
            $data->status = "1";

        if ($data->save()) {
            $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data Updated Successfully.</b></div>";
            return response()->json(['status'=> 300,'message'=>$message]);
        }else{
            return response()->json(['status'=> 303,'message'=>'Server Error!!']);
        }
    }

    public function categorydelete($id)
    {

        $data = GalleryCategory::where('id','=', $id)->first();
        if ($data->image != '') {
            $image_path = public_path('images').'/'.$data->image;
            unlink($image_path);
            $thumbnail_path = public_path('images/thumbnail').'/'.$data->image;
            unlink($thumbnail_path);
        }

        if(GalleryCategory::destroy($id)){
            return response()->json(['success'=>true,'message'=>'Listing Deleted']);
        }
        else{
            return response()->json(['success'=>false,'message'=>'Update Failed']);
        }
    }
}
