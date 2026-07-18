<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts=[
            ['id'=>1,'title'=>'PHP','posted_by'=>'John Doe','created_at'=>'2023-01-01'],
            ['id'=>2,'title'=>'HTML','posted_by'=>'Jane Smith','created_at'=>'2023-01-02'],
            ['id'=>3,'title'=>'CSS','posted_by'=>'Bob Johnson','created_at'=>'2023-01-03'],
            ['id'=> 4,'title'=> 'java','posted_by'=>'Alice Brown','created_at'=>'2023-01-04'],
        ];
        return view('posts.index',['posts'=>$allPosts]);
    }
    public function show($id){
        $singlePost=[
            'id'=>1,
            'title'=>'PHP',
            'description'=>'PHP is a popular general-purpose scripting language that is especially suited to web development.',
            'posted_by'=>'John Doe',
            'created_at'=>'2023-01-01'
        ];
        return view('posts.show',['post'=>$singlePost]);

    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
        //   $request=request();
        //   dd($request->title, $request->all());

        // first way to access the data from the request
        // $data=request()->all();
        // dd($data);

// second way to access the data from the request

        $title=request('title');
        $description=request('description');
        $posted_by=request('posted_by');
        // dd($title,$description,$posted_by);  
        
        return to_route('posts.index');
    }
    public function edit(){

          $post=request('post');
       return view('posts.edit');
    }
    public function update(){

        $title=request('title');
        $description=request('description');
        $posted_by=request('posted_by');
        // dd($title,$description,$posted_by);  
        
        return to_route('posts.show',1);  
      }

      public function destroy(){
         
        return(to_route('posts.index'));
      }

}
