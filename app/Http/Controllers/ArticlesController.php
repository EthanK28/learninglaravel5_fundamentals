<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;

use App\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class ArticlesController extends Controller {

	//

    public function __construct(){
//        $this->middleware('auth', ['except' => 'index']);
    }

    public function index(){
        $articles = Article::latest('published_at')->published()->get();

//        return view('articles.index', compact('articles'));
        return view('articles.index')->with('articles', $articles);
    }

    public function show(Article $article){

//        dd($id);
//        $article = Article::findOrFail($id);
        //dd($article->published_at);

//        return $article;e
        return vieW('articles.show', compact('article'));

    }

    public function create(){

//        if(Auth::guest()){
//            return redirect('articles');
//        }

        $tags = Tag::lists('name', 'name');
        return view('articles.create', compact('tags'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request){


        dd($request->input('tags'));
        Auth::user()->articles()->create($request->all());

        flash()->overlay('Your article has been successfully created'. 'Good Job');


        return redirect('articles');
    }

    public function edit(Article $article){

//        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));


    }

    public function update(Article $article, ArticleRequest $request){
//        $article = Article::findOrFail($id);


        $article->update($request->all());

        return redirect('articles');

    }




}
