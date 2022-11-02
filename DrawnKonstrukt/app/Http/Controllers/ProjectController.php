<?php

namespace App\Http\Controllers;
use App\Models\image;
use App\Models\Post;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function index(){

     return view('dashboards.manager.index');
    }
    function upload(){

        return view('dashboards.manager.upload');
       }

    function profile(){
        return view('dashboards.manager.profile');
    }
    function settings(){
        return view('dashboards.manager.settings');
    }
    public function store(Request $request)
    {
        if($request->hasFile("cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);

            $post =new Post([
                "title" =>$request->title,
                "author" =>$request->author,
                "body" =>$request->body,
                "cover" =>$imageName,
            ]);
           $post->save();
        }

            if($request->hasFile("images")){
                $files=$request->file("images");
                foreach($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $request['post_id']=$post->id;
                    $request['image']=$imageName;
                    $file->move(\public_path("/images"),$imageName);
                    Image::create($request->all());

                }
            }

            return redirect("/");

    }

 }
