<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ArticlesController extends Controller
{
 public function knowYourFaith(){
    $data= Post::where('category_id', '3')->paginate(4);

    $data2= Post::orderBy('id')->limit(4)->get();

    return view("know_your_faith", ['post'=>$data, 'data2'=>$data2]);
 }


//Display the poem page
 public function poem(){
    $data= Post::where('category_id', '4')->paginate(4);

    $data2= Post::orderBy('id')->limit(4)->get();

    return view("poem", ['post'=>$data, 'data2'=>$data2]);
 }

}
