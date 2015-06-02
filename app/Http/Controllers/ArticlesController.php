<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleRequest;

use Carbon\Carbon;
use Request;

class ArticlesController extends Controller {

	//
    public function index(){
        $articles = Article::latest('published_at')->published()->get();

//        return view('articles.index', compact('articles'));
        return view('articles.index')->with('articles', $articles);
    }

    public function show($id){

        $article = Article::findOrFail($id);
        dd($article->published_at);

//        return $article;
        return vieW('articles.show', compact('article'));

    }

    public function create(){
        return view('articles.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required|min:3',
            'body'  => 'required',
            'published_at' => 'required|date'
        ]);
        Article::create(Request::all());



        return redirect('articles');
    }



}
