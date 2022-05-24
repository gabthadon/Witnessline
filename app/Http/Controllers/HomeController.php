<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\AdminControl;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  //Load Homepage
 public function show(){
   $data = Post::orderByDesc("id")->paginate(9);
   $data2= Post::orderByDesc('id')->limit(4)->get();
   $banner=AdminControl::get();

   //dd($banner);

   return view("index", ['data'=> $data, 'data2'=>$data2, 'record'=>$banner]);

 }

 //Display news details
 public function read($slug, $id){
     $data= Post::where(['slug'=>$slug, 'id'=>$id])->get();

     if(count($data)>0){
      $data2= Post::orderBy('id')->limit(4)->get();

   
      return view("newsdetails", ['post'=> $data, 'data2'=>$data2]);
   }else{
     return redirect('/');
   }
     }

   //Search an Homily

   public function find(){
    $query=request('query');
    $data= DB::table('posts')
    ->where('title', 'like', '%'.$query.'%')
    
    
   
    ->inRandomOrder()
    ->paginate(16);
  

    $data2= Post::orderBy('id')->limit(4)->get();


    return view("weekday_homily", ['post'=> $data, 'data2'=>$data2, 'title'=>'Search Result']);

   }



}
