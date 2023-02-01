<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts =[
            [
                'id'=>1,
                'title'=> 'laravel',
                'desc'=>"lorem",
                'posted_by'=> 'ali',
                'created_by'=>'2-2-2020 '
            ],
            [
                'id'=>2,
                'title'=> 'c++',
                'desc'=>"lorem",
                'posted_by'=> 'ahmed',
                'created_by'=>'2-2-2020 '
            ],
            [
                'id'=>3,
                'title'=> 'c',
                'desc'=>"lorem",
                'posted_by'=> 'Mostafa',
                'created_by'=>'2-2-2020 '
            ],
            [
                'id'=>4,
                'title'=> 'PHP',
                'desc'=>"lorem",
                'posted_by'=> 'Esraa',
                'created_by'=>'2-2-2020 '
            ]
            ];
            return view( 'posts.index', [
                'posts'=>$posts
            ]);


    }

    public function show($postId)
    {
        $post = [

            'id' => 1,
            'title' => 'laravel',
            'desc' => 'lorem',
            'posted_by' => 'Ahmed',
            'created_by' => '2022-10-01 01:00:00',
        ];

        return view('posts.show', ['post' => $post]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $data = $request->all();
        $title = $data['title'];
        $description = $data['desc'];
        $postCreator = $data['creator'];

        // dd($title, $description, $postCreator);

        return 'we are in store';

    }

    public function destroy($postId){

        $postId->destroy();
          return'Item has been deleted';
    }

}
