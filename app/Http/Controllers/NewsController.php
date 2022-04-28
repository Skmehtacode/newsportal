<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;

class NewsController extends Controller
{
    //
    // public function filter($cat){
    //     $data['categories'] = Category::all();
    //     return view("homepages/store",$data);
    // } 

    public function index(){
        $data['news'] = News::all(); 
        $cat['categories'] = Category::all(); 
        return view("homepages/home",$data,$cat);
    }

    public function view(){
        $data['categories'] = Category::all();
        return view("homepages/store",$data);
    }

    public function store(Request $req){
                
                $req->validate([

                'post_title' => 'required',
                'author' => 'required',
                'category_id' => 'required',
                'description' => 'required',
                'image' => 'required',
                'date' => 'required',

            ]);

            if($req->hasFile("image")){
                $file=$req->image;
                $imageName= time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("image/"),$imageName);
        
        
                $data = new News();
                $data->post_title = $req->post_title;
                $data->author = $req->author;
                $data->category_id = $req->category_id;
                $data->description = $req->description;
                $data->image=$imageName;
                $data->date = $req->date;
                $data->save();
        
            }
            return redirect()->back();
         
    }

    public function readmore($id){
        $data['news'] = News::find($id);
        $cat['categories'] = Category::all();
        return view("homepages.readmore",$data,$cat);
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
