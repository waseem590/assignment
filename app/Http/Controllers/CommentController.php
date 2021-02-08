<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\comment;
class CommentController extends Controller
{
    public function comment($id)
    {   
        $posts = post::find($id);
        return view('comment')->with('data',$posts);
    }
    public function addcomment(Request $request, $id){
        // dd($id);
        if($id)
        {
        $comment = new comment;
        $comment->post_id=$id;    
        $comment->comment_description = $request->comment;
        $comment->save();
        }
        
        $comment = comment::with('commentpost')->where('post_id',$id)->get();
        
        return view('newcomment')->with('commentdata',$comment);
        // return view('/comment')->with('commentdata',$comment);

    }

    // public function updatecomment(){
    //     $user= auth()->user()->id;
    //     $post= post::where('user_id', $user);

    //     // dd($post);
    //     return view('updated')->with('update',$post);
    // }
    
    
}
