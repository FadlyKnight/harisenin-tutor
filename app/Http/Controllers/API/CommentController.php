<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'status' => true,
            'data' => Comment::all(),
            'message' => 'List Comments'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comment = Comment::create([
            'post_id' => $request->post_id,
            'name' => $request->name,
            'comment' => $request->comment
        ]);
        
        return response()->json([
            'status' => true,
            'message' => 'Success Add Comment'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::find($id)->with('post');
        
        return response()->json([
            'status' => true,
            'data' => [
                'comment' => $comment,
                'post' => $comment->post
            ],
            'message' => 'Detail Comment'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comment = Comment::find($id);
        $comment->update([
            'post_id' => $request->post_id,
            'name' => $request->name,
            'comment' => $request->comment
        ]);
        return response()->json([
            'status' => true,
            'message' => 'Success Update Comment'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return response()->json([
            'status' => true,
            'message' => 'Success Delete Comment'
        ]);
    }
}
