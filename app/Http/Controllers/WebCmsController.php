<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\web_cms;
use Exception;
use Illuminate\Http\Request;

class WebCmsController extends Controller
{
    //
    public function cms_generator(Request $request)
    {
        // dd($request->all());
        try {
            $token_ignore = ['_token' => ''];
            $files = $request->allFiles();
            foreach ($files as $key => $value) {
                $token_ignore[$key] = '';
                $extension = array("jpeg", "jpg", "png", "jfif", "webp");
                $file = $value;
                $ext = $value->getClientOriginalExtension();
                if (in_array(strtolower($ext), $extension)) {
                    $file_name = $value->getClientOriginalName();
                    $file_name = substr($file_name, 0, strpos($file_name, "."));
                    $name = "uploads/product/" . $file_name . "_" . time() . '.' . $file->getClientOriginalExtension();
                    $destinationPath = public_path() . '/uploads/product/';
                    $share = $value->move($destinationPath, $name);
                    $update = web_cms::where('slug', $key)->update(['value' => $name]);
                } else {
                    $msg = "This File type is not Supported!";
                    return redirect()->back()->with('error', "Error Code: " . $msg);
                }
            }

            $post_feilds = array_diff_key($request->all(), $token_ignore);
            foreach ($post_feilds as $key => $value) {
                $update = web_cms::where('slug', $key)->update(['value' => $value]);
            }
            return back()->with('message', 'Record has been updated');
        } catch (Exception $e) {
            $error = $e->getMessage();
            return redirect()->back()->with('error', "Error Code: " . $error);
        }
    }

    public function banners(){

        return view('web_cms.banners')->with('title','Banners cms');
    }

    public function home(){

        return view('web_cms.home')->with('title','Home');
    }
    public function politics(){

        return view('web_cms.Politics')->with('title','Politics');
    }

    public function presedential_score(){

        return view('web_cms.presidential-score')->with('title','Presedential Score');
    }

}
