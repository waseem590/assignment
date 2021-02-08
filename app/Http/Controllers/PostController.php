<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Auth;
class PostController extends Controller
{
    public function create(Request $request)
    {
        $id = Auth::user()->id;
        $post = new post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id=$id;
        $post->save();
        session()->flash('message','Post Create Successfully');
        return redirect()->route('feedlisting');
    }
    public function displayfeed(){
        // $feeds = post::orderBy('id','DESC')->All();

        $feeds = Post::orderBy('id', 'desc')->get();
        return view('feedlisting')->with('data',$feeds);
    }
    public function mypost()
    {
        $id = Auth::user()->id;
        $feeds = Post::where('user_id',$id)->orderBy('id', 'desc')->get();
        return view('mypost')->with('data',$feeds);
    }
    public function deletepost($id)
    {
        $deletepost = post::find($id);
        $deletepost->delete($id);
        session()->flash('delete','Post Delete Successfully');
        return redirect()->back();
    }
    public function updatepost($id){
        $data = post::where('id',$id)->get();
        // dd($data);
        return view('update')->with('data',$data);
    }
    public function updatecomplete(Request $request, $id)
    {
        $post = post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('mypost');
    }
}
