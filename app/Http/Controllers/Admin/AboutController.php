<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Http\Controllers\Controller;
Use Image;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::all();
        return view('admin.about.index',compact('data'));
    }

    public function store(Request $request)
    {
        

            try{
                $data = new About();
                $data->title = $request->title;
                $data->description = $request->description; 
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

                $data->created_by= Auth::user()->id;
                $data->save();
                $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data Created Successfully.</b></div>";
                return response()->json(['status'=> 300,'message'=>$message]);

            }catch (\Exception $e){
                return response()->json(['status'=> 303,'message'=>'Server Error!!']);

            }

    }

    public function edit($id)
    {
        $where = [
            'id'=>$id
        ];
        $info = About::where($where)->get()->first();
        return response()->json($info);
    }

    public function update(Request $request, $id)
    {
        $data = About::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        
        if($request->image != 'null'){
            $oldimg = About::where('id','=', $id)->first();
            if ($oldimg->image == '') {
            }else{
                $image_path = public_path('images').'/'.$data->image;
                unlink($image_path);
                $thumbnail_path = public_path('images/thumbnail').'/'.$data->image;
                unlink($thumbnail_path);
            }
            $originalImage = $request->file('image');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath = public_path().'/images/thumbnail/';
            $originalPath = public_path().'/images/';
            $time = time();
            $thumbnailImage->save($originalPath.$time.$originalImage->getClientOriginalName());
            $thumbnailImage->resize(150,150);
            $thumbnailImage->save($thumbnailPath.$time.$originalImage->getClientOriginalName());
            $data->image= $time.$originalImage->getClientOriginalName();
        }
        
        $data->updated_by = Auth::user()->id;
        if ($data->save()) {
            $message ="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Data Updated Successfully.</b></div>";
            return response()->json(['status'=> 300,'message'=>$message]);
        }else{
            return response()->json(['status'=> 303,'message'=>'Server Error!!']);
        }
    }

    public function delete($id)
    {

        $data = About::where('id','=', $id)->first();
        if ($data->image != '') {
            $image_path = public_path('images').'/'.$data->image;
            unlink($image_path);
            $thumbnail_path = public_path('images/thumbnail').'/'.$data->image;
            unlink($thumbnail_path);
        }

        if(About::destroy($id)){
            return response()->json(['success'=>true,'message'=>'Listing Deleted']);
        }
        else{
            return response()->json(['success'=>false,'message'=>'Update Failed']);
        }
    }
}
