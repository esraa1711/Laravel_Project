<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index(){
        $posts =post::simplePaginate(5);


            return view( 'posts.index', [
                'posts'=>$posts
            ]);


    }



    public function show($postId)
    {
        // $post = post::where('id', $postId)->first();
        $post= post::find($postId);
        return view('posts.show', ['post' => $post]);
    }





    public function create(){
        $Users=User::all();

        return view('posts.create' , [
            'Users' => $Users,
        ]);
    }






    public function store(Request $request){
        $data = $request->all();
        // dd($data);
        $title = $data['title'];
        $description = $data['desc'];
        $postCreator = $data['creator'];

post::create([
    'title'=>$title,
    'desc'=>$description,
    'user_Id'=>$postCreator,

]);
        return redirect(route('posts'));

    }

    public function destroy($postId){

        post::findOrfail($postId)->delete();
        return redirect('/posts');
        // $post->restore();;
    }

    public function restore(){
        $posts=post::withTrashed()->restore();

        return redirect('/posts');


    }

    public function created_at_mdY()
    {
       return Carbon::parse($this->created_at)->format('m/d/Y');
    }

}
