<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAll(){
        $posts = DB::table('posts')->distinct()->get();
        return $posts;
    }

    public function createPost(Request $request){
        $data = $request->all();
        $post = DB::table('posts')->insert($data);
        return response(
            "Post criado com sucesso", 200
        );
    }

    public function updatePost(Request $request, string $id){
        $post = DB::table('posts')->where('id', $id)->first();
        if ($post === null) {
            return response(
                "Post com ID {$id} não foi encontrado.", 404
            );
        }

        $data = $request->all();
        $post = DB::table('posts')->where('id', $id)->update($data);
        return response(
                "Post alterado com sucesso", 202
            );
    }

    public function deletePost(Request $request, string $id){
        $post = DB::table('posts')->where('id', $id)->first();
        if ($post === null) {
            return response(
                "Post com ID {$id} não foi encontrado.", 404
            );
        }
        DB::table('posts')->where('id', $id)->delete();
        return response(
            "Post deletado com sucesso", 202
        );
    }
}
