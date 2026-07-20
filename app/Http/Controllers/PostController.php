<?php

namespace App\Http\Controllers;
use App\Models\post;
use App\Models\user;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $postsfromdb=post::all();
       
        return view('posts.index',['posts'=>$postsfromdb]);
    }

    public function show(post $post){
    
        // $siglepostfromdb=post::findOrFail($postId);
        
        return view('posts.show',['post'=>$post]);

    } 
    public function create(){
        $users=user::all();
        
        return view('posts.create',['users'=>$users]);
    }
    public function store(){
        //   $request=request();
        //   dd($request->title, $request->all());

        // first way to access the data from the request
        // $data=request()->all();
        // dd($data);

// second way to access the data from the request
        $title=request()->title;
        $description=request()->description;
        $posted_by=request()->posted_by;
        $post=new post();
        $post->title=$title;
        $post->description=$description;
        $post->posted_by=$posted_by;
        $post->save();

/////////////////////
//second way
// post::create([
// 'title'=>request('title'),
//  'description'=>request('description'),
// 'posted_by'=>request('posted_by')
// ]);

        return to_route('posts.index');
    }


    public function edit(){

          $post=post::all();
          $user=user::all();
       return view('posts.edit',['post'=>$post,'users'=>$user]);
    }
    public function update( $postId){

        $title=request('title');
        $description=request('description');
        $posted_by=request('posted_by');
        // dd($title,$description,$posted_by);  
        $siglepostfromdb=post::findOrFail($postId);
        return to_route('posts.show');  
      }

      public function destroy(){
           


        return(to_route('posts.index'));
      }

}
