<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(Request $request){
        $novoPost = [
            'titulo' => 'Primeiro Post',
            'conteudo' => 'Conteudo Qualquer',
            'autor' => 'Nome Autor'
        ];

        $posts = new Post($novoPost);
        $posts->save();
        dd($posts);
    }

    public function ready(Request $request){
        $post = new Post();
        $posts = $post->find(2);
        dd($posts);
    }

    public function readyAll(Request $request){
        $post = new Post();
        $posts = $post->all();
        return $posts;
    } 

    public function update(Request $request){
        //$post = Post::find(1);
        //$post->titulo = "POST EDITADOR";
        //$post->save();
        $post = Post::where('id','>',0)->update([
            'titulo' => 'TITULO EDITADO'
        ]);
        return $post;
    }
    
    public function delete(Request $request){
  /*     $post = Post::find(1);
        
        if($post){
            return $post->delete();
        }

        return "Não existe post com este id";
*/
        $post = Post::where('id','>',0)->delete();
        return $post;
    }
}
