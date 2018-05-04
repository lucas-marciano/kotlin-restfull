<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;


class CommentsController extends Controller
{
    public function list()
    {
        return response()->json(Comment::all());
    }

    public function get($id)
    {
        return response()->json(Comment::find($id));
    }

    public function create(Request $request)
    {
        $item = Comment::create($request->all());

        return response()->json($item, 201);
    }

    public function update($id, Request $request)
    {
        $item = Comment::findOrFail($id);
        $item->update($request->all());

        return response()->json($item, 200);
    }

    public function delete($id)
    {
        Comment::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
