<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    //

    public function index(){
        $data['news'] = News::all(); 
        return view("homepages/home",$data);
    }

    public function store(Request $req){
    
       if($req->post()){
        $data  = $req->validate([
            'post_title' => 'required',
            'author' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required',
            'date' => 'required',
        ]);
        if($req->hasFile("image")){
            $file=$req->image;
            $imageName= time().'_'.$file->getClientOriginalName();
           $file->move(\public_path("image/"),$imageName);
        }
       
        $data = new News();
        $data->post_title = $req->post_title;
        $data->author = $req->author;
        $data->category = $req->category;
        $data->description = $req->description;
        $data->image=$imageName;
        $data->date = $req->date;
        $data->save();
       
        return back();
        }
        return view("homepages.store");
    }

    public function readmore($id){
        $data['news'] = News::find($id);
        return view("homepages.readmore",$data);
    }

    public function search(Request $req){
        $search_text = $req->search;
        $data['news'] = News::where('post_title','LIKE','%'.$search_text.'%')->get();
        return view("homepages.home",$data);
    }

    public function delete($id){
        $data = News::find($id);
        $data->delete();
        return back();

        // return view("homepages.home");
    }
   
}
