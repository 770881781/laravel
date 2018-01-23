<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Article;
use App\Http\Requests;


class ArticleController extends Controller
{
    public function index() {
        $articles = Article::latest()->published()->get();        
        return view('article.index',compact('articles'));
    }  
    
    public function app() {       
        return view('article.app');
    }
    
    public function show($id){
        $article = Article::find($id);    
        if(is_null($article)){
           abort(404);
        }
        return view('article.show',compact('article'));
    }    
    
    public function create(){        
        return view('article.create');
    }
    
    public function store(Requests\StoreArticleRequest $request){
        $input = $request->all();
        $input['intro'] = mb_substr($request->get('content'),0,64);       
        //$input['created_at'] = date('Y-m-d H:i:s',time());   
        Article::create($input);        
        return redirect('article/index');
    }
    
}
