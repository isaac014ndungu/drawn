<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Auth;
use App\Models\User;

class AdminController extends Controller
{
    function index1(){

        return view('dashboards.admins.index');
       }

       function profile(){

        return view('dashboards.admins.profile');
    }
    function settings(){
        return view('dashboards.admins.settings');
    }
    function create(){
        return view('dashboards.admins.create');
    }
        function CRUD(){
            $posts=Post::all();
            $user=User::all();
            return view('dashboards.admins.CRUD')->with('posts',$posts,)->with('user',$user,);
        }
        function User(){
            $user=User::paginate(20);
            return view('dashboards.admins.user')->with('user',$user);
        }
        public function edit($id)
        {

           $posts=Post::findOrFail($id);


            return view('dashboards.admins.edit')->with('posts',$posts, );
        }
        public function edituser($id)
        {
            $user=User::findOrFail($id);
            return view('dashboards.admins.edituser')->with('user',$user, );
        }

        public function share()
        {
            return view(('dashboards.admins.share'));
        }


        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\Post  $post
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request,$id)
        {
         $post=Post::findOrFail($id);
         if($request->hasFile("cover")){
             if (File::exists("cover/".$post->cover)) {
                 File::delete("cover/".$post->cover);
             }
             $file=$request->file("cover");
             $post->cover=time()."_".$file->getClientOriginalName();
             $file->move(\public_path("/cover"),$post->cover);
             $request['cover']=$post->cover;
         }

            $post->update([
                "title" =>$request->title,
                "author"=>$request->author,
                "body"=>$request->body,
                "cover"=>$post->cover,
            ]);

            if($request->hasFile("images")){
                $files=$request->file("images");
                foreach($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $request["post_id"]=$id;
                    $request["images"]=$imageName;
                    $file->move(\public_path("images"),$imageName);
                    Image::upload($request->all());

                }
            }

            return redirect("/view");

        }
        public function __construct()
        {
            $this->middleware('auth');
        }
        public function index()
        {
            $posts=Post::all();
            return view('index')->with('posts',$posts);
        }
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Post  $post
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
             $posts=Post::findOrFail($id);

             if (File::exists("cover/".$posts->cover)) {
                 File::delete("cover/".$posts->cover);
             }
             $images=Image::where("post_id",$posts->id)->get();
             foreach($images as $image){
             if (File::exists("images/".$image->image)) {
                File::delete("images/".$image->image);
            }
             }
             $posts->delete();
             return back();


        }

        public function deleteimage($id){
            $images=Image::findOrFail($id);
            if (File::exists("images/".$images->image)) {
               File::delete("images/".$images->image);
           }

           Image::find($id)->delete();
           return back();
       }

       public function deletecover($id){
        $cover=Post::findOrFail($id)->cover;
        if (File::exists("cover/".$cover)) {
           File::delete("cover/".$cover);
       }
       return back();
    }




    }

