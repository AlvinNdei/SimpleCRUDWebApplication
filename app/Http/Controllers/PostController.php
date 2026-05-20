<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function createpost(Request $request){
        $incomingFields=$request->validate([
            'title'=>'required',
            'body'=>'required'
        ]);
       

        $incomingFields['title']=strip_tags($incomingFields['title']);
        $incomingFields['body']=strip_tags($incomingFields['body']);
        $incomingFields['user_id']=Auth::id();
        Post::create($incomingFields);
        return redirect('/welcomepage');
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect('/welcomepage')->with('success','Your post was deleted successfully!');
    }
    public function editscreen(Post $post){
        return view('edit_post',['post'=>$post]);
    }
    public function actualUpdate(Post $post, Request $request){
      $incomingFields = $request->validate([
        'title' => 'required',
        'body'  => 'required'
      ]);

      $incomingFields['title'] = strip_tags($incomingFields['title']);
      $incomingFields['body']  = strip_tags($incomingFields['body']);

      $post->update($incomingFields);
      return redirect('/welcomepage')->with('success', 'Post updated successfully!');
    }
}
